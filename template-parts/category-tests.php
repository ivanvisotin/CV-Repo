<?php
    get_header();
?>
    <?php 
        $queried_object = get_queried_object();
    ?>
    <div class="welcome-section" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/main-image.jpg');">
        <h1><?php echo $queried_object->name ?></h1>
        <h3><?php echo $queried_object->description ?></h3>
    </div>
    <div class="main-section">
        <div class="breadcrumbs-list">
            <?php 
                echo '<a href="'.home_url().'">Trang chủ</a>';
                echo '<i style="font-size: 1vw;">&nbsp; / &nbsp;</i>';
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
        
        <div class="navigation">
            <a href=<?php echo get_category_link(get_category_by_slug('tests-archive'))?> class="<?php if ($current_cat_id === get_category_by_slug('tests-archive')->term_id) echo 'active'; ?>">Tất cả</a>
            <a href="<?php echo get_category_link(get_category_by_slug('lop-10'))?>" class="<?php if ($current_cat_id === get_category_by_slug('lop-10')->term_id) echo 'active'; ?>">Lớp 10</a>
            <a href="<?php echo get_category_link(get_category_by_slug('lop-11'))?>" class="<?php if ($current_cat_id === get_category_by_slug('lop-11')->term_id) echo 'active'; ?>">Lớp 11</a>
            <a href="<?php echo get_category_link(get_category_by_slug('lop-12'))?>" class="<?php if ($current_cat_id === get_category_by_slug('lop-12')->term_id) echo 'active'; ?>">Lớp 12</a>
            <div class="wrapper-search">
                <input type="text" placeholder="Nhập tên đề ôn luyện bạn muốn tìm kiếm">
                <i class="fas fa-search"></i>
            </div>
        </div>
        
        <?php

            $main_category = get_category_by_slug($queried_object->slug);

            if ($main_category) {

                $main_category_id = $main_category->term_id;

                $child_categories = get_term_children($main_category_id, 'category');

                $categories_to_include = array_merge(array($main_category_id), $child_categories);

                $args = array(
                    'category__in'   => $categories_to_include,
                    'posts_per_page' => 12, 
                    'orderby'        => 'date',
                    'order'          => 'DESC'
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :?>
                    <div class="container-tests">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
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
                    <?php endwhile; ?>
                    </div>
                    <div class="pagination">
                            <a href="#!"><i class="fa-solid fa-arrow-left"></i></a>
                            <a href="#!">1</a>
                            <a href="#!">2</a>
                            <a href="#!"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                <?php 
                    else: echo '<p> Hiện chưa có đề ôn luyện thuộc khối lớp này, nhưng Chạm Văn sẽ tiếp tục cập nhật. Các bạn cùng đón chờ nhé! </p>';
                    endif;
                wp_reset_postdata();
            }
        ?> 
    </div>

<?php
    get_footer();
?>