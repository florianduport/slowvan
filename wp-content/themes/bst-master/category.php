<?php get_template_part('includes/header'); ?>

<?php

$category = get_category(get_query_var('cat'));
$category_id = $category->cat_ID;

$isEBL = $category_id == 3;

if(cat_is_ancestor_of(2, $category_id) or $category_id == 2) : ?>
<!--<nav class="navbar navbar-default navbar-static-top undernavbar">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
			<div class="menu-menu-principal-container">
				<ul id="menu-menu-principal" class="nav navbar-nav navbar-right">
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
							<a href="<?php echo get_category_link(10); ?>"><img src="<?php echo content_url(); ?>/uploads/2017/08/vantrip-picto.png"/>
								<span class="<?php if(cat_is_ancestor_of(10, $category_id) or $category_id == 10) echo("activeCat") ?>">Van trip</span>
							</a>
						</li>
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
							<a href="<?php echo get_category_link(11); ?>"><img src="<?php echo content_url(); ?>/uploads/2017/08/avion-picto.png"/>
								<span class="<?php if(cat_is_ancestor_of(11, $category_id) or $category_id == 11) echo("activeCat") ?>">Away trip</span>
							</a>
						</li>
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category">
							<a href="<?php echo get_category_link(12); ?>"><img src="<?php echo content_url(); ?>/uploads/2017/08/citytrip-picto.png"/>
								<span class="<?php if(cat_is_ancestor_of(12, $category_id) or $category_id == 12) echo("activeCat") ?>">City guide</span>
							</a>
						</li>
				</ul>
			</div>-->
<?php endif; ?>
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

<div id="global-body" class="<?php if($isEBL){ echo("smallCat"); } ?>">


      <?php if(have_posts()): while(have_posts()): the_post();?>

        <div class="carousel slide" data-ride="carousel" data-interval="10000">
          <div class="carousel-inner">
          <div class="item active" style="background-image: url('<?php echo(get_the_post_thumbnail_url()) ?>')">
            <div class="overlay-slider"></div>
            <div>
              <a href="<?php echo get_permalink(); ?>">
                <h1><?php echo(the_title()); ?></h1>
                <span>
                  <p><?php the_excerpt(); ?></p>
                  <p class="noBold">
                    <span class="glyphicon glyphicon-calendar"></span> <?php the_time("d/m/Y") ?> &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-user"></span> par <?php echo get_author_name($postSL->post_author) ?> &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-comment"></span> <?php echo( get_comments_number() );  ?> commentaire<?php if(get_comments_number() > 1) echo("s"); ?>
                  </p>
                </span>
              </a>
            </div>
          </div>    </div>    </div>

      <?php endwhile; ?>

  <?php if ( function_exists('bst_pagination') ) { bst_pagination(); } else if ( is_paged() ) { ?>
    <ul class="pagination">
      <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous', 'bst')) ?></li>
      <li class="newer"><?php previous_posts_link(__('Next', 'bst') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
    </ul>
  <?php } ?>

  <?php else: get_template_part('includes/loops/content', 'none'); endif; ?>

  <!-- NOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO -->

</div>
<?php get_template_part('includes/footer'); ?>
