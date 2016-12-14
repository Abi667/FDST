<?php
/**
 * The main template file.
 *
 * @package Oriana
 */
get_header(); ?>
<div class="mainContainer">
	 <header>
		 <div class="page-title">
			<div class="hover"></div>
			<h2><?php _e( 'Blog', 'oriana'); ?></h2>
		</div>	
	</header>
	<?php get_template_part( 'content', 'posts' ); ?>				
</div>
<?php get_footer(); ?>