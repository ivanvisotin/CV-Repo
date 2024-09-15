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
               /*  $args = array(
                    'category_name' => 'podcasts-archive',
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'posts_per_page' => 1
                );

                $featured_podcast = new WP_Query($args);
                if ($main_card_query->have_posts()):
                    while ($main_card_query->have_posts()): 
                $main_card_query->the_post();  */
            ?> 
            <div class="introduction">
                <img src="<?php bloginfo('template_directory') ?>/assets/images/Main-Page/placeholder-image.jpg" alt="hello">
                <span>Giải thưởng Emmy Awards 2024: Liệu Mai Nhật Nam có thắng? Hãy tìm hiểu ngay sau đây!</span>
            </div>
            <div class="description">
                <span>Mai nhật nam đã là một cái tên sáng giá cho Emmy Awards năm nay. Tuy nhiên, phong độ hiện tại của anh trong các phần phim fast and furious đang không tốt. Điều gì đang xảy ra? Dự đoán nào đang chiếm ưu thế?</span>
                <div class="links">
                    <a class="cv-button" href="#!">
                        <img src="<?php bloginfo('template_directory') ?>/assets/images/Main-Page/favicon.png" alt="hello">&nbsp;&nbsp;Xem trên Chạm Văn
                    </a>
                    <a class="soundcloud-button" href="#!"><i class="fa-brands fa-soundcloud">&nbsp;&nbsp; </i>Soundcloud</a>
                    <a class="facebook-button" href="#!"><i class="fa-brands fa-facebook">&nbsp;&nbsp; </i>Facebook</a>
                </div>
            </div>
        </div>
    </div>
    <div class="archive-section">
        <div class="archive-heading">
            <span>Các tập Podcasts khác</span>
        </div>
    </div>
</div>

<?php
    get_footer();
?>