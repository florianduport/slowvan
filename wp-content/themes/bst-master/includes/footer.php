<footer class="container site-footer">
  <hr/>
	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
  <hr/>
  <div class="row">
    <div class="col-lg-12 site-sub-footer">
      <p>
        <a href="https://www.facebook.com/theslowvan/" target="_blank" rel="nofollow"><img src="<?php echo content_url(); ?>/uploads/2017/08/social-1_logo-facebook.svg"/></a>
        <a href="https://www.instagram.com/theslowvan/" target="_blank" rel="nofollow"><img src="<?php echo content_url(); ?>/uploads/2017/08/social-1_logo-instagram.svg"/></a>
        <a href="https://fr.pinterest.com/theslowvan/" target="_blank" rel="nofollow"><img src="<?php echo content_url(); ?>/uploads/2017/08/social-1_logo-pinterest.svg"/></a>
      </p>
      <p>Fait avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> à Bordeaux par Cindy et Florian</p>
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
