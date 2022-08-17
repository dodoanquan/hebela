<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?> <div class="container">
    <footer>
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <h4>CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ CÔNG NGHỆ HEBELA</h4>
                <div class="mt-25 fw-400">Địa chỉ: Tầng 3, tháp A, tòa nhà Rivera Park Hanoi, 69 Vũ Trọng Phụng,
                    phường Thanh Xuân Trung,
                    quận Thanh Xuân, thành phố Hà Nội, Việt Nam</div>
                <div class="mt-20 fw-400">SĐT: 1900866650 - Email: support@hebela.com</div>
                <div class="mt-20 fw-400">Mã số doanh nghiệp: 0109368715 do Sở Kế hoạch & Đầu tư TP Hà Nội cấp lần
                    đầu ngày 07/10/2020
                </div>
                <div class="mt-20 fw-400">© 2020 - Bản quyền thuộc về Công ty Cổ phần đầu tư và công nghệ Hebela
                </div>
            </div>
            <div class="col-lg-5 d-flex flex-column justify-content-end">
                <h4 class="dow">TẢI ỨNG DỤNG TẠI</h4>
                <div class="row">
                    <div class="col-lg-8 d-flex">
                        <img src="<?php echo get_template_directory_uri();?>/assets/images/footer-header/qr.png" alt="">
                        <div class="d-flex flex-column justify-content-around">
                        <a href="https://apps.apple.com/app/id1571872288" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/footer-header/app.png" alt=""></a>
                        <a href="https://play.google.com/store/apps/details?id=com.hebela.store" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/footer-header/google-play.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex">
                        <div class="d-flex flex-column justify-content-end">
                            <div class="d-flex align-items-center">
                                Kết nối
                                <a href="https://www.facebook.com/HebelaVietnam/" target="_blank" class="mr-15 ml-15"><img src="<?php echo get_template_directory_uri();?>/assets/images/footer-header/fb.png" alt=""
                                    ></a>
                                <a href="https://www.youtube.com/channel/UCEeFa57FiOZcS75RjQjBRMA/featured" target="_blank" class="mr-15"><img src="<?php echo get_template_directory_uri();?>/assets/images/footer-header/yt.png" alt=""
                                    ></a>
                                <a href="https://www.instagram.com/accounts/login/?next=/hebelavietnam/" target="_blank"><img src="<?php echo get_template_directory_uri();?>/assets/images/footer-header/insta.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</div>


<?php wp_footer(); ?>

</body>

</html>