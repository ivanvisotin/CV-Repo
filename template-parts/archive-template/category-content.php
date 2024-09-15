<?php 
    $queried_object = get_queried_object();
?>

<div class="welcome-section" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/main-image.jpg');">
    <h1><?php echo $queried_object->name ?></h1>
    <h3><?php echo $queried_object->description ?></h3>
</div>
<div class="main-wrapper">
    <div class="breadcrumbs-list">
        <?php 
            echo '<a href="'.home_url().'">Trang chủ</a>';
            echo '<i style="font-size: 1.35vw;">&nbsp; / &nbsp;</i>';
            $current_cat_id = $queried_object->term_id;
            $ancestors = get_ancestors($current_cat_id, 'category');
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor_id)
            {
                $ancestor = get_category($ancestor_id);
                echo '<a href="' . get_category_link($ancestor->term_id) . '">' . $ancestor->name . '</a>';
                echo '<i style="font-size: 1.35vw;">&nbsp; / &nbsp;</i>';
            }
            echo '<a href="' . get_category_link($queried_object) . '">' . $queried_object->name . '</a>';
        ?>
    </div>
    <div class="navigation">
        <?php
            function long_name($object) {
                $longnames = array('van-ban-van-hoc', 'van-ban-nghi-luan', 'van-ban-thong-tin');
                if (in_array($object->slug, $longnames)) {
                    return true;
                }
                else {
                    return false;
                }
            }
            if (is_category('content-archive'))
            {
                echo '<h1 style="font-size: 4.2vw;">Tất cả tài liệu</h1>';
            }
            elseif (long_name($queried_object) === true) {
                echo '<h1 style="font-size: 4vw;">' . $queried_object->name . '</h1>';
            }
            else {
                echo '<h1 style="font-size: 3.6vw;">Tài liệu ' . $queried_object->name . ' mới nhất</h1>';
            }
        ?>
        <div class="wrapper-search">
            <input type="text" placeholder="Nhập tên tài liệu bạn muốn tìm kiếm">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <?php
        $main_category = get_category_by_slug($queried_object->slug);

        if ($main_category) {

            $main_category_id = $main_category->term_id;

            $child_categories = get_term_children($main_category_id, 'category');

            $categories_to_include = array_merge(array($main_category_id), $child_categories);

            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $args = array(
                'category__in'   => $categories_to_include,
                'posts_per_page' => 8,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => $paged,
            );

            $query = new WP_Query($args);
        
            // echo '<h1> Total Posts Found: ' . $query->found_posts . '</h1>';
            // echo '<h1>Current Page: ' . $paged .'</h1>';
            // echo '<h1> Total page found: ' . $query->max_num_pages . '</h1>';

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); 
    ?>
                    <div class="posts-container"> 
                        <?php
                            $image_id = get_post_thumbnail_id(); 
                            $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                            if (empty($image_alt)) {
                                $image_alt = get_the_title(); // Fallback to post title
                            }
                            if ($image_src) :
                                $image_url = $image_src[0]; 
                                echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="posts-image">';
                            else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="hello" class="posts-image">';
                            endif; 
                        ?>
                        <div class="posts-content">
                            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
                            <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                            <div class="info">
                                <div class="tags">
                                    <?php 
                                        $tags = get_the_tags();
                                        foreach ($tags as $tag) {
                                            echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                        }
                                    ?>
                                </div>
                                <div class="date">
                                    <?php echo '<i class="fa-solid fa-calendar-days"></i>&nbsp; ' . get_the_date('d/m/Y') ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php 
                endwhile;
                    echo '<div class="pagination">';
                    echo paginate_links(array(
                        'total'              => $query->max_num_pages,
                        'mid_size'           => 1, 
                        'current'            => $paged,
                        'prev_text'          => '<i class="fa-solid fa-arrow-left"></i>', 
                        'next_text'          => '<i class="fa-solid fa-arrow-right"></i>',
                    ));
                    echo '</div>'; 
            ?>
            <?php 
            wp_reset_postdata();
            endif;
        }   
    ?>
    
</div>
