<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php if (is_home()||is_search()) { bloginfo('name'); } else { wp_title(''); print " - "; bloginfo('name'); } ?> </title>
<meta name="keywords" content="<?php bloginfo('name'); ?>、智能照明、开关面板、KNX智能控制系统、海格、亚派科技、低压电器元件" /> 
<meta name="description" content="<?php bloginfo('description'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php wp_head(); ?>
</head>
<body>
<div id="top" class="layout">
  <div id="logo"><a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" width="300" height="70" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" /></a></div>
 <!--<div id="top_ad">
    <img src="<?php bloginfo('template_directory'); ?>/images/top_ad.gif" width="468" height="70" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>" />
</div>-->
    <div id="top_menu">   <a href="javascript:window.external.AddFavorite('<?php echo get_option('home'); ?>','<?php bloginfo('name'); ?>')">加入收藏</a>　<a href=""onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo get_option('home'); ?>');">设为首页</a>
 
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="120" height="35" title="时间">
      <param name="movie" value="<?php bloginfo('template_directory'); ?>/images/time.swf" />
      <param name="quality" value="high" />
      <param name="wmode" value="transparent" />
      <embed src="<?php bloginfo('template_directory'); ?>/images/time.swf" quality="high" wmode="transparent" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="120" height="35"></embed>
    </object>
</div>
</div>
<div id="nav" class="layout">
<?php wp_nav_menu('container=\'\''); ?>
</div>
<div align=center>
<IFRAME  align=center marginWidth=0 vspace=-0 marginHeight=0 src="<?php bloginfo('template_directory'); ?>/ju.php" frameBorder=no width=960 scrolling=no height=300></IFRAME> 
</div>