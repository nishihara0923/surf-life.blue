<?php 
global $original_site;
global $original_home;
?>
<?php for($x = 1; $x <= 5; $x++){?>
<?php if($original_home['top_design'.$x] == ''):?>
<?php elseif($original_home['top_design'.$x] == 1):?>
<!-- ブロック1開始 -->
<?php 
$top_op1='';
$original_home['top_op'.$x] =  $original_home['top_op'.$x];
if($original_home['top_op'.$x] == 1){
}elseif($original_home['top_op'.$x] == 2){	
foreach ($original_home['top_op'.$x.'_1'] as $value) { $top_op1 .= $value.',';}
$top_op1 = 'category='.$top_op1.'&';
}elseif($original_home['top_op'.$x] == 3){
$top_op1 = 'post_type=page&';
}elseif($original_home['top_op'.$x] == 4){
foreach ($original_home['top_op'.$x.'_2'] as $value) { $top_op1 .= $value.',';}
$top_op1 = 'post_type=page&include='.$top_op1.'&';
}elseif($original_home['top_op'.$x] == 5){
foreach ($original_home['top_op'.$x.'_3'] as $value) { $top_op1 .= $value.',';}
$top_op1 = 'tag='.$top_op1.'&';
}elseif($original_home['top_op'.$x] == 6){
$top_op1 = 'include='.$original_home['top_op'.$x.'_4'].'&';
}else{
}
if($original_home['top_list'.$x.'_2']){$limit1 = $original_home['top_list'.$x.'_2'];}else{$limit1 = '8';};
 ?>
<?php if($original_home['top_list'.$x.'']):?>
<h2><?php echo $original_home['top_list'.$x.''];?></h2>
<?php endif; ?>
<div class="home4-main">
<?php $postslist = get_posts(''.$top_op1.'posts_per_page='.$limit1.'&orderby='.$original_home['top_list'.$x.'_1'].'&order=DESC');foreach ($postslist as $post) : setup_postdata($post);?> 
<div class="home4-main-sub">
<div class="home4-left-sub">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,$original_site['mainlist_shape']); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['mainlist_shape'] ?>.png" alt="no-image"></a>
<?php endif; ?>

<?php if($original_home['top_listop'.$x.'_4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>


</div>
<div class="home4-right-sub">
<p class="home1-right-title-sub"><a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></p>
<?php if($original_home['top_list_op'.$x]):?>
<p class="date-main-list">
<?php if($original_home['top_listop'.$x.'_2']):?><span class="list-category-op"><?php the_category(' '); ?></span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?>


<?php if($original_home['top_listop'.$x.'_3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?>
</p>
<?php endif; ?>
</div></div>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
</div>
<!-- ブロック1終了 -->

<?php elseif($original_home['top_design'.$x] == 2): ?>
<!-- ブロック2開始 -->
<?php 
$top_op2='';
if($original_home['top_op'.$x] == 1){
}elseif($original_home['top_op'.$x] == 2){	
foreach ($original_home['top_op1_1'] as $value) { $top_op2 .= $value.',';}
$top_op2 = 'category='.$top_op2.'&';
}elseif($original_home['top_op'.$x] == 3){
$top_op2 = 'post_type=page&';
}elseif($original_home['top_op'.$x] == 4){
foreach ($original_home['top_op1_2'] as $value) { $top_op2 .= $value.',';}
$top_op2 = 'post_type=page&include='.$top_op2.'&';
}elseif($original_home['top_op'.$x] == 5){
foreach ($original_home['top_op1_3'] as $value) { $top_op2 .= $value.',';}
$top_op2 = 'tag='.$top_op2.'&';
}elseif($original_home['top_op'.$x] == 6){
$top_op2 = 'include='.$original_home['top_op'.$x.'_4'].'&';
}else{
}
if($original_home['top_list'.$x.'_2']){$limit1 = $original_home['top_list'.$x.'_2'];}else{$limit1 = '8';};
?>
<?php if($original_home['top_list'.$x.'']):?>
<h2><?php echo $original_home['top_list'.$x.''];?></h2>
<?php endif; ?>




<div class="home3-main">
<?php $cnt = 0;$postslist = get_posts(''.$top_op2.'posts_per_page='.$limit1.'&orderby='.$original_home['top_list'.$x.'_1'].'&order=DESC');foreach ($postslist as $post) : setup_postdata($post);?> 
<?php $cnt++;if($cnt == 1 ) : ?>
<!-- 1件目 -->
<div class="home3-left">

<div class="home3-left-img">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><span class="cover" style="background-image: url('<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array( 450, 450 ));echo $image_url[0];?>')"></span></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><span class="cover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/no-img450x450.png')"></span></a>
<?php endif; ?>


<?php if($original_home['top_listop'.$x.'_4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>


</div>
<p class="home3-right-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
<?php if($original_home['top_list_op'.$x]):?>
<p class="date-main-list">

<?php if($original_home['top_listop'.$x.'_2']):?><span class="list-category-op"><?php the_category(' '); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?>
</p>
<?php endif; ?>
<p class="home3-right-content"><?php echo op_excerpt(250);?></p>
</div>
<div class="home3-main-sub-all">
<?php else : ?>
<!-- 2件目以降 -->
<div class="home3-main-sub">
<div class="home3-left-sub">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,$original_site['mainlist_shape']); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['mainlist_shape'] ?>.png" alt="no-image"></a>
<?php endif; ?>

<?php if($original_home['top_listop'.$x.'_4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>


</div>
<div class="home3-right-sub">
<p class="home1-right-title-sub"><a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></p>
<?php if($original_home['top_list_op'.$x]):?>
<p class="date-main-list">
<?php if($original_home['top_listop'.$x.'_2']):?><span class="list-category-op"><?php the_category(' '); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?>
</p>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
</div></div>
<!-- ブロック2終了 -->

<?php elseif($original_home['top_design'.$x] == 3): ?>
<!-- ブロック3開始 -->
<?php 
$top_op3='';
if($original_home['top_op'.$x] == 1){
}elseif($original_home['top_op'.$x] == 2){	
foreach ($original_home['top_op'.$x.'_1'] as $value) { $top_op3 .= $value.',';}
$top_op3 = 'category='.$top_op3.'&';
}elseif($original_home['top_op'.$x] == 3){
$top_op3 = 'post_type=page&';
}elseif($original_home['top_op'.$x] == 4){
foreach ($original_home['top_op'.$x.'_2'] as $value) { $top_op3 .= $value.',';}
$top_op3 = 'post_type=page&include='.$top_op3.'&';
}elseif($original_home['top_op'.$x] == 5){
foreach ($original_home['top_op'.$x.'_3'] as $value) { $top_op3 .= $value.',';}
$top_op3 = 'tag='.$top_op3.'&';
}elseif($original_home['top_op'.$x] == 6){
$top_op3 = 'include='.$original_home['top_op'.$x.'_4'].'&';
}else{
}
if($original_home['top_list'.$x.'_2']){$limit1 = $original_home['top_list'.$x.'_2'];}else{$limit1 = '8';};
?>
<?php if($original_home['top_list'.$x.'']):?>
<h2><?php echo $original_home['top_list'.$x.''];?></h2>
<?php endif; ?>
<div class="home2-main">
<?php $cnt = 0;$postslist = get_posts(''.$top_op3.'posts_per_page='.$limit1.'&orderby='.$original_home['top_list'.$x.'_1'].'&order=DESC');foreach ($postslist as $post) : setup_postdata($post);?> 
<?php $cnt++;if($cnt == 1 ) : ?>
<!-- 1件目 -->
<div class="home2-left">

<div class="home2-left-img">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><span class="cover" style="background-image: url('<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array( 450, 450 ));echo $image_url[0];?>')"></span></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><span class="cover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/no-img450x450.png')"></span></a>
<?php endif; ?>


<?php if($original_home['top_listop'.$x.'_4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>

</div>


<p class="home2-right-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
<?php if($original_home['top_list_op'.$x]):?>
<p class="date-main-list">

<?php if($original_home['top_listop'.$x.'_2']):?><span class="list-category-op"><?php the_category(' '); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?>
</p>
<?php endif; ?>
<p class="home2-right-content"><?php echo op_excerpt(250);?></p>
</div>
<div class="home2-main-sub-all">
<?php else : ?>
<!-- 2件目以降 -->
<div class="home2-main-sub">
<div class="home2-left-sub">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,$original_site['mainlist_shape']); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['mainlist_shape'] ?>.png" alt="no-image"></a>
<?php endif; ?>
<?php if($original_home['top_listop'.$x.'_4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>


</div>
<div class="home2-right-sub">
<p class="home1-right-title-sub"><a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></p>
<?php if($original_home['top_list_op'.$x]):?>
<p class="date-main-list">
<?php if($original_home['top_listop'.$x.'_2']):?><span class="list-category-op"><?php the_category(' '); ?></span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?>
</p>
<?php endif; ?>
</div></div>
<?php endif; ?>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
</div></div>
<!-- ブロック3終了 -->

<?php elseif($original_home['top_design'.$x] == 4): ?>
<!-- ブロック4開始 -->
<?php 
$top_op4='';
if($original_home['top_op'.$x] == 1){
}elseif($original_home['top_op'.$x] == 2){	
foreach ($original_home['top_op'.$x.'_1'] as $value) { $top_op4 .= $value.',';}
$top_op4 = 'category='.$top_op4.'&';
}elseif($original_home['top_op'.$x] == 3){
$top_op4 = 'post_type=page&';
}elseif($original_home['top_op'.$x] == 4){
foreach ($original_home['top_op'.$x.'_2'] as $value) { $top_op4 .= $value.',';}
$top_op4 = 'post_type=page&include='.$top_op4.'&';
}elseif($original_home['top_op'.$x] == 5){
foreach ($original_home['top_op'.$x.'_3'] as $value) { $top_op4 .= $value.',';}
$top_op4 = 'tag='.$top_op4.'&';
}elseif($original_home['top_op'.$x] == 6){
$top_op4 = 'include='.$original_home['top_op'.$x.'_4'].'&';
}else{
}




if($original_home['top_list'.$x.'_2']){$limit1 = $original_home['top_list'.$x.'_2'];}else{$limit1 = '8';};
?>
<?php if($original_home['top_list'.$x.'']):?>
<h2><?php echo $original_home['top_list'.$x.''];?></h2>
<?php endif; ?>
<?php $cnt = 0;$postslist = get_posts(''.$top_op4.'posts_per_page='.$limit1.'&orderby='.$original_home['top_list'.$x.'_1'].'&order=DESC');foreach ($postslist as $post) : setup_postdata($post);?> 
<?php $cnt++;if($cnt == 1 ) : ?>
<!-- 1件目 -->
<div class="home1-main">
<div class="home1-left">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><span class="cover" style="background-image: url('<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array( 450, 450 ));echo $image_url[0];?>')"></span></a>


<?php else: ?>
<a href="<?php the_permalink(); ?>"><span class="cover" style="background-image: url('<?php bloginfo('template_url'); ?>/img/no-img450x450.png')"></span></a>
<?php endif; ?>


<?php if($original_home['top_listop'.$x.'_4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>


</div>
<div class="home1-right">
<p class="home1-right-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></p>
<?php if($original_home['top_list_op'.$x]):?>
<p class="date-main-list">


<?php if($original_home['top_listop'.$x.'_2']):?><span class="list-category-op"><?php the_category(' '); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_1']):?><span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_3']):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?>
</p>
<?php endif; ?>
<p class="home1-right-content"><?php echo op_excerpt(350);?></p>
</div>
<div class="home1-main-sub-all">
<?php else : ?>
<!-- 2件目以降 -->
<div class="home1-main-sub">
<div class="home1-left-sub">
<?php if( has_post_thumbnail() ): ?>
<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,$original_site['mainlist_shape']); ?></a>
<?php else: ?>
<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['mainlist_shape'] ?>.png" alt="no-image"></a>
<?php endif; ?>


<?php if($original_home['top_listop'.$x.'_4']):?>
<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>
<?php endif; ?>



</div>
<div class="home1-right-sub">
<p class="home1-right-title-sub"><a href="<?php the_permalink();?>"><?php echo $post->post_title;?></a></p>
<?php if($original_home['top_list_op'.$x]):?>
<p class="date-main-list">


<?php if($original_home['top_listop'.$x.'_2']):?>

<span class="list-category-op"><?php the_category(' '); ?></span>


<?php endif; ?>


<?php if($original_home['top_listop'.$x.'_1']):?>

<span class="list-category-date"><?php echo get_the_date(); ?></span>


<?php endif; ?>
<?php if($original_home['top_listop'.$x.'_5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_3']):?>
<span class="list-category-author"><?php the_author_posts_link(); ?></span>
<?php endif; ?>
</p>
<?php endif; ?>
</div></div>
<?php endif; ?>
<?php endforeach; ?>
<?php wp_reset_postdata(); ?>
</div></div>
<!-- ブロック4終了 -->

<?php elseif($original_home['top_design'.$x] == 5): ?>
<!-- ブロック5開始 -->
<?php 
$top_op5='';
if($original_home['top_op'.$x] == 1){
}elseif($original_home['top_op'.$x] == 2){	
foreach ($original_home['top_op'.$x.'_1'] as $value) { $top_op5 .= $value.',';}
$top_op5 = 'category='.$top_op5.'&';
}elseif($original_home['top_op'.$x] == 3){
$top_op5 = 'post_type=page&';
}elseif($original_home['top_op'.$x] == 4){
foreach ($original_home['top_op'.$x.'_2'] as $value) { $top_op5 .= $value.',';}
$top_op5 = 'post_type=page&include='.$top_op5.'&';
}elseif($original_home['top_op'.$x] == 5){
foreach ($original_home['top_op'.$x.'_3'] as $value) { $top_op5 .= $value.',';}
$top_op5 = 'tag='.$top_op5.'&';
}elseif($original_home['top_op'.$x] == 6){
$top_op5 = 'include='.$original_home['top_op'.$x.'_4'].'&';
}else{
}
if($original_home['top_list'.$x.'_2']){$limit1 = $original_home['top_list'.$x.'_2'];}else{$limit1 = '8';};
 ?>
<?php if($original_home['top_list'.$x.'']):?>
<div class="home-d"><h2><?php echo $original_home['top_list'.$x];?></h2></div>
<?php endif; ?>
<?php $postslist = get_posts(''.$top_op5.'posts_per_page='.$limit1.'&orderby='.$original_home['top_list'.$x.'_1'].'&order=DESC');foreach ($postslist as $post) : setup_postdata($post);?> 
<div class="list-post"><div class="list-img<?php echo esc_html($original_site['mainlist_position']); ?>">
<?php if( has_post_thumbnail() ): ?><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID,$original_site['mainlist_shape']); ?></a><?php else: ?><a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $original_site['mainlist_shape'] ?>.png" alt="no-image"></a><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_4']):?>

<div class="list-post-view">
<span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($post->ID,"view",true))); ?></span> <span class="post-views">views</span>
</div>


<?php endif; ?>


</div>


<div class="list-content"><div class="list-top-title"><a href="<?php the_permalink(); ?>"><?php echo $post->post_title;?></a></div><div class="list_con">


<?php if($original_home['top_list_op'.$x]):?>




<p class="date-main-list">

<?php if($original_home['top_listop'.$x.'_2']):?><span class="list-category-op"><?php the_category(' '); ?></span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_1']):?>


<span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?>

<?php if($original_home['top_listop'.$x.'_5']):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?>
<?php if($original_home['top_listop'.$x.'_3']):?>

<span class="list-category-author"><?php the_author_posts_link(); ?></span>

<?php endif; ?>
</p>


<?php endif; ?>
<p class="date-list-cont">
<?php echo op_excerpt(250);?>
</p>





</div></div></div>
<?php endforeach; ?><?php wp_reset_postdata(); ?>
<!-- ブロック5終了 -->

<?php endif;} ?>