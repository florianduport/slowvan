<?php

  /**
  * Template Name: Front Page
  */
  get_template_part('includes/header');

?>

<div id="global-body">

<?php
global $postOTRA;
$argsOTRA = array( 'category_name' => 'Roadtrip' );
$mypostsOTRA = get_posts( $argsOTRA );
?>

  <div id="carouselOTRA" class="carousel slide" data-ride="carousel" data-interval="10000">

    <div class="carousel-inner">
      <?php $isFirst = true; foreach( $mypostsOTRA as $postOTRA ) :  setup_postdata($postOTRA); ?>
      <div class="item <?php if($isFirst){ echo("active"); $isFirst = false; }?>" style="background-image: url('<?php echo(get_the_post_thumbnail_url($postOTRA->ID)) ?>')">
        <div class="overlay-slider"></div>
        <div>
          <a href="<?php echo get_post_permalink($postOTRA->ID); ?>">
            <h1><?php echo($postOTRA->post_title); ?></h1>
            <span>
              <p><?php the_excerpt(); ?></p>
              <p class="noBold">
                <span class="glyphicon glyphicon-calendar"></span> <?php echo date("d/m/Y", strtotime($postOTRA->post_date)) ?> &nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-user"></span> par <?php echo get_author_name($postOTRA->post_author) ?> &nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-comment"></span> <?php echo($postOTRA->comment_count) ?> commentaire<?php if($postOTRA->comment_count > 1) echo("s"); ?>
              </p>
            </span>
          </a>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carouselOTRA" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carouselOTRA" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

<?php
global $postEBL;
$argsEBL = array( 'category_name' => 'Recettes' );
$mypostsEBL = get_posts( $argsEBL );
$postEBL0 = $mypostsEBL[0];
setup_postdata($postEBL0);
?>
<!--
  <div id="carouselEBL" class="carousel" data-interval="8000">
    <div class="carousel-inner">
      <div class="item active">

        <div class="align-left halfItem" style="background-image: url('<?php echo(get_the_post_thumbnail_url($postEBL0->ID)) ?>')">
          <div class="overlay-slider"></div>
          <div class="width100">
            <a href="<?php echo get_post_permalink($postEBL0->ID); ?>">
              <h1><?php echo($postEBL0->post_title); ?></h1>
              <span>
                <p><?php the_excerpt(); ?></p>
                <p class="noBold">
                  <span class="glyphicon glyphicon-calendar"></span> <?php echo date("d/m/Y", strtotime($postEBL0->post_date)) ?> &nbsp;&nbsp;&nbsp;
                  <span class="glyphicon glyphicon-user"></span> par <?php echo get_author_name($postEBL0->post_author) ?> &nbsp;&nbsp;&nbsp;
                  <span class="glyphicon glyphicon-comment"></span> <?php echo($postEBL0->comment_count) ?> commentaire<?php if($postEBL0->comment_count > 1) echo("s"); ?>
                </p>
              </span>
            </a>
          </div>
        </div>
-->
<?php
$postEBL1 = $mypostsEBL[1];
setup_postdata($postEBL1);
?><!--
        <div class="align-right halfItem" style="background-image: url('<?php echo(get_the_post_thumbnail_url($postEBL1->ID)) ?>')">
          <div class="overlay-slider"></div>
          <div  class="width100">
            <a href="<?php echo get_post_permalink($postEBL1->ID); ?>">
              <h1><?php echo($postEBL1->post_title); ?></h1>
              <span>
                <p><?php the_excerpt(); ?></p>
                <p class="noBold">
                  <span class="glyphicon glyphicon-calendar"></span> <?php echo date("d/m/Y", strtotime($postEBL1->post_date)) ?> &nbsp;&nbsp;&nbsp;
                  <span class="glyphicon glyphicon-user"></span> par <?php echo get_author_name($postEBL1->post_author) ?> &nbsp;&nbsp;&nbsp;
                  <span class="glyphicon glyphicon-comment"></span> <?php echo($postEBL1->comment_count) ?> commentaire<?php if($postEBL1->comment_count > 1) echo("s"); ?>
                </p>
              </span>
            </a>
          </div>
        </div>
        <a href="<?php echo get_category_link(3); ?>">
          <div class="align-right moreInfoItem" style="background-color:white;">
            <p>La suite des recettes</p>
              <img src="<?php echo content_url(); ?>/uploads/2017/08/curvedArrow.png" style="width: 80px; height: 115px;"/>
            <span style="margin-top: 50px;">
                <img src="<?php echo content_url(); ?>/uploads/2017/08/boco-plus.png" style="width: 80px; height: 115px; margin-top: 100%;"/>
            </span>
            <p>C'est par ici</p>
          </div>
        </a>
      </div>
    </div>
  </div>-->

<?php
global $postSL;
$argsSL = array( 'category_name' => 'Slow living' );
$mypostsSL = get_posts( $argsSL );
?>

  <div id="carouselSL" class="carousel slide" data-ride="carousel" data-interval="10000">
    <div class="carousel-inner">
      <?php $isFirst = true; foreach( $mypostsSL as $postSL ) :  setup_postdata($postSL); ?>
          <div class="item <?php if($isFirst){ echo("active"); $isFirst = false; }?>" style="background-image: url('<?php echo(get_the_post_thumbnail_url($postSL->ID)) ?>')">
            <div class="overlay-slider"></div>
            <div>
              <a href="<?php echo get_post_permalink($postSL->ID); ?>">
                <h1><?php echo($postSL->post_title); ?></h1>
                <span>
                  <p><?php the_excerpt(); ?></p>
                  <p class="noBold">
                    <span class="glyphicon glyphicon-calendar"></span> <?php echo date("d/m/Y", strtotime($postSL->post_date)) ?> &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-user"></span> par <?php echo get_author_name($postSL->post_author) ?> &nbsp;&nbsp;&nbsp;
                    <span class="glyphicon glyphicon-comment"></span> <?php echo($postSL->comment_count) ?> commentaire<?php if($postSL->comment_count > 1) echo("s"); ?>
                  </p>
                </span>
              </a>
            </div>
          </div>
      <?php endforeach; ?>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#carouselSL" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carouselSL" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>

<?php get_template_part('includes/footer'); ?>
