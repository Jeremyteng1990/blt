<?php get_header();?>
<div id="content" class="layout">
<?php get_sidebar();?>
	<div id="right">    
		<div class="right_title">
		<h2><?php the_title_attribute(); ?></h2>
		</div>
		<div class="right_body">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<h1><a href="<?php //the_permalink() ?>"><?php //the_title_attribute(); ?></a></h1>  
          
		
        <div class="kuangjia"></div>
		<?php the_content("Read More..."); ?>
    
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer();?>