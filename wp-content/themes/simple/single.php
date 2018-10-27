<?php get_header(); ?>
<div id="main-content">
<?php global $original_site;?>
<div id="main-content<?php echo $original_site['column_s'];?>-area">
<div id="main-content<?php echo $original_site['column_s'];?>">
<div id="content-single">
<!--[if lt IE 11]>
<style type="text/css">
opacity:inherit;
@media all and (-ms-high-contrast:none){
  *::-ms-backdrop, #pagination a:hover { 
opacity:inherit; } /* IE11 */
}
</style>
<![endif]-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<!-- 表示内容を記述 -->
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<h1 class="entry-title"><?php the_title(); ?></h1>

<?php if($original_site['single_op']):?>

<?php if($original_site['single_op3']):?>
<div class="date-main-list-s">
<span class="list-category-op"><?php the_category(' '); ?></span>
</div>
<?php endif; ?>

<ul class="post_date">
<?php if($original_site['single_op1']):?>
<li class="post_dates published"><?php echo get_the_date(); ?></li>
<?php endif; ?>
<?php if($original_site['single_op2']):?>
<?php
define( "ONE_DAY_SEC", 24 * 3600 );
// 日付けの差分をとる関数 予約投稿時の更新日対策
function dateDiff( $date1, $date2 ) {return ( strtotime("$date1") - strtotime("$date2") ) / ONE_DAY_SEC;}
$date1 = get_the_modified_date('Y-n-j');
$date2 = get_the_time('Y-n-j');
$date3 = dateDiff( $date1, $date2 );
if($date3 <= 0){
}else{
echo '<li class="post_modified updated">'.get_the_modified_date().'</li>';
}
?>
<?php endif; ?>

<!-- 保留 
<?php if($original_site['single_op3']):?><li class="post_category"><?php the_category(' ,  '); ?></li>
<?php endif; ?>
-->
<?php if($original_site['single_op4'] && get_the_tags($post->ID)):?><li class="post_tag"><?php the_tags('',' ,  ',''); ?></li>

<?php endif; ?>
<?php if($original_site['single_op5']):?>
<li class="post_view"><span class="post_view_count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post_view_views">views</span></li>
<?php endif; ?>

<?php if($original_site['single_op7']):?>
<li class="post_comments"><a href="#comments"><?php echo number_format(get_comments_number()); ?> 件</a></li>
<?php endif; ?>

<?php if($original_site['single_op6']):?>
<li class="post_author vcard author"> <span class="fn"><?php the_author_posts_link(); ?></span></li>
<?php endif; ?>

</ul>
<?php endif; ?>

<div class="post_title entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array(
'before'      => '<div class="single-link-navi">',
'after'       => '</div>',
'link_before' => '<span class="single-links">',
'link_after'  => '</span>',
'next_or_number'   => 'number' ,
));
?>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- SNS ソーシャルボックス -->
<div class="single-share">
<div class="single-share-left">
<img src="<?php echo $thumbnail_ogp[0]; ?>" alt="<?php the_title(); ?>" width="150" />
</div>
<div class="single-share-right">
<div class="share-like">記事が気に入ったらいいね！フォローをお願いします！</div>
<div class="share-aria">
<div class="single-facebook">
<div class="fb-like" data-href="https://www.facebook.com/surflifeblue/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div></div>
<div class="single-twitter"><a href="https://twitter.com/intent/follow?original_referer=<?php echo the_permalink()?>&amp;screen_name=surf_life_blue&amp;tw_p=followbutton" target="_blank">フォロー</a></div>
<div class="single-feedly"><a href="http://cloud.feedly.com/#subscription%2Ffeed%2Fhttps%3A%2F%2Fwww.surf-life.blue%2Ffeed%2F" target="_blank">feedly</a></div>
<div class="single-pocket">
<a class="pocket-color sns-color" href="http://getpocket.com/edit?url=<?php echo the_permalink()?>&title=<?php the_title(); ?>" rel="nofollow" onclick="javascript:window.open(encodeURI(decodeURI(this.href)), 'pkwindow', 'width=600, height=600, personalbar=0, toolbar=0, scrollbars=1');return false;" >Pocket</a>
</div>
</div>
</div>
</div>
<!-- SNS ソーシャルボックス終了 -->
<!-- SNS -->
<div class="related-single">この記事をシェアする</div>
<?php if(!empty($original_site['single_sns'])){get_template_part( 'temp/sns' );}?>
<!-- PCサイト -->

<?php if($original_site['related_posi']):?>
<div class="content-b-single">
<?php dynamic_sidebar('single_sidebar_pc1'); ?>
</div><!-- .content-b-single -->
<!-- コメント・トラックバック-->
<?php comments_template(); ?>
<div class="content-b-single">
<?php dynamic_sidebar('single_sidebar_pc2'); ?>
</div><!-- .content-b-single -->
<!-- 関連 -->
<?php get_template_part( 'temp/related' );?>
<?php else: ?>
<div class="content-b-single">
<?php dynamic_sidebar('single_sidebar_pc1'); ?>
</div><!-- .content-b-single -->
<!-- 関連-->
<?php get_template_part( 'temp/related' );?>
<div class="content-b-single">
<?php dynamic_sidebar('single_sidebar_pc2'); ?>
</div><!-- .content-b-single -->
<!-- コメント・トラックバック-->
<?php comments_template(); ?>
<div class="content-b-single">
<?php dynamic_sidebar('single_sidebar_pc3'); ?>
</div><!-- .content-b-single -->
<?php endif; ?>

<!-- 投稿ナビ-->
<?php if(!empty($original_site['single_navi'])):?>
<ul id="pagination">
<?php $prev_post = get_previous_post();$next_post = get_next_post();if ( !empty( $prev_post ) ):?>
<li class="prev"><p class="prev-left">前の記事</p><?php previous_post_link('%link'); ?></li>
<?php endif;?>
<?php if( !empty( $next_post ) ): ?>
<li class="next"<?php if( empty( $prev_post ) ): ?> style="border:none"<?php endif; ?>><p class="next-right">次の記事</p><?php next_post_link('%link'); ?></li>
<?php endif; ?>
</ul>
<?php endif; ?>
</div>
</div>
</div><!-- #content-single -->

<?php if ($original_site['column_s'] <= 2 ) : ?>
<!-- 2カラム -->
<div id="main-content<?php echo $original_site['column_s'];?>-sidebar"><?php get_sidebar();?></div>
<?php endif; ?>

</div><!-- #main-content -->

<!-- facebook -->   
<div id="fb-root"></div>
<script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.7&appId=1799728113596800";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>

<!-- highlight.js -->
<script src="./js/highlight/highlight.pack.js"></script>
<script>
$(document).ready(function() {
$('pre').each(function(i, block) {
hljs.highlightBlock(block);
});
/*行数の追加*/
function highlightGutter(e) {
var regExp = /\r\n|\r|\n/g;
var newline = $(e).text().match(regExp);
var gutter = '<span class="gutter">'
for (var i = 1; i <= newline.length; i++) {
gutter += i + '\n';
}
gutter += '</span>';
$(e).prepend(gutter);
}
$('.highlight').each(function() {
hljs.highlightBlock(this);
highlightGutter(this);
});

});
</script>
<script type="text/javascript">$('.ggmap').click(function () {$('.ggmap iframe').css("pointer-events", "auto");});</script>
<?php get_footer();?>