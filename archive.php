<?php get_header();?>
<div id="content" class="layout">
  <?php get_sidebar();?> 

  <div id="right">
    <div class="right_title">      
      <h2><?php  single_cat_title();?></h2>
    </div>
    <div class="right_body">      
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<ul class="news">
        <li>
        <a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a>
        </li>
        </ul>
        <?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>      
    </div>
    <?php pagenav($query_string); ?>
  </div>
  <div class="clear"></div>
</div>
<?php get_footer();?> 