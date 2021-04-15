<?php $options = get_desing_plus_option(); ?>

<div id="side_col">

 <?php
      if(is_single() and ('post' == get_post_type())) {

        if(!is_mobile()) {
          if(is_active_sidebar('single_side_widget')) { dynamic_sidebar('single_side_widget'); }; 
        } else {
          if(is_active_sidebar('mobile_widget_single')) { dynamic_sidebar('mobile_widget_single'); };
        };

      } elseif(is_page()) {

        if(!is_mobile()) {
          if(is_active_sidebar('pages_side_widget')) { dynamic_sidebar('pages_side_widget'); };
        } else {
          if(is_active_sidebar('mobile_widget_pages')) { dynamic_sidebar('mobile_widget_pages'); };
        };

      } elseif('product' == get_post_type()) {

        if(!is_mobile()) {
          if(is_active_sidebar('product_side_widget')) { dynamic_sidebar('product_side_widget'); }; 
        } else {
          if(is_active_sidebar('mobile_widget_product')) { dynamic_sidebar('mobile_widget_product'); };
        };

      } elseif('news' == get_post_type()) {

        if(!is_mobile()) {
          if(is_active_sidebar('news_side_widget')) { dynamic_sidebar('news_side_widget'); }; 
        } else {
          if(is_active_sidebar('mobile_widget_news')) { dynamic_sidebar('mobile_widget_news'); };
        };

      } else {

        if(!is_mobile()) {
          if(is_active_sidebar('archive_side_widget')) { dynamic_sidebar('archive_side_widget'); }; 
        } else {
          if(is_active_sidebar('mobile_widget_archive')) { dynamic_sidebar('mobile_widget_archive'); };
        };

      };
 ?>

</div>