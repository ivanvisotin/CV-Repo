<footer class="wrapper-footer">
    <div class="container-footer">
        <div class="external-links">
            <a href="<?php echo home_url()?>" class="image"><img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/favicon.png" alt="Logo CV"></a>
            <a href="<?php echo get_page_link(get_page_by_path('gioi-thieu')->ID);?>">Giới thiệu</a>
            <a href="<?php echo get_page_link(get_page_by_path('ghi-cong-giay-phep-su-dung')->ID);?>">Ghi công & Giấy phép sử dụng</a>
            <a href="#anchor-start-page">LÊN ĐẦU TRANG &nbsp;<i class="material-icons" style="font-size:1em">arrow_upward</i></a>
        </div>
        <div class="contact">
            <p>Mọi thắc mắc xin <a href="https://www.facebook.com/ivan0id" target="_blank">liên hệ qua Facebook Admin</a> hoặc Email <span>chamvanwebsite@gmail.com</span>.<br>© Cham Van 2024. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php
    wp_footer();
?>

</body>

</html>