<?php
/**
 * The template for displaying archive
 *
 *
 * @package Oriana
 */
 get_header(); ?>
<div class="mainContainer">
	 <header>
		 <div class="page-title">
			<div class="hover"></div>
			<h2><?php
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'oriana' ), '<span>' . get_the_date() . '</span>' );
				elseif ( is_month() ) :
					printf( __( 'Monthly Archives: %s', 'oriana' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'oriana' ) ) . '</span>' );
				elseif ( is_year() ) :
					printf( __( 'Yearly Archives: %s', 'oriana' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'oriana' ) ) . '</span>' );
				else :
					_e( 'Archives', 'oriana' );
				endif;
			?></h2>
		</div>
	</header>
	<?php get_template_part( 'partials/content', 'posts' ); ?>				
</div>
<?php get_footer(); ?>