<?php
    get_header();
?>

<?php 
    $queried_object = get_queried_object();
?>

<div class="welcome-section"
    style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/main-image.jpg');">
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
                echo '<i style="font-size: 1vw;">&nbsp; / &nbsp;</i>';
            }
            echo '<a href="' . get_category_link($queried_object) . '">' . $queried_object->name . '</a>';
        ?>
    </div>
    <div class="featured-section">
        <div class="featured-heading">
            <span class="material-symbols-outlined">recommend</span>
            <span>&nbsp;Podcast đề xuất</span>
        </div>
        <div class="featured-podcast">
            <?php 
                $args = array(
                    'category_name' => 'podcasts-archive',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 1
                );

                $featured_podcast = new WP_Query($args);
                if ($featured_podcast->have_posts()):
                    while ($featured_podcast->have_posts()): 
                        $featured_podcast->the_post();  
            ?> 
                <div class="introduction">
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
                            else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="hello">';
                            endif; 
                    ?>
                    <span><?php the_title(); ?></span>
                </div>
            <div class="description">
                <span><?php echo get_the_excerpt(); ?></span>
                <div class="links">
                    <a class="cv-button" href="<?php the_permalink();?>">
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/Main-Page/favicon.png" alt="hello">&nbsp;&nbsp;Xem trên Chạm Văn
                    </a>
                    <a class="soundcloud-button" href="<?php echo esc_url(get_post_meta(get_the_ID(), 'soundcloud_link', true)); ?>"><i class="fa-brands fa-soundcloud">&nbsp;&nbsp; </i>Soundcloud</a>
                    <a class="facebook-button" href="<?php echo esc_url(get_post_meta(get_the_ID(), 'facebook_link', true)); ?>"><i class="fa-brands fa-facebook">&nbsp;&nbsp; </i>Facebook</a>
                </div>
            </div>
            <?php 
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <div class="archive-section">
        <span class="archive-heading">Các tập Podcasts khác</span>
        <div class="archive-content">
            <div class="podcasts-content-introduction">
                <h2>2024</h2>
            </div>
            <div class="swiper-parent">
                <div class="podcasts-container-cards swiper swiper2024">
                    <div class="podcasts-wrapper-cards swiper-wrapper">
                        <?php 
                            $args = array(
                                'category_name' => 'podcasts-archive',
                                'order' => 'DESC',
                                'orderby' => 'date',
                                'posts_per_page' => -1,
                                'offset' => 1
                            );

                            $archive_podcasts = new WP_Query($args);

                            if ($archive_podcasts->have_posts()):
                                while ($archive_podcasts->have_posts()): 
                                    $archive_podcasts->the_post(); 
                        ?>
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
                                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'facebook_link', true)); ?>" class="facebook-button-small"><i class="fa-brands fa-soundcloud">&nbsp;&nbsp; </i>Facebook</a>
                                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'soundcloud_link', true)); ?>" class="soundcloud-button-small"><i class="fa-brands fa-facebook">&nbsp;&nbsp; </i>Soundcloud</a>
                                </div>
                            </div>
                        </div>
                        <?php 
                            endwhile;
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination2024"></div>
                <div class="swiper-button-prev swiper-button-prev2024"></div>
                <div class="swiper-button-next swiper-button-next2024"></div>                
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>