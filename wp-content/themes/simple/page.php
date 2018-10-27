<?php get_header();global $original_site;?>
<div id="main-content">


<div id="main-content<?php echo esc_html($original_site['column_p']);?>-area">
<div id="main-content<?php echo esc_html($original_site['column_p']);?>">
<div id="content-single">



<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<!-- 表示内容を記述 -->
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">











<h1><?php the_title(); ?></h1>





 
 
  




<div class="post_title">
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
























<!-- コメント・トラックバック-->
<?php comments_template(); ?>













</div>
</div>

</div><!-- #content-single -->

<?php if ( esc_html($original_site['column_p']) <= 2 ) : ?>
<!-- 2カラム -->
<div id="main-content<?php echo esc_html($original_site['column_p']);?>-sidebar"><?php get_sidebar();?></div>
<?php endif; ?>



















</div><!-- #main-content -->
<?php get_footer();?>