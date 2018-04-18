<?php
/**
* Template Name: Full Width home
 */

get_header(); ?>

<section id="primary" class="content-area col-12 mx-auto d-block mb-5">
    <main id="main" class="site-main" role="main">


        <div class="text-center pdj mb-2">
            <div data-aos="fade-right" data-aos-duration="1500"><h2 class=" pdj_title"> <?php the_field('pdj'); ?></h2></div>
        </div>



<!--        separation line with icon-->
        <div data-aos="flip-down"  data-aos-duration="2500" class="hr2 mb-5">
            <span class="outer-line2"></span>
            <i class="fa fa-trophy mx-2" style="font-size:2rem; color:black;"></i>
            <span class="outer-line2"></span>
        </div>

              <!-- pdj content-->
            <div data-aos="flip-up" class="col-12 col-lg-8 mx-auto mb-5 border rounded fff">
                <div class="menu-block2">
                    <h3 class="menu-title"></h3>
                    <div class="menu-content">
                        <div class="row col-12 ">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                                <div data-aos="fade-left" data-aos-duration="2000" class="dish-img">

                                    <a href="plats"><img src="<?php the_field('photo_pdj') ?>" alt="" class="rounded-circle img-fluid"></a>

                                </div>
                            </div>


                            <div  class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <div class="dish-content">

                                     <a href="plats"><h4 data-aos="fade-up" class="text-uppercase text-dark"><?php the_field('nom_pdj'); ?></h4></a> 


                                    <span class="dish-meta border w-inherit text-center text-muted rounded"></span>
                                    <div data-aos="fade-up-right" data-aos-duration="2500" class="dish-price text-right">
                                        <p><?php the_field('prix_pdj'); ?>€</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.pdj-content -->


            </div>











        <div data-aos="zoom-out-down" class="my-5 text-center">
            <a href="wp/plats" class="btn btn-outline-dark font-weight-bold menu-btn"><span>Découvrir la carte</span></a>
        </div>


    </main><!-- #main -->
</section><!-- #primary -->


<!--

<div class="hr2">
<span class="outer-line2" style="color:black"></span>
<i class="fa fa-cutlery mx-2" style="font-size:2rem; color:black;"></i>
<span class="outer-line2" style="color:black"></span>
</div>
-->



<script>
    AOS.init({
        duration: 500,
        delay: 200,
    });
</script>







<?php
//get_footer();
