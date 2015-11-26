<?php get_header();?>
<div id="content" class="layout">
<?php get_sidebar();?>  

  <div id="right">
    <div class="right_title">
      <h2>公司简介</h2>
    </div>    
    <div class="right_body"> 
    <P>　　深圳市博灵特电气自动化技术有限公司是一家专业低压电气及电气智能化产品的代理销售公司，公司代理众多国外及国内著名品牌电气产品。目前是HAGER(中国)有限公司在中国的合法授权集成商。专业从事 KNX智能控制系统的设计,安装,调试以及销售。也是南京亚派科技深圳区代理，从事低压电气元器件的销售。同时也是世德合金电缆在深圳的经销商及山东比特电子的特约经销商，从事酒店专业电话机及客控系统的安装，设计及销售。公司成立于2012年,公司成立以来,一贯奉行互惠互利,重合同,守信用的经营方针,珍惜在发展中的每一个机会,严格遵循"客户至上,服务第一"的工作宗旨,与客户建立起良好的关系.始终贯彻"安全,可靠,有效,经济"的指导思想服务于客户,为客户提供完善的全方位技术服务,赢得了广大客户的信任和良好的社会声誉。</P></div>
    
    <div class="right_title">
      <h2>技术推广</h2>
    </div>
  <div class="right_body" >
            
				<?php if (have_posts()) : ?>
                <?php query_posts('cat=14' . $mcatID. '&caller_get_posts=10&showposts=3'); ?>
                <?php while (have_posts()) : the_post(); ?>
                <ul class="products" >
				<li>
				<a href="<?php the_permalink() ?>"><?php post_thumbnail();?></a>
				<br /><p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                </li>
                </ul>
                <?php endwhile;?>
				<?php else : ?>
				<?php endif; ?>
				
    </div>
    
    <div class="right_title">
      <h2>行业动态</h2>
    </div>
    <div class="right_body">
    <?php if (have_posts()) : ?>
	<?php query_posts('cat=13&showposts=11'); ?>
	<?php while (have_posts()) : the_post(); ?>
		<ul class="news">
        <li>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
		</ul>
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
    </div>
  </div>
  <div class="clear"></div>
</div>

<div id="link_text" class="layout">
  <ul>
<li><font color="white"><b>友情链接:</b></font></li>
<li><a href="http://www.hager.cn/" target="_blank">海格电气中国官方网站</a></li>
<li><a href="http://www.apex-power.net/" target="_blank">南京亚派科技股份有限公司</a></li>
<?php// wp_list_bookmarks('title_li=&categorize=0&orderby=rand&limit=24'); ?>
  </ul>
</div>
<div class="clear"></div>
<!--<script language="javascript" src="http://code.bzooz.com/kefu/js/33/44233.js" charset="utf-8"></script>  -->
<?php get_footer();?>