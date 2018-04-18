<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>





<div class="content">
    <div class="container">

        <div class="row">
            <!-- Menu content-->
            <div class="col-12 col-lg-8 mx-auto mb-5 border rounded fff">
                <div class="menu-block">
                    <h3 class="menu-title"></h3>
                    <div class="menu-content">
                        <div class="row col-12 ">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                <div class="dish-img">

                                <img src="<?php the_field('photo'); ?>" alt="" class="rounded-circle img-fluid">

                                </div>
                            </div>


                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <div class="dish-content">

                                    <h5 class="dish-title"><a href="#"><?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?></a></h5>

                                    <hr>


                                    <span class="dish-meta border w-inherit text-center text-muted rounded"><?php the_field('categorie'); ?></span>
                                    <div class="dish-price text-right">
                                        <p><?php the_field('prix'); ?>€</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.menu-content -->


            </div>


        </div>
    </div>
</div>

<!-- /.menu -->



