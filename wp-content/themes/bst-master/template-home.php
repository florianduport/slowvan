<?php


  get_template_part('includes/header');

?>

<div id="global-body">

<div id="carouselOTRA" class="carousel slide" data-ride="carousel" data-interval="10000">
  <div class="carousel-inner">
    <div class="item active" style="background-image: url('https://www.novo-monde.com/app/uploads/2017/06/DSC06597.jpg')">
      <div class="overlay-slider"></div>
      <div>
        <h1>VOYAGE QUELQUE PART</h1>
        <span>
          <p>Si vous vous demandez avec quoi on part pour marcher 4-5 semaines à travers la Suisse, on vous dévoile tout le contenu de notre sac à dos dans cet article :)</p>
          <p>04/08/2017 - 0 commentaires</p>
        </span>
      </div>
    </div>

    <div class="item" style="background-image: url('https://www.novo-monde.com/app/uploads/2017/06/DSC06597.jpg')">
      <div class="overlay-slider"></div>
      <div>
        <h1>VOYAGE QUELQUE PART</h1>
        <span>
          <p>Si vous vous demandez avec quoi on part pour marcher 4-5 semaines à travers la Suisse, on vous dévoile tout le contenu de notre sac à dos dans cet article :)</p>
          <p>04/08/2017 - 0 commentaires</p>
        </span>
      </div>
    </div>
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


<div id="carouselEBL" class="carousel slide" data-ride="carousel" data-interval="8000">
  <div class="carousel-inner">
    <div class="item active">
      <div class="align-left halfItem" style="background-image: url('http://petitsbeguins.fr/wp-content/uploads/2015/10/meilleur-cookie-paris-petits-beguins.png')">
        <div class="overlay-slider"></div>
        <div>
          <h1>VOYAGE QUELQUE PART</h1>
          <span>
            <p>Si vous vous demandez avec quoi on part pour marcher 4-5 semaines à travers la Suisse, on vous dévoile tout le contenu de notre sac à dos dans cet article :)</p>
            <p>04/08/2017 - 0 commentaires</p>
          </span>
        </div>
      </div>
      <div class="align-right halfItem" style="background-image: url('http://petitsbeguins.fr/wp-content/uploads/2014/03/bouquet-de-bonbons-diy-petits-beguins-2.png')">
        <div class="overlay-slider"></div>
        <div>
          <h1>VOYAGE QUELQUE PART</h1>
          <span>
            <p>Si vous vous demandez avec quoi on part pour marcher 4-5 semaines à travers la Suisse, on vous dévoile tout le contenu de notre sac à dos dans cet article :)</p>
            <p>04/08/2017 - 0 commentaires</p>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>

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
              <h1><?php echo($postSL->post_title); ?></h1>
              <span>
                <p><?php the_content(); ?></p>
                <p>04/08/2017 - 0 commentaires</p>
              </span>
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
