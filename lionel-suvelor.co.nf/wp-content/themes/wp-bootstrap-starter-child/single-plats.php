<?php
// Contrôler si ACF est actif
if ( !function_exists('get_field') ) return;
?>



<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>




<!--Meal name and separation line -->
<div class= "mx-auto w-100 p-3 mt-5 mb-0">

    <div class="text-center">
        <h2 class="text-center pdj_title"><?php the_field('nom'); ?> </h2>
        <div class="text-center">
            <h3 class="text-center price__color"><?php the_field('prix'); ?>€</h3>
        </div>
        <h5 class="dish-meta2 border w-inherit text-center text-muted rounded"><?php the_field('categorie'); ?></h5>
    </div>


    <div class="hr2">
        <span class="outer-line2" style="color:black"></span>
        <i class="fa fa-cutlery mx-2" style="font-size:2rem; color:black;"></i>
        <span class="outer-line2" style="color:black"></span>
    </div>
</div>


<div class="mx-auto col-lg-8 col-md-12 col-sm-12 mt-5" >


    <!--   nice quote from illustrious marseille inhabitant-->
    <blockquote class="blockquote text-right font-italic mt-2 ml-5">
        <p class="mb-0 citation"><?php the_field('citation'); ?></p>
        <footer class="blockquote-footer citation_aut"><cite title="Source Title"><?php the_field('citation_aut'); ?></cite></footer>
    </blockquote>




    <h4 class="mx-3  my-3 text-uppercase text-left" > Ingrédients:</h4>
    <p class="mb-5" style="color: #777;">
        <?php the_field('ing'); ?>
    </p>
</div>

<div class="container text-center">


    <!--page scroller-->
    <a href="#photo-meal" class="page-scroller page-scroller2 mt-0 mb-5"><i class="fa fa-fw fa-angle-down"></i></a>

</div>

<!-- meal presentation and recipe -->
<div class="content mx-auto col-12 p-5 container-fluid" >
    <div class="container mt-5 ">
        <div class="meal-photo">
            <!-- Menu content-->
            <div class="col-12 col-lg-12 mx-auto mb-5 border rounded pt-5 fff border-dark">
                <div class="menu-block">
                    <div class="menu-content">
                        <div class="col-12">
                            <div class="text-center">
                                <img src="<?php the_field('photo'); ?>" alt="" class="img-fluid" id="photo-meal">
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.menu-content -->
            </div>
        </div>
    </div>
</div>








<?php /*
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', get_post_format() );

                the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        */?>



<?php
//get_sidebar();
//get_footer();
