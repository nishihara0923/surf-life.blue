<?php get_header();global $original_site;$original_home = get_option('original_home');$home_slide = get_option('home_slide');$mediaid_main = get_option('mediaid_main');?>
<div id="main-content">




<div id="main-content<?php echo $original_site['column_h'];?>-area">
<div id="main-content<?php echo $original_site['column_h'];?>">

<!-- 1ページ目開始 -->
<?php if($home_slide['original_op00'] == 0): ?>
<?php elseif($home_slide['original_op00'] == 1): ?>
<?php $n_count=0;foreach($mediaid_main as $value):?>
<?php if($value[0]){$imgs_src = wp_get_attachment_image_src($value[0]);$n_count++;$sp_thumbnail .= '<img class="sp-thumbnail" alt="'.esc_html(get_post_meta($value[0], "_wp_attachment_image_alt", true)).'" src="'.$imgs_src[0].'"/>';}?>
<?php endforeach; ?>
<?php if($n_count >= 3):?>
<script type="text/javascript"><!--
$(document).ready(function() {funcslider();var timer = false;var winWidth = $(window).width();var winWidth_resized;$(window).resize(function() {if (timer !== false) {clearTimeout(timer);};timer = setTimeout(function() {winWidth_resized = $(window).width();if ( winWidth != winWidth_resized ) {funcslider();winWidth = $(window).width();}}, 200);});

function funcslider() {
$(".slider-pro").show();
var main_width = 0;
main_width = $("#slider-top").width();
$( '#slider-top' ).sliderPro({
width: "100%",
height: (main_width / 705)*350,
thumbnailWidth:100,
thumbnailHeight:60,
fade: true,
arrows: true,
buttons: false,
shuffle: <?php echo $home_slide['slide_radio']?>,
thumbnailArrows: true,
autoplay: true,
autoplayDelay:<?php echo $home_slide['slide_speed']?>
});};});
// --></script>
<div id="slider-top" class="slider-pro">
<div class="sp-slides">
<?php foreach($mediaid_main as $value):?>
<?php if($value[0]):?>
<div class="sp-slide">
<a href="<?php echo $value[1]; ?>"><img class="sp-image" src="<?php bloginfo('template_url'); ?>/img/blank.gif" alt="<?php echo esc_html(get_post_meta($value[0], '_wp_attachment_image_alt', true)); ?>" data-src="<?php $imgf_src = wp_get_attachment_image_src($value[0],full );echo $imgf_src[0]; ?><?php //echo $value[0]; ?>" /></a>
<?php if($value[2]):?>
<p class="sp-layer sp-<?php echo $home_slide['slide_color_radio'] ?> sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400"><?php echo $value[2]; ?></p>
<?php endif; ?>
</div>
<?php endif; ?><?php endforeach; ?>
</div>
<div class="sp-thumbnails"><?php echo $sp_thumbnail;?></div>
</div>
<?php endif; ?>
<?php elseif($home_slide['original_op00'] == 2): ?>
<div class="img-top"><?php echo wp_get_attachment_image( $home_slide['mediaid0'] ,full ); ?></div>
<?php endif; ?>

<div class="home-t">
<?php if($original_home['design_count']):?>
<?php get_template_part('temp/home_menu'); ?>
<?php else: ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="list-post">
<div class="list-img<?php echo $original_site['mainlist_position']; ?>">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($original_site['mainlist_shape']); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['mainlist_shape'] ?>.png" alt="no-image"></a>
<?php endif; ?>

<?php if($original_site['list_option3']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>

</div>
<div class="list-content">
<div class="list-top-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<div class="list_con">


<?php if($original_site['list_option_count']):?>
<p class="date-main-list">
<?php if($original_site['list_option2']):?>
<span class="list-category-op"><?php the_category(' '); ?></span>
<?php endif; ?>
<?php if($original_site['list_option1']):?>
<span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?>
<?php if($original_site['list_option4']):?>
<span class="list-category-author">by <?php the_author_posts_link(); ?></span><?php endif; ?>
</p>
<?php endif; ?>




<p class="date-list-cont">
<?php echo op_excerpt(250);?>
</p>
</div>
</div>
</div>
<?php endwhile; else: ?>
<!-- 記事が存在しない場合 -->
<?php endif; ?>
<?php endif; ?>
<!-- 1ページ目終了 -->



</div>
</div>
</div><!-- .home-t -->

<?php if ( $original_site['column_h'] <= 2 ) : ?>
<!-- 1ページ目 2カラム -->
<div id="main-content<?php echo $original_site['column_h'];?>-sidebar"><?php get_sidebar();?></div>
<?php endif; ?>
</div><!-- #main-content -->
<?php get_footer();?>