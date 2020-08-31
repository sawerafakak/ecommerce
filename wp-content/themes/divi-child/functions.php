<?php

function custom_scripts()
{
    wp_enqueue_style('parent_style' , get_template_directory_uri() . '/style.css');
    wp_enqueue_style('custom_style' , get_stylesheet_directory_uri() . '/css/custom.css');
    wp_enqueue_script('custom_script' , get_stylesheet_directory_uri() . '/js/custom.js');
}
add_action('wp_enqueue_scripts', 'custom_scripts');

?>