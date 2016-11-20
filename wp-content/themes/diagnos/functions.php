<?php
	add_theme_support( 'post-thumbnails' ); 
	function diagnos_script_enqueue(){
		wp_enqueue_style('reset', get_template_directory_uri().'/vendors/css/reset.css', array(), '1.0.0', 'all');
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/vendors/css/bootstrap/bootstrap.min.css', array(), '1.0.0', 'all');
		wp_enqueue_style('customstyle', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0', 'all');
		
		wp_enqueue_script('html5js', get_template_directory_uri().'/vendors/js/html5.js', array(), '1.0.0', true);
		wp_enqueue_script('jquery', get_template_directory_uri().'/vendors/js/jquery/jquery-1.11.2.min.js', array(), '1.0.0', true);
		wp_enqueue_script('bootstrap', get_template_directory_uri().'/vendors/js/bootstrap/bootstrap.min.js', array(), '1.0.0', true);
		wp_enqueue_script('tweenmax', get_template_directory_uri().'/vendors/js/greensock/TweenMax.min.js', array(), '1.0.0', true);
		wp_enqueue_script('customscript', get_template_directory_uri().'/assets/js/bundle.js', array(), '1.0.0', true);
	}

	add_action('wp_enqueue_scripts', 'diagnos_script_enqueue');
?>