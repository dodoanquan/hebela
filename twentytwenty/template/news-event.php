<?php

/*

 Template Name: News

 */

?>

<?php

get_header();

?>

<section id="news-event">

    <div class="container">

        <div class="row">

            <div class="col-12 none-mb">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-event/banner-event1.png" alt="" class="w-100">

            </div>

            <div class="col-lg-5 none-mb">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-event/banner-event2.png" alt="" class="w-100">

            </div>

            <div class="col-12 none-des">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-event/banner-event-mb.png" alt="" class="w-100">

            </div>

            <div class="col-lg-7">

                <p class="text-news">Sự kiện thường niên tổ chức bởi đội ngũ Hebela nhằm đào tạo đội ngũ nhân viên phát

                    triển bản thân và cả năng lực làm tăng doanh thu bán hàng cũng như tạo nên môi trường đào tạo chuyên

                    nghiệp. Con người và công nghệ là hai yếu tố cốt lõi của Hebela. Chúng tôi cam kết vì sự phát triển

                    và hạnh phúc của nhân viên, tập trung xây dựng môi trường sáng tạo giúp nhân viên được truyền cảm

                    hứng để làm việc tốt và phát huy hết tiềm năng.</p>

            </div>

        </div>

    </div>

</section>



<section class="activities">

    <div class="container">

        <h2 class="title-h2 fw-700">Niềm tự hào Hebela</h2>

        <div class="row">
            <?php
            $args = array(
                'category_name' => 'Tin tức sự kiện',
                'post_type' => 'post', //cái post type này tức là loại mà bạn muốn lấy ra, vd lấy ra bài viết là post, 
                'posts_per_page' => 5, //post per page này là số lượng muốn lấy ra (-1 là không giới hạn, ở đây  lấy ra 5 bài )
                'limit' => 5,
                'order' => 'DESC',
                'orderby' => 'title',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <div class="col-lg-3">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-100">
                        <!-- cái hình này là thumbnail lấy cái link ra -->
                        <p class="desc color-black fw-400">

                            <!-- Hebela đồng hành cùng sự kiện hoa khôi tài năng - Beauty & Charm 2022 -->
                            <!-- cái này là tiêu đề bài viết -->
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                    </div>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>




        </div>

    </div>

</section>





<section class="list-img">

    <div class="d-flex overflow-hidden flex-wrap">

        <img class="d-block" src="<?php echo get_template_directory_uri(); ?>/assets/images/news-event/event5.png" alt="">

        <img class="d-block mt10-mb" src="<?php echo get_template_directory_uri(); ?>/assets/images/news-event/event6.png" alt="">

        <img class="d-block mt10-mb" src="<?php echo get_template_directory_uri(); ?>/assets/images/news-event/event7.png" alt="">

    </div>



</section>








<?php

get_footer()

?>