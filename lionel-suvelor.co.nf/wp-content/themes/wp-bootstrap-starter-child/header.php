<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

        <!--        manually added jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
            <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
            <header id="masthead" class="site-header fixed-top mb-5 <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
                <div class="container">
                    <nav class="navbar navbar-expand-xl p-0 navbar-fixed-top ">
                        <div class="navbar-brand">
                            <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                            <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                            </a>
                            <?php else : ?>
                            <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                            <?php endif; ?>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                        wp_nav_menu(array(
                            'theme_location'    => 'primary',
                            'container'       => 'div',
                            'container_id'    => 'main-nav',
                            'container_class' => 'collapse navbar-collapse justify-content-end',
                            'menu_id'         => false,
                            'menu_class'      => 'navbar-nav',
                            'depth'           => 3,
                            'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                            'walker'          => new wp_bootstrap_navwalker()
                        ));
                        ?>
                        <a href="http://www.facebook.com" target = "_blank">                        <i class="fa fa-facebook mx-2 social" style="font-size:1.5rem; color:black;"></i></a>
                        <a href="http://www.twitter.com" target = "_blank">                        <i class="fa fa-twitter mx-2 social" style="font-size:1.5rem; color:black;"></i></a>
                        <a href="http://www.tripadvisor.com" target = "_blank">                        <i class="fa fa-tripadvisor mx-2 social" style="font-size:1.5rem; color:black;"></i></a>

                    </nav>
                </div>
            </header><!-- #masthead -->



            <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
            <div id="page-sub-header" class="pb-5 h-140 w-100" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
                <div class="container">
                    <h1 class="main_title" style="font-family:'Tangerine', 'cursive';">
                        <?php
                        if(get_theme_mod( 'header_banner_title_setting' )){
                            echo get_theme_mod( 'header_banner_title_setting' );
                        }else{
                            echo 'Wordpress + Bootstrap';
                        }
                        ?>
                    </h1>
                    <p>
                        <?php
                        if(get_theme_mod( 'header_banner_tagline_setting' )){
                            echo get_theme_mod( 'header_banner_tagline_setting' );
                        }else{
                            echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                        }
                        ?>
                    </p>


                    <!--separation line with icon-->
                    <div class="hr1">
                        <span class="outer-line"></span>
                        <i class="fa fa-glass mx-2" style="font-size:2rem; color:white;"></i>
                        <span class="outer-line"></span>
                    </div>


                    <!--open dayz & hours -->
                    <div class="hours">
                        <p class="mt-5">Ouvert 7j/7</p>

                        <p lcass="mt-1">11h &rarr; 00h</p>
                    </div>




                    <!--book a table button-->
                    <div class="mt-5 mb-5">
                        <a href="wp/reserver" class="btn btn-outline-light font-weight-bold menu-btn"><span>Réserver votre table</span></a>
                    </div>



                    <!--page scroller-->
                    <a href="#content" class="page-scroller mt-5 mb-5"><i class="fa fa-fw fa-angle-down"></i></a>



                </div>
            </div>
            <?php endif; ?>
            <div id="content" class="site-content">
                <div class="container">
                    <div class="row">
                        <?php endif; ?>
