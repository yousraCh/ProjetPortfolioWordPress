<?php get_header();  ?>

<div id="corps-resume">
    <div class="resume-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- /***** titre Employement ***/ -->
         <div class="title-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="icone_info">
                 <i class="fa fa-info fa-2x"></i>
             </div>
             <div class="grand-titre">EMPLOYEMET</div>
             <div class="minus" id="minus1-id">
                 <div class="icone_minus">
                     <i class="fa fa-minus"></i>
                 </div>
             </div>
         </div>


         <!-- ************ la requete pour les postes de type employement ****** -->
        <?php $loop1 = new WP_Query(
            array( 'post_type' => 'yresume',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Types',
                        'field' => 'slug',
                        'terms' => 'employement',
                    ),
                ),

            ) );
        ?>
        <?php wp_reset_query(); ?>

        <!-- /*** contenu des posts Employement */-->
        <div class="cont-body row" id="cont1-id">
            <?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                <div class="post col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="date-section col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="annee1"><p>
                                <?php echo get_post_meta(get_the_ID(), 'year_start',true);?>
                            </p></div>
                        <div class="annee2"><p>
                                <?php echo get_post_meta(get_the_ID(), 'year_completed',true);?>
                            </p></div>
                    </div>
                    <div class="info-section col-xs-10 col-sm-10 col-md-10 col-lg-10">

                        <div class="local-section col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="section-bouton">
                                <div class="local-icone">
                                    <i class="fa fa-building"></i>
                                </div>
                            </div>
                            <div class="Mtitre"><p>
                                    <?php echo get_post_meta(get_the_ID(), 'local_post',true);?>
                                </p></div>
                        </div>
                        <div class="poste-section col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="section-bouton">
                                <div class="local-icone">
                                    <i class="fa fa-bell"></i>
                                </div>
                            </div>
                            <div class="Mtitre"><p><?php the_title();?></p></div>
                        </div>

                        <div class="description-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <p> <?php the_content(); ?> </p>
                        </div>
                    </div>
                </div>
            <?php endwhile;?>

        </div>
    </div>





    <div class="resume-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- /**** titre de Education ****/ -->
         <div class="title-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="icone_diplome">
                 <i class="fa fa-graduation-cap fa-2x"></i>
             </div>
             <div class="grand-titre">EDUCATION</div>
             <div class="minus" id="minus2-id">
                 <div class="icone_minus" >
                     <i class="fa fa-minus"></i>
                 </div>
             </div>
         </div>
         <!-- ************ la requete pour les postes de type education ** -->
        <?php $loop1 = new WP_Query(
            array( 'post_type' => 'yresume',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Types',
                        'field' => 'slug',
                        'terms' => 'education',
                    ),
                ),

            ) );
        ?>
        <?php wp_reset_query(); ?>
        <!-- /**** contenu des posts Education */ -->
        <div class="cont-body row" id="cont2-id">
            <?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
            <div class="post col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="date-section2 col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <div class="annee1"><p><?php echo get_post_meta(get_the_ID(), 'year_start',true);?></p></div>
                    <div class="annee2"><p><?php echo get_post_meta(get_the_ID(), 'year_completed',true);?></div>
                </div>
                <div class="info-section col-xs-10 col-sm-10 col-md-10 col-lg-10">

                    <div class="local-section col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="section2-bouton">
                            <div class="local-icone">
                                <i class="fa fa-building"></i>
                            </div>
                        </div>
                        <div class="Mtitre"><?php echo get_post_meta(get_the_ID(), 'local_post',true);?></div>
                    </div>
                    <div class="poste-section col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="section2-bouton">
                            <div class="local-icone">
                                <i class="fa fa-bell"></i>
                            </div>
                        </div>
                        <div class="Mtitre"><p><?php the_title();?></p></div>
                    </div>

                    <div class="description-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <p><?php the_content();?> </p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>



    <div class="resume-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php /*while ( $loop1->have_posts() ) : $loop1->the_post();*/ ?>
        <!-- /**** Titres des posts Skills ***/ -->
        <div class="title-section col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="icone_skills">
                <i class="fa fa-bolt fa-2x"></i>
            </div>
            <div class="grand-titre">SKILLS</div>
            <div class="minus">
                <div class="icone_minus" id="minus3-id">
                    <i class="fa fa-minus"></i>
                </div>
            </div>
        </div>
        <!-- ************ la requete pour les skills de type programmation ****** -->
        <?php $loop1 = new WP_Query(
            array( 'post_type' => 'skills',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Skills',
                        'field' => 'slug',
                        'terms' => 'programming',
                    ),
                ),

            ) );
        ?>
        <?php wp_reset_query(); ?>
        <div class="cont-body row" id="cont3-id">
            <div class="programming-statistic col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="statistic_title"> <p>Programming SKILLS</p></div>
                <?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                <div class="statistics barre col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="barre col-xs-12 col-sm-12 col-md-12 col-lg-12" style="width: <?php echo get_post_meta(get_the_ID(), 'skills_degree',true); ?>%; background-color : <?php echo get_post_meta(get_the_ID(), 'skills_color',true); ?>"><p><?php echo get_the_title();?>/<?php echo get_post_meta(get_the_ID(), 'skills_degree',true);?>%</p></div>
                </div>
                <?php endwhile;?>
            </div>

            <!-- ************ la requete pour les skills de type graphics ****** -->
            <?php $loop1 = new WP_Query(
                array( 'post_type' => 'skills',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'Skills',
                            'field' => 'slug',
                            'terms' => 'graphics',
                        ),
                    ),

                ) );
            ?>
            <?php wp_reset_query(); ?>

            <div class="programming-statistic col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <?php /*while ( $loop1->have_posts() ) : $loop1->the_post(); */?>
                <div class="statistic_title"><p>Graphic SKILLS</p></div>
                <?php while ( $loop1->have_posts() ) : $loop1->the_post(); ?>
                <div class="statistics barre col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="barre col-xs-12 col-sm-12 col-md-12 col-lg-12" style="width: <?php echo get_post_meta(get_the_ID(), 'skills_degree',true); ?>%; background-color : <?php echo get_post_meta(get_the_ID(), 'skills_color',true); ?>"><p><?php echo get_the_title();?> / <?php echo get_post_meta(get_the_ID(), 'skills_degree',true);?>%</p></div>
                </div>
                 <?php endwhile;?>
            </div>
        </div>

    </div>


</div>
<?php get_footer(); ?>

