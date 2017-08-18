<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="p:domain_verify" content="973e4d21ac8443f5b38541fb169752f2"/>
	<meta name="google-site-verification" content="6l22c7hnWSqqHLsDC3VT1ZyZfULpW1SOGCHU-YyMjoE" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-fixed-top">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
				<img src="<?php echo content_url(); ?>/uploads/2017/08/slowvan-picto.png"/>
			</a>
    </div>

		<?php
			$category = get_category(get_query_var('cat'));
			$category_id = $category->cat_ID;

			$categories = get_categories();
			$catOTRA = null;
			$catEBL = null;
			$ĉatSL = null;

			foreach($categories as $cat){
				if($cat->cat_ID == 2){
					$catOTRA = $cat;
				} else if($cat->cat_ID == 3){
					$catEBL = $cat;
				} else if($cat->cat_ID == 4){
					$catSL = $cat;
				}
			}

		?>

    <div class="collapse navbar-collapse" id="navbar">
			<div class="menu-menu-principal-container">
				<ul id="menu-menu-principal" class="nav navbar-nav navbar-right">
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
							<a href="<?php echo get_category_link($catOTRA->cat_ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2017/08/OTRA-picto.png"/>
								<span class="<?php if(cat_is_ancestor_of($catOTRA->cat_ID, $category_id) or $category_id == $catOTRA->cat_ID) echo("activeCat") ?>"><?php echo $catOTRA->name; ?></span>
							</a>
						</li><!--
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
							<a href="<?php echo get_category_link($catEBL->cat_ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2017/08/EBL-picto.png"/>
								<span class="<?php if(cat_is_ancestor_of($catEBL->cat_ID, $category_id) or $category_id == $catEBL->cat_ID) echo("activeCat") ?>"><?php echo $catEBL->name; ?></span>
							</a>
						</li>-->
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
							<a href="<?php echo get_category_link($catSL->cat_ID); ?>"><img src="<?php echo content_url(); ?>/uploads/2017/08/SL-picto.png"/>
								<span class="<?php if(cat_is_ancestor_of($catSL->cat_ID, $category_id) or $category_id == $catSL->cat_ID) echo("activeCat") ?>"><?php echo $catSL->name; ?></span>
							</a>
						</li>
				</ul>
			</div>
        <?php
           /*wp_nav_menu( array(
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );*/
        ?>
    </div><!-- /.navbar-collapse -->

</nav>

<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar,
then you probably don't require a site title. Alternatively you can use the example below.
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
