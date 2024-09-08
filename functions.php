<?php

function chamvan_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'chamvan_theme_support');

function add_categories_to_pages() {
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'add_categories_to_pages');

function has_ancestor_with_slug($slug) {
    if (!is_category())
    {
        return false;
    }
    $category = get_queried_object();

    if ($category->slug === $slug) {
        return true;
    }

    while ($category->parent) {
        $category = get_category($category->parent);
        if ($category->slug === $slug) {
            return true;
        }
    }
    return false;
}

function chamvan_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('material-icons', "https://fonts.googleapis.com/icon?family=Material+Icons", array(), '142s', 'all');
    wp_enqueue_style('header-footer', get_template_directory_uri() . "/assets/css/header-footer.css", array(), $version, 'all');
    if (has_ancestor_with_slug('content-archive') || is_tag())
    {
        wp_enqueue_style('content-archive', get_template_directory_uri() . "/assets/css/HocLieu/content-archive.css", array(), $version, 'all');
    }
    if (has_ancestor_with_slug('tests-archive'))
    {
        wp_enqueue_style('tests-archive', get_template_directory_uri() . "/assets/css/HocLieu/tests-archive.css", array(), $version, 'all');
    }
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
    wp_enqueue_script('search-bar', get_template_directory_uri()."/assets/js/Main-Page/search-bar.js", array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'chamvan_register_scripts');

?>