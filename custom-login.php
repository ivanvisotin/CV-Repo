<div class="custom-login-form">
    <h2>Login</h2>
    <?php
    $args = array(
        'redirect' => home_url(), // Redirect to the homepage after login
        'label_username' => __( 'Username' ),
        'label_password' => __( 'Password' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in' => __( 'Log In' ),
        'remember' => true,
    );
    wp_login_form( $args );
    ?>
    <p><a href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a></p>
</div>