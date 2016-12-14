<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Oriana
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<!--[if IE 7]>
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/fonts/fontello/css/fontello-ie7.css">
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
       <div class="menu-logo">
           <div class="wrapper">
				<?php if ( get_theme_mod('pp_logo_upload') ) { ?>
				   <div class="left"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_mod('pp_logo_upload')); ?>" /></a></div>
				<?php } else if (get_theme_mod('text_logo_1')){  ?>
					<h1 class="left"><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html(get_theme_mod('text_logo_1')); ?><span class="gray"><?php echo esc_html(get_theme_mod('text_logo_2')); ?></span></a></h1>
				<?php } else {  ?>
					<h1 class="left"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
				<?php } ?>		   
               <nav class="menu-mobile">
                   <a class="mobile-click">
                       <span></span>
                       <span></span>
                       <span></span>
                   </a>
				   <?php if ( has_nav_menu( 'main-menu' ) ) { ?>
				      <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu-top menu-top-mobile close">%3$s</ul>'  ) ); ?>
				   <?php } else { ?>
					  <?php wp_nav_menu(  array( 'menu_class'  => 'menu-top menu-top-mobile close') ); ?>	
				   <?php } ?>
               </nav>
               <nav class="menu-top-container">
			   		<?php if ( has_nav_menu( 'main-menu' ) ) { ?>
				      <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'main-menu', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>'  ) ); ?>
				   <?php } else { ?>
					  <?php wp_nav_menu(  array( 'menu_class'  => 'menu-top') ); ?>	
				   <?php } ?>
               </nav>
           </div>
       </div>
    </header>