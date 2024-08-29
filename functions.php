<?php

function chamvan_register_styles() {
    wp_enqueue_style('mainpage-css', get_template_directory_uri() . "/assets/css/Main-Page/main-page.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'chamvan_register_styles');

?>