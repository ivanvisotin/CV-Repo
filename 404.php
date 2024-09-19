<!DOCTYPE html>

<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>\assets\css\404.css">
    <?php 
        wp_head(); 
    ?>
</head>
<body style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/main-image.jpg'); background-position: center center; background-repeat: no-repeat; background-color: rgba(0, 0, 0, 0.7); background-blend-mode: multiply;">
    <div class="wrapper">
        <div class="content">
            <h1>404</h1>
            <p>Trang bạn đang cố truy cập không tồn tại. Có thể trang đã bị xóa hoặc có một lỗi trong URL của bạn.</p>
        </div>
        <div class="actions">
            <a href="<?php echo home_url();?>">Quay về Trang chủ</a>
            <a href="facebook.com/ivan0id_07" target="_blank">Liên hệ với Admin</a>
        </div>
    </div>
    <? 
        wp_footer();
    ?>
</body>

