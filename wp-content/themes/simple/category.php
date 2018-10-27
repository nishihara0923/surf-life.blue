<?php get_header();global $original_site; ?>
<div id="main-content">
<div id="main-content<?php echo esc_html($original_site['column_a']);?>-area">
<div id="main-content<?php echo esc_html($original_site['column_a']);?>">
<div id="main-content-list">
<h1><?php wp_title(''); ?></h1>


<?php get_template_part('temp/sort'); ?>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="list-post">
<div class="list-img<?php echo esc_html($original_site['mainlist_position']); ?>">
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
<h2>
<a href="<?php the_permalink(); ?>"><?php echo $post->post_title;?></a>






</h2>
<div class="list_con">


<?php if($original_site['list_option_count']):?>
<p class="date-main-list">
<?php if($original_site['list_option2']):?>
<span class="list-category-op"><?php the_category(' '); ?></span>
<?php endif; ?>
<?php if($original_site['list_option1']):?>
<span class="list-category-date"><?php echo get_the_date(); ?></span>
<?php endif; ?>

<?php if($original_site['list_option5']):?>
<span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span>
<?php endif; ?>




<?php if($original_site['list_option4']):?>
<span class="list-category-author"><?php the_author_posts_link(); ?></span>
<?php endif; ?>
</p>
<?php endif; ?>


<p class="date-list-cont"><?php echo op_excerpt(250);?></p>




</div>
</div>
</div>
<?php endwhile; else: ?>
<!-- 記事が存在しない場合 -->
<div class="page-404">
<p class="page-404-top">「<?php wp_title(''); ?>」で検索しましたがページが見つかりませんでした。</p>
<p class="page-404-sub">お手数をおかけしますが、以下の方法からもう一度目的のページをお探しください。</p>
</div>
<div id="content-single">
<div class="content-b-single">
<?php if (is_active_sidebar('single_sidebar_404')) : ?>
<?php dynamic_sidebar('single_sidebar_404')?>
<?php else: ?>
<h2 class="rounded2">キーワード検索</h2>
<?php get_search_form(); ?>
<?php endif; ?>
</div><!-- .content-b-single -->
</div><!-- #content-single -->
<?php endif; ?>


<?php if (function_exists("pagination")) {pagination($additional_loop->max_num_pages);} ?>
<?php if (function_exists("pagination2")) {pagination2($wp_query->max_num_pages);} ?>


</div>
</div>
</div><!-- #main-content-list -->
<?php if ( $original_site['column_a'] <= 2 ) : ?>
<!-- 2カラム -->
<div id="main-content<?php echo esc_html($original_site['column_a']);?>-sidebar"><?php get_sidebar();?></div>
<?php endif; ?>
</div><!-- #main-content -->
<?php get_footer();?>