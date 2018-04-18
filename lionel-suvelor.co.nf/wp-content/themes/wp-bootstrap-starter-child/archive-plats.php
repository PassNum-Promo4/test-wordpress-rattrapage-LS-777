<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<!--
separation line
<div class="hr2 w-100 mb-5">
<span class="outer-line2"></span>
<i class="fas fa-map mx-2" style="font-size:2rem; color:black;"></i>
<span class="outer-line2"></span>
</div>
-->







<div class= "mx-auto w-100 p-3 p-sm-2 mt-5 mb-0 heading">
    <h2 class="text-center pdj_title mt-5">Menu</h2>

    <div class="hr2">
        <span class="outer-line2" style="color:black"></span>
        <i class="fa fa-clipboard mx-2" style="font-size:2rem; color:black;"></i>
        <span class="outer-line2" style="color:black"></span>
    </div>

    <div class="mt-5 mb-5 text-center">
        <a href="wp/reserver"  class="btn btn-outline-dark font-weight-bold menu-btn"><span>Réserver votre table</span></a>
    </div>

</div>

<div class= "mx-auto w-100 p-3 p-sm-2">

    <main id="main" class="site-main" role="main">

        <?php
        if ( have_posts() ) : ?>



        <header class="page-header text-center mb-5">
            <?php
            //                the_archive_title( '<h1 class="page-title">', '</h1>' );

            the_archive_description( '<div class="archive-description">', '</div>' );
            ?>

        </header><!-- .page-header -->
        <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post();

        /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
        get_template_part( 'template-parts/content', get_post_format() );

        endwhile;

        the_posts_navigation();

        else :

        get_template_part( 'template-parts/content', 'none' );

        endif; ?>

    </main><!-- #main -->





    <?php
    //get_sidebar();
//    get_footer();


