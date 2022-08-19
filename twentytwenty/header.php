<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:ital,wght@0,400;0,500;0,900;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
    <link rel="icon" type="image/x-icon" href="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/2a087ca26cbc4f079e4c4bd157e68ce2.jpg"/>

</head>

<body <?php body_class(); ?>>

    <?php
    wp_body_open();
    ?>


    <div class="container position-relative">
        <header id="site-header1" class="header-footer-group1 w-100">
            <div class="header-inner1 section-inner1">
                <div class="logo-mobile-fixed">
                    <a href="#">
                    <img class="d-inline" src="<?php echo get_template_directory_uri();?>/assets/images/footer-header/logo-m.png" alt=""></a>
                </div>
                <div class="header-titles-wrapper1">

                    <?php

                    // Check whether the header search is activated in the customizer.
                    $enable_header_search = get_theme_mod('enable_header_search', true);

                    if (true === $enable_header_search) {

                    ?>

                        <button class="toggle search-toggle1 mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                            <span class="toggle-inner1">
                                <span class="toggle-icon1">
                                    <?php twentytwenty_the_theme_svg('search'); ?>
                                </span>
                                <span class="toggle-text1"><?php _ex('Search', 'toggle text', 'twentytwenty'); ?></span>
                            </span>
                        </button><!-- .search-toggle -->

                    <?php } ?>

                    <div class="header-titles">

                        <?php
                        // Site title or logo.
                        twentytwenty_site_logo();

                        // Site description.
                        twentytwenty_site_description();
                        ?>

                    </div><!-- .header-titles -->



                </div><!-- .header-titles-wrapper -->

                <div class="header-navigation-wrapper1">

                    <?php
                    if (has_nav_menu('primary') || !has_nav_menu('expanded')) {
                    ?>

                        <nav class="primary-menu-wrapper1" aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'twentytwenty'); ?>">

                            <ul class="primary-menu reset-list-style1">

                                <?php
                                if (has_nav_menu('primary')) {

                                    wp_nav_menu(
                                        array(
                                            'container'  => '',
                                            'items_wrap' => '%3$s',
                                            'theme_location' => 'primary',
                                        )
                                    );
                                } elseif (!has_nav_menu('expanded')) {

                                    wp_list_pages(
                                        array(
                                            'match_menu_classes' => true,
                                            'show_sub_menu_icons' => true,
                                            'title_li' => false,
                                            'walker'   => new TwentyTwenty_Walker_Page(),
                                        )
                                    );
                                }
                                ?>

                            </ul>

                        </nav><!-- .primary-menu-wrapper -->

                    <?php
                    }

                    if (true === $enable_header_search || has_nav_menu('expanded')) {
                    ?>

                        <div class="header-toggles hide-no-js1">

                            <?php
                            if (has_nav_menu('expanded')) {
                            ?>
                                <div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
                                    <button class="toggle nav-toggle desktop-nav-toggle1" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
                                        <span class="toggle-inner1">
                                            <span class="toggle-icon1">
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/footer-header/nav.png" alt=""
                                                class="inline-block"
                                                >
                                            </span>
                                        </span>
                                    </button><!-- .nav-toggle -->

                                </div><!-- .nav-toggle-wrapper -->

                            <?php
                            }

                            ?>

                        </div>
                    <?php
                    }
                    ?>

                </div><!-- .header-navigation-wrapper -->

            </div><!-- .header-inner -->

          

        </header><!-- #site-header -->
    </div>


    <?php
    // Output the menu modal.
    get_template_part('template-parts/modal-menu');