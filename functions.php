<?php

// Daftar menu utama
function register_my_menu() {
    register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_my_menu');

// Tambah sokongan untuk gambar pilihan
add_theme_support('post-thumbnails');

// Tambah sokongan untuk tajuk
add_theme_support('title-tag');

// Daftar stylesheet dan script
function enqueue_my_styles_and_scripts() {
    wp_enqueue_style('my-style', get_stylesheet_uri());
    wp_enqueue_script('dark-mode', get_template_directory_uri() . '/js/dark-mode.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_scripts');

// Custom excerpt length
function custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

// Custom excerpt "read more" string
function custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// Add widget support
function my_widgets_init() {
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'my_widgets_init');