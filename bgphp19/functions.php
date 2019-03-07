<?php

function load_styles() {
    wp_enqueue_style('bgphp19-main', get_template_directory_uri() . '/style.css', [], '18');
}


add_action('wp_enqueue_scripts', 'load_styles');
