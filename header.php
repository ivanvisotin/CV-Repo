<!DOCTYPE html>

<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="\images\favicon.png">
    <?php
        wp_head();
    ?>
</head>


<body>

    <header class="wrapper-nav-bar">
        <a href="/Main-Page/index.html">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/logo.png" alt="Logo" id="logo">
        </a>
        <ul class="wrapper-nav-links">
            <li><a class="nav-link" href="/Main-Page/index.html">Trang chủ</a></li>
            <li>
                <a href="/Main-Page/index.html" class="nav-link" id="hoclieu" href="#!">Học liệu <i
                        class="material-icons" style="font-size:1em">arrow_drop_down</i></a>
                <div class="hoclieu-links">
                    <a href="/HocLieu/Deonluyen/homepage.html" class="hoclieu-link" id="submenu-deonluyen">Đề ôn
                        luyện</a>
                    <div class="hoclieu-link-submenu" id="deonluyen-links">
                        <a href="/HocLieu/Deonluyen/homepage.html" class="hoclieu-link-submenu-links"
                            id="deonluyen-link">Lớp 10</a>
                        <a href="/HocLieu/Deonluyen/homepage.html" class="hoclieu-link-submenu-links"
                            id="deonluyen-link">Lớp 11</a>
                        <a href="/HocLieu/Deonluyen/homepage.html" class="hoclieu-link-submenu-links"
                            id="deonluyen-link">Lớp 12</a>
                    </div>
                    <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link" id="submenu-doc">Đọc </a>
                    <div class="hoclieu-link-submenu" id="doc-links">
                        <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link-submenu-links"
                            id="doc-link">Văn bản văn học</a>
                        <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link-submenu-links"
                            id="doc-link">Văn bản nghị luận</a>
                        <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link-submenu-links"
                            id="doc-link">Văn bản thông tin</a>
                    </div>
                    <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link">Viết</a>
                    <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link">Nói</a>
                    <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link">Nghe</a>
                </div>
            </li>
            <li><a class="nav-link" href="/Podcasts/homepage.html">Podcasts</a></li>
            <li><a class="nav-link" href="/Tools/viewpage.html">Công cụ hỗ trợ</a></li>
        </ul>
        <div class="wrapper-search-button">
            <input type="text" id="search-button-main-menu" placeholder="Tìm kiếm bài viết...">
            <i class="fas fa-search"></i>
        </div>
        <div class="wrapper-login-button">
            <a href="/Login/login-page.html">Đăng nhập</a>
        </div>
    </header>