<?php 
    get_header();
?>
    <?php 
        if (have_posts()):
            while (have_posts()):
                the_post();
    ?>
    <div class="main-wrapper">
        <a class="category-link" href="<?php echo get_category_link(get_category_by_slug('podcasts-archive')->term_id);?>">Podcasts</a>
        <p class="video-title"><?php the_title();?></p>
        <div class="stats">
            <i class="material-icons" style="font-size: 16px">calendar_month</i>
            <span class="date">Ngày <?php echo get_the_date('d'); ?> tháng <?php echo get_the_date('m'); ?>, năm <?php echo get_the_date('Y'); ?></span>
            <i class="material-icons" style="font-size: 16px">visibility</i>
            <span class="views"><?php echo (int) get_post_meta(get_the_ID(), 'post_views_count', true); ?></span>
        </div>
        <div class="video-wrapper">
            <?php the_content(); ?>
        </div>
        <div class="excerpt">
            <div class="excerpt-header">Mô tả</div>
            <p class="excerpt-content"><?php the_excerpt(); ?></p>
        </div>
        <div class="comment-section">
            <div class="introduction">
                <h2>Bình luận</h2>
                <span>Chạm Văn đang cập nhật thêm tính năng bình luận. Cùng đón chờ nhé!</span>
            </div>
        </div>
    </div>
    <?php 
            endwhile;
        endif;
    ?>  
<?php 
    get_footer();
?>