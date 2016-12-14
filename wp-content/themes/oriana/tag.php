<?php
/**
 * The template for displaying tag
 *
 *
 * @package Oriana
 */
 get_header(); ?>
<div class="mainContainer">
	 <header>
		 <div class="page-title">
			<div class="hover"></div>
			<h2><?php printf( __( 'Tag Archives: %s', 'oriana' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h2>
		</div>
	</header>
	<?php get_template_part( 'content', 'posts' ); ?>										
</div>
<?php get_footer(); ?>