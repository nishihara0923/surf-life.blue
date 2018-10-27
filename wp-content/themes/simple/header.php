<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php global $original_site;$site_options = get_option('site_options');if(is_single() || is_page()):if(!is_singular( 'tide_level' )): ?>
<?php $seo_etc = get_post_meta($post->ID, 'seo_etc', true);$single_page = get_query_var( 'page');if($single_page >= 2){$single_title = '｜ページ'.$single_page;$single_keywords = ',ページ'.$single_page;$single_description = '(ページ'.$single_page.')';}?>
<?php if(!empty($seo_etc[seo_site_title])):?>
<title><?php echo trim(wp_title('', false)); ?><?php echo $single_title?></title>
<?php else: ?>	  
<title><?php echo trim(wp_title('', false)); ?><?php echo $single_title?>｜<?php bloginfo('name'); ?></title>
<?php endif; ?>
<?php if(!empty($seo_etc['seo_keywords'])):?>
<meta name="keywords" content="<?php echo $seo_etc[seo_keywords]?><?php echo $single_keywords?>">
<?php endif; ?>
<?php if(!empty($seo_etc['seo_descript'])): ?>
<meta name="description" content="<?php echo $single_description?><?php echo $seo_etc[seo_descript]?>">
<?php endif; ?>
<?php else: ?><?php global $spot_data;$spot_data = get_post_meta($post->ID,"spot_data",true);?>
<title><?php echo trim(wp_title('', false)); ?>の潮位(満潮・干潮)・天気・日の出・日の入り｜<?php bloginfo('name'); ?></title>
<meta name="keywords" content="<?php echo trim(wp_title('', false)); ?>,潮位,満潮,干潮,波の高さ,天気,週間,日の出,日の入り">
<meta name="description" content="<?php echo trim(wp_title('', false));echo '('.$spot_data['address'].')'; ?>エリアの潮位(満潮・干潮をタイドグラフで表示)・週間天気予報・波の高さ・日の出・日の入りの情報を提供しています。<?php if($spot_data['beach']){?><?php echo trim(wp_title('', false)); ?>エリアの主な海水浴場・ビーチは、<?php echo $spot_data['beach']?>になります。<?php }?>サーフィン・海釣り・潮干狩りなど、アウトドアに出かける前に要チェック！">
<?php endif; ?>
<?php elseif(is_home()): ?>
<?php $top_seo = get_option( 'top_seo'); ?>
<?php if($top_seo['top_seo_title']):?>
<title><?php echo $top_seo['top_seo_title']; ?></title>
<?php else: ?>	
<title><?php bloginfo('name'); ?></title>
<?php endif; ?>
<?php if($top_seo['top_seo_keywords']): ?>
<meta name="keywords" content="<?php echo $top_seo['top_seo_keywords']?>">
<?php endif; ?>
<?php if($top_seo['top_seo_descript']): ?>
<meta name="description" content="<?php echo $top_seo['top_seo_descript']?>">
<?php endif; ?>
<?php elseif(is_search()): ?>
<title><?php if(isset($_GET['s']) && empty($_GET['s'])):?>
<?php echo '全ての一覧';?>
<?php else :?>
<?php echo '&rdquo;' . get_search_query(false) . '&rdquo;' . __( 'の検索結果' );?>
<?php endif;?>｜<?php bloginfo('name'); ?><?php if ($paged >= 2){echo '｜ページ'.$paged;}?></title>
<?php elseif(is_category() || is_tag()): ?>
<title><?php echo trim(wp_title('', false)); ?>｜<?php bloginfo('name'); ?><?php if ($paged >= 2){
$list_paged_title = '｜ページ'.$paged;
$list_paged_description = '(ページ'.$paged.')';
$list_paged_keywords = ',ページ'.$paged;
};echo $list_paged_title?></title>
<?php $term = get_the_category();$term_id = $term[0]->term_id;
$seo_term = get_option( 'term_'.$term_id);
if($seo_term[seo_description]): ?>
<meta name="description" content="<?php echo $list_paged_description.$seo_term[seo_description]?>">
<?php endif; ?>
<?php if($seo_term['seo_key']): ?>
<meta name="keywords" content="<?php echo $seo_term[seo_key].$list_paged_keywords?>">
<?php endif; ?>
<?php elseif(!is_home()): ?>
<title><?php echo trim(wp_title('', false)); ?>｜<?php bloginfo('name'); ?><?php if ($paged >= 2){
echo '｜ページ'.$paged;
}?></title>
<?php endif; ?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:locale" content="ja_JP"/>
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@surf_life_blue" />
<meta name="twitter:domain" content="surf-life.blue">
<meta property="fb:app_id" content="1799728113596800" />
<meta property="og:type" content="article" />
<meta property="og:site_name"  content="Surf life" />
<?php if(is_single() || is_page()):?>
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:url" content="<?php echo the_permalink()?>" />
<meta property="og:description" content="<?php if(!empty($seo_etc['seo_descript'])){echo $single_description.$seo_etc[seo_descript];}?>" />
<?php if (has_post_thumbnail()) :?>
<meta property="og:image" content="<?php global $thumbnail_ogp;$thumbnail_ogp = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );echo $thumbnail_ogp[0]; ?>" />
<meta property="og:image:secure_url" content="<?php echo $thumbnail_ogp[0]; ?>" />
<meta name="twitter:image" content="<?php echo $thumbnail_ogp[0]; ?>"/>
<?php else:?>
<meta property="og:image" content="<?php echo home_url(); ?>/wp-content/uploads/2016/07/surf-life-big.png" />
<meta property="og:image:secure_url" content="<?php echo home_url(); ?>/wp-content/uploads/2016/07/surf-life-big.png" />
<meta name="twitter:image" content="<?php echo home_url(); ?>/wp-content/uploads/2016/07/surf-life-big.png"/>
<?php endif;?>
<?php elseif(is_home()): ?>
<meta property="og:title" content="<?php bloginfo('name'); ?>" />
<meta property="og:url" content="<?php echo home_url()?>" />
<meta property="og:image:secure_url" content="<?php echo home_url(); ?>/wp-content/uploads/2016/07/surf-life-big.png" />
<meta property="og:description" content="<?php if($top_seo['top_seo_descript']){echo $top_seo['top_seo_descript'];}?>" />
<?php else:?>
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:url" content="<?php echo the_permalink()?>" />
<meta property="og:image:secure_url" content="<?php echo home_url(); ?>/wp-content/uploads/2016/07/surf-life-big.png" />
<meta property="og:description" content="<?php if($seo_term[seo_description]){echo $list_paged_description.$seo_term[seo_description];}?>" />
<?php endif; ?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> &raquo; フィード" href="<?php echo esc_url(home_url()); ?>/feed/"/>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> &raquo; コメントフィード" href="<?php echo esc_url(home_url()); ?>/comments/feed/"/>
<?php wp_head(); ?>
<style type="text/css"><?php echo esc_html(get_option('site_setting'));echo str_replace('\\', '', wp_filter_nohtml_kses(get_option('css_h_min')));?></style>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js"></script>

<?php if($original_site['original_op0']):?>

<?php if($original_site['original_op0'] == 1): ?>
<script src="<?php bloginfo('template_url'); ?>/js/main.js?2326565" id="script" cat-bot ="<?php echo wp_filter_nohtml_kses($site_options['color-cat-l'])?>"></script>
<?php endif; ?>
<script src="<?php bloginfo('template_url'); ?>/js/css_browser_selector.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
/*ウィジェットの無効化*/
$(function(){$('.footer-title .rsswidget,.rounded .rsswidget,.rounded2 .rsswidget').click(function(){return false;})});
func_logo_pc();
$(window).resize(function(){
func_logo_pc();
});
function func_logo_pc() {
var headerheight = $("#header-rights").height();
var widthwindow_top = document.documentElement.clientWidth || window.innerWidth || document.body.clientWidth;

if(widthwindow_top >= 771) {
//console.log($("#header-rights").height())
//$(".site-logo,.site-logo-t").css({height:headerheight,lineHeight:headerheight+"px"});
} else {
//alert('モバイル')
$('.site-logo,.site-logo-t').removeAttr('style');
};};
});
</script>
<?php endif; ?>
<?php if(is_home()): ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/slider-pro.min.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.sliderPro.min.js"></script>
<?php endif; ?>
<?php if(is_single() && !is_singular('tide_level')): //投稿ページのみ（潮位ページを除く）?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/top_list.js"></script>
<link href="<?php bloginfo('template_url'); ?>/css/magnific-popup.css" rel="stylesheet" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js?v=1.1.0" type="text/javascript"></script>
<?php endif; ?>
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/js/respond.src.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/PIE.js"></script>
<script type="text/javascript">$(function(){$('div.tagcloud a,.icon-top,.home-t .list-category-op a,.list-category-op a').each(function(){PIE.attach(this);});});
</script><![endif]-->
</head>
<body <?php body_class(); ?>>
<div class="header-title-color"><div class="header-title"><?php echo get_bloginfo( 'description', 'display' );?></div></div>
<div id="header_wrap">
<div id="header-area">
<?php if ( $site_options['logos'] ) : ?>
<?php if($original_site['original_op0'] == 1): ?>
<span class="icon-menu"></span>
<?php else : $logo_position =' logo-position'; endif; ?>
<div class="site-logo<?php echo $logo_position?>">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="/logo.png" width="<?php echo $original_site['theme_logo_width']; ?>" height="<?php echo $original_site['theme_logo_height']; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
<?php else : ?>
<?php if($original_site['original_op0'] == 1): ?>
<span class="icon-menu"></span>
<?php else : $logo_position =' logo-position'; endif; ?>
<div class="site-logo-t<?php echo $logo_position?>">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
<?php endif; ?>
</div>
<div id="header-rights">
<div id="header-right-area">
<?php if($original_site['original_op0'] == 0): ?>
<?php elseif($original_site['original_op0'] == 1): ?>
<div class="right-sub">
<?php get_template_part('temp/header_menu'); ?>
</div><!-- .right-sub -->
<?php elseif($original_site['original_op0'] == 2): ?>
<div class="right-imgs">
<?php if(get_option('original_op7_1')): ?>
<?php echo get_option('original_op7_1'); ?>
<?php else:?>
<a href="<?php echo esc_url($original_site['original_op7_2']); ?>"><?php echo wp_get_attachment_image(wp_filter_nohtml_kses($original_site['mediaid']),full); ?></a>
<?php endif;?>
</div><!-- .right-img -->
<?php endif;?>
</div><!-- #header-right-area -->
</div><!-- #header-rights -->
</div><!-- #header-area -->
</div><!-- #header_wrap -->
<div id="page-pan"><div class="page-pan-area"><?php breadcrumb(); ?></div></div>
<div id="page">