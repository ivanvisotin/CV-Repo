    <?php $queried_object = get_queried_object(); ?>
            <div class="welcome-section" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/main-image.jpg');">
                <h1><?php echo $queried_object->name ?></h1>
                <h3><?php echo $queried_object->description ?></h3>
            </div>
            <div class="main-wrapper">
                <div class="breadcrumbs-list">
                    <?php 
                        echo '<a href="'.home_url().'">Trang chủ</a>';
                        echo '<i style="font-size: 1vw;">&nbsp; / &nbsp;</i>';
                        $current_tag_id = $queried_object->term_id;
                        echo '<a href="' . get_tag_link($current_tag_id) . '">' . $queried_object->name . '</a>';
                    ?>
                </div>
                <?php 
                    echo '<h1>Các tài liệu về ' . $queried_object->name . '</h1>';
                ?>

    <?php 
                $tag_slug = $queried_object->slug;

                $args = array(
                    'tag' => $tag_slug,
                    'posts_per_page' => 10,
                    'orderby'        => 'date',
                    'order'          => 'DESC' 
                );

                $query = new WP_Query($args);

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
                        <?php endwhile;
                    endif;
                wp_reset_postdata();
                ?> 
                
                <div class="pagination">
                    <a href="#!"><i class="fa-solid fa-arrow-left"></i></a>
                    <span>1</span>
                    <a href="#!"><i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>