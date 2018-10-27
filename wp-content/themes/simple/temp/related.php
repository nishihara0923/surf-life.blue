<?php global $original_site;
if($original_site['related_radio'] == 1): ?>
<div class="related-single"><?php echo wp_filter_nohtml_kses($original_site['related_title'])?></div>
<?php 
global $wp_query;$postID = $wp_query->post->ID;
//配列の並べ替え
$rank_cat = wp_get_post_categories($postID, array( 'orderby'=>'count', 'order'=>'ASC' ) );
// カテゴリのカウント
$cat_ID1 = $rank_cat[0];$cat_ID2 = $rank_cat[1];
//関連記事一覧
$get_post = get_posts(array('posts_per_page' => $original_site['related_count'],'exclude' => $id,'category' => $cat_ID1));
if($get_post){}else{$get_post = get_posts(array('posts_per_page' => $original_site['related_count'],'exclude' => $id,'category' => $cat_ID2));}
?>
<div class="related">
<?php foreach ($get_post as $post): setup_postdata($post); ?>
<div>
<p class="related-list1"><a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></p>
<?php if($original_site['related_option']):?>
<?php if($original_site['related_option2']):?><p class="list-category-op"><?php the_category(' '); ?></p>
<?php endif; ?>
<p class="wideget-post-op">
<?php if($original_site['related_option1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span>
<?php endif; ?>
<?php if($original_site['related_option4']):?><span class="list-category-view"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?> views</span>
<?php endif; ?>
<?php if($original_site['related_option5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span>
<?php endif; ?><?php if($original_site['related_option3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span>
<?php endif; ?>
</p>
<?php endif; ?>
</div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
</div>
<?php elseif($original_site['related_radio'] == 2): ?>
<div class="related-single"><?php echo wp_filter_nohtml_kses($original_site['related_title'])?></div>
<?php 
global $wp_query;$postID = $wp_query->post->ID;
//配列の並べ替え
$rank_cat = wp_get_post_categories($postID, array( 'orderby'=>'count', 'order'=>'ASC' ) );
// カテゴリのカウント
$cat_ID1 = $rank_cat[0];$cat_ID2 = $rank_cat[1];
//関連記事一覧
$get_post = get_posts(array('posts_per_page' => $original_site['related_count'],'exclude' => $id,'category' => $cat_ID1));
if($get_post){}else{$get_post = get_posts(array('posts_per_page' => $original_site['related_count'],'exclude' => $id,'category' => $cat_ID2));}
?>
<?php foreach ($get_post as $post): setup_postdata($post); ?>
<div class="related1">
<div class="related1-img<?php echo esc_html($original_site['related_position']);?>">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($original_site['related_shape']); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['related_shape'] ?>.png" alt="no-image"></a>
<?php endif; ?>
<?php if($original_site['related_option4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>
</div>
<div class="related1-title">
<p class="related1-title-main"><a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></p>
<?php if($original_site['related_option_img']):?>
<?php if($original_site['related_option2']):?>
<p class="list-category-op"><?php the_category(' '); ?></p>
<?php endif; ?>
<p class="wideget-post-op">
<?php if($original_site['related_option1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span>
<?php endif; ?>
<?php if($original_site['related_option5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span>
<?php endif; ?>
<?php if($original_site['related_option3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span>
<?php endif; ?>
</p>
<?php endif; ?>
</div>
</div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
<?php elseif($original_site['related_radio'] == 3): ?>
<div class="related-single"><?php echo wp_filter_nohtml_kses($original_site['related_title'])?></div>
<div class="related5s">
<?php 
global $wp_query;$postID = $wp_query->post->ID;
//配列の並べ替え
$rank_cat = wp_get_post_categories($postID, array( 'orderby'=>'count', 'order'=>'ASC' ) );
// カテゴリのカウント
$cat_ID1 = $rank_cat[0];$cat_ID2 = $rank_cat[1];
//関連記事一覧
$get_post = get_posts(array('posts_per_page' => $original_site['related_count'],'exclude' => $id,'category' => $cat_ID1));
if($get_post){}else{$get_post = get_posts(array('posts_per_page' => $original_site['related_count'],'exclude' => $id,'category' => $cat_ID2));}
?>
<?php foreach ($get_post as $post): setup_postdata($post); ?>
<div class="related2">
<div class="related2-img<?php echo esc_html($original_site['related_position']);?>">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($original_site['related_shape']); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['related_shape'] ?>.png" alt="no-image"></a>
<?php endif; ?>

<?php if($original_site['related_option4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>
</div>
<div class="related2-title">
<p class="related-title-color">
<a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a>
</p>
<?php if($original_site['related_option_img']):?>
<?php if($original_site['related_option2']):?><p class="list-category-op"><?php the_category(' '); ?></p>
<?php endif; ?>
<p class="wideget-post-op">
<?php if($original_site['related_option1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span>
<?php endif; ?>
<?php if($original_site['related_option5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span>
<?php endif; ?>
<?php if($original_site['related_option3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span>
<?php endif; ?>
</p>
<?php endif; ?>
</div></div>
<?php endforeach; ?>
</div>
<?php wp_reset_postdata(); ?>
<?php elseif($original_site['related_radio'] == 4): ?>
<div class="related-single"><?php echo wp_filter_nohtml_kses($original_site['related_title'])?></div>
<div class="related5s">
<div class="container">
<?php 
global $wp_query;$postID = $wp_query->post->ID;
//配列の並べ替え
$rank_cat = wp_get_post_categories($postID, array( 'orderby'=>'count', 'order'=>'ASC' ) );
// カテゴリのカウント
$cat_ID1 = $rank_cat[0];$cat_ID2 = $rank_cat[1];
//関連記事一覧
$get_post = get_posts(array('posts_per_page' => $original_site['related_count'],'exclude' => $id,'category' => $cat_ID1));
if($get_post){}else{$get_post = get_posts(array('posts_per_page' => $original_site['related_count'],'exclude' => $id,'category' => $cat_ID2));}
?>
<?php foreach ($get_post as $post): setup_postdata($post); ?>
<div class="related5">
<div class="related5-img<?php echo esc_html($original_site['related_position']);?>">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($original_site['related_shape']); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['related_shape'] ?>.png" alt="no-image"></a>
<?php endif; ?>
<?php if($original_site['related_option4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>
</div>
<div class="related5-cont">
<p class="related-title-color">
<a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a>
</p>
<?php if($original_site['related_option_img']):?>
<?php if($original_site['related_option2']):?><p class="list-category-op"><?php the_category(' '); ?></p>
<?php endif; ?>
<p class="wideget-post-op">
<?php if($original_site['related_option1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span>
<?php endif; ?>
<?php if($original_site['related_option5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span>
<?php endif; ?>
<?php if($original_site['related_option3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span>
<?php endif; ?>
</p>
<?php endif; ?>
</div></div>
<?php endforeach; ?>
</div></div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>