<!DOCTYPE html>

<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        wp_head();
    ?>
</head>

<body>
    <?php 
        if (have_posts()):
            while (have_posts()): the_post();
    ?>
    <form method="post">
        <nav class="header" id="anchor-start-page">
            <?php 
                $test_cat = get_category_by_slug('tests-archive');
            ?>
            <a href="<?php echo get_category_link($test_cat->term_id); ?>" class="exit"><span class="material-symbols-outlined">logout</span>&nbsp;Quay về</a>
            <div class="timer"></div>    
            <input type="hidden" name="end_time" id="end_time" value="">
            <button type="submit" name="submit_exam" class="submit-button">Nộp bài</button>
            <script>
                <?php $exam_duration =  get_post_meta(get_the_ID(), 'exam_duration', true); ?>
                var examDuration = <?php echo $exam_duration ?> * 60;
            </script>
        </nav>
        <div class="main-wrapper">
            <span class="title"><?php the_title();?></span>   
            <?php the_content(); ?>
            <div class="results-wrapper">
                <div class="results">
                    <div class="results-header">                      
                        <span class="text">Kết quả</span>
                        <a href="<?php echo get_category_link($test_cat->term_id); ?>"><i class="fa-solid fa-xmark fa-xl symbol" title="Quay về trang đề thi"></i></a>
                    </div>
                    <div class="results-indicator">
                        <h2>Bài làm của bạn</h2>
                        <h2>Lời giải gợi ý</h2>
                    </div>
                    <div class="content">
                        <div class="answers part">
                            <h1>I. Đọc</h1>
                            <div class="reading-answers"></div>
                            <h1>II. Viết</h1>
                            <div class="writing-answers"></div>
                        </div>
                        <div class="sample part">
                            <h1>I. Đọc</h1>
                            <div class="reading-sample">
                                <?php echo get_post_meta(get_the_ID(), 'reading_sample_content', true);?>
                            </div>
                            <h1>II. Viết</h1>
                            <div class="writing-sample">
                                <?php echo get_post_meta(get_the_ID(), 'writing_sample_content', true);?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php 
        endwhile;
    endif;
    ?>
    <?php 
        get_footer();
    ?>