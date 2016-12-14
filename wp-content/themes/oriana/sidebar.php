<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Oriana
 */
?>
<div class="sidebar">
	<?php if ( is_active_sidebar('blog-sidebar') ) : ?>
		<?php dynamic_sidebar('blog-sidebar'); ?>
	<?php else : ?>	
		<div class="widget">
			<h3 class="widget-title"><?php _e( 'Recent Posts', "oriana" ); ?></h3>
			<ul>
				<?php wp_get_archives('type=postbypost&limit=10'); ?>
			</ul>
		</div>
		<div class="widget">
			<h3 class="widget-title"><?php _e( 'Pages', "oriana" ); ?></h3>
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</div>
		<div class="widget">
			<h3 class="widget-title"><?php _e( 'Tag Cloud', "oriana" ); ?></h3>
			<div class="tagcloud">
				<?php wp_tag_cloud(); ?>
			</div>
		</div>
		<div class="widget">
			<h3 class="widget-title"><?php _e( 'Categories', "oriana" ); ?></h3>
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
		</div>		
	<?php endif; ?>
</div>