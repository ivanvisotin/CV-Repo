<?php 
    get_header();
?>

<?php 
    if (is_page('about-page')) {
        get_template_part('template-parts/page-template/page', 'about');
    }
    elseif (is_page('attribution-page')) {
        get_template_part('template-parts/page-template/page', 'attribution');
    }
    elseif (is_page('tools-page')) {
        get_template_part('template-parts/page-template/page', 'tools');
    }
?>

<?php 
    get_footer();
?>