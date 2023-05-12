<?php

function saint_files()
{
    wp_enqueue_style('saint_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'saint_files');
