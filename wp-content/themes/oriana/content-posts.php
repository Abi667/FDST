<?php 
/**
 * 
 * @package Oriana 
 */
?>
<div class="content spacecontent">
	<div class="wrapper">
		<div class="blog-posts">
			<?php while (have_posts()) : the_post(); ?>
			<div class="one-blog" >
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<?php the_post_thumbnail($post->ID, 'featured'); ?>
					<?php endif; ?>	
					<h4><a href="<?php the_permalink() ?>"><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></a></h4>
					<?php the_excerpt(); ?>
					<span><?php _e( 'By', 'oriana' ); ?> <?php the_author(); ?> | <?php the_time( get_option( 'date_format' ) ); ?> | <?php the_category(', '); ?></span>
					<a href="<?php the_permalink() ?>" class="more"><?php _e( 'Read More', 'oriana' ); ?></a>
					<div class="divider"></div>
				</div>	
			</div>
			<?php endwhile; ?>
			<span class="prev"><?php next_posts_link(__('Previous Posts', 'oriana')) ?></span>
			<span class="next"><?php previous_posts_link(__('Next posts', 'oriana')) ?></span>						
		</div>
	   <?php  get_sidebar(); ?>
	</div>
</div>	