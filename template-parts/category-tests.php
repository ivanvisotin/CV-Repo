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
        <div class="container-tests">
            <div class="wrapper-tests">
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
            </div>
            <div class="wrapper-tests">
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
            </div>
            <div class="wrapper-tests">
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
                <div class="card-test">
                    <a class="content" href="#!">
                        <img src="/assets/images/Main-Page/placeholder-image.jpg" alt="Image">
                        <p>Một cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dàiMột cái đề với tiêu đề rất dài</p>
                    </a>
                    <a class="grade" href="#!">Lớp 10</a>
                    <a href="#!" class="teststart-button">Làm ngay</a>
                </div>
            </div>
            <div class="pagination">
                <a href="#!"><i class="fa-solid fa-arrow-left"></i></a>
                <a href="#!">1</a>
                <a href="#!">2</a>
                <a href="#!"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>

<?php
    get_footer();
?>