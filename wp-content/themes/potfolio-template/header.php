	<!doctype html>
<html>
		<head>
			<meta charset="utf-8"/>
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/font-awesome/css/font-awesome.min.css"/>
			<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/font/font-awesome/css/font-awesome.css"/>
			<title>Site Web Portfolio</title>
			<nav>
               <ul>
                    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/photo.jpg" alt="photo d'identité"></li>
                   <li><div id="prenom">YOUSRA</div>
                        <div id="nom">CHKARNAT</div>
                        <div id="profil">Web Developer</div></li>
                    <li class="active"><a href=" http://localhost/wordpress/resume/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_resume.png" alt="photo resume"></a></li>
                    <li><a href="#portfolio.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_portfolio.png" alt="photo portfolio"></a></li>
                    <li><a href=" http://localhost/wordpress/contacts/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_contact.png"></a></li>
                </ul>
            </nav>  
            <?php wp_enqueue_script('jquery'); ?>
			<?php wp_head(); ?>
			<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#slideMe').hide();
			   	jQuery('a#clickMe').click(function() {
						jQuery('#slideMe').slideToggle(20);
						return false;	   		
				   	});
               });
			</script>
			<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#slideMe2').hide();
			   	jQuery('a#clickMe2').click(function() {
						jQuery('#slideMe2').slideToggle(20);
						return false;	   		
				   	});
               });
			</script>
			<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#slideMe3').hide();
			   	jQuery('a#clickMe3').click(function() {
						jQuery('#slideMe3').slideToggle(20);
						return false;	   		
				   	});
               });
			</script>

		</head>
		<body>
		  

		  