<?php 
/**
 * 
 * @package Oriana 
 */
?>
<header>
	<div class="top-slider">
		<div class="item">
			<?php if(get_theme_mod('slider_image_upload1')) { ?>
				<img src="<?php echo esc_html(get_theme_mod('slider_image_upload1')); ?>"/>
			<?php } ?>
			<div class="black-back"></div>
			<div class="carousel-caption">
				<div class="wrapper">
					<?php if(get_theme_mod('slider_title_1')) { ?><h4><?php echo esc_html(get_theme_mod('slider_title_1')); ?></h4><?php } ?>
					<?php if(get_theme_mod('slider_description1')) { ?><p><?php echo esc_html(get_theme_mod('slider_description1')); ?></p><?php } ?>
					<?php if(get_theme_mod('slider_button_color_text1')) { ?><a href="<?php echo esc_url(get_theme_mod('slider_button_color_link1')); ?>" class="button"><?php echo esc_html(get_theme_mod('slider_button_color_text1')); ?></a><?php } ?>
				</div>
			</div>
		</div>	
		<div class="item">
			<?php if(get_theme_mod('slider_image_upload2')) { ?>
				<img src="<?php echo esc_html(get_theme_mod('slider_image_upload2')); ?>"/>
			<?php } ?>
			<div class="black-back"></div>
			<div class="carousel-caption">
				<div class="wrapper">
					<?php if(get_theme_mod('slider_title_2')) { ?><h4><?php echo esc_html(get_theme_mod('slider_title_2')); ?></h4><?php } ?>
					<?php if(get_theme_mod('slider_description2')) { ?><p><?php echo esc_html(get_theme_mod('slider_description2')); ?></p><?php } ?>
					<?php if(get_theme_mod('slider_button_color_text2')) { ?><a href="<?php echo esc_url(get_theme_mod('slider_button_color_link2')); ?>" class="button"><?php echo esc_html(get_theme_mod('slider_button_color_text2')); ?></a><?php } ?>
				</div>
			</div>
		</div>	
	</div>
	<?php if(get_theme_mod('home_message_title')) { ?>
	<div class="quote-projects">
		<div class="wrapper">
			<h3><?php echo esc_html(get_theme_mod('home_message_title')); ?></h3>
			<a href="<?php echo esc_url(get_theme_mod('home_message_button_2_link')); ?>"><?php echo esc_html(get_theme_mod('home_message_button_2_text')); ?></a>
			<a href="<?php echo esc_url(get_theme_mod('home_message_button_1_link')); ?>"><?php echo esc_html(get_theme_mod('home_message_button_1_text')); ?></a>
		</div>
	</div>
	<?php } ?>
</header>
<div class="mainContainer">
	<div class="construction">
		<div class="hover"></div>
		<div class="wrapper clearfix">


			<div class="one-construction">
				<?php if(get_theme_mod('circles_box_image_1')) { ?> <span><i class="icon-<?php echo esc_html(get_theme_mod('circles_box_image_1')); ?>"></i></span><?php } ?>  
				<h4><a href="<?php echo esc_url(get_theme_mod('circles_box_link_1')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_1')); ?></a></h4>
				<p><?php echo esc_html(get_theme_mod('circles_box_content_1')); ?></p>
			</div>	

			<div class="one-construction">
				<?php if(get_theme_mod('circles_box_image_2')) { ?> <span><i class="icon-<?php echo esc_html(get_theme_mod('circles_box_image_2')); ?>"></i></span><?php } ?>  
				<h4><a href="<?php echo esc_url(get_theme_mod('circles_box_link_2')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_2')); ?></a></h4>
				<p><?php echo esc_html(get_theme_mod('circles_box_content_2')); ?></p>
			</div>	

			<div class="one-construction">
				<?php if(get_theme_mod('circles_box_image_3')) { ?> <span><i class="icon-<?php echo esc_html(get_theme_mod('circles_box_image_3')); ?>"></i></span><?php } ?>  
				<h4><a href="<?php echo esc_url(get_theme_mod('circles_box_link_3')); ?>"><?php echo esc_html(get_theme_mod('circles_box_title_3')); ?></a></h4>
				<p><?php echo esc_html(get_theme_mod('circles_box_content_3')); ?></p>
			</div>	
     			
			
		</div>
	</div>
</div>
<?php while (have_posts()) : the_post(); ?>
<div class="content spacecontent homebottomp">
	<div class="wrapper">
		<div class="blog-posts">
			<div class="single-post">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>