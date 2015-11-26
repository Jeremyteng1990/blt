<?php
register_nav_menus( array(
'primary' => __( 'Primary Navigation'),
) );

if(function_exists('add_theme_support')){
add_theme_support( 'post-thumbnails' );
}
function flash_thumbnail(){
if(has_post_thumbnail()){
the_post_thumbnail(array());
} else {
global $post, $posts;
$post_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$post_img_src = $matches [1][0];
$post_img = '<img src="'.$post_img_src.'" />';
if(empty($post_img_src)){
$post_img = '<img src="'.get_bloginfo("template_url").'/images/flash/'.rand(1,5).'.jpg" />';
}
echo $post_img;
}
}

if(function_exists('add_theme_support')){
add_theme_support( 'post-thumbnails' );
}
function post_thumbnail(){
if(has_post_thumbnail()){
the_post_thumbnail();
} else {
global $post, $posts;
$post_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$post_img_src = $matches [1][0];
$post_img = '<img src="'.$post_img_src.'" alt="" />';
if(empty($post_img_src)){
$post_img = '<img src="'.get_bloginfo("template_url").'/images/thumb/'.rand(1,15).'.jpg" alt="" />';
}
echo $post_img;
}
}
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);



//禁止 WordPress 对站内文章的 pingback
function no_self_ping( &$links ) {
 $home = get_option( 'home' );
 foreach ( $links as $l => $link )
 if ( 0 === strpos( $link, $home ) )
 unset($links[$l]);
 }
 add_action( 'pre_ping', 'no_self_ping' );
 
//小工具
if ( function_exists('register_sidebar') )
   register_sidebar(array(
       'before_widget' => '<div class="left_title">',
       'after_widget' => '</div>',
       'before_title' => '<h2>',
       'after_title' => '</h2></div><div class="left_body">
    ',
  ));

//pagenav
function pagenav($query_string){
global $posts_per_page, $paged;
$my_query = new WP_Query($query_string ."&posts_per_page=-1");
$total_posts = $my_query->post_count;
if(empty($paged))$paged = 1;
$prev = $paged - 1;
$next = $paged + 1;
$range = 4; // only edit this if you want to show more page-links
$showitems = ($range * 2)+1;

$pages = ceil($total_posts/$posts_per_page);
if(1 != $pages){
echo "<div class='pagination'>";
echo ($paged > 2 && $paged+$range+1 > $pages && $showitems < $pages)? "<a href='".get_pagenum_link(1)."'>最前</a>":"";
echo ($paged > 1 && $showitems < $pages)? "<a href='".get_pagenum_link($prev)."'>上一页</a>":"";

for ($i=1; $i <= $pages; $i++){
if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
}
}

echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."'>下一页</a>" :"";
echo ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."'>最后</a>":"";
echo "</div>\n";
}
}

?>