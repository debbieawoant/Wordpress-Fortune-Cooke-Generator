<?php
/*
Plugin Name: Fortune Cookie Generator
Description: A fun WordPress plugin that shows a fortune cookie which cracks open to reveal a random fortune.
Version: 1.2
Author: Your Name
*/

// Enqueue scripts and styles
function fcg_enqueue_assets() {
    wp_enqueue_style('fcg-style', plugins_url('css/fcg-style.css', __FILE__));
    wp_enqueue_script('fcg-script', plugins_url('js/fcg-script.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'fcg_enqueue_assets');

// Shortcode output with correct image paths
function fcg_display() {
    $cookie_img = plugins_url('images/cookie.png', __FILE__);
    $cookie_broken_img = plugins_url('images/cookie-broken.png', __FILE__);
    
    ob_start(); ?>
    <div id="fortune-cookie-container">
        <img id="fortune-cookie" src="<?php echo esc_url($cookie_img); ?>" alt="Fortune Cookie">
        <p id="fortune-text"></p>
        <button id="fortune-btn">What's my fortune?</button>
    </div>
    <script>
        var fcg_images = {
            cookie: "<?php echo esc_url($cookie_img); ?>",
            cookie_broken: "<?php echo esc_url($cookie_broken_img); ?>"
        };
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('fortune_cookie', 'fcg_display');
?>
