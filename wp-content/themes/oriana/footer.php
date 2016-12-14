<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Oriana
 */
?>
    <footer>
        <div class="footer">
            <div class="wrapper">
				<?php if ( is_active_sidebar('footer-widget-area') ) : ?>
				<?php dynamic_sidebar('footer-widget-area'); ?>
				<?php else : ?>	
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Recent Posts', "oriana" ); ?></h3>
						<ul>
							<?php wp_get_archives('type=postbypost&limit=10'); ?>
						</ul>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Tag Cloud', "oriana" ); ?></h3>
						<div class="tagcloud">
							<?php wp_tag_cloud(); ?>
						</div>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Pages', "oriana" ); ?></h3>
						<ul>
							<?php wp_list_pages('title_li='); ?>
						</ul>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Categories', "oriana" ); ?></h3>
						<ul>
							<?php wp_list_categories('title_li='); ?>
						</ul>
					</div>
				<?php endif; ?>	
            </div>
        </div>
        <div class="copyright">
            <div class="wrapper">
				<?php if ( get_theme_mod('pp_copyrights') ) { ?> <p class="left"><?php echo get_theme_mod('pp_copyrights'); ?></p><?php } ?>
                <p class="right"><?php do_action( 'oriana_display_credits' ); ?></p>
            </div>
        </div>
    </footer>
	 <?php wp_footer(); ?>	
</body>
</html>