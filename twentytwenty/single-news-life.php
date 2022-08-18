<?php get_header(); ?>
<div class="container">
    <div class="row post-wrap">
        <div class="col-lg-8">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
        </div>
        <div class="col-lg-4 d-flex flex-column justify-content-start flex-wrap">

            <div class="article-right">

                <h5 class="article-right-title">Bài viết liên quan</h5>

                <div class="list-article">


                    <?php
                    $args = array(
                        'category_name' => 'Tin Tức sự kiện',
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'limit' => 2,
                        'order' => 'DESC',
                        'orderby' => 'menu_order',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>      <a href="<?php the_permalink(); ?>">
                                <div class="article-item position-relative">

                                    <img class="w-100" src="<?php the_post_thumbnail_url() ?>" alt="">

                                    <div class="article-btn">

                                        <img class="d-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/article-detail/icon-gioi-thieu.png" alt="">

                                        <span style="padding-left: 10px">Sự kiện</span>

                                    </div>

                                </div>

                                <p class="article-description"><?php the_title(); ?></p>
                            </a>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>


                    <?php
                    $args = array(
                        'category_name' => 'Đào tạo',
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'limit' => 2,
                        'order' => 'DESC',
                        'orderby' => 'menu_order',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>  <a href="<?php the_permalink(); ?>">
                            <div class="article-item position-relative">

                                <img class="w-100" src="<?php the_post_thumbnail_url() ?>" alt="">

                                <div class="article-btn">

                                    <img class="d-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/article-detail/icon-gioi-thieu.png" alt="">

                                    <span style="padding-left: 10px">Life In Hebela</span>

                                </div>

                            </div>

                            <p class="article-description"><?php the_title(); ?></p>
                        </a>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>

            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>