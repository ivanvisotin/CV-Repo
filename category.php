<?php
    get_header();
?>

<?php
if (has_ancestor_with_slug('content-archive')) {
    get_template_part('template-parts/archive-template/category', 'content');

}   elseif (has_ancestor_with_slug('tests-archive')) {
    get_template_part('template-parts/archive-template/category', 'tests');

}   elseif (has_ancestor_with_slug('podcasts-archive')) {
    get_template_part('template-parts/archive-template/category', 'podcasts');

} 
?>

<?php
    get_footer();
?>