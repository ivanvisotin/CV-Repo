<?php 

    if (single_has_ancestor_with_slug('content-archive')) {
        get_template_part('template-parts/posts-template/single', 'content');
    }
    elseif (single_has_ancestor_with_slug('podcasts-archive')) {
        get_template_part('template-parts/posts-template/single', 'podcast');
    }
    elseif (single_has_ancestor_with_slug('tests-archive')) {
        get_template_part('template-parts/posts-template/single', 'test');
    }

?>
