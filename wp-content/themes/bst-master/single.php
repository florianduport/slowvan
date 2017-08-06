<?php get_template_part('includes/header'); ?>

<div id="global-body">

  <div class="articlethumbnail" style="background-image: url('<?php echo(get_the_post_thumbnail_url(get_the_ID())) ?>');">
    <h1><?php the_title()?></h1>
  </div>
  <div class="container">
    <div class="row">

      <div class="">
        <div id="content" role="main">
          <?php get_template_part('includes/loops/content', 'single'); ?>
        </div><!-- /#content -->
      </div>

    </div><!-- /.row -->
  </div><!-- /.container -->
</div>
<?php get_template_part('includes/footer'); ?>
