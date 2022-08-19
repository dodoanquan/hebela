<?php

/*

 Template Name: Recruit

 */

?>

<?php

get_header()

?>
<section class="banner-mobile none-des">
    <div class="d-flex justify-content-around aligns-items-center">
        <div class="w-75 d-flex align-items-center position-relative">
            <input type="text" placeholder="Tìm kiếm công việc tại Hebela?" class="search-job w-100">
            <button class="search-job-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/search.png" alt="search"></button>
        </div>
        <div class="job-filter">
            <button>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/job-filter-mb.png" alt="filter">
            </button>
            <span>Bộ lọc </span>
        </div>
    </div>
</section>

<section class="banner none-mb">

    <div class="container">

        <div class="wellcome">

            <h2 class="title-h2 fw-700">Cơ hội việc làm</h2>

            <p class="desc color-black">Hebela mang đến mọi cơ hội việc làm tốt nhất dành cho các ứng viên của mọi ngành

                nghề, cùng nhau gia nhập Hebela để phát triển sự nghiệp.Tìm kiếm cơ hội việc làm với chúng tôi !</p>

            <div class="d-flex align-items-center">

                <input type="text" placeholder="Tìm kiếm công việc tại Hebela?" class="desc">

                <button><img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/search.png" alt="" class="w-100"></button>

            </div>

        </div>

    </div>

</section>

<section class="job">

    <div class="container">

        <div class="row">

            <div class="col-lg-3 none-mb">

                <div class="option-job">

                    <h5 class="fw-500 fs-18">Danh mục</h5>
                    <div class="job-wrap">

                        <h6 class="job-title d-flex justify-content-between align-items-center fs-14 ">

                            Bộ phận IT<i class="fa-solid fa-angle-right"></i></h6>

                        <div class="job-list">
                            <?php
                            $a = 0;
                            $args = array(
                                'category_name' => 'Bộ phận IT',
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'limit' => 10,
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    $a = $a + 1;
                            ?>

                                    <div class="check-input">

                                        <input class="form-check-input" type="checkbox"  id="<?php echo $a ?>" onclick="checkBox(event)" value="Bộ phận IT" >

                                        <label class="form-check-label fs-14 fw-400" for="<?php echo $a ?>"> <?php the_title(); ?> </label>

                                    </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>
                    <div class="job-wrap">

                        <h6 class="d-flex justify-content-between align-items-center fs-14 job-title ">Sale <i class="fa-solid fa-angle-right"></i></h6>

                        <div class="job-list">
                            <?php
                            $a = 0;
                            $args = array(
                                'category_name' => 'Sale',
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'limit' => 10,
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    $a = $a + 1;
                            ?>

                                    <div class="check-input">

                                        <input class="form-check-input" type="checkbox" value="" id="<?php echo $a ?>">

                                        <label class="form-check-label fs-14 fw-400" for="<?php echo $a ?>"> <?php the_title(); ?> </label>

                                    </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>

                    <div class="job-wrap">

                        <h6 class="d-flex justify-content-between align-items-center fs-14 job-title">Hành chính nhân sự <i class="fa-solid fa-angle-right"></i></h6>

                        <div class="job-list">
                            <?php
                            $a = 0;
                            $args = array(
                                'category_name' => 'Hành chính nhân sự',
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'limit' => 10,
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    $a = $a + 1;
                            ?>

                                    <div class="check-input">

                                        <input class="form-check-input" type="checkbox" value="" id="<?php echo $a ?>">

                                        <label class="form-check-label fs-14 fw-400" for="<?php echo $a ?>"> <?php the_title(); ?> </label>

                                    </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>

                    <div class="job-wrap">

                        <h6 class="d-flex justify-content-between align-items-center fs-14 job-title">Marketting App <i class="fa-solid fa-angle-right"></i></h6>

                        <div class="job-list">
                            <?php
                            $a = 0;
                            $args = array(
                                'category_name' => 'Marketting App',
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'limit' => 10,
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    $a = $a + 1;
                            ?>

                                    <div class="check-input">

                                        <input class="form-check-input" type="checkbox" value="" id="<?php echo $a ?>">

                                        <label class="form-check-label fs-14 fw-400" for="<?php echo $a ?>"> <?php the_title(); ?> </label>

                                    </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>

                    <div class="job-wrap">

                        <h6 class="d-flex justify-content-between align-items-center fs-14 job-title">Kho vận <i class="fa-solid fa-angle-right"></i></h6>

                        <div class="job-list">
                            <?php
                            $a = 0;
                            $args = array(
                                'category_name' => 'Kho vận',
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'limit' => 10,
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                                    $a = $a + 1;
                            ?>

                                    <div class="check-input">

                                        <input class="form-check-input" type="checkbox" value="" id="<?php echo $a ?>">

                                        <label class="form-check-label fs-14 fw-400" for="<?php echo $a ?>"> <?php the_title(); ?> </label>

                                    </div>
                            <?php
                                endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-lg-9 row">
                <?php
                $args = array(
                    'category_name' => 'Bộ phận IT,Sale,Hành chính nhân sự, Marketting App, Kho vận',
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'limit' => 15,
                    'order' => 'DESC',
                    'orderby' => 'title',
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                    // if($query->have_posts().)
                ?>
                        <div class="col-lg-4 mb15 <?php echo  $b ?>">
                            <a href="<?php the_permalink(); ?>">
                                <div class="position-relative">

                                    <img src="<?php the_post_thumbnail_url() ?>" alt="" class="w-100">

                                    <button class="btn-job d-flex align-items-center position-absolute">

                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment/icon-gioi-thieu.png" alt="" class="img-btnjob">

                                        <div class="job-name"><?php the_title(); ?></div>

                                    </button>

                                </div>

                                <p><?php echo teaser(20); ?></p>
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

<script>
    jQuery(document).ready(function($) {

        $(".job-title").click(function() {

            var thisClassName = $(this).children("i").attr("class");

            if (thisClassName.includes("fa-angle-down")) {



                $(".job-wrap .job-title").removeClass("fw-700 color-orange")

                $(this).children("i").removeClass("fa-angle-down").addClass("fa-angle-right");

                $(this).next(".job-list").slideUp();

            } else {

                $(".job-wrap .job-title").removeClass("fw-700 color-orange")

                $(this).addClass("fw-700 color-orange")

                $(".job-wrap .job-title").children().removeClass("fa-angle-down").addClass("fa-angle-right");

                $(".job-wrap  .job-list").slideUp();

                $(this).children("i").removeClass("fa-angle-right").addClass("fa-angle-down");

                $(this).next(".job-list").slideDown();

            }

        })

    })

    function checkBox(event) {
        if (event.target.checked) {
            console.log(event.target.value);
            <?php $cate = ?> 
            alert(<?php echo $cate ?>, event.target.value)
        }
    }
</script>
<?php
get_footer();

?>