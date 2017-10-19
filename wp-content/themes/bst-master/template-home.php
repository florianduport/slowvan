<?php

  /**
  * Template Name: Front Page
  */
  get_template_part('includes/header');

?>

<div id="global-body">
<h4 class="titleZone">Decouvrez notre dernier article ! <i class="glyphicon glyphicon-time"></i> </h4>
<?php
global $postOTRA;
$argsOTRA = array( 'category_name' => 'Roadtrip' );
$mypostsOTRA = get_posts( $argsOTRA );
?>
<!--
  <div id="carouselOTRA" class="carousel" data-ride="carousel" data-interval="10000">

    <div class="carousel-inner"> -->
      <?php $isFirst = true; $postOTRA = $mypostsOTRA[0];  setup_postdata($postOTRA); ?>
        <div id="carouselOTRA" class="carousel" data-ride="carousel" data-interval="10000">

          <div class="carousel-inner">
      <div class="item active" style="background-image: url('<?php echo(get_the_post_thumbnail_url($postOTRA->ID)) ?>')">
        <div class="overlay-slider"></div>
        <div>
          <a href="<?php echo get_permalink($postOTRA->ID); ?>">
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
      </div></div></div>

<?php
global $postEBL;
$argsEBL = array( 'category_name' => 'el-boco-loco' );
$mypostsEBL = get_posts( $argsEBL );
$postEBL0 = $mypostsEBL[0];
//$mypostsEBL[0] = $mypostsOTRA[0];
setup_postdata($postEBL0);
?>

<?php
$postEBL1 = $mypostsEBL[1];
setup_postdata($postEBL1);
?>

<?php
global $postSL;
$argsSL = array( 'category_name' => 'Slow living' );
$mypostsSL = get_posts( $argsSL );
?>
</div>
<div class="greyZone">
  <h4 class="titleZone"><i class="glyphicon glyphicon-globe"></i> L'aventure continue</h4>
  <div class="greyZoneInner">
    <div class="row">

      <div class="col-md-6 greyZoneMainDiv">
        <?php $isFirst = true; $postOTRA = $mypostsOTRA[1]; setup_postdata($postOTRA);
        $custom_fields = get_post_custom($postOTRA->ID);
        $my_custom_field = $custom_fields['secondImage'];
        $postThumbnailUrl = get_the_post_thumbnail_url($postOTRA->ID);
        foreach ( $my_custom_field as $key => $value ) {
          if($value != null && $value != ""){
            $postThumbnailUrl = $value;
          }
        }
        ?>
          <div id="carouselOTRA" class="carousel" data-ride="carousel" data-interval="10000">
            <div class="carousel-inner">
              <div class="item active" style="background-image: url('<?php echo(get_the_post_thumbnail_url($postOTRA->ID)) ?>')">
                <div class="overlay-slider"></div>
                <div>
                  <a href="<?php echo get_permalink($postOTRA->ID); ?>">
                    <h1><?php echo($postOTRA->post_title); ?></h1>
                    <span>
                      <p class="noBold">
                        <span class="glyphicon glyphicon-calendar"></span> <?php echo date("d/m/Y", strtotime($postOTRA->post_date)) ?> &nbsp;&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-user"></span> par <?php echo get_author_name($postOTRA->post_author) ?> &nbsp;&nbsp;&nbsp;
                        <span class="glyphicon glyphicon-comment"></span> <?php echo($postOTRA->comment_count) ?> commentaire<?php if($postOTRA->comment_count > 1) echo("s"); ?>
                      </p>
                    </span>
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="col-md-6 greyZoneMainDiv">
        <div class="stamp">
          <div class="newsletter">
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
            <form action="https://slowvan.us17.list-manage.com/subscribe/post?u=b4276cb3618458fe2fc785a1b&amp;id=dfd1b5fa51" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
            	<h2>Slow van dans ta boite mail</h2>
              <p>Allez viens abonnes-toi pour suivre toutes nos aventures !</p><br/>
            <div class="mc-field-group">
            	<label for="mce-EMAIL">Adresse email <span class="asterisk">* (requis)</span>
            </label>
            	<input type="email" value="" name="EMAIL" required class="required email" id="mce-EMAIL">
            </div>
            <div class="mc-field-group">
            	<label for="mce-LNAME">Prenom </label>
            	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
            </div>
            	<div id="mce-responses" class="clear">
            		<div class="response" id="mce-error-response" style="display:none"></div>
            		<div class="response" id="mce-success-response" style="display:none"></div>
            	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b4276cb3618458fe2fc785a1b_d6b73583be" tabindex="-1" value=""></div>
                <div class="clear newsletterBtn"><br/><input type="submit" value="Je vous aime bien !" name="subscribe" id="mc-embedded-subscribe" class="button btn-success"></div>
                </div>
            </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
        </div>
      </div>

      <?php $isFirst = true; foreach( array_merge(array_slice($mypostsOTRA,2), $mypostsSL) as $postOTRA ) :  setup_postdata($postOTRA);
      $custom_fields = get_post_custom($postOTRA->ID);
      $my_custom_field = $custom_fields['secondImage'];
      $postThumbnailUrl = get_the_post_thumbnail_url($postOTRA->ID);
      foreach ( $my_custom_field as $key => $value ) {
        if($value != null && $value != ""){
          $postThumbnailUrl = $value;
        }
      }
      ?>
        <div class="col-md-6 greyZoneMainDiv">
            <div id="carouselOTRA" class="carousel" data-ride="carousel" data-interval="10000">
              <div class="carousel-inner">
                <div class="item active" style="background-image: url('<?php echo($postThumbnailUrl) ?>')">
                  <div class="overlay-slider"></div>
                  <div>
                    <a href="<?php echo get_permalink($postOTRA->ID); ?>">
                      <h1><?php echo($postOTRA->post_title); ?></h1>
                      <span>
                        <p class="noBold">
                          <span class="glyphicon glyphicon-calendar"></span> <?php echo date("d/m/Y", strtotime($postOTRA->post_date)) ?> &nbsp;&nbsp;&nbsp;
                          <span class="glyphicon glyphicon-user"></span> par <?php echo get_author_name($postOTRA->post_author) ?> &nbsp;&nbsp;&nbsp;
                          <span class="glyphicon glyphicon-comment"></span> <?php echo($postOTRA->comment_count) ?> commentaire<?php if($postOTRA->comment_count > 1) echo("s"); ?>
                        </p>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>

<?php if($mypostsEBL != null): ?>
<div class="kitchenZone">
  <h4 class="titleZone"><i class="glyphicon glyphicon-cutlery"></i> Qu'est-ce qu'on mange ce soir dans le van ?</h4>
  <div class="kitchenZoneInner">
    <div class="row">
      <?php $isFirst = true; foreach($mypostsEBL as $postOTRA ) :  setup_postdata($postOTRA); ?>
        <div class="kitchenZoneMainDiv">
            <div id="carouselOTRA" class="carousel" data-ride="carousel" data-interval="10000">
              <div class="carousel-inner">
                <div class="item active" style="background-image: url('<?php echo(get_the_post_thumbnail_url($postOTRA->ID)) ?>')">
                </div>
              </div>
          </div>
          <div>
            <a href="<?php echo get_permalink($postOTRA->ID); ?>">
              <h1><?php echo($postOTRA->post_title); ?></h1>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php endif; ?>

<?php get_template_part('includes/footer'); ?>
