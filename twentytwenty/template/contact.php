<?php

/*

 Template Name: Contact

 */

?>

<?php

get_header()

?>

<section class="banner">

    <div class="container">

        <div class="banner-contact">

            <h2>KẾT NỐI VỚI HEBELA</h2>

            <p>Nền tảng chăm sóc sức khỏe và làm đẹp được yêu thích tại VN</p>

            <div class="none-mb" style="display: flex">

                <img src="<?php echo get_template_directory_uri();?>/assets/images/contact/introduce-fb.png" alt="">

                <img src="<?php echo get_template_directory_uri();?>/assets/images/contact/introduce-yt.png"  alt=""

                    class="contact-img2">

                <img src="<?php echo get_template_directory_uri();?>/assets/images/contact/introduce-insta.png"  alt="">

            </div>

        </div>

    </div>

</section>

<div class="icon-social-mb justify-content-around">

    <img src="<?php echo get_template_directory_uri();?>/assets/images/contact/introduce-fb-mb.png"  alt="">

    <img src="<?php echo get_template_directory_uri();?>/assets/images/contact/introduce-insta-mb.png"  alt="" class="contact-img2">

    <img src="<?php echo get_template_directory_uri();?>/assets/images/contact/introduce-yt-mb.png"  alt="">

</div>


<section class="contact-hebela">

    <div class="container position-relative">

        <div class="row">

            <div class="col-xl-6 align-self-end">

                <div class="d-flex hebela-location">

                    <iframe

                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8345014451793!2d105.8058985148538!3d20.99927018601434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135adc5581a2237%3A0xca5e4d993146a46f!2sC%C3%94NG%20TY%20TNHH%20HEBELA!5e0!3m2!1svi!2s!4v1659689843650!5m2!1svi!2s"

                        width="100%" height="450" style="border:1px;" allowfullscreen="" loading="lazy"

                        referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

                    <div class="text">

                        <h3>Công ty Cổ phần Đầu tư và Công nghệ Hebela</h3>

                        <div>Địa chỉ: Tòa nhà Văn phòng Rivera Park Hà Nội, Số 69 Vũ Trọng Phụng, Phường Thanh Xuân Trung, Quận

                            Thanh Xuân, Thành phố Hà Nội.</div>

                        <div class="mgtb15">Website: <a href=" https://hebela.com" target="_blank"

                                rel="noopener noreferrer">https://hebela.com</a> </div>

                        <div>Email: info@hebela.com</div>

                    </div>

                </div>

            </div>

            <div class="col-xl-6 mail-contact m-auto">

            <?php
                    $args = array(
                        'category_name' => 'contact',
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'limit' => 1,
                        'order' => 'DESC',
                        'orderby' => 'title',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <?php the_content() ?>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                

            </div>

        </div>

    </div>

</section>





<?php

get_footer()

?>

