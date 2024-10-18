<div class="main-wrapper">
    <div class="introduction-wrapper">
        <h1>Tài khoản Chạm Văn</h1>
    </div>
    <div class="login-wrapper">
        <a href="<?php echo home_url();?>" class="logo-container">
            <img class="login-logo" src="<?php echo get_template_directory_uri().'/assets/images/Login/logo.png'?>" alt="Logo">
        </a>
        <form method="post" class="login-form">
            <label for="username">Tên đăng nhập / Email</label>
            <input type="text" name="username" placeholder="Nhập tên đăng nhập hoặc địa chỉ email" id="username">
    
            <label for="password">Mật khẩu</label>
            <input type="text" name="password" placeholder="Nhập mật khẩu" id="password">
            
            <button type="submit" name="submit" id="submit">Đăng nhập</button>
        </form>
    </div>
</div>