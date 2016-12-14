<?php
/**
 * The template for displaying all pages.
 *
 * @package Oriana
 */
 get_header(); ?>
 <?php while (have_posts()) : the_post(); ?>
     <div class="mainContainer">
	     <header>
			 <div class="page-title">
				<div class="hover"></div>
				<h2><?php _e( 'Blog', 'oriana'); ?></h2>
			</div>
		</header>	 
        <div class="content spacecontent">
            <div class="wrapper">
                <div class="blog-posts">
                    <div class="single-post">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
							<?php the_post_thumbnail($post->ID, 'featured'); ?>	
						<?php endif; ?>
                        <h4><?php the_title(); ?></h4>
						<span><?php _e( 'By', 'oriana' ); ?> <?php the_author(); ?> | <?php the_time( get_option( 'date_format' ) ); ?> | <?php the_category(', '); ?></span>
                        <?php the_content(); ?>
						<div class="padinate-page"><?php wp_link_pages(); ?></div> 							
						<p class="the-blog-item-general-info"><?php the_tags(); ?></p> 
                    </div>
					<div class="comment-block">
						 <?php comments_template(); ?>
                    </div>
                </div>
                <?php  get_sidebar(); ?>
            </div>
        </div>		
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>