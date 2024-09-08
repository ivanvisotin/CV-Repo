<?php
    get_header();
?>

<?php

    $content_slugs = array('doc-mo-rong', 'kien-thuc-the-loai', 'tu-lieu-tham-khao', 'bai-viet-tham-khao', 'kien-thuc-kieu-bai', 'dan-y-chuan-bi-bai-noi', 'huong-dan-ki-nang-thao-luan', 'huong-dan-ki-nang-thuyet-trinh', 'huong-dan-ki-nang-tranh-bien', 'huong-dan-ki-nang-nghe', 'mau-ghi-chep');
    $tag_slug = get_queried_object()->slug;
    if (in_array($tag_slug, $content_slugs)) {
        get_template_part('template-parts/tag', 'content');
    }
?>

<?php
    get_footer();
?>