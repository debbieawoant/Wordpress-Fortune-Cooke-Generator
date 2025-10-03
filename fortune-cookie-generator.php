<?php
/*
Plugin Name: Fortune Cookie Generator
Description: A fun fortune cookie generator with images and animations.
Version: 1.2
Author: ChatGPT
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function fcg_enqueue_scripts() {
    wp_enqueue_style('fcg-style', plugin_dir_url(__FILE__) . 'fcg-style.css', array(), '1.2');
    wp_enqueue_script('fcg-script', plugin_dir_url(__FILE__) . 'fcg-script.js', array('jquery'), '1.2', true);
}
add_action('wp_enqueue_scripts', 'fcg_enqueue_scripts');

function fcg_shortcode() {
    ob_start(); ?>
    <div class="fortune-cookie-container">
        <div class="fortune-cookie" id="fortune-cookie"></div>
        <button class="fcg-button" id="fcg-btn">What's my fortune?</button>
        <p class="fortune-text" id="fortune-text"></p>
    </div>
    <?php return ob_get_clean();
}
add_shortcode('fortune_cookie', 'fcg_shortcode');
?>
