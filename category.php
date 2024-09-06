<?php
    get_header();
?>

<?php
if (has_ancestor_with_slug('content-archive')) {
    get_template_part('template-parts/category', 'content');

}   elseif (has_ancestor_with_slug('tests-archive')) {
    get_template_part('template-parts/category', 'tests');

}   elseif (has_ancestor_with_slug('podcasts-archive')) {
    get_template_part('template-parts/category', 'podcasts');

}   elseif (has_ancestor_with_slug('tools-archive')) {
    get_template_part('template-parts/archive', 'tools');

}   elseif (is_category('about-page')) {
    get_template_part('template-parts/page', 'about');

}   elseif (is_category('user')) {
    get_template_part('template-parts/user');
} ?>

<?php
    get_footer();
?>