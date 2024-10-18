<?php
// THEME SUPPORT
    function chamvan_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'chamvan_theme_support');

    function add_categories_to_pages() {
        register_taxonomy_for_object_type('category', 'page');
    }
    add_action('init', 'add_categories_to_pages');

//CATEGORY - TAG IDENTIFIERS

    function has_ancestor_with_slug($slug) {
        if (!is_category() || is_404())
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

    function single_has_ancestor_with_slug($slug) {
        if (!is_single() || is_404())
        {
            return false;
        }

        $categories = get_the_category(); 

        foreach ($categories as $category) {
            if ($category->slug === $slug) {
                return true;
            }

            while ($category->parent) {
                $category = get_category($category->parent);
                if ($category->slug === $slug) {
                    return true;
                }
            }
        }

        return false;
    }

    function tag_slugs() {
        if (!is_tag() || is_404()) {
            return false;
        }
        $content_slugs = array('doc-mo-rong', 'kien-thuc-the-loai', 'tu-lieu-tham-khao', 'bai-viet-tham-khao', 'kien-thuc-kieu-bai', 'dan-y-chuan-bi-bai-noi', 'huong-dan-ki-nang-thao-luan', 'huong-dan-ki-nang-thuyet-trinh', 'huong-dan-ki-nang-tranh-bien', 'huong-dan-ki-nang-nghe', 'mau-ghi-chep');
        $tag_slug = get_queried_object()->slug;
        if (in_array($tag_slug, $content_slugs)) {
            return 'content';
        }
    }

// MODIFY QUERY
    function modify_main_query($query) {

        if (!is_admin() && $query->is_main_query()) {

            if (has_ancestor_with_slug('content-archive') || tag_slugs() === 'content') { 
                $query->set('posts_per_page', 8); 
            } 
            elseif (has_ancestor_with_slug('tests-archive')) {
                $query->set('posts_per_page', 12);
            }
            elseif (has_ancestor_with_slug('tools-archive')) {
                $query->set('posts_per_page', 10);
            }
        }
    }
    add_action('pre_get_posts', 'modify_main_query');

// POST VIEWS
    function add_post_views() {
        if (is_single()) { // Check if it's a single post
            global $post; // Access the global post variable
            $post_id = $post->ID; // Get the current post ID

            $views = (int) get_post_meta($post_id, 'post_views_count', true);
            $views++;
            update_post_meta($post_id, 'post_views_count', $views);
        }
    }
    add_action('wp_head', 'add_post_views');

// SHORTCODES
    function textarea_test_reading_shortcode() {
        return '<textarea class="textarea-test reading" name="answers_reading[]"></textarea>';
    }
    add_shortcode('textarea_test_reading', 'textarea_test_reading_shortcode');

    function textarea_test_writing_shortcode() {
        return '<textarea class="textarea-test writing" name="answers_writing[]"></textarea>';
    }
    add_shortcode('textarea_test_writing', 'textarea_test_writing_shortcode');

    function test_category_link_shortcode() {
        return '<a href="' . get_category_link($test_cat->term_id) . '">
                    <i class="fa-solid fa-xmark fa-xl symbol" title="Quay về trang đề thi"></i>
                </a>';
        }
    add_shortcode('test_category_link', 'test_category_link_shortcode');
    

//REGISTER STYLES
    function chamvan_register_styles() {
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('material-icons', "https://fonts.googleapis.com/icon?family=Material+Icons", array(), '142s', 'all');
        wp_enqueue_style('header-footer', get_template_directory_uri() . "/assets/css/header-footer.css", array(), $version, 'all');
        wp_enqueue_style('material-symbols', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0', array(), null, 'all');
        //HOME
        if (is_front_page())
        {
            wp_enqueue_style('mainpage', get_template_directory_uri() . "/assets/css/Main-Page/main-page.css", array('mainpage-swiper'), $version, 'all');
            wp_enqueue_style('mainpage-aos', "https://unpkg.com/aos@next/dist/aos.css", array(), '3.0.0', 'all');
            wp_enqueue_style('mainpage-swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), '11.1.11', 'all');
        }
        //SEARCH
        if (is_search())
        {
            wp_enqueue_style('search-podcasts-swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), '11.1.11', 'all');
            wp_enqueue_style('search', get_template_directory_uri() . "/assets/css/search.css", array(), $version, 'all');
        }
        //CATEGORY
        if (has_ancestor_with_slug('content-archive') || tag_slugs() === 'content')
        {
            wp_enqueue_style('content-archive', get_template_directory_uri() . "/assets/css/HocLieu/content-archive.css", array(), $version, 'all');
        }
        if (has_ancestor_with_slug('tests-archive'))
        {
            wp_enqueue_style('tests-archive', get_template_directory_uri() . "/assets/css/HocLieu/tests-archive.css", array(), $version, 'all');
        }
        if (is_category('podcasts-archive')) {
            wp_enqueue_style('podcasts-archive', get_template_directory_uri() . "/assets/css/Podcasts/podcasts-archive.css", array(), $version, 'all');
            wp_enqueue_style('podcasts-swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), '11.1.11', 'all');
        }
        if (is_category('tools-archive')) {
            wp_enqueue_style('podcasts-archive', get_template_directory_uri() . "/assets/css/Tools/tools-archive.css", array(), $version, 'all');
        }
        // POSTS
        if (single_has_ancestor_with_slug('content-archive') || single_has_ancestor_with_slug('tools-archive')) {
            wp_enqueue_style('content-single', get_template_directory_uri() . "/assets/css/HocLieu/single-content.css", array(), $version, 'all');
        }
        if (single_has_ancestor_with_slug('tests-archive')) {
            wp_enqueue_style('test-single', get_template_directory_uri() . "/assets/css/HocLieu/single-test.css", array(), $version, 'all');
        }
        if (single_has_ancestor_with_slug('podcasts-archive')) {
            wp_enqueue_style('podcast-single', get_template_directory_uri() . "/assets/css/Podcasts/single-podcast.css", array(), $version, 'all');
            wp_enqueue_style('podcasts-plyr', "https://cdnjs.cloudflare.com/ajax/libs/plyr/3.7.8/plyr.css", array(), '3.7.8', 'all');
        }
        //PAGES
        if (is_page('gioi-thieu')) {
            wp_enqueue_style('about-page', get_template_directory_uri() . "/assets/css/Contribution/about.css", array(), $version, 'all');
        }
        if (is_page('ghi-cong-giay-phep-su-dung')) {
            wp_enqueue_style('attribution-page', get_template_directory_uri() . "/assets/css/Contribution/attribution.css", array(), $version, 'all');
        }
        if (is_page('account')) {
            wp_enqueue_style('account-page', get_template_directory_uri() . "/assets/css/Login/account.css", array(), $version, 'all');
        }
    }
    add_action('wp_enqueue_scripts', 'chamvan_register_styles');

//REGISTER SCRIPTS
    function chamvan_register_scripts() {
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/c67934e8d7.js', array(), '6.6.0', true);
        wp_enqueue_script('navbar', get_template_directory_uri()."/assets/js/navbar.js", array(), '1.0.0', true);
        wp_enqueue_script('search-bar', get_template_directory_uri()."/assets/js/search-bar.js", array(), '1.0.0', true);
        if (is_front_page())
        {
            wp_enqueue_script('mainpage-swipermin', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.1.11', true);
            wp_enqueue_script('mainpage-swiper', get_template_directory_uri()."/assets/js/Main-Page/swiper-script.js", array(), '11.1.11', true);
            wp_enqueue_script('mainpage-aos', 'https://unpkg.com/aos@next/dist/aos.js', array(), '3.0.0', true);
            wp_enqueue_script('mainpage-aos-init', get_template_directory_uri()."/assets/js/Main-Page/aos-init.js", array(), '3.0.0', true);
        }
        if (is_search()) {
            wp_enqueue_script('search-podcasts-swipermin', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.1.11', true);
            wp_enqueue_script('search-podcasts-swiper', get_template_directory_uri()."/assets/js/Podcasts/swiper-script.js", array(), '11.1.11', true);
        }
        if (is_category('podcasts-archive')) {
            wp_enqueue_script('podcasts-swipermin', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.1.11', true);
            wp_enqueue_script('podcasts-swiper', get_template_directory_uri()."/assets/js/Podcasts/swiper-script.js", array(), '11.1.11', true);
        }
        if (single_has_ancestor_with_slug('tests-archive')) {
            wp_enqueue_script('test-timer', get_template_directory_uri()."/assets/js/HocLieu/Deonluyen/test-timer.js", array(), '1.0.0', true);
            wp_enqueue_script('results', get_template_directory_uri()."/assets/js/HocLieu/Deonluyen/results.js", array(), '1.0.0', true);
            wp_enqueue_script('results-display', get_template_directory_uri()."/assets/js/HocLieu/Deonluyen/results-display.js", array(), '1.0.0', true);
        }
        if (single_has_ancestor_with_slug('podcasts-archive')) {
            wp_enqueue_script('podcasts-plyr', "https://cdnjs.cloudflare.com/ajax/libs/plyr/3.7.8/plyr.js", array(), '3.7.0', true);
            wp_enqueue_script('plyr-init', get_template_directory_uri()."/assets/js/Podcasts/plyr.js", array(), '3.7.0', true);
            wp_enqueue_script('minimize-excerpt', get_template_directory_uri()."/assets/js/Podcasts/minimize-excerpt.js", array(), '1.0.0', true);
        }
    }
    add_action('wp_enqueue_scripts', 'chamvan_register_scripts');
    
?>