<footer class="site-footer">
  <br/><br/><br/>
	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
  <div class="row">
    <div class="col-lg-12 site-sub-footer">
      <p>
        <a href="https://www.facebook.com/theslowvan/" target="_blank" rel="nofollow"><img src="<?php echo content_url(); ?>/uploads/2017/08/social-1_logo-facebook.svg"/></a>
        - <a href="https://www.instagram.com/theslowvan/" target="_blank" rel="nofollow"><img src="<?php echo content_url(); ?>/uploads/2017/08/social-1_logo-instagram.svg"/></a>
        - <a href="https://fr.pinterest.com/theslowvan/" target="_blank" rel="nofollow"><img src="<?php echo content_url(); ?>/uploads/2017/08/social-1_logo-pinterest.svg"/></a>
      </p>
      <p>Fait avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> à Bordeaux par Cindy et Florian</p>
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> - <a href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ) ?>">Nous contacter</a> - <a href="/fr/others/a-propos-de-nous/">A propos</a> <!-- - <a href="http://slowvan.com/en/">English version</a>--></p>
    </div>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103668649-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
