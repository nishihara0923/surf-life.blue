<?php get_header();global $original_site;?>
<div id="main-content">


<?php $column = get_option('column_a');?>
<div id="main-content<?php echo esc_html($original_site['column_a']);?>-area">
<div id="main-content<?php echo esc_html($original_site['column_a']);?>">
<div id="content-single">


<h1 class="page-404-h1"><?php wp_title(''); ?></h1>

<div class="page-404">
<p class="page-404-top">いつも「<?php bloginfo('name'); ?>」をご覧頂きありがとうございます。</p>
<p class="page-404-sub">大変申し訳ありませんが、あなたがアクセスしようとしたページは削除されたか、URLが変更されています。</p>
<p class="page-404-sub">お手数をおかけしますが、以下の方法からもう一度目的のページをお探しください。</p>
</div>


<div class="content-b-single">
<?php if (is_active_sidebar('single_sidebar_404')) : ?>
<?php dynamic_sidebar('single_sidebar_404')?>
<?php else: ?>
<h2 class="rounded2">キーワード検索</h2>
<?php get_search_form(); ?>
<?php endif; ?>

</div><!-- .content-b-single -->


</div>
</div>
</div><!-- #main-content-list -->

<?php if (wp_is_mobile()) :?>
<!-- スマートフォンサイト -->
<?php else: ?>
<!-- PCサイト -->
<?php if ( $original_site['column_a'] <= 2 ) : ?>
<!-- 2カラム -->
<div id="main-content<?php echo esc_html($original_site['column_a']);?>-sidebar"><?php get_sidebar();?></div>
<?php endif; ?>
<?php endif; ?>
</div><!-- #main-content -->
<?php get_footer();?>