<?php
	function portfolio_script_enqueue(){
		wp_enqueue_style('customstyle',get_template_directory_uri().'/css/portfolio.css',array(),'1.0.0','all');
		wp_enqueue_style('customstyle',get_template_directory_uri().'/css/font-awesome.min.css',array(),'1.0.0','all');
		wp_enqueue_style('customstyle',get_template_directory_uri().'/css/font-awesome.css',array(),'1.0.0','all');
		wp_enqueue_style('customstyle',get_template_directory_uri().'/css/font-awesome.css',array(),'1.0.0','all');
	}
	

add_action('wp_enqueue_scripts','portfolio_script_enqueue');
	
	/*function portfolio_theme_setup(){
		add_theme_support('menus');
	}
add_action('init','portfolio_theme_setup');*/