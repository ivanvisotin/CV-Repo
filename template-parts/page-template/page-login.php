<div class="main-wrapper">
    <div class="image-wrapper">
        <img src="<?php echo get_template_directory_uri().'/assets/images/Login/login-2.png'?>" alt="Login Image">
    </div>
    <div class="login-wrapper">
        <div class="register-action">
            <a class="logo" href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri().'/assets/images/Main-Page/favicon.png'?>" alt="Logo"></a>
            <span>Chưa có tài khoản?</span>
            <a class="register-link" href="<?php echo get_permalink(get_page_by_path('register'));?>">Đăng ký ngay</a>
        </div>
        <h1>Chào mừng bạn quay trở lại!</h1>
        <h3>Đăng nhập vào tài khoản của bạn trên Chạm Văn.</h3>
        <form method="POST" class="login-form">
            <label for="login_input">Tên tài khoản hoặc Email <i style="color: red; font-size: 1rem;">*</i></label>
            <input type="text" name="login_input" placeholder="Nhập tên tài khoản hoặc địa chỉ Email" id="login_input">
    
            <label for="password">Mật khẩu <i style="color: red; font-size: 1rem;">*</i></label>
            <input type="password" name="password" placeholder="Nhập mật khẩu" id="password">

            <div class="actions">
                <div class="checkbox-wrapper">
                    <input type="checkbox" checked name="remember" id="remember">
                    <label for="remember">Ghi nhớ thông tin</label>
                </div>
                <button type="submit" name="submit-btn" id="submit">Đăng nhập</button>
            </div>
        </form>
    </div>
</div>