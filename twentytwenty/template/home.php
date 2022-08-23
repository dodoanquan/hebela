<?php

/*

 Template Name: Home

 */

?>

<?php

get_header();

?>



<section class="banner">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/building-hebela.png" alt="" class="house" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">

    <div class="container">

        <div class="wellcome" data-aos="fade-right" data-aos-duration="2000">

            <h3 class="active">Wellcome to</h3>

            <h2>CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ <br> CÔNG NGHỆ HEBELA </h2>

            <a href="#" class="btn btn-1">Tìm hiểu ngay <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/arrow.png" class="arrow"></a>

        </div>

    </div>

</section>

<section class="banner-sub">

    <div class="container">

        <div class="row justify-content-between">

            <div class="col-lg-2 col-6 text-center">

                <div class="item-around">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-toc-do-tang-truong.png" alt="" class="img-item">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cricle.png" alt="" class="img-around">

                </div>

                <p class="desc color-white fw-500">15 Năm kinh nghiệm trong lĩnh vực kinh doanh</p>

            </div>

            <div class="col-lg-2 col-6 text-center">

                <div class="item-around">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-15-nam-kinh-nghiem.png" alt="" class="img-item">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cricle.png" alt="" class="img-around">

                </div>

                <p class="desc color-white fw-500">99% Nhận được phản hồi tích cực từ khách hàng</p>

            </div>

            <div class="col-lg-2 col-6 text-center mt60-mb mb60-mb">

                <div class="item-around">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-500-nguon-luc.png" alt="" class="img-item">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cricle.png" alt="" class="img-around">

                </div>

                <p class="desc color-white fw-500">Bán hàng tại hơn 10 quốc gia khác nhau</p>

            </div>

            <div class="col-lg-2 col-6 text-center mt60-mb mb60-mb">

                <div class="item-around">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-ban-hang-tai-10-quoc-gia.png" alt="" class="img-item">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cricle.png" alt="" class="img-around">

                </div>

                <p class="desc color-white fw-500">Độ tăng trưởng năm 2022 đạt 1500%</p>

            </div>

            <div class="col-lg-2 col-6 text-center">

                <div class="item-around">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-phan-hoi-tich-cuc.png" alt="" class="img-item">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cricle.png" alt="" class="img-around">

                </div>

                <p class="desc color-white fw-500">500 Nguồn lực nhân viên toàn bộ hệ thống</p>

            </div>

        </div>

    </div>

</section>



<section class="work-wrap">

    <div class="container">

        <div class="row">

            <div class="col-lg-4 d-flex flex-column">

                <div class="work">

                    <h2 class="title-h2 fw-700">Cơ hội việc làm?</h2>

                    <p class="desc color-black fw-400 desc1">Hebela mang đến mọi cơ hội việc làm tốt nhất dành cho các
                        ứng viên của mọi ngành nghề, cùng

                        nhau gia nhập Hebela để phát triển sự nghiệp.</p>

                    <p class="desc color-black fw-400 desc2">Tìm kiếm cơ hội việc làm với chúng tôi !</p>

                    <form action="<?php echo get_home_url(); ?>/" method="get" class="d-flex align-items-center">
                        <input type="text" id="s" name="s" class="form-control desc" placeholder="Tìm kiếm công việc tại Hebela?" value="" autocomplete="off">
                        <button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/search.png" alt="" class="w-100"></button>
                    </form>

                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-job.png" alt="" class="w-100 m-auto none-mb">

            </div>

            <div class="col-lg-4 mt-25-desktop">

                <?php
                $args = array(
                    'post_type' => 'tuyen-dung', //cái post type này tức là loại mà bạn muốn lấy ra, vd lấy ra bài viết là post, 
                    'posts_per_page' => 2, //post per page này là số lượng muốn lấy ra (-1 là không giới hạn, ở đây mình lấy ra 5 bài )
                    'limit' => 2,

                    'order' => 'DESC',
                    'orderby' => 'title',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <a href="<?php the_permalink(); ?>" class="col-12 pt10 pb10 d-block">
                            <div class="work-item ">

                                <img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-100">

                                <div class="overlay">

                                    <h6 class="title-h6 fw-500 color-white"><?php the_title(); ?></h6>

                                    <p class="desc color-white"><?php echo teaser(15); ?></p>

                                </div>

                            </div>
                        </a>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>

            <div class="col-lg-4 mt-25-desktop">

                <?php
                $args = array(
                    'post_type' => 'tuyen-dung', //cái post type này tức là loại mà bạn muốn lấy ra, vd lấy ra bài viết là post, 
                    'posts_per_page' => 2, //post per page này là số lượng muốn lấy ra (-1 là không giới hạn, ở đây mình lấy ra 5 bài )
                    'limit' => 2,
                    'order' => 'ASC',
                    'orderby' => 'title',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <a href="<?php the_permalink(); ?>" class="col-12 mt25 pt10 pb10 d-block">
                            <div class="work-item ">

                                <img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-100">

                                <div class="overlay">

                                    <h6 class="title-h6 fw-500 color-white"><?php the_title(); ?></h6>

                                    <p class="desc color-white"><?php echo teaser(15); ?></p>

                                </div>

                            </div>
                        </a>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </div>

        </div>

    </div>

</section>

<section class="what-hebela">

    <div class="container">

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/background-lam-viec-hebela-co-gi-hap-dan.png" alt="" class="what-img-mb none-des">

        <div class="row">

            <div class="col-lg-4 what-left">

                <h2 class="title-h2 fw-700">Hebela có gì hấp dẫn ?</h2>

                <p class="desc fw-400 color-black">Hebela mang đến không gian làm việc hiện đại, rộng rãi và tiện nghi
                    để Starter thỏa sức sáng tạo

                    và nâng cao hiệu suất làm việc.</p>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/background-lam-viec-hebela-co-gi-hap-dan.png" alt="" class="what-img1  none-mb">

            </div>

            <div class="col-lg-8">



                <div class="d-flex flex-wrap what-item-wrap">

                    <div class="what-item d-flex align-items-start pr15">

                        <img class="img-align-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/game.png" alt="" class="what-item-img">

                        <div>

                            <h3 class="fw-700">Làm Hết Sức - Vui Hết Mình</h3>

                            <p class="desc fw-400 color-black">Làm việc tập trung, hết mình cùng tham gia các hoạt động
                                tập thể, vui hết mình

                                cùngHebela !

                            </p>

                        </div>

                    </div>

                    <div class="what-item d-flex align-items-start pl15">

                        <img class="img-align-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-hoat-dong-tap-the-05.png" alt="" class="what-item-img">

                        <div>

                            <h3 class="fw-700">Hoạt động tập thể</h3>

                            <p class="desc fw-400 color-black">Tham Gia Các Hoạt Động, gắn kết thành viên, Cùng nhau
                                giải trí sau giờ làm việc

                            </p>

                        </div>

                    </div>

                    <div class="what-item d-flex align-items-start pr15 mt60">

                        <img class="img-align-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-job-01.png" alt="" class="what-item-img">

                        <div>

                            <h3 class="fw-700">Không gian làm việc sáng tạo</h3>

                            <p class="img-align-center" class="desc fw-400 color-black">Hebela mang đến không gian làm
                                việc hiện đại, rộng rãi và tiện nghi để Starter

                                thỏa sức

                                sáng tạo và nâng cao hiệu suất làm việc.</p>

                        </div>

                    </div>

                    <div class="what-item d-flex align-items-start pl15 mt60">

                        <img class="img-align-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/icon-cham-soc-suc-khoe-02.png" alt="" class="what-item-img">

                        <div>

                            <h3 class="fw-700">Chăm sóc sức khỏe - Bảo hiểm</h3>

                            <p class="desc fw-400 color-black">Hebela hỗ trợ nhân viên các gói bảo hiểm công tác, bảo
                                hiểm tai nạn và khám sức

                                khỏe định

                                kỳ.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<section class="moment">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <h2>Khoảnh Khắc Tại Hebela</h2>

                <p>Ghi lại những khoảnh khắc tại Hebela . Mọi hình ảnh đều cần truyền được cảm hứng, tạo động lực,

                    kích thích sáng tạo trong công việc

                </p>

                <button class="btn-see-all none-mb">Xem tất cả</button>

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rectangle-1468.png" alt="" class="w-100 img0 none-mb">

            </div>

            <div class="col-lg-7 d-flex">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/group-3690.png" alt="" class="w-100 none-mb">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mobile-group-3788.png" class="block-mb w-100 none-des">

            </div>

        </div>

    </div>

</section>



<section class="brands">

    <div class="container-fluid">

        <div class="row justify-content-between">

            <div class="col-lg-2 col-3">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rectangle-37.png" alt="" class="brand-img">

            </div>

            <div class="col-lg-2 col-3">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rectangle-33.png" alt="" class="brand-img">

            </div>

            <div class="col-lg-2 col-3">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rectangle-34.png" alt="" class="brand-img">

            </div>

            <div class="col-lg-2 col-3">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rectangle-35.png" alt="" class="brand-img">

            </div>

            <div class="col-lg-2 none-mb">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rectangle-37.png" alt="" class="brand-img">

            </div>

            <div class="col-lg-2 none-mb">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rectangle-32.png" alt="" class="brand-img">

            </div>

        </div>

    </div>

</section>



<section class="news-event">

    <div class="container">

        <div class="row">

            <div class="col-12 none-mb">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/group-3705.png" alt="" class="w-100">

            </div>

            <div class="col-lg-5 none-mb">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rectangle-39.png" alt="" class="w-100">

            </div>

            <div class="col-lg-7 none-mb">

                <div class="owl-carousel owl-home owl-theme">
                    <?php
                    $args = array(
                        'category_name' => 'Tin tức sự kiện',
                        'post_type' => 'post', //cái post type này tức là loại mà bạn muốn lấy ra, vd lấy ra bài viết là post, 
                        'posts_per_page' => 5, //post per page này là số lượng muốn lấy ra (-1 là không giới hạn, ở đây mình lấy ra 5 bài )
                        'limit' => 5,
                        'order' => 'DESC',
                        'orderby' => 'title',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <div class="item" data-merge="2">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-100">
                                    <!-- cái hình này là thumbnail lấy cái link ra -->
                                    <p>

                                        <!-- Hebela đồng hành cùng sự kiện hoa khôi tài năng - Beauty & Charm 2022 -->
                                        <!-- cái này là tiêu đề bài viết -->
                                        <?php the_title(); ?>

                                    </p>
                                </a>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>

                </div>

                <div class="slider_nav">

                    <div class="am-prev-home"><img class="w-75" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/prev.png" alt="prev">
                    </div>

                    <div class="am-next-home"><img class="w-75" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/next.png" alt="next">
                    </div>

                </div>

                <script>
                    jQuery(document).ready(function($) {

                        $('.owl-carousel').owlCarousel({

                            items: 5,

                            loop: true,

                            margin: 20,

                            merge: true,

                            dots: false,

                            autoplay: true,

                            autoplayTimeout: 5000,

                            nav: true,

                            navText: [$('.am-next-home'), $('.am-prev-home')],

                            responsive: {

                                678: {

                                    mergeFit: true

                                },

                                1000: {

                                    mergeFit: false

                                }

                            }

                        });

                    })
                </script>



            </div>

            <div class="col-12 none-des">

                <h2 class="title-h2">Tin tức và sự kiện</h2>
                <?php
                $args = array(
                    'category_name' => 'Tin tức sự kiện',
                    'post_type' => 'post', //cái post type này tức là loại mà bạn muốn lấy ra, vd lấy ra bài viết là post, 
                    'posts_per_page' => 5, //post per page này là số lượng muốn lấy ra (-1 là không giới hạn, ở đây mình lấy ra 5 bài )
                    'limit' => 5,
                    'order' => 'DESC',
                    'orderby' => 'title',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="news1" data-merge="2">
                            <a href="<?php the_permalink(); ?>" class="desc color-black fw-400">
                                <img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-100">
                                <p class="desc color-black fw-400">
                                    <?php the_title(); ?>

                                </p>
                            </a>
                        </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </div>

        </div>

    </div>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    AOS.init();
</script>

<?php

get_footer();

?>