<?php get_header();?>
<div id="content" class="layout">
<?php get_sidebar();?>
	<div id="right">    
		<div class="right_title">
		<h2>详情</h2>
		</div>
		<div class="right_body">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<h1><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h1>              
	
        <div class="pg_more"></div>
		<?php the_content("Read More..."); ?>
        <div class="pg_more"></div>
		<div style="float:left"><?php previous_post_link('&laquo; %link'); ?></div>
		<div style="float:right"><?php next_post_link('%link &raquo;'); ?></div>
		<?php endwhile; ?>
        <div class="pg_more"></div>
        <?php// comments_template(); ?>
		<?php else : ?>
		<?php endif; ?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer();?>