    <?php 
        $queried_object = get_queried_object();
    ?>
        
        <div class="welcome-section" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/main-image.jpg');">
            <h1><?php echo $queried_object->name ?></h1>
            <h3><?php echo $queried_object->description ?></h3>
        </div>
        <div class="main-wrapper">
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
            <h1>Các tài liệu <?php echo $queried_object->name ?> mới nhất</h1>
            <div class="posts-container">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/placeholder-image.jpg" alt="Posts Image" class="posts-image">
                <div class="posts-content">
                    <a href="" class="title">Đây là một cái title rất là dài luôn ạ mọi người Đây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi ngườiĐây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi người</a>
                    <p class="excerpt">Đây là một cái paragraph mô tả mọi người ạ. Đây là một cái paragraph mô tả mọi
                        người ạ.Đây là một cái paragraph mô tả mọi người ạ.Đây là một cái paragraph mô tả mọi người
                        ạ.Đây là một cái paragraph mô tả mọi người ạ.</p>
                    <div class="info">
                        <div class="tags">
                            <a href="#!" class="tag">Tag1</a>
                            <a href="#!" class="tag">Tag2</a>
                            <a href="#!" class="tag">Tag3</a>
                        </div>
                        <div class="date">
                            <i class="fa-solid fa-calendar-days"></i>&nbsp; 24/12/2007
                        </div>
                    </div>

                </div>
            </div>
            <div class="posts-container">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/placeholder-image.jpg" alt="Posts Image" class="posts-image">
                <div class="posts-content">
                    <a href="" class="title">Đây là một cái title rất là dài luôn ạ mọi người Đây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi ngườiĐây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi người</a>
                    <p class="excerpt">Đây là một cái paragraph mô tả mọi người ạ. Đây là một cái paragraph mô tả mọi
                        người ạ.Đây là một cái paragraph mô tả mọi người ạ.Đây là một cái paragraph mô tả mọi người
                        ạ.Đây là một cái paragraph mô tả mọi người ạ.</p>
                    <div class="info">
                        <div class="tags">
                            <a href="#!" class="tag">Tag1</a>
                            <a href="#!" class="tag">Tag2</a>
                            <a href="#!" class="tag">Tag3</a>
                        </div>
                        <div class="date">
                            <i class="fa-solid fa-calendar-days"></i>&nbsp; 24/12/2007
                        </div>
                    </div>

                </div>
            </div>
            <div class="posts-container">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/placeholder-image.jpg" alt="Posts Image" class="posts-image">
                <div class="posts-content">
                    <a href="" class="title">Đây là một cái title rất là dài luôn ạ mọi người Đây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi ngườiĐây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi người</a>
                    <p class="excerpt">Đây là một cái paragraph mô tả mọi người ạ. Đây là một cái paragraph mô tả mọi
                        người ạ.Đây là một cái paragraph mô tả mọi người ạ.Đây là một cái paragraph mô tả mọi người
                        ạ.Đây là một cái paragraph mô tả mọi người ạ.</p>
                    <div class="info">
                        <div class="tags">
                            <a href="#!" class="tag">Tag1</a>
                            <a href="#!" class="tag">Tag2</a>
                            <a href="#!" class="tag">Tag3</a>
                        </div>
                        <div class="date">
                            <i class="fa-solid fa-calendar-days"></i>&nbsp; 24/12/2007
                        </div>
                    </div>

                </div>
            </div>
            <div class="posts-container">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/placeholder-image.jpg" alt="Posts Image" class="posts-image">
                <div class="posts-content">
                    <a href="" class="title">Đây là một cái title rất là dài luôn ạ mọi người Đây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi ngườiĐây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi người</a>
                    <p class="excerpt">Đây là một cái paragraph mô tả mọi người ạ. Đây là một cái paragraph mô tả mọi
                        người ạ.Đây là một cái paragraph mô tả mọi người ạ.Đây là một cái paragraph mô tả mọi người
                        ạ.Đây là một cái paragraph mô tả mọi người ạ.</p>
                    <div class="info">
                        <div class="tags">
                            <a href="#!" class="tag">Tag1</a>
                            <a href="#!" class="tag">Tag2</a>
                            <a href="#!" class="tag">Tag3</a>
                        </div>
                        <div class="date">
                            <i class="fa-solid fa-calendar-days"></i>&nbsp; 24/12/2007
                        </div>
                    </div>

                </div>
            </div>
            <div class="posts-container">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Main-Page/placeholder-image.jpg" alt="Posts Image" class="posts-image">
                <div class="posts-content">
                    <a href="" class="title">Đây là một cái title rất là dài luôn ạ mọi người Đây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi ngườiĐây là một cái title rất
                        là dài luôn ạ mọi ngườiĐây là một cái title rất là dài luôn ạ mọi người</a>
                    <p class="excerpt">Đây là một cái paragraph mô tả mọi người ạ. Đây là một cái paragraph mô tả mọi
                        người ạ.Đây là một cái paragraph mô tả mọi người ạ.Đây là một cái paragraph mô tả mọi người
                        ạ.Đây là một cái paragraph mô tả mọi người ạ.</p>
                    <div class="info">
                        <div class="tags">
                            <a href="#!" class="tag">Tag1</a>
                            <a href="#!" class="tag">Tag2</a>
                            <a href="#!" class="tag">Tag3</a>
                        </div>
                        <div class="date">
                            <i class="fa-solid fa-calendar-days"></i>&nbsp; 24/12/2007
                        </div>
                    </div>

                </div>
            </div>
            <div class="pagination">
                <a href="#!"><i class="fa-solid fa-arrow-left"></i></a>
                <span>1</span>
                <a href="#!"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
