<!DOCTYPE html>

<html lang="vi">

<head>
    <title>Trang chủ</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c67934e8d7.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="\images\favicon.png">
    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <!-- CUSTOM CSS -->
    <?php
    wp_head();
    ?>
</head>

<body>

    <header class="wrapper-nav-bar">
        <a href="/Main-Page/index.html">
            <img src="\assets\images\Main-Page\logo.png" alt="Logo" id="logo">
        </a>
        <ul class="wrapper-nav-links">
            <li><a class="nav-link" href="/Main-Page/index.html">Trang chủ</a></li>
            <li>
                <a href="/Main-Page/index.html" class="nav-link" id="hoclieu" onclick="return false;">Học liệu <i class="material-icons"
                        style="font-size:1em">arrow_drop_down</i></a>
                <div class="hoclieu-links">
                    <a href="/HocLieu/Deonluyen/homepage.html" class="hoclieu-link" id="submenu-deonluyen">Đề ôn luyện</a>
                    <div class="hoclieu-link-submenu" id="deonluyen-links">
                        <a href="/HocLieu/Deonluyen/homepage.html" class="hoclieu-link-submenu-links" id="deonluyen-link">Lớp 10</a>
                        <a href="/HocLieu/Deonluyen/homepage.html" class="hoclieu-link-submenu-links" id="deonluyen-link">Lớp 11</a>
                        <a href="/HocLieu/Deonluyen/homepage.html" class="hoclieu-link-submenu-links" id="deonluyen-link">Lớp 12</a>
                    </div>
                    <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link" id="submenu-doc">Đọc </a>
                    <div class="hoclieu-link-submenu" id="doc-links">
                        <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link-submenu-links" id="doc-link">Văn bản văn học</a>
                        <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link-submenu-links" id="doc-link">Văn bản nghị luận</a>
                        <a href="/HocLieu/Tailieuthamkhao/homepage.html" class="hoclieu-link-submenu-links" id="doc-link">Văn bản thông tin</a>
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
    <script>
        let lastScrollTop = 0;
        const navbar = document.querySelector('.wrapper-nav-bar');

        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {
                navbar.classList.add('hidden');
            } else {
                navbar.classList.remove('hidden');
            }

            lastScrollTop = scrollTop;
        });
    </script>
    <div style="width: 100%; height: 3rem;" id="anchor-start-page"></div>

    <div class="wrapper-main-image">
        <img class="main-image" src="images/main-image.jpg" alt="Main-Image">
        <div class="main-text">
            <h1 style="font-size: 5vw">Chạm Văn</h1>
            <h2 style="font-size: 1.54vw; font-weight: 150">Khơi nguồn cảm hứng văn chương</h2>
        </div>
    </div>

    <div class="wrapper-tailieu">
        <div class="tailieu-introduction">
            <h1>Tài liệu tham khảo</h1>
            <h2 style="font-size: 2.5vw; font-weight: 100; color: #17252A">Các tài liệu hữu ích cho bạn phát triển mọi
                kĩ năng</h2>
        </div>
        <img class="tailieu-icon" src="animated-icons/open-book.gif" alt="Icon Đọc">
        <div class="wrapper-tailieu-section">
            <div class="section-heading">
                <h1 class="name-heading">Đọc</h1>
                <button class="btn-view-all"> <a href="/HocLieu/Tailieuthamkhao/homepage.html" onclick="return false;">Xem thêm</a> </button>
            </div>
            <div class="wrapper-main-card">
                <div class="main-card">
                    <img class="image-main-card" src="images/placeholder-image.jpg" alt="Main Card">
                    <h2 class="heading-main-card">Tiêu đề card chính</h2>
                    <h4 class="description-main-card">Description card chính</h4>
                    <div class="hashtag-main-card">#Hashtag</div>
                </div>
            </div>
            <div class="wrapper-smaller-cards">
                <div class="smaller-card">
                    <img class="image-smaller-card" src="images/placeholder-image.jpg" alt="Smaller Card">
                    <div class="content-smaller-card">
                        <h3 class="heading-smaller-card">Tiêu đề card phụ</h3>
                        <div class="hashtag-smaller-card">#Hashtag</div>
                    </div>
                </div>
                <div class="smaller-card">
                    <img class="image-smaller-card" src="images/placeholder-image.jpg" alt="Smaller Card">
                    <div class="content-smaller-card">
                        <h3 class="heading-smaller-card">Tiêu đề card phụ</h3>
                        <div class="hashtag-smaller-card">#Hashtag</div>
                    </div>
                </div>
            </div>
        </div>
        <img class="tailieu-icon" src="animated-icons/writing.gif" alt="Icon Đọc">
        <div class="wrapper-tailieu-section">
            <div class="section-heading">
                <h1 class="name-heading">Viết</h1>
                <button class="btn-view-all"> <a href="/HocLieu/Tailieuthamkhao/homepage.html" onclick="return false;">Xem thêm</a> </button>
            </div>
            <div class="wrapper-main-card">
                <div class="main-card">
                    <img class="image-main-card" src="images/placeholder-image.jpg" alt="Main Card">
                    <h2 class="heading-main-card">Tiêu đề card chính</h2>
                    <h4 class="description-main-card">Description card chính</h4>
                    <div class="hashtag-main-card">#Hashtag</div>
                </div>
            </div>
            <div class="wrapper-smaller-cards">
                <div class="smaller-card">
                    <img class="image-smaller-card" src="images/placeholder-image.jpg" alt="Smaller Card">
                    <div class="content-smaller-card">
                        <h3 class="heading-smaller-card">Tiêu đề card phụ</h3>
                        <div class="hashtag-smaller-card">#Hashtag</div>
                    </div>
                </div>
                <div class="smaller-card">
                    <img class="image-smaller-card" src="images/placeholder-image.jpg" alt="Smaller Card">
                    <div class="content-smaller-card">
                        <h3 class="heading-smaller-card">Tiêu đề card phụ</h3>
                        <div class="hashtag-smaller-card">#Hashtag</div>
                    </div>
                </div>
            </div>
        </div>
        <img class="tailieu-icon" src="animated-icons/speak.gif" alt="Icon Đọc">
        <div class="wrapper-tailieu-section">
            <div class="section-heading">
                <h1 class="name-heading">Nói</h1>
                <button class="btn-view-all"> <a href="/HocLieu/Tailieuthamkhao/homepage.html" onclick="return false;">Xem thêm</a> </button>
            </div>
            <div class="wrapper-main-card">
                <div class="main-card">
                    <img class="image-main-card" src="images/placeholder-image.jpg" alt="Main Card">
                    <h2 class="heading-main-card">Tiêu đề card chính</h2>
                    <h4 class="description-main-card">Description card chính</h4>
                    <div class="hashtag-main-card">#Hashtag</div>
                </div>
            </div>
            <div class="wrapper-smaller-cards">
                <div class="smaller-card">
                    <img class="image-smaller-card" src="images/placeholder-image.jpg" alt="Smaller Card">
                    <div class="content-smaller-card">
                        <h3 class="heading-smaller-card">Tiêu đề card phụ</h3>
                        <div class="hashtag-smaller-card">#Hashtag</div>
                    </div>
                </div>
                <div class="smaller-card">
                    <img class="image-smaller-card" src="images/placeholder-image.jpg" alt="Smaller Card">
                    <div class="content-smaller-card">
                        <h3 class="heading-smaller-card">Tiêu đề card phụ</h3>
                        <div class="hashtag-smaller-card">#Hashtag</div>
                    </div>
                </div>
            </div>
        </div>
        <img class="tailieu-icon" src="animated-icons/listening.gif" alt="Icon Đọc">
        <div class="wrapper-tailieu-section">
            <div class="section-heading">
                <h1 class="name-heading">Nghe</h1>
                <button class="btn-view-all"> <a href="/HocLieu/Tailieuthamkhao/homepage.html" onclick="return false;">Xem thêm</a> </button>
            </div>
            <div class="wrapper-main-card" style="margin-bottom: 0;">
                <div class="main-card">
                    <img class="image-main-card" src="images/placeholder-image.jpg" alt="Main Card">
                    <h2 class="heading-main-card">Tiêu đề card chính</h2>
                    <h4 class="description-main-card">Description card chính</h4>
                    <div class="hashtag-main-card">#Hashtag</div>
                </div>
            </div>
            <div class="wrapper-smaller-cards" style="margin-bottom: 0;">
                <div class="smaller-card">
                    <img class="image-smaller-card" src="images/placeholder-image.jpg" alt="Smaller Card">
                    <div class="content-smaller-card">
                        <h3 class="heading-smaller-card">Tiêu đề card phụ</h3>
                        <div class="hashtag-smaller-card">#Hashtag</div>
                    </div>
                </div>
                <div class="smaller-card">
                    <img class="image-smaller-card" src="images/placeholder-image.jpg" alt="Smaller Card">
                    <div class="content-smaller-card">
                        <h3 class="heading-smaller-card">Tiêu đề card phụ</h3>
                        <div class="hashtag-smaller-card">#Hashtag</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper-deonluyen">
        <div class="container-deonluyen">
            <div class="deonluyen-introduction">
                <h1>Đề ôn luyện</h1>
                <h2>Những mẫu đề đa dạng cho từng khối học, kèm theo lời giải chi tiết</h2>
            </div>
            <div class="deonluyen-container-content">
                <div class="deonluyen-content-introduction">
                    <h2>Lớp 10</h2>
                    <h3>khởi đầu</h3>
                    <button class="btn-view-all" id="deonluyen"><a onclick="return false;">Xem thêm</a></button>
                </div>
                <div class="swiper-parent">
                    <div class="deonluyen-container-cards swiper swiper1">
                        <div class="deonluyen-wrapper-cards swiper-wrapper">
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
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
                    <button class="btn-view-all" id="deonluyen"><a onclick="return false;">Xem thêm</a></button>
                </div>
                <div class="swiper-parent">
                    <div class="deonluyen-container-cards swiper swiper2">
                        <div class="deonluyen-wrapper-cards swiper-wrapper">
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
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
                    <button class="btn-view-all" id="deonluyen"><a onclick="return false;">Xem thêm</a></button>
                </div>
                <div class="swiper-parent">
                    <div class="deonluyen-container-cards swiper swiper3">
                        <div class="deonluyen-wrapper-cards swiper-wrapper">
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                            <div class="deonluyen-card swiper-slide">
                                <img src="images/placeholder-image.jpg" alt="Deonluyen-Image"
                                    class="deonluyen-card-image">
                                <div class="deonluyen-card-content">
                                    <h3>Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái tiêu đề rất dài Một cái
                                        tiêu đề rất dài </h3>
                                    <button>Làm ngay</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-pagination3"></div>
                    <div class="swiper-button-prev swiper-button-prev3"></div>
                    <div class="swiper-button-next swiper-button-next3"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper-podcasts">
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
                <div class="podcasts-introduction-2" data-aos="fade-down" data-aos-delay="600"
                    data-aos-anchor=".podcasts-introduction-1">
                    <h3>một sản phẩm của</h3>
                    <a href="https://www.facebook.com/clb.vanhoc.ct/" target="_blank"><img src="images/gocnho-logo.png"
                            alt="Góc nhỏ Văn Học - THPT Châu Thành"></a>
                </div>
            </div>
            <div class="podcasts-content" id="first" data-aos="fade-right"">
                <img src=" images/placeholder-image.jpg" alt="Image" style="margin-right: 5%;">
                <div>
                    <h1 style="font-size: 3vw;">Về Góc Nhỏ Văn Học</h1>
                    <h3 style="font-size: 1.6vw; font-weight: 400;">Lorem ipsum odor amet, consectetuer adipiscing elit.
                        Vivamus non porttitor augue vehicula eros nascetur magnis. Nam porttitor blandit iaculis
                        sagittis finibus enim. Cras purus vivamus elementum class purus odio mauris. Class platea nam
                        odio luctus montes laoreet.</h3>
                    <a href="https://www.facebook.com/clb.vanhoc.ct/" target="_blank" style="font-size: 1.2vw;">Ghé thăm
                        Góc Nhỏ &nbsp;<i class="fa-solid fa-external-link-alt"></i></a>
                </div>
            </div>
            <div class="podcasts-content" id="second" data-aos="fade-left">
                <div>
                    <h1 style="font-size: 3vw;">Podcasts của Góc Nhỏ có gì?</h1>
                    <h3 style="font-size: 1.6vw; font-weight: 400;">Lorem ipsum odor amet, consectetuer adipiscing elit.
                        Vivamus non porttitor augue vehicula eros nascetur magnis. Nam porttitor blandit iaculis
                        sagittis finibus enim. Cras purus vivamus elementum class purus odio mauris. Class platea nam
                        odio luctus montes laoreet.</h3>
                </div>
                <img src="images/placeholder-image.jpg" alt="Image" style="margin-left: 5%;">
            </div>
            <div class="podcasts-conclusion">
                <div class="podcasts-conclusion-introduction">
                    <div class="podcasts-conclusion-heading">Lắng nghe văn chương</div>
                    <div class="text-change-list">
                        <div class="text-change" id="first">để học những điều mới</div>
                        <div class="text-change" id="second">và hoàn thiện bản thân</div>
                        <div class="text-change" id="third">qua lăng kính cuộc sống</div>
                        <div class="text-change" id="fourth">ở mọi nơi, vào mọi lúc</div>    
                    </div>
                </div>
                <div class="podcasts-conclusion-content">
                    <div class="podcasts-conclusion-center">Bạn có thể</div>
                    <div class="podcasts-conclusion-half" id="left">
                        <div class="content">
                            <h1>Xem Podcasts trên Chạm Văn</h1>
                            <p>Sử dụng giao diện podcasts được thiết kế riêng biệt của Chạm Văn với trải nghiệm nghe nhìn tốt nhất.</p>
                            <a href="/Podcasts/homepage.html">Tới trang Podcasts &nbsp;<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="podcasts-conclusion-half" id="right"> 
                        <div class="content">
                            <h1>Xem Podcasts trên nền tảng khác</h1>  
                            <p>Truy cập vào nguồn podcasts của Góc Nhỏ Văn Học qua mạng xã hội tiện lợi nhất dành cho bạn.</p>
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
                <a href="/Tools/viewpage.html">Bắt đầu ngay</a>
            </div>
        </div>
        <div class="image-tools">
            <img src="images/tools-image.jpg" alt="Tools">
        </div>
    </div>
    <footer class="wrapper-footer">
        <div class="container-footer">
            <div class="external-links">
                <a href="/Main-Page/index.html" class="image"><img src="images/favicon.png" alt="Logo CV"></a>
                <a href="/Contribution/credit.html">Về chúng tôi</a>
                <a href="/Contribution/attribution.html">Ghi công & Giấy phép sử dụng</a>
                <a href="#anchor-start-page">LÊN ĐẦU TRANG &nbsp;<i class="material-icons" style="font-size:1em">arrow_upward</i></a>
            </div>
            <div class="contact">
                <p>Mọi thắc mắc xin <a href="https://www.facebook.com/ivan0id" target="_blank">liên hệ qua Facebook Admin</a> hoặc Email <span>chamvanwebsite@gmail.com</span>.<br>© Cham Van 2024. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- SCRIPT SWIPER-DEONLUYEN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="scripts/swiper-script.js"></script>

    <!-- SCRIPT AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
</body>

</html>