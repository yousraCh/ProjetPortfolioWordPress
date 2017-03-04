<!doctype html>
<html>
		<head>
			<meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=0.75">
			<title>Site Web Portfolio</title>
            <link href = "<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
        </head>
        <body>
        <header>

            <!--nested colomns -->
            <div class="container">

                <!-- photo profile-->
                <nav>
                    <ul>
                        <div class="photo-header col-lg-2 col-md-2 col-sm-4 col-xs-4" onclick="location.href='<?php echo get_permalink(get_page_by_title('Home')); ?>';" style="cursor:pointer;">
                            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/capture.PNG" alt="photo d'identité" href="#" width="150px" height="150px" alt="photo d&#39;identité"></li></div>
                        <div class="nom-header col-lg-4 col-md-4 col-sm-8 col-xs-8">
                            <li><h1>YOUSRA CHKARNAT</h1><h4>Computer Engineer</h4></li></div>
                        <div class="resume-header col-lg-2 col-md-2 col-sm-4 col-xs-4">
                            <li><a href="<?php echo get_permalink(get_page_by_title('cv')); ?>">
                                    <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_resume.png" alt="photo resume">-->
                                    <div class="list1 row">
                                        <div class="icone_list1">
                                            <i class="fa fa-list fa-4x"></i>
                                        </div>
                                    </div>
                                </a></li></div>
                        <div class="portfolio-header col-lg-2 col-md-2 col-sm-4 col-xs-4">
                            <li><a href="<?php echo get_permalink(get_page_by_title('portfolio')); ?>">
                                    <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_portfolio.png" alt="photo portfolio">-->
                                    <div class="list2 row">
                                        <div class="icone_list2">
                                            <i class="fa fa-briefcase fa-4x"></i>
                                        </div>
                                    </div>

                                </a></li></div>


                        <div class="contact-header col-lg-2 col-md-2 col-sm-4 col-xs-4">
                            <li><a href="<?php echo get_permalink(get_page_by_title('contacts')); ?>">
                                    <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_contact.png">-->
                                    <div class="list3 row">
                                        <div class="icone_list3">
                                            <i class="fa fa-envelope fa-4x"></i>
                                        </div>
                                    </div>
                                </a></li>
                        </div>
                    </ul>
                </nav>
            </div>
        </header>
			<?php wp_head(); ?>

		  

		  