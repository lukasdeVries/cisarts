<?php

function cisarts_files() {
    wp_enqueue_style('main-cisarts-styles', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('cisarts-js', get_theme_file_uri('scripts/build/index.js'), false, '1.0', true);

    wp_localize_script('cisarts-js', 'cisartsData', array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts', 'cisarts_files');

add_action('after_setup_theme', 'addThumbnails');

function enqueue_dashicons() {
    wp_enqueue_style('dashicons');
}

add_action('wp_enqueue_scripts', 'enqueue_dashicons');

function addThumbnails() {
    add_theme_support('post-thumbnails');
}


function widgetsInit() {
    register_sidebar( array(
        'name' => 'Portfolio images',
        'id' => 'portfolio',
        'before_widget' => '<div class="portfolio__image"',
        'after_widget' => '</div>'
    )); 
    register_sidebar( array(
        'name' => 'Footer links',
        'id' => 'footer_left',
        'before_widget' => '<div class="footer__item"',
        'after_widget' => '</div>'
    )); 
    register_sidebar( array(
        'name' => 'Footer rechts',
        'id' => 'footer_right',
        'before_widget' => '<div class="footer__item"',
        'after_widget' => '</div>'
    )); 
}

add_action('widgets_init', 'widgetsInit');