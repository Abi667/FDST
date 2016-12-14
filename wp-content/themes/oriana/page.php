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
				<h2><?php the_title(); ?></h2>
			</div>
		</header>	 
        <div class="content spacecontent">
            <div class="wrapper">
                <div class="blog-posts">
                    <div class="single-post">
                        <?php the_content(); ?>
                    </div>
					<div class="padinate-page"><?php wp_link_pages(); ?></div> 						
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