<?php
/*** Template Name : portfolio */

get_header();  ?>

    <!-- ************ la requete pour le portfolio de type photo ****** -->
<?php $loop1 = new WP_Query(
    array( 'post_type' => 'my_portfolio',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'My_portfolio',
                'field' => 'slug',
                'terms' => 'photo',
            ),
        ),
    ) );
?>
<?php wp_reset_query(); ?>
    <div id="corps-portfolio" class="container-fluid col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="filters" class="clearfix">
            <ul class="nav nav-pills">
                <li id="all" class="filter active"><a href="#">ALL</a></li>
                <li id="web" class="filter"><a href="#">DEVELOPPEMENT</a></li>
                <li id="graphic" class="filter"><a href="#">GRAPHIC</a></li>
                <li id="photo" class="filter"><a href="#">PHOTO</a></li>
            </ul>
        </div>
        <div id="portfoliolist" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                <div id="portfolio<?php echo get_the_ID();?>" class="portfolio">

                    <div class="portfolio-wrapper photo col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="over-image"><a class="foobox" href="#">
                                <p><?php the_content(); ?></p></a>
                            <div class="overlay"><a class="magnifying-glass-icon foobox" href="#">
                                    <i class="fa fa-eye fa-2x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="label">
                            <div class="label-text"><a class="text-title"><?php echo the_title(); ?> </a>
                                <span class="text-category">PHOTO </span></div>
                            <div class="label-bg"> <p><?php get_the_ID();?></p></div>
                        </div>


                    </div>

                 </div>
                <div id="portfolio<?php echo get_the_ID();?>-pop" class="g-photo container col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    <div >
                        <div class="image-wrapper">
                        <div id="image<?php echo get_the_ID();?>" class="imageZ col-xs-8 col-md-8 col-sm-8 col-lg-8">
                            <?php
                            the_content();
                            ?>
                        </div>
                        </div>
                        <div id="description<?php echo get_the_ID();?>" class="description col-xs-12 col-md-4 col-sm-4 col-lg-4">
                            <div class="titre-photo">
                                <h1> Titre : <?php the_title(); ?> </h1>
                            </div>
                            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                <div class="date-photo col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <div class="icone_date ">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="date">
                                        <small><?php echo get_post_meta(get_the_ID(), 'portfolio_date',true);?></small>
                                    </div>
                                </div>
                                <div class="place col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <div class="icone_place ">
                                        <i class="fa fa-map"></i>
                                    </div>
                                    <div class="local">
                                        <small><?php echo get_post_meta(get_the_ID(), 'portfolio_lieu',true);?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="info-post">
                                <span>
                                    <?php echo get_post_meta(get_the_ID(), 'portfolio_description',true);?>
                                </span>
                            </div>
                        </div>
                        <div class="fermer row">
                            <div class="icone_close">
                                <i class="fa fa-close fa-2x"></i>
                            </div>
                        </div>

                    </div>
                </div>

            <?php endwhile; ?>

            <?php wp_reset_query(); ?>
            <!-- ************ la requete pour le portfolio de type graphic ****** -->
            <?php $loop1 = new WP_Query(
                array( 'post_type' => 'my_portfolio',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'My_portfolio',
                            'field' => 'slug',
                            'terms' => 'graphic',
                        ),
                    ),
                ) );
            ?>
            <?php wp_reset_query(); ?>
            <?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                <div id="portfolio<?php echo get_the_ID();?>" class="portfolio">
                    <div class="portfolio-wrapper graphic col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="over-image"><a class="foobox" href="#">
                                <p><?php the_content(); ?></a></p>
                            <div class="overlay"><a class="magnifying-glass-icon foobox" href="#">
                                    <i class="fa fa-eye fa-2x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="label">
                            <div class="label-text"><a class="text-title"><?php the_title(); ?> </a>
                                <span class="text-category">PHOTO </span></div>
                            <div class="label-bg"><?php get_the_ID();?></div>
                        </div>


                    </div>


                </div>
                <div id="portfolio<?php echo get_the_ID();?>-pop" class="g-photo container col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    <div >
                        <div class="image-wrapper">
                        <div class="imageZ col-xs-8 col-md-8 col-sm-8 col-lg-8">
                            <?php
                            the_content();
                            ?>
                        </div>
                        </div>
                        <div class="description col-xs-4 col-md-4 col-sm-4 col-lg-4">
                            <div class="titre-photo">
                                <h1> Titre : <?php the_title(); ?> </h1>
                            </div>
                            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                <div class="date-photo col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <div class="icone_date ">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="date">
                                        <small><?php echo get_post_meta(get_the_ID(), 'portfolio_date',true);?></small>
                                    </div>
                                </div>
                                <div class="place col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <div class="icone_place ">
                                        <i class="fa fa-map"></i>
                                    </div>
                                    <div class="local">
                                        <small><?php echo get_post_meta(get_the_ID(), 'portfolio_lieu',true);?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="info-post">
                                <span>
                                    <?php echo get_post_meta(get_the_ID(), 'portfolio_description',true);?>
                                </span>
                            </div>
                        </div>
                        <div class="fermer row">
                            <div class="icone_close">
                                <i class="fa fa-close fa-2x"></i>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <!-- ************ la requete pour le portfolio de type developpement ****** -->
            <?php $loop1 = new WP_Query(
                array( 'post_type' => 'my_portfolio',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'My_portfolio',
                            'field' => 'slug',
                            'terms' => 'developpement',
                        ),
                    ),
                ) );
            ?>

            <?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                <div id="portfolio<?php echo get_the_ID();?>" class="portfolio">

                    <div class="portfolio-wrapper web col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="over-image"><a class="foobox" href="#">
                                <p><?php the_content(); ?></a></p>
                            <div class="overlay"><a class="magnifying-glass-icon foobox" href="#">
                                    <i class="fa fa-eye fa-2x"></i>
                                </a>
                            </div>
                        </div>
                        <div class="label">
                            <div class="label-text"><a class="text-title"><?php the_title(); ?> </a>
                                <span class="text-category">PHOTO </span></div>
                            <div class="label-bg"><?php echo get_the_ID();?></div>
                        </div>


                    </div>


                </div>

                <div id="portfolio<?php echo get_the_ID();?>-pop" class="g-photo container col-xs-12 col-md-12 col-sm-12 col-lg-12">
                    <div >
                        <div class="image-wrapper">
                        <div class="imageZ col-xs-8 col-md-8 col-sm-8 col-lg-8">
                            <?php
                            the_content();
                            ?>
                        </div>
                        </div>
                        <div class="description col-xs-4 col-md-4 col-sm-4 col-lg-4">
                            <div class="titre-photo">
                                <h1> Titre : <?php the_title(); ?> </h1>
                            </div>
                            <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
                                <div class="date-photo col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <div class="icone_date ">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="date">
                                        <small><?php echo get_post_meta(get_the_ID(), 'portfolio_date',true);?></small>
                                    </div>
                                </div>
                                <div class="place col-xs-6 col-md-6 col-sm-6 col-lg-6">
                                    <div class="icone_place ">
                                        <i class="fa fa-map"></i>
                                    </div>
                                    <div class="local">
                                        <small><?php echo get_post_meta(get_the_ID(), 'portfolio_lieu',true);?></small>
                                    </div>
                                </div>
                            </div>
                            <div class="info-post">
                                <span>
                                    <?php echo get_post_meta(get_the_ID(), 'portfolio_description',true);?>
                                </span>
                            </div>
                        </div><div class="fermer row">
                            <div class="icone_close">
                                <i class="fa fa-close fa-2x"></i>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>



        </div>

    </div>

<!--    <div id="bouton"><button class="more-bouton" formaction=""> More result</button></div>
-->
    <!--
<?php /*while ( $loop1-> have_posts() ) : $loop1->the_post(); */?>
        <p><?php /*the_title();*/?></p>
        <p><?php /*the_content(); */?></p>
    <?php /*endwhile;*/?>
--><?php /*wp_reset_query(); */?>

<?php get_footer(); ?>