<?php
    get_header();
?>

<?php
    if (tag_slugs() === 'content') {
        get_template_part('template-parts/archive-template/tag', 'content');
    }
?>

<?php
    get_footer();
?>