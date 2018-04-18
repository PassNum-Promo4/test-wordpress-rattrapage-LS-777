<?php
/**
* Template Name: Full Width booking
 */

get_header(); ?>

<section id="primary" class="content-area col-sm-12">
    <main id="main" class="site-main" role="main">

        <div class= "mx-auto w-100 p-3 p-sm-2 mt-5 mb-0 heading">
            <h2 class="text-center pdj_title mt-5">Réserver votre table</h2>

            <div class="hr2">
                <span class="outer-line2" style="color:black"></span>
                <i class="fa fa-calendar-o mx-2" style="font-size:2rem; color:black;"></i>
                <span class="outer-line2" style="color:black"></span>
            </div>

            <!--open dayz & hours -->
            <div class="text-center">
                <p class="mt-5">Ouvert 7j/7</p>

                <p lcass="mt-1">11h &rarr; 00h</p>
            </div>

            <div class="mt-5 text-center">
                <a href="plats" class="btn btn-outline-dark font-weight-bold menu-btn"><span>Voir la carte</span></a>
            </div>


        </div>




            <?php
            while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
            comments_template();
            endif;
            wp_reset_postdata();
            endwhile; // End of the loop.
            ?>
    </main><!-- #main -->
</section><!-- #primary -->





<!--replacing form legend text with jquery-->
 <script type="application/javascript">
 $(".reservation legend:first-of-type").text('Quand?');
 $(".contact legend:first-of-type").text('Qui?');
</script>




<?php
get_sidebar();
//get_footer();
