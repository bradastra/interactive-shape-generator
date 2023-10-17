<?php
/**
 * Plugin Name: Interactive Shape Generator
 * Description: Allows users to generate basic shapes using a shortcode after selecting their desired shape.
 * Version: 1.0
 * Author: Brad Zacharias
 **/
function isg_enqueue_scripts() {
    wp_enqueue_style('isg-css', plugin_dir_url(__FILE__) . 'style.css');
    wp_enqueue_script('isg-js', plugin_dir_url(__FILE__) . 'script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'isg_enqueue_scripts');

function isg_display_form() {
    ob_start();
    ?>
    <form id="isg_form">
        <select name="shape">
            <option value="circle">Circle</option>
            <option value="square">Square</option>
            <option value="triangle">Triangle</option>
        </select>
        <input type="submit" value="Generate">
    </form>
    <div id="isg_shape_display"></div>
    <?php
    return ob_get_clean();
}
add_shortcode('isg_form', 'isg_display_form');

