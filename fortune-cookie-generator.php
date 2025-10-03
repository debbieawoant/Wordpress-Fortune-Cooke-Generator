<?php
/*
Plugin Name: Fortune Cookie Generator
Description: A fun WordPress plugin that shows a fortune cookie which cracks open to reveal a random fortune.
Version: 1.1
Author: Your Name
*/

// Enqueue scripts and styles
function fcg_enqueue_assets() {
    wp_enqueue_style('fcg-style', plugin_dir_url(__FILE__) . 'css/fcg-style.css');
    wp_enqueue_script('fcg-script', plugin_dir_url(__FILE__) . 'js/fcg-script.js', array('jquery'), null, true);

    // Pass images path to JS
    wp_localize_script('fcg-script', 'fcg_images', array(
        'cookie' => plugin_dir_url(__FILE__) . 'images/cookie.png',
        'cookie_broken' => plugin_dir_url(__FILE__) . 'images/cookie-broken.png'
    ));
}
add_action('wp_enqueue_scripts', 'fcg_enqueue_assets');

// Shortcode output
function fcg_display() {
    ob_start(); ?>
    <div id="fortune-cookie-container">
        <img id="fortune-cookie" src="<?php echo plugin_dir_url(__FILE__) . 'images/cookie.png'; ?>" alt="Fortune Cookie">
        <p id="fortune-text"></p>
        <button id="fortune-btn">What's my fortune?</button>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('fortune_cookie', 'fcg_display');
?>
