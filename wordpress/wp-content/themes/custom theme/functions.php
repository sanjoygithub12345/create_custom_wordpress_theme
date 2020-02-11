<?php
function myfun()
{
	 
	 	// style link
	 	wp_enqueue_style('flaticon.css',get_template_directory_uri().'/assets/css/flaticon.css',array(),'1.0','all');
	 	wp_enqueue_style('font-awesome.min.css',get_template_directory_uri().'font-awesome.min.css',array(),'1.0','all');
	 	wp_enqueue_style('animate.css',get_template_directory_uri().'/assets/css/animate.css',array(),'1.0','all');
	 	wp_enqueue_style('text-animation.css',get_template_directory_uri().'/assets/css/text-animation.css',array(),'1.0','all');
	 	wp_enqueue_style('fancybox.min.css',get_template_directory_uri().'/assets/css/jquery.fancybox.min.css',array(),'1.0','all');
	 	wp_enqueue_style('magnific-popup.min.css',get_template_directory_uri().'/assets/css/magnific-popup.min.css',array(),'1.0','all');
	 	wp_enqueue_style('owl.carousel.min.css',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0','all');
	 	wp_enqueue_style('layers.css',get_template_directory_uri().'/rs-plugin/css/layers.css',array(),'1.0','all');
	 	wp_enqueue_style('settings.css',get_template_directory_uri().'/rs-plugin/css/settings.css',array(),'1.0','all');
	 	wp_enqueue_style('bootstrap.min.css',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0','all');
	 	wp_enqueue_style('plugins.css',get_template_directory_uri().'/assets/css/plugins.css',array(),'1.0','all');
	 	wp_enqueue_style('icons.css',get_template_directory_uri().'/assets/css/icons.css',array(),'1.0','all');
	 	wp_enqueue_style('menu-css.css',get_template_directory_uri().'/assets/css/menu-css.css',array(),'1.0','all');
	 	wp_enqueue_style('main.css',get_template_directory_uri().'/assets/css/main.css',array(),'1.0','all');
	 	wp_enqueue_style('responsive.css',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0','all');
        // script link
         	wp_enqueue_script('jquery.min.js',get_template_directory_uri().'/assets/js/jquery.min.js',array(),'1.0',true);
         	wp_enqueue_script('modernizr.js',get_template_directory_uri().'/assets/js/modernizr.js',array(),'1.0',true);
         	wp_enqueue_script('waypoints.min.js',get_template_directory_uri().'/assets/js/waypoints.min.js',array(),'1.0',true);
         	wp_enqueue_script('bootstrap.min.js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array(),'1.0',true);
         	wp_enqueue_script('plugins.js',get_template_directory_uri().'/assets/js/plugins.js',array(),'1.0',true);
         	wp_enqueue_script('jquery.scrollUp.min.js',get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js',array(),'1.0',true);
         	wp_enqueue_script('gmaps.js',get_template_directory_uri().'/assets/js/gmaps.js',array(),'1.0',true);
         	wp_enqueue_script('jquery.fancybox.min.js',get_template_directory_uri().'/assets/js/jquery.fancybox.min.js',array(),'1.0',true);
         	wp_enqueue_script('jquery.magnific-popup.min.js',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',array(),'1.0',true);
         	wp_enqueue_script('isotope.pkgd.min.js',get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',array(),'1.0',true);
         	wp_enqueue_script('counterup.min.js',get_template_directory_uri().'/assets/js/counterup.min.js',array(),'1.0',true);
         	wp_enqueue_script('owl.carousel.min.js',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array(),'1.0',true);
         	wp_enqueue_script('wow.min.js',get_template_directory_uri().'/assets/js/wow.min.js',array(),'1.0',true);
         	wp_enqueue_script('jquery.lettering.js',get_template_directory_uri().'/assets/js/jquery.lettering.js',array(),'1.0',true);
         	wp_enqueue_script('jquery.textillate.js',get_template_directory_uri().'/assets/js/jquery.textillate.js',array(),'1.0',true);
         	wp_enqueue_script('mixitup.js',get_template_directory_uri().'/assets/js/mixitup.js',array(),'1.0',true);
         	wp_enqueue_script('chart.js',get_template_directory_uri().'/assets/js/chart.js',array(),'1.0',true);
         	wp_enqueue_script('jquery.themepunch.tools.min.js',get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js',array(),'1.0',true);
         	wp_enqueue_script('jquery.themepunch.revolution.min.js',get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js',array(),'1.0',true);
         	wp_enqueue_script('revolution.extension.actions.min.js',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js',array(),'1.0',true);

         	wp_enqueue_script('revolution.extension.kenburn.min.js',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js',array(),'1.0',true);

         	wp_enqueue_script('revolution.extension.layeranimation.min.js',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js',array(),'1.0',true);

         	wp_enqueue_script('revolution.extension.migration.min.js',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js',array(),'1.0',true);

         	wp_enqueue_script('revolution.extension.navigation.min.js',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js',array(),'1.0',true);

         	wp_enqueue_script('revolution.extension.parallax.min.js',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js',array(),'1.0',true);

         	wp_enqueue_script('revolution.extension.slideanims.min.js',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js',array(),'1.0',true);

         	wp_enqueue_script('revolution.extension.video.min.js',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js',array(),'1.0',true);
         	wp_enqueue_script('custom.js',get_template_directory_uri().'/assets/js/custom.js',array(),'1.0',true);


}
 add_action('wp_enqueue_scripts','myfun');
 register_nav_menu( $location, $description);
 

 ?>

