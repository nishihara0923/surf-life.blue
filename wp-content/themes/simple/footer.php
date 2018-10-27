</div><!-- .site-content -->
<div id="site-footer">
<div id="colophon">
<?php dynamic_sidebar('footer_sidebar'); ?>
</div><!-- #colophon -->
</div><!-- #site-footer -->
<div class="site-info">
<div class="copyright">Copyright ©  <?php echo date("Y")." ".get_bloginfo( 'name', 'display' );?> All rights reserved.</div>
</div><!-- .site-info -->
<div id="page-top"><a href="#"><span class="icon-top"></span></a></div>
<script src="<?php bloginfo('template_url'); ?>/js/footer.js" type="text/javascript"></script>
<?php wp_footer(); ?>
<!--[if IE 7]><script src="<?php bloginfo('template_url'); ?>/icon/ie7/ie7.js"></script><![endif]-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-77342795-1', 'auto');
ga('send', 'pageview');
</script>
</body>
</html>