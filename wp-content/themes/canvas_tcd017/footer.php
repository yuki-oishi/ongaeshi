<?php $options = get_desing_plus_option(); ?>

 <a id="return_top" href="#header"><?php _e('Return Top', 'tcd-w'); ?></a>

 <?php if(!is_mobile()) { ?>
 <?php if(is_active_sidebar('footer_widget')){ ?>
 <div id="footer">
  <div id="footer_inner" class="clearfix">
   <div id="footer_widget">
    <?php dynamic_sidebar('footer_widget'); ?>
   </div>
  </div><!-- END #footer_inner -->
 </div><!-- END #footer -->
 <?php }; ?>
 <?php } else { ?>
 <?php if(is_active_sidebar('mobile_widget_footer')){ ?>
 <div id="footer">
  <div id="footer_inner" class="clearfix">
   <div id="footer_widget">
    <?php dynamic_sidebar('mobile_widget_footer'); ?>
   </div>
  </div><!-- END #footer_inner -->
 </div><!-- END #footer -->
 <?php }; ?>
 <?php }; ?>


 <div id="footer_logo_area">
  <div id="footer_logo_area_inner" class="clearfix">

    <!-- logo -->
    <?php the_dp_footer_logo(); ?>

    <!-- global menu -->
    <?php if (has_nav_menu('footer-menu')) { ?>
    <div id="footer_menu" class="clearfix">
     <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'footer-menu' , 'container' => '' ) ); ?>
    </div>
    <?php }; ?>

  </div><!-- END #footer_logo_inner -->
 </div><!-- END #footer_logo -->


 <div id="copyright">
  <div id="copyright_inner" class="clearfix">

   <!-- social button -->
   <?php if ($options['show_rss'] or $options['twitter_url'] or $options['facebook_url']) { ?>
   <ul id="social_link" class="clearfix">
    <?php if ($options['show_rss']) : ?>
    <li class="rss"><a class="target_blank" href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
    <?php endif; ?>
    <?php if ($options['twitter_url']) : ?>
    <li class="twitter"><a class="target_blank" href="<?php echo $options['twitter_url']; ?>">Twitter</a></li>
    <?php endif; ?>
    <?php if ($options['facebook_url']) : ?>
    <li class="facebook"><a class="target_blank" href="<?php echo $options['facebook_url']; ?>">facebook</a></li>
    <?php endif; ?>
   </ul>
   <?php }; ?>

   <p><?php _e('Copyright &copy;&nbsp; ', 'tcd-w'); ?><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a> All rights reserved.</p>

  </div>
 </div>

<?php if(is_single() and $options['show_bookmark']) { ?>
<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php }; ?>

<?php wp_footer(); ?>
</body>
</html>