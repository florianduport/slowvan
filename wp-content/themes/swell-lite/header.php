<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="wrap">
 *
 * @package Swell Lite
 * @since Swell Lite 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/wp-content/uploads/2017/07/ico.png" />

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103668649-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- BEGIN #wrapper -->
<div id="wrapper">

<!-- BEGIN .container -->
<div class="container">

<?php if ( has_nav_menu( 'fixed-menu' ) ) { ?>

<!-- BEGIN #navigation -->
<nav id="navigation" class="navigation-main fixed-nav clearfix" role="navigation">

	<button class="menu-toggle"><i class="fa fa-bars"></i></button>

	<?php
		wp_nav_menu( array(
			'theme_location' 		=> 'fixed-menu',
			'title_li' 					=> '',
			'depth' 						=> 4,
			'container_class' 	=> '',
			'menu_class'      	=> 'menu',
			)
		);
	?>

<!-- END #navigation -->
</nav>

<?php } ?>



<?php if ( has_nav_menu( 'main-menu' ) ) { ?>

<!-- BEGIN #navigation -->
<nav id="navigation" class="navigation-main clearfix" role="navigation">

	<?php if ( ! has_nav_menu( 'fixed-menu' ) ) { ?>
		<button class="menu-toggle"><i class="fa fa-bars"></i></button>
	<?php } ?>

	<?php
		wp_nav_menu( array(
			'theme_location' 		=> 'main-menu',
			'title_li' 					=> '',
			'depth' 						=> 4,
			'container_class' 	=> '',
			'menu_class'      	=> 'menu',
			)
		);
	?>

<!-- END #navigation -->
</nav>

<?php } ?>
