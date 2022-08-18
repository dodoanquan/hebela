<div class="position-relative">
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
            <div class="btn-cv">

                <button onclick="openForm('myForm-1')">

                    <img class="d-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment-detail/vector.png" alt="">

                    Ứng tuyển ngay

                </button>

                <button onclick="openForm('myForm-2')">

                    <img class="d-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment-detail/cloud-share.png" alt="">

                    Giới thiệu ứng viên

                </button>

            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column justify-content-start flex-wrap">

            <div class="article-right">

                <h5 class="article-right-title">Việc làm tại Hebela</h5>

                <div class="list-article">
                    <?php
                    $args = array(
                        'category_name' => 'Công việc tuyển dụng',
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'limit' => 4,
                        'order' => 'DESC',
                        'orderby' => 'menu_order',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?> <a href="<?php the_permalink(); ?>">
                                <div class="article-item position-relative">

                                    <img class="w-100" src="<?php the_post_thumbnail_url() ?>" alt="">

                                    <div class="article-btn">

                                        <img class="d-inline" src="<?php echo get_template_directory_uri(); ?>/assets/images/recruitment-detail/icon-gioi-thieu.png" alt="">

                                        <span style="padding-left: 10px"><?php the_title(); ?></span>

                                    </div>

                                </div>

                                <p class="article-description"><?php echo teaser(20); ?></p>
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
<section class="form-popup justify-content-center" id="myForm-1">

    <div class="d-flex justify-content-center align-items-center"> 

        <form class="form-contact text-center m-auto position-relative form-cv">

            <div onclick="closeForm('myForm-1')"><img class="position-absolute close-form" src="<?php echo get_template_directory_uri();?>/assets/images/recruitment-detail/close.png" alt="close"></div>

            <img class="cv-img m-auto" src="<?php echo get_template_directory_uri();?>/assets/images/recruitment-detail/icon-upload-file.png" alt="">

            <h3>Tải lên file CV</h3>

            <div class="row" style="border-top: 1px dashed #C4C4C4;">

                <div class="col-md-6 ps-0">

                    <p class="text-start label">Họ và tên <span style="color: red;">*</span></p>

                    <input type="text" class="w-100" placeholder="Nhập họ tên">

                </div>

                <div class="col-md-6 pe-0 form-mb-none">

                    <p class="text-start label">Số điện thoại <span style="color: red;">*</span></p>

                    <input type="text" class="w-100" placeholder="Nhập số điện thoại">

                </div>

            </div>

            <div class="row">

                <div class="col-md-6 ps-0">

                    <p class="text-start label">Email</p>

                    <input type="text" class="w-100" placeholder="Nhập email">

                </div>

                <div class="col-md-6 pe-0 form-mb-none">

                    <p class="text-start label">Địa chỉ</p>

                    <input type="text" class="w-100" placeholder="Nhập địa chỉ">

                </div>

            </div>

            <div class="row" style="border-bottom: 1px dashed #C4C4C4; margin-bottom: 25px">

                <div class="col-12 p-0">

                    <p class="text-start label">Nội dung</p>

                    <textarea type="text" class="w-100" placeholder="Nhập nội dung" style="padding: 12px 25px 50px 25px; max-height: 80px; overflow-y: hidden;" placeholder="Nhập nội dung"></textarea>

                    <p class="length-text text-end">0/360</p>

                </div>

            </div>

            <div class="row ">

                <div class="col-12 text-start">

                    <p class="label m-0 p-0" style="margin-bottom: 15px!important">Tải lên file CV 

                    <span style="color: red;">*</span></p>

                    <div class="input-upload-cv">

                        <input type="file" id="upload" hidden/>

                        <label class="input-upload" for="upload">

                            <img class="d-inline m-auto" src="<?php echo get_template_directory_uri();?>/assets/images/recruitment-detail/group-644.png" alt="">

                            Tải lên tập tin</label>

                    </div>

                    <span style="color: #6B6B6B">( Chưa có tập tin )</span>

                    <p style="font-size: 12px; margin: 10px 0 25px 0">Bạn có thể đính kèm tệp với đuôi là jpg / jpeg / png / pdf. Dung lượng mỗi tệp không quá 4.5MB.</p>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <button class="w-100 btn-submit" style="background: #F1791F;">Ứng tuyển ngay</button>

                </div>

            </div>

        </form>

    </div>

</section>

<section class="form-popup justify-content-center" id="myForm-2">

    <div class="d-flex justify-content-center align-items-center popup-mb">

        <form class="form-contact text-center m-auto position-relative form-cv">

            <div onclick="closeForm('myForm-2')"><img class="position-absolute close-form" src="<?php echo get_template_directory_uri();?>/assets/images/recruitment-detail/close.png" alt="close"></div>

            <img class="cv-img m-auto" src="<?php echo get_template_directory_uri();?>/assets/images/recruitment-detail/icon-introduce.png" alt="">

            <h3>Giới thiệu ứng viên</h3>

            <div class="row">

                <div class="col-12 p-0"><h5 class="text-start mb-0">Thông tin người giới thiệu</h5></div>

                <div class="col-md-6 ps-0">

                    <p class="text-start label">Họ và tên <span style="color: red;">*</span></p>

                    <input type="text" class="w-100" placeholder="Nhập họ tên">

                </div>

                <div class="col-md-6 pe-0">

                    <p class="text-start label">Số điện thoại <span style="color: red;">*</span></p>

                    <input type="text" class="w-100" placeholder="Nhập số điện thoại">

                </div>

            </div>

            <div class="row" style="border-top: 1px dashed #C4C4C4; margin-top: 25px; padding-top: 25px">

                <div class="col-12 p-0">

                    <h5 class="text-start mb-0">Thông tin ứng viên</h5>

                </div>

                <div class="col-md-6 ps-0">

                    <p class="text-start label">Email</p>

                    <input type="text" class="w-100" placeholder="Nhập email">

                </div>

                <div class="col-md-6 pe-0 form-mb-none">

                    <p class="text-start label">Địa chỉ</p>

                    <input type="text" class="w-100" placeholder="Nhập địa chỉ">

                </div>

            </div>

            <div class="row" style="border-bottom: 1px dashed #C4C4C4; margin-bottom: 25px">

                <div class="col-12 p-0">

                    <p class="text-start label">Nội dung</p>

                    <textarea type="text" class="w-100" placeholder="Nhập nội dung" style="padding: 12px 25px 50px 25px; max-height: 80px; overflow-y: hidden;" placeholder="Nhập nội dung"></textarea>

                    <p class="length-text text-end">0/360</p>

                </div>

            </div>

            <div class="row ">

                <div class="col-12 text-start">

                    <p class="label m-0 p-0" style="margin-bottom: 15px!important">Tải lên file CV 

                    <span style="color: red;">*</span></p>

                    <div class="input-upload-cv">

                        <input type="file" id="upload" hidden/>

                        <label class="input-upload" for="upload">

                            <img class="d-inline m-auto" src="<?php echo get_template_directory_uri();?>/assets/images/recruitment-detail/group-664.png" alt="">

                            Tải lên tập tin</label>

                    </div>

                    <span style="color: #6B6B6B">( Chưa có tập tin )</span>

                    <p style="font-size: 12px; margin: 10px 0 25px 0">Bạn có thể đính kèm tệp với đuôi là jpg / jpeg / png / pdf. Dung lượng mỗi tệp không quá 4.5MB.</p>

                </div>

            </div>

            <div class="row">

                <div class="col-12">

                    <button class="w-100 btn-submit" style="background: #F1791F;">Ứng tuyển ngay</button>

                </div>

            </div>

        </form>

    </div>

</section>

<script>

    function openForm(a) {

        document.getElementById(a).style.display = "flex";

    }

    function closeForm(a) {

        document.getElementById(a).style.display = "none";

    }

</script>

<?php get_footer(); ?>
</div>