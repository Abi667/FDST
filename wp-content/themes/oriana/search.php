<?php
/**
 * The template for displaying search
 *
 * @package Oriana
 */
 get_header(); ?>
<div class="mainContainer">
	 <header>
		 <div class="page-title">
			<div class="hover"></div>
			<h2><?php printf( __( 'Search Results for: %s', 'oriana' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
		</div>
	</header>
	<?php get_template_part( 'content', 'posts' ); ?>			
</div>
<?php get_footer(); ?>