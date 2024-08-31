<?php

function chamvan_theme_support() {
    //Adds dynamic title tags
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'chamvan_theme_support');

function chamvan_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('material-icons', "https://fonts.googleapis.com/icon?family=Material+Icons", array(), '142s', 'all');
    if (is_front_page())
    {
        wp_enqueue_style('mainpage-css', get_template_directory_uri() . "/assets/css/Main-Page/main-page.css", array('mainpage-swiper'), $version, 'all');
        wp_enqueue_style('mainpage-aos', "https://unpkg.com/aos@next/dist/aos.css", array(), '3.0.0', 'all');
        wp_enqueue_style('mainpage-swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), '11.1.11', 'all');
    }
}

add_action('wp_enqueue_scripts', 'chamvan_register_styles');

function chamvan_register_scripts() {
    if (is_front_page())
    {
        wp_enqueue_script('mainpage-swipermin', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.1.11', true);
        wp_enqueue_script('mainpage-swiper', get_template_directory_uri()."/assets/js/Main-Page/swiper-script.js", array(), '11.1.11', true);
        wp_enqueue_script('mainpage-aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), '3.0.0', true);
        wp_enqueue_script('mainpage-aos-init', get_template_directory_uri()."/assets/js/Main-Page/aos-init.js", array(), '3.0.0', true);
    }
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/c67934e8d7.js', array(), '6.6.0', true);
    wp_enqueue_script('navbar', get_template_directory_uri()."/assets/js/Main-Page/navbar.js", array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'chamvan_register_scripts');

?>