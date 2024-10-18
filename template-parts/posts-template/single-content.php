<?php 
    get_header();
?>

<div class="main-wrapper">
    <?php
        $queried_post = get_queried_object(); 
        $queried_post_cat = get_the_category($queried_post);
        if (have_posts()):
            while (have_posts()): the_post();
    ?>
    <div class="main-info">
        <div class="breadcrumbs-list">
            <?php 
                echo '<a href="'.home_url().'">Trang chủ</a>';
                echo '<i style="font-size: clamp(0.8rem, 1rem, 1.4rem);">&nbsp; / &nbsp;</i>';
                $post_id = get_the_ID();
                $categories = get_the_category($post_id);
                $parent_categories = [];
                if ($categories[0]->slug === 'tools-archive') {
                    $tools_archive  = get_category_by_slug('tools-archive');
                    echo '<a href="' . get_category_link($tools_archive) . '">' . $tools_archive->name . '</a>';
                    echo '<i style="font-size: clamp(0.8rem, 1rem, 1.4rem);">&nbsp; / &nbsp;</i>';
                }
                else {
                    if (!empty($categories)) {
                        $category = $categories[0]; // Get the first assigned category
                        while ($category->parent) {
                            $category = get_category($category->parent); // Get the parent category
                            $parent_categories[] = $category; // Add to array
                        }
                    }
                    $parent_categories = array_reverse($parent_categories);
                    foreach ($parent_categories as $categories_id)
                    {
                        echo '<a href="' . get_category_link($categories_id) . '">' . $categories_id->name . '</a>';
                        echo '<i style="font-size: clamp(0.8rem, 1rem, 1.4rem);">&nbsp; / &nbsp;</i>';
                    }
                }
                echo '<span class="truncate">' .get_the_title(). '</span>'; 
            ?>
        </div>
        <div class="tags">
            <?php
                if ($queried_post_cat[0]->slug === 'tools-archive') {
                    echo '<a class="tag" href="' . esc_url(get_category_link(get_category_by_slug('tools-archive')->term_id)) . '">' . get_category_by_slug('tools-archive')->name . '</a>'; 
                }
                else {
                    $tags_list = get_the_tags();
                    if ($tags_list) {
                        foreach ($tags_list as $tag) {
                            echo '<a class="tag" href="' . esc_url(get_tag_link($tag->term_id)) . '">' . $tag->name . '</a>'; 
                        }
                    }
                }
            ?>
        </div>
        <div class="title"><?php the_title();?></div>
        <div class="stats">
            <i class="material-icons" style="font-size: 16px">calendar_month</i>
            <span class="date">Ngày <?php echo get_the_date('d'); ?> tháng <?php echo get_the_date('m'); ?>, năm <?php echo get_the_date('Y'); ?></span>
            <i class="material-icons" style="font-size: 16px">visibility</i>
            <span class="views"><?php echo (int) get_post_meta(get_the_ID(), 'post_views_count', true); ?></span>
        </div>
        <!-- Thumbnail -->
        <?php
            if (has_post_thumbnail()) {
                $thumbnail = get_the_post_thumbnail_url();
                echo '<img src="'. $thumbnail .'" alt="Thumbnail" class="thumbnail">';
            }
            else {
                echo '<img src="'. get_template_directory_uri() .'/assets/images/Main-Page/placeholder-image.jpg" alt="Thumbnail" class="thumbnail">'; 
            }
        ?> 
    </div>
    <div class="content">
        <div class="main-content">
                <div class="excerpt"><?php the_excerpt();?></div>
                <?php the_content(); ?>
        </div>
        <div class="side-content">
            <div class="wrapper">
                <div class="introduction"><i class="fas fa-file-alt"></i> Các bài viết có liên quan</div>
                <div class="list">
                    <?php 
                        $args = array(
                            'category_name' => $queried_post_cat[0]->slug,
                            'order' => 'DESC',
                            'orderby' => 'date',
                            'posts_per_page' => 5,
                            'post__not_in' => array(get_the_ID()),
                        );

                        $post_query = new WP_Query($args);
                        if ($post_query->have_posts()):
                            while ($post_query->have_posts()): $post_query->the_post();
                    ?>
                    <div class="content-card">
                        <?php if (has_post_thumbnail()) :              
                            echo get_the_post_thumbnail(get_the_ID(), 'full', [
                                'alt' => get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?: get_the_title(),
                                'class' => 'card-image'
                            ]); 
                        ?>
                        <?php else : ?>                      
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg'); ?>" alt="Placeholder" class="card-image">
                        <?php endif; ?>
                        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                    </div>
                    <?php 
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="comment-section">
        <div class="introduction">
            <h2>Bình luận</h2>
            <span>Chạm Văn đang cập nhật thêm tính năng bình luận. Cùng đón chờ nhé!</span>
        </div>
    </div>
    <?php 
        endwhile;
        endif;
    ?>
</div>

<?php 
    get_footer();
?>