
<?php
    if (is_page('gioi-thieu')) {
        get_header();
        get_template_part('template-parts/page-template/page', 'about');
        get_footer();
    }
    elseif (is_page('ghi-cong-giay-phep-su-dung')) {
        get_header();
        get_template_part('template-parts/page-template/page', 'attribution');
        get_footer();
    }
    elseif (is_page('login')) {
        wp_head();
        get_template_part('template-parts/page-template/page', 'login'); 
        wp_footer();
    }
    elseif (is_page('register')) {
        wp_head();
        get_template_part('template-parts/page-template/page', 'register'); 
        wp_footer();
    }
?>
