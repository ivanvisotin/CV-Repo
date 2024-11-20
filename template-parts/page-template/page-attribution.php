<div class="main-wrapper">
    <a href="<?php echo admin_url();?>">Hello would you mind haha</a>
    <form>

        <label for="haha">Hello bro</label>
        <input type="radio" name="haha">

        <button type="submit" name="submit">Click me!</button>

    </form>
    <?php
        $user_id = wp_get_current_user()->ID;
        if ($_POST('haha') && is_super_admin($user_id)) {
            wp_redirect(admin_url());
            exit;
        }
        if ($_POST('haha')) {
            wp_redirect(home_url());
            exit;
        }
        
    ?>
</div>