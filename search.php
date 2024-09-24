<?php 
    get_header();
 ?>

<div class="main-wrapper">
    <div class="page-header">
        <h1 class="page-title">
        <span class="material-symbols-outlined">search_check_2</span>
        <?php printf(__('Kết quả tìm kiếm cho: %s', 'textdomain'), '<span class="result">"' . get_search_query() . '"</span>'); ?>
        </h1>
    </div>
    <?php if (have_posts()) : ?>

        <!-- POSTS -->
        <?php 
            $args = array(
                's' => get_search_query(),
                'category_name' => 'content-archive',
                'posts_per_page' => -1
            );

            $posts_archive = new WP_Query($args);
            if ($posts_archive->have_posts()):
        ?>
        <div class="content-archive archive-section">
            <h1 class="title"><span class="material-symbols-outlined" style="align-self: center;">book_2</span>&nbsp;Tài liệu tham khảo</h1>
            <?php 
                while ($posts_archive->have_posts()): $posts_archive->the_post();
            ?>
            <div class="posts-container">                  
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg'); ?>" alt="Placeholder" class="posts-image">
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
            echo '</div>';
            endif;
            wp_reset_postdata();
        ?>
        <!-- END POSTS -->
        
        <!-- TESTS -->
        <?php 
                $args = array(
                    's' => get_search_query(),
                    'category_name' => 'tests-archive',
                    'posts_per_page' => -1
                );
                $tests_archive = new WP_Query($args);
                
                if ($tests_archive->have_posts()): 
        ?>
        <div class="tests-archive archive-section">
                <h1 class="title"><span class="material-symbols-outlined" style="align-self:center;">edit_document</span>&nbsp;Đề ôn luyện</h1>
                <?php while ($tests_archive->have_posts()): $tests_archive->the_post(); ?>
                    <div class="card-test"> 
                        <a href="<?php the_permalink(); ?>" class="content">
                            <?php  
                                $image_id = get_post_thumbnail_id(); 
                                $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                                if (empty($image_alt)) {
                                    $image_alt = get_the_title(); // Fallback to post title
                                }
                                if ($image_src) :
                                    $image_url = $image_src[0]; 
                                    echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '">';
                                else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="hello" class="posts-image">';
                                endif; 
                                echo '<p>' . get_the_title() . '</p>';
                            ?>   
                        </a>
                        <?php 
                            $category = get_the_category();
                            $category_link = get_category_link($category[0]->term_id);
                            echo '<a href="' . esc_url($category_link) . '" class="grade">' . esc_html($category[0]->name) . '</a>';
                            $post_link = get_permalink();
                            echo '<a href="' . $post_link . '" class="teststart-button">Làm ngay</a>';
                        ?>
                    </div>
                <?php 
                    endwhile;
                    echo '</div>';
                    endif;
                    wp_reset_postdata();
                ?>
        <!-- END TESTS -->

        <!-- PODCASTS -->
        <?php 
            $args = array(
                's' => get_search_query(),
                'category_name' => 'podcasts-archive',
                'posts_per_page' => -1
            );
            $podcasts_archive = new WP_Query($args);
            
            if ($podcasts_archive->have_posts()): 
        ?>
            <div class="podcasts-archive archive-section">
                <h1 class="title"><span class="material-symbols-outlined">headphones</span>&nbsp; Podcasts</h1>
                <div class="swiper-parent">
                    <div class="podcasts-container-cards swiper swiper2024">
                        <div class="podcasts-wrapper-cards swiper-wrapper">
                            <?php while ($podcasts_archive->have_posts()): $podcasts_archive->the_post();?>
                            <div class="podcasts-card swiper-slide">
                                <?php
                                    $image_id = get_post_thumbnail_id();
                                    $image_src = wp_get_attachment_image_src($image_id, 'full');
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                    if (empty($image_alt)) {
                                        $image_alt = get_the_title(); // Fallback to post title
                                    }
                                    if ($image_src) :
                                        $image_url = $image_src[0];
                                        echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="podcasts-card-image">';
                                    else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="hello" class="podcasts-card-image">';
                                    endif;
                                ?>
                                <div class="podcasts-card-content">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <div class="action-buttons">
                                        <a href="<?php the_permalink(); ?>" class="cv-button-small"><img src="<?php bloginfo('template_directory') ?>/assets/images/Main-Page/favicon.png" alt="hello">&nbsp;&nbsp;Xem trên Chạm Văn</a>
                                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'facebook_link', true)); ?>" class="facebook-button-small"><i class="fa-brands fa-facebook">&nbsp;&nbsp; </i>Facebook</a>
                                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'soundcloud_link', true)); ?>" class="soundcloud-button-small"><i class="fa-brands fa-soundcloud">&nbsp;&nbsp; </i>Soundcloud</a>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination2024"></div>
                    <div class="swiper-button-prev swiper-button-prev2024"></div>
                    <div class="swiper-button-next swiper-button-next2024"></div>
            </div>
            <?php 
                endif;
                echo '</div>';
            wp_reset_postdata();
            ?>
        <!-- END PODCASTS -->

    <?php else: ?>
        <div class="not-found">
            <p><?php _e('Chạm Văn không tìm thấy kết quả phù hợp.', 'textdomain'); ?></p>
        </div>
    <?php endif; ?>
</div>

<?php
    get_footer(); 
?>