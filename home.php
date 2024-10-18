<?php
    get_header();
?>

    <div class="wrapper-main-image">
        <img class="main-image" src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/main-image.jpg" alt="Main-Image">
        <div class="main-text">
            <h1>Chạm Văn</h1>
            <h2>Khơi nguồn cảm hứng văn chương</h2>
        </div>
    </div>

    <div class="wrapper-tailieu">
        <div class="tailieu-introduction">
            <h1>Tài liệu tham khảo</h1>
            <h2>Các tài liệu hữu ích cho bạn phát triển mọi
            kĩ năng</h2>
        </div>

        <img class="tailieu-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/open-book.gif" alt="Icon Đọc"> 
        <div class="wrapper-tailieu-section">
            <div class="section-heading">
                <h1 class="name-heading">Đọc</h1>
                <button class="btn-view-all"> <a href="<?php echo esc_url(home_url('/category/content-archive/doc'));?>">Xem thêm</a> </button>
            </div>
            <?php 
                $args = array(
                    'category_name' => 'doc',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 1
                );

                $main_card_query = new WP_Query($args);

                if ($main_card_query->have_posts()):
                    while ($main_card_query->have_posts()): $main_card_query->the_post();
            ?>
            <div class="wrapper-main-card">
                <div class="main-card">
                    <?php 
                        $image_id = get_post_thumbnail_id(); 
                        $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                        if (empty($image_alt)) {
                            $image_alt = get_the_title(); // Fallback to post title
                        }
                        if ($image_src) :
                            $image_url = $image_src[0]; 
                            echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image-main-card">';
                        else: echo '<img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="Main Card" class="image-main-card">';
                        endif; 
                    ?>
                    <div class="content-card">
                        <a href="<?php echo esc_url(get_permalink());?>">
                            <h2 class="heading-main-card"><?php the_title(); ?></h2>
                        </a>
                        <h4 class="description-main-card"><?php echo get_the_excerpt(); ?></h4>
                        <div class="hashtag-main-card">
                            <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php  
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="wrapper-smaller-cards">
                <?php 
                    $args = array(
                        'category_name' => 'doc',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'posts_per_page' => 2,
                        'offset' => 1
                    );

                    $smaller_card_query = new WP_Query($args);

                    if ($smaller_card_query->have_posts()):
                        while ($smaller_card_query->have_posts()): $smaller_card_query->the_post();
                ?>
                    <div class="smaller-card">
                        <?php 
                            $image_id = get_post_thumbnail_id(); 
                            $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                            if (empty($image_alt)) {
                                $image_alt = get_the_title(); // Fallback to post title
                            }
                            if ($image_src) :
                                $image_url = $image_src[0]; 
                                echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image-smaller-card">';
                            else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="Smaller Card" class="image-smaller-card">';
                            endif; 
                        ?>
                        <div class="content-smaller-card">
                            <a href="<?php echo esc_url(get_permalink());?>">
                                <h2 class="heading-smaller-card"><?php the_title(); ?></h2>
                                <h4 class="description-smaller-card"><?php echo get_the_excerpt(); ?></h4>
                            </a>
                            <div class="hashtag-smaller-card">
                                <?php 
                                    $tags = get_the_tags();
                                    foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                    }
                                ?>
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

        <img class="tailieu-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/writing.gif" alt="Icon Đọc">
        <div class="wrapper-tailieu-section">
            <div class="section-heading">
                <h1 class="name-heading">Viết</h1>
                <button class="btn-view-all"> <a href="<?php echo esc_url(home_url('/category/content-archive/viet'));?>">Xem thêm</a> </button>
            </div>
            <?php 
                $args = array(
                    'category_name' => 'viet',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 1
                );

                $main_card_query = new WP_Query($args);

                if ($main_card_query->have_posts()):
                    while ($main_card_query->have_posts()): $main_card_query->the_post();
            ?>
            <div class="wrapper-main-card">
                <div class="main-card">
                    <?php 
                        $image_id = get_post_thumbnail_id(); 
                        $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                        if (empty($image_alt)) {
                            $image_alt = get_the_title(); // Fallback to post title
                        }
                        if ($image_src) :
                            $image_url = $image_src[0]; 
                            echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image-main-card">';
                        else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="Main Card" class="image-main-card">';
                        endif; 
                    ?>
                    <div class="content-card">
                        <a href="<?php echo esc_url(get_permalink());?>">
                            <h2 class="heading-main-card"><?php the_title(); ?></h2>
                        </a>
                        <h4 class="description-main-card"><?php echo get_the_excerpt(); ?></h4>
                        <div class="hashtag-main-card">
                            <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php  
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="wrapper-smaller-cards">
                <?php 
                    $args = array(
                        'category_name' => 'viet',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'posts_per_page' => 2,
                        'offset' => 1
                    );

                    $smaller_card_query = new WP_Query($args);

                    if ($smaller_card_query->have_posts()):
                        while ($smaller_card_query->have_posts()): $smaller_card_query->the_post();
                ?>
                    <div class="smaller-card">
                        <?php 
                            $image_id = get_post_thumbnail_id(); 
                            $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                            if (empty($image_alt)) {
                                $image_alt = get_the_title(); // Fallback to post title
                            }
                            if ($image_src) :
                                $image_url = $image_src[0]; 
                                echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image-smaller-card">';
                            else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="Smaller Card" class="image-smaller-card">';
                            endif; 
                        ?>
                        <div class="content-smaller-card">
                            <a href="<?php echo esc_url(get_permalink());?>">
                                <h2 class="heading-smaller-card"><?php the_title(); ?></h2>
                                <h4 class="description-smaller-card"><?php echo get_the_excerpt(); ?></h4>
                            </a>
                            <div class="hashtag-smaller-card">
                                <?php 
                                    $tags = get_the_tags();
                                    foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                    }
                                ?>
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
        
        <img class="tailieu-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/speak.gif" alt="Icon Đọc">
        <div class="wrapper-tailieu-section">
            <div class="section-heading">
                <h1 class="name-heading">Nói</h1>
                <button class="btn-view-all"> <a href="<?php echo esc_url(home_url('/category/content-archive/noi'));?>">Xem thêm</a> </button>
            </div>
            <?php 
                $args = array(
                    'category_name' => 'noi',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 1
                );

                $main_card_query = new WP_Query($args);

                if ($main_card_query->have_posts()):
                    while ($main_card_query->have_posts()): $main_card_query->the_post();
            ?>
            <div class="wrapper-main-card">
                <div class="main-card">
                    <?php 
                        $image_id = get_post_thumbnail_id(); 
                        $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                        if (empty($image_alt)) {
                            $image_alt = get_the_title(); // Fallback to post title
                        }
                        if ($image_src) :
                            $image_url = $image_src[0]; 
                            echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image-main-card">';
                        else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="Main Card" class="image-main-card">';
                        endif; 
                    ?>
                    <div class="content-card">
                        <a href="<?php echo esc_url(get_permalink());?>">
                            <h2 class="heading-main-card"><?php the_title(); ?></h2>
                        </a>
                        <h4 class="description-main-card"><?php echo get_the_excerpt(); ?></h4>
                        <div class="hashtag-main-card">
                            <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php  
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="wrapper-smaller-cards">
                <?php 
                    $args = array(
                        'category_name' => 'noi',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'posts_per_page' => 2,
                        'offset' => 1
                    );

                    $smaller_card_query = new WP_Query($args);

                    if ($smaller_card_query->have_posts()):
                        while ($smaller_card_query->have_posts()): $smaller_card_query->the_post();
                ?>
                    <div class="smaller-card">
                        <?php 
                            $image_id = get_post_thumbnail_id(); 
                            $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                            if (empty($image_alt)) {
                                $image_alt = get_the_title(); // Fallback to post title
                            }
                            if ($image_src) :
                                $image_url = $image_src[0]; 
                                echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image-smaller-card">';
                            else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="Smaller Card" class="image-smaller-card">';
                            endif; 
                        ?>
                        <div class="content-smaller-card">
                            <a href="<?php echo esc_url(get_permalink());?>">
                                <h2 class="heading-smaller-card"><?php the_title(); ?></h2>
                                <h4 class="description-smaller-card"><?php echo get_the_excerpt(); ?></h4>
                            </a>
                            <div class="hashtag-smaller-card">
                                <?php 
                                    $tags = get_the_tags();
                                    foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                    }
                                ?>
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

        <img class="tailieu-icon" src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/listening.gif" alt="Icon Đọc">
        <div class="wrapper-tailieu-section">
            <div class="section-heading">
                <h1 class="name-heading">Nghe</h1>
                <button class="btn-view-all"> <a href="<?php echo esc_url(home_url('/category/content-archive/nghe'));?>">Xem thêm</a> </button>
            </div>
            <?php 
                $args = array(
                    'category_name' => 'nghe',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 1
                );

                $main_card_query = new WP_Query($args);

                if ($main_card_query->have_posts()):
                    while ($main_card_query->have_posts()): $main_card_query->the_post();
            ?>
            <div class="wrapper-main-card">
                <div class="main-card">
                    <?php 
                        $image_id = get_post_thumbnail_id(); 
                        $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                        if (empty($image_alt)) {
                            $image_alt = get_the_title(); // Fallback to post title
                        }
                        if ($image_src) :
                            $image_url = $image_src[0]; 
                            echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image-main-card">';
                        else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="Main Card" class="image-main-card">';
                        endif; 
                    ?>
                    <div class="content-card">
                        <a href="<?php echo esc_url(get_permalink());?>">
                            <h2 class="heading-main-card"><?php the_title(); ?></h2>
                        </a>
                        <h4 class="description-main-card"><?php echo get_the_excerpt(); ?></h4>
                        <div class="hashtag-main-card">
                            <?php
                                $tags = get_the_tags();
                                foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php  
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="wrapper-smaller-cards">
                <?php 
                    $args = array(
                        'category_name' => 'nghe',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'posts_per_page' => 2,
                        'offset' => 1
                    );

                    $smaller_card_query = new WP_Query($args);

                    if ($smaller_card_query->have_posts()):
                        while ($smaller_card_query->have_posts()): $smaller_card_query->the_post();
                ?>
                    <div class="smaller-card">
                        <?php 
                            $image_id = get_post_thumbnail_id(); 
                            $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                            if (empty($image_alt)) {
                                $image_alt = get_the_title(); // Fallback to post title
                            }
                            if ($image_src) :
                                $image_url = $image_src[0]; 
                                echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="image-smaller-card">';
                            else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="Smaller Card" class="image-smaller-card">';
                            endif; 
                        ?>
                        <div class="content-smaller-card">
                            <a href="<?php echo esc_url(get_permalink());?>">
                                <h2 class="heading-smaller-card"><?php the_title(); ?></h2>
                                <h4 class="description-smaller-card"><?php echo get_the_excerpt(); ?></h4>
                            </a>
                            <div class="hashtag-smaller-card">
                                <?php 
                                    $tags = get_the_tags();
                                    foreach ($tags as $tag) {
                                    echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" class="tag">' . esc_html($tag->name) . '</a>';
                                    }
                                ?>
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
    </div>

    <div class="wrapper-deonluyen" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/deonluyen-image.jpg'); background-position: center center; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0.5); background-blend-mode: multiply;">
        <div class="container-deonluyen">
            <div class="deonluyen-introduction">
                <h1>Đề ôn luyện</h1>
                <h2>Những mẫu đề đa dạng cho từng khối học, kèm theo lời giải chi tiết</h2>
            </div>
            <div class="deonluyen-container-content">
                <div class="deonluyen-content-introduction">
                    <h2>Lớp 10</h2>
                    <h3>khởi đầu</h3>
                    <button class="btn-view-all" id="deonluyen"><a href="<?php echo esc_url(home_url('/category/tests-archive/lop-10'));?>">Xem thêm</a></button>
                </div>
                <div class="swiper-parent">
                    <div class="deonluyen-container-cards swiper swiper1">
                        <div class="deonluyen-wrapper-cards swiper-wrapper">
                            <?php 
                            $args_10 = array(
                                'category_name' => 'lop-10',
                                'order' => 'DESC',
                                'orderby' => 'date',
                                'posts_per_page' => -1
                            );
            
                            $tests_10_query = new WP_Query($args_10);
            
                            if ($tests_10_query->have_posts()):
                                while ($tests_10_query->have_posts()): $tests_10_query->the_post();
                            ?>
                                <div class="deonluyen-card swiper-slide">
                                    <?php
                                        $image_id = get_post_thumbnail_id(); 
                                        $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                                        if (empty($image_alt)) {
                                            $image_alt = get_the_title(); // Fallback to post title
                                        }
                                        if ($image_src) :
                                            $image_url = $image_src[0]; 
                                            echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="deonluyen-card-image">';
                                        else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="hello" class="deonluyen-card-image">';
                                        endif; 
                                    ?>
                                    <div class="deonluyen-card-content">
                                        <h3> <?php the_title(); ?> </h3>
                                        <a href="<?php echo esc_url(get_permalink());?>">Làm ngay</a>
                                    </div>
                                </div>
                            <?php 
                            endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>  
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination1"></div>
                    <div class="swiper-button-prev swiper-button-prev1"></div>
                    <div class="swiper-button-next swiper-button-next1"></div>                
                </div>
            </div>
            <div class="deonluyen-container-content">
                <div class="deonluyen-content-introduction">
                    <h2>Lớp 11</h2>
                    <h3>tiến bước</h3>
                    <button class="btn-view-all" id="deonluyen"><a href="<?php echo esc_url(home_url('/category/tests-archive/lop-10'));?>">Xem thêm</a></button>
                </div>
                <div class="swiper-parent">
                    <div class="deonluyen-container-cards swiper swiper2">
                        <div class="deonluyen-wrapper-cards swiper-wrapper">
                            <?php 
                                $args_11 = array(
                                    'category_name' => 'lop-11',
                                    'order' => 'DESC',
                                    'orderby' => 'date',
                                    'posts_per_page' => -1
                                );
                
                                $tests_11_query = new WP_Query($args_11);
                
                                if ($tests_11_query->have_posts()):
                                    while ($tests_11_query->have_posts()): $tests_11_query->the_post();
                            ?>
                            <div class="deonluyen-card swiper-slide">
                                <?php
                                    $image_id = get_post_thumbnail_id(); 
                                    $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                                    if (empty($image_alt)) {
                                        $image_alt = get_the_title(); // Fallback to post title
                                    }
                                    if ($image_src) :
                                        $image_url = $image_src[0]; 
                                        echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="deonluyen-card-image">';
                                    else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="hello" class="deonluyen-card-image">';
                                    endif; 
                                ?>
                                <div class="deonluyen-card-content">
                                    <h3> <?php the_title(); ?> </h3>
                                    <a href="<?php echo esc_url(get_permalink());?>">Làm ngay</a>
                                </div>
                            </div>
                                <?php 
                                endwhile;
                                endif;
                                wp_reset_postdata();
                                ?>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination2"></div>
                    <div class="swiper-button-prev swiper-button-prev2"></div>
                    <div class="swiper-button-next swiper-button-next2"></div>
                </div>
            </div>
            <div class="deonluyen-container-content">
                <div class="deonluyen-content-introduction">
                    <h2>Lớp 12</h2>
                    <h3>chinh phục</h3>
                    <button class="btn-view-all" id="deonluyen"><a href="<?php echo esc_url(home_url('/category/tests-archive/lop-10'));?>">Xem thêm</a></button>
                </div>
                <div class="swiper-parent">
                    <div class="deonluyen-container-cards swiper swiper3">
                        <div class="deonluyen-wrapper-cards swiper-wrapper">
                            <?php 
                                $args_12 = array(
                                    'category_name' => 'lop-12',
                                    'order' => 'DESC',
                                    'orderby' => 'date',
                                    'posts_per_page' => -1
                                );
                
                                $tests_12_query = new WP_Query($args_12);
                
                                if ($tests_12_query->have_posts()):
                                    while ($tests_12_query->have_posts()): $tests_12_query->the_post();
                            ?>
                                <div class="deonluyen-card swiper-slide">
                                    <?php
                                        $image_id = get_post_thumbnail_id(); 
                                        $image_src = wp_get_attachment_image_src($image_id, 'full'); 
                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); 
                                        if (empty($image_alt)) {
                                            $image_alt = get_the_title(); // Fallback to post title
                                        }
                                        if ($image_src) :
                                            $image_url = $image_src[0]; 
                                            echo ' <img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" class="deonluyen-card-image">';
                                        else: echo ' <img src="' . get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg" alt="hello" class="deonluyen-card-image">';
                                        endif; 
                                    ?>
                                    <div class="deonluyen-card-content">
                                        <h3> <?php the_title(); ?> </h3>
                                        <a href="<?php echo esc_url(get_permalink());?>">Làm ngay</a>
                                    </div>
                                </div>
                            <?php 
                                endwhile;
                                endif;
                                wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination3"></div>
                    <div class="swiper-button-prev swiper-button-prev3"></div>
                    <div class="swiper-button-next swiper-button-next3"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper-podcasts" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/podcast-image.jpg'); background-position: center center; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0.1); background-blend-mode: multiply;">
        <style>
            .wrapper-podcasts {
                background-image: url("<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/podcasts-image.jpg");
            }
        </style>
        <div class="container-podcasts">
            <div class="podcasts-introduction">
                <div class="podcasts-introduction-1" data-aos="fade-right" data-aos-duration="600">
                    <h1>P</h1>
                    <h1>O</h1>
                    <h1>D</h1>
                    <h1>C</h1>
                    <h1>A</h1>
                    <h1>S</h1>
                    <h1>T</h1>
                    <h1>S</h1>
                </div>
            </div>
            <div class="podcasts-content" id="first" data-aos="fade-right"">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/placeholder-image.jpg" alt="Image" style="margin-right: 5%;">
                <div>
                    <h1 style="font-size: 2.3rem; font-family: var(--ff-2);">Về Lời Hoa</h1>
                    <h3 style="font-size: 1.15rem; font-weight: 400; line-height: 1.5rem;">Lời Hoa là chuỗi Podcast được thực hiện bởi Chạm Văn. Với nội dung tập trung vào trọng tâm Tri thức ngữ văn của những thể loại văn học, đồng thời đưa ra các ví dụ cụ thể nhằm làm rõ kiến thức đã cung cấp, Lời Hoa là trải nghiệm thanh âm văn học sinh động và hữu ích dành cho bạn.
                    </h3>
                    <a href="https://www.facebook.com/ivan0id_07/" target="_blank" style="font-size: 1.2vw;">Ghé thăm Lời Hoa &nbsp;<i class="fa-solid fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="podcasts-content" id="second" data-aos="fade-left">
                <div>
                    <h1 style="font-size: 2.3rem; font-family: var(--ff-2);">Những điểm đặc biệt của Lời Hoa</h1>
                    <h3 style="font-size: 1.15rem; font-weight: 400; line-height: 1.5rem;">Thuộc khuôn khổ giải pháp cho đề tài nghiên cứu về Văn học, nội dung và hình thức của chuỗi Podcast giúp bạn trẻ khơi gợi sự hứng thú khi học Văn, đảm bảo khoa học, đầy đủ và hấp dẫn.</h3>
                </div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/placeholder-image.jpg" alt="Image" style="margin-left: 5%;">
            </div>
            <div class="podcasts-conclusion">
                <div class="podcasts-conclusion-content">
                    <div class="podcasts-conclusion-center">Bạn có thể</div>
                    <div class="podcasts-conclusion-half" id="left">
                        <div class="content">
                            <h1>Xem Lời Hoa trên Chạm Văn</h1>
                            <p>Sử dụng giao diện podcasts được thiết kế riêng biệt của Chạm Văn với trải nghiệm nghe nhìn tốt nhất.</p>
                            <a href="<?php echo home_url('category/podcasts-archive')?>">Tới trang Podcasts &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="podcasts-conclusion-half" id="right"> 
                        <div class="content">
                            <h1>Xem Lời Hoa trên nền tảng khác</h1>  
                            <p>Truy cập vào nguồn podcasts của Chạm Văn qua mạng xã hội tiện lợi nhất dành cho bạn.</p>
                            <div>
                                <a href="#!">Soundcloud &nbsp;<i class="fa-brands fa-soundcloud"></i></a>
                                <a href="#!">Facebook &nbsp;<i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper-tools">
        <div class="content-tools">
            <div>
                <h1>Công cụ hỗ trợ</h1>
                <p>Cùng tìm hiểu về những tiềm năng rộng mở của công nghệ AI, và cách bạn có thể tận dụng chúng cho niềm cảm hứng Văn học của mình.</p>
                <a href="<?php echo home_url('category/tools-archive')?>">Bắt đầu ngay</a>
            </div>
        </div>
        <div class="image-tools">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/tools-image.jpg" alt="Tools">
        </div>
    </div>
<?php
    get_footer();
?>