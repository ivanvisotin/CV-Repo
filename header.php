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
    <div style="width: 100%; height: 5rem;" id="anchor-start-page"></div>

    <header class="wrapper-nav-bar">
        <a href="<?php echo home_url()?>">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/logo.png" alt="Logo" id="logo">
        </a>
        <ul class="wrapper-nav-links">
            <li><a class="nav-link" href="<?php echo home_url()?>">Trang chủ</a></li>
            <li>
                <span class="nav-link" id="hoclieu">Học liệu <i
                        class="material-icons" style="font-size:1em">arrow_drop_down</i></span>
                <div class="hoclieu-links">
                    <a href="<?php echo home_url('/category/tests-archive')?>"class="hoclieu-link" id="submenu-deonluyen">Đề ôn
                        luyện</a>
                    <div class="hoclieu-link-submenu" id="deonluyen-links">
                        <a href="<?php echo home_url('/category/tests-archive/lop-10')?>" class="hoclieu-link-submenu-links"
                            id="deonluyen-link">Lớp 10</a>
                        <a href="<?php echo home_url('/category/tests-archive/lop-11')?>" class="hoclieu-link-submenu-links"
                            id="deonluyen-link">Lớp 11</a>
                        <a href="<?php echo home_url('/category/tests-archive/lop-12')?>" class="hoclieu-link-submenu-links"
                            id="deonluyen-link">Lớp 12</a>
                    </div>
                    <a href="<?php echo home_url('/category/content-archive/doc')?>" class="hoclieu-link" id="submenu-doc">Đọc </a>
                    <div class="hoclieu-link-submenu" id="doc-links">
                        <a href="<?php echo home_url('/category/content-archive/doc/van-ban-van-hoc')?>" class="hoclieu-link-submenu-links"
                            id="doc-link">Văn bản văn học</a>
                        <a href="<?php echo home_url('/category/content-archive/doc/van-ban-nghi-luan')?>" class="hoclieu-link-submenu-links"
                            id="doc-link">Văn bản nghị luận</a>
                        <a href="<?php echo home_url('/category/content-archive/doc/van-ban-thong-tin')?>" class="hoclieu-link-submenu-links"
                            id="doc-link">Văn bản thông tin</a>
                    </div>
                    <a href="<?php echo home_url('/category/content-archive/viet')?>" class="hoclieu-link">Viết</a>
                    <a href="<?php echo home_url('/category/content-archive/noi')?>" class="hoclieu-link">Nói</a>
                    <a href="<?php echo home_url('/category/content-archive/nghe')?>" class="hoclieu-link">Nghe</a>
                </div>
            </li>
            <li><a class="nav-link" href="<?php echo home_url('/category/podcasts-archive')?>">Podcasts</a></li>
            <li><a class="nav-link" href="<?php echo home_url('/category/tools-archive')?>">Công cụ hỗ trợ</a></li>
        </ul>
        <div class="wrapper-search-button">
            <input type="text" id="search-button-main-menu" placeholder="Tìm kiếm tài nguyên...">
            <i class="fas fa-search"></i>
        </div>
        <div class="wrapper-login-button">
            <a href="/Login/login-page.html">Đăng nhập</a>
        </div>
    </header>