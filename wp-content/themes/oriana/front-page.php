<?php 
/**
 * 
 * @package Oriana 
 */
get_header(); 
if ( have_posts() ) : 
if ( 'posts' == get_option( 'show_on_front')) {
?>
    <div class="mainContainer">
      <div class="mainContainer">
	     <header>
			 <div class="page-title">
				<div class="hover"></div>
				<h2><?php _e( 'Blog', 'oriana'); ?></h2>
			</div>
		</header>	
        <?php get_template_part( 'content', 'posts' ); ?>			
    </div>
<?php } else { ?>		
        <?php get_template_part( 'content', 'home' ); ?>
<?php } 
endif; 
get_footer(); ?>