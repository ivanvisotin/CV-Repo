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
            echo '<a href="' . get_category_link($queried_object) . '">' . $queried_object->name . '</a>';
        ?>
    </div>
    <span class="introduction">Các công cụ hữu ích</span>
    <?php 
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

        $args = array(
            'category_name'   => 'tools-archive',
            'posts_per_page' => 10,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'paged'          => $paged
        );

        $tools_query = new WP_Query($args);
        
        if ($tools_query->have_posts()):
    ?>
    <div class="content">
        <?php 
            while ($tools_query->have_posts()):
                $tools_query->the_post();
        ?>
            <div class="card">
                <?php if (has_post_thumbnail()) :              
                    echo get_the_post_thumbnail(get_the_ID(), 'full', [
                        'alt' => get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?: get_the_title(),
                        'class' => 'card-image'
                    ]); 
                ?>
                <?php else : ?>                      
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Main-Page/placeholder-image.jpg'); ?>" alt="Placeholder" class="card-image">
                <?php endif; ?>
                <div class="card-content">
                    <span class="name"><?php echo get_post_meta(get_the_ID(), 'name', true); ?></span>
                    <div class="actions">
                        <a href="<?php the_permalink(); ?>" class="view-post">Tìm hiểu thêm</a>
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'access', true)); ?>" class="access" target="_blank">Sử dụng</a>
                    </div>
                </div>
            </div>
        <?php 
            endwhile;
            echo '</div>';
            echo '<div class="pagination">';
            echo paginate_links(array(
                'total'              => $tools_query->max_num_pages,
                'mid_size'           => 1, 
                'current'            => $paged,
                'prev_text'          => '<i class="fa-solid fa-arrow-left"></i>', 
                'next_text'          => '<i class="fa-solid fa-arrow-right"></i>',
            ));
            echo '</div>';
        ?>
    <?php 
        endif;
        wp_reset_postdata();
    ?>
</div>
