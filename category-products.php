<?php get_header();?>
<div id="content" class="layout">
  <?php get_sidebar();?>

  <div id="right">
    <div class="right_title">      
      <h2>产品中心</h2>
    </div>
    <div class="right_body">
		<?php if ($posts_perpage) { ?>
		<?php $postsperpage = $posts_perpage; ?>
		<?php } else { ?>
		<?php $postsperpage = 12; ?>
		<?php } ?>        	 
		<?php $categoryID=$cat;$wp_query = new WP_Query('cat=' . $categoryID. 'orderby=date&order=desc&posts_per_page='.$postsperpage.'&paged='.$paged); ?>
		<?php while (have_posts()) : the_post(); ?>
		<ul class="products">
			<li>
			<a href="<?php the_permalink() ?>"><?php post_thumbnail();?></a>
			<br /><p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
			</li>
		</ul>
		<?php endwhile;?>
		</div>
		<?php pagenav($query_string); ?>
	</div>
	<div class="clear"></div>
</div>
<?php get_footer();?>

