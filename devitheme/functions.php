<?php
/**
 * Devi Pink Modern - functions.php
 */

// Memuat style.css
function devi_enqueue_assets() {
    wp_enqueue_style(
        'devi-style',
        get_stylesheet_uri(),
        array(),
        filemtime( get_stylesheet_directory() . '/style.css' )
    );
}
add_action( 'wp_enqueue_scripts', 'devi_enqueue_assets' );

// Fitur tema
function devi_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'devi_setup' );

// Matikan emoji WordPress (penyebab ikon gambar rusak di localhost)
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
