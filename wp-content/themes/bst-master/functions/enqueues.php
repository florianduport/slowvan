<?php

function bst_enqueues() {

	/* Styles */

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-css');
	wp_register_style('bst-css', get_template_directory_uri() . '/css/bst.css', false, null);
	wp_enqueue_style('bst-css');

	wp_register_style('global-css', get_template_directory_uri() . '/css/global.css', false, null);
	wp_enqueue_style('global-css');
	wp_register_style('animate-css', get_template_directory_uri() . '/css/animate.css', false, null);
		wp_enqueue_style('animate-css');

	if(is_page_template("template-home.php")){
		  	wp_register_style('home-css', get_template_directory_uri() . '/css/home.css');
				wp_enqueue_style('home-css');
		  	wp_register_style('hover-css', get_template_directory_uri() . '/css/hover.css');
				wp_enqueue_style('hover-css');
	}
	if(is_category()){
				wp_register_style('category-css', get_template_directory_uri() . '/css/category.css');
				wp_enqueue_style('category-css');
	}
	if(is_single()){
		wp_register_style('article-css', get_template_directory_uri() . '/css/article.css');
		wp_enqueue_style('article-css');
	}


	/* Scripts */

	wp_enqueue_script( 'jquery' );
	/* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');

  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('bst-js', get_template_directory_uri() . '/js/bst.js', false, null, true);
	wp_enqueue_script('bst-js');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
