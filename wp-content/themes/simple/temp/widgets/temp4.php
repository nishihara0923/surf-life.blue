<?php
/*ランキング　ウィジェット */
class ranking_Widget extends WP_Widget {
function ranking_Widget() {
parent::WP_Widget(
false,
$name = 'ランキング',
array( 'description' => '累計ランキングを表示します。', )
);
}
function form( $instance ) {
?>
<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>">
</p>
<p>
<label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('表示する投稿数:'); ?></label>
<input type="number" min="1" step="1" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" value="<?php echo esc_attr( $instance['limit'] ); ?>" size="3">
</p>


<p>
<input id="<?php echo $this->get_field_id('show_category'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_category'); ?>" <?php checked( esc_attr($instance['show_category']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_category'); ?>">カテゴリを表示</label>
</p>


<p>
<input id="<?php echo $this->get_field_id('show_date'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_date'); ?>" <?php checked( esc_attr($instance['show_date']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_date'); ?>">投稿日を表示</label>
</p>
<p>
<input id="<?php echo $this->get_field_id('show_view'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_view'); ?>" <?php checked( esc_attr($instance['show_view']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_view'); ?>">閲覧数を表示</label>
</p>

<p><input id="<?php echo $this->get_field_id('show_comments'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_comments'); ?>" <?php checked( esc_attr($instance['show_comments']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_comments'); ?>">コメント数を表示</label></p>


<p><input id="<?php echo $this->get_field_id('show_author'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_author'); ?>" <?php checked( esc_attr($instance['show_author']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_author'); ?>">投稿者を表示</label></p>

<p>
<input id="<?php echo $this->get_field_id('show_img'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_img'); ?>" <?php checked( esc_attr($instance['show_img']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_img'); ?>">アイキャッチを表示</label>
</p>
<p>
<label>表示する位置：<input id="<?php echo $this->get_field_id('show_position'); ?>" type="radio" <?php checked( esc_attr($instance['show_position']), '' ); ?> name="<?php echo $this->get_field_name('show_position'); ?>" value="">左側　</label>
<label><input id="<?php echo $this->get_field_id('show_position'); ?>" type="radio" <?php checked( esc_attr($instance['show_position']), 1 ); ?> name="<?php echo $this->get_field_name('show_position'); ?>" value="1">右側　</label>
</p>

<p>
<label>表示する形：<input id="<?php echo $this->get_field_id('show_shape'); ?>" type="radio" <?php checked( esc_attr($instance['show_shape']), '' ); ?> name="<?php echo $this->get_field_name('show_shape'); ?>" value="">正方形　</label>
<label><input id="<?php echo $this->get_field_id('show_shape'); ?>" type="radio" <?php checked( esc_attr($instance['show_shape']), 1 ); ?> name="<?php echo $this->get_field_name('show_shape'); ?>" value="1">長方形　</label>
</p>
<p>
<input id="<?php echo $this->get_field_id('show_ranking'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_ranking'); ?>" <?php checked( esc_attr($instance['show_ranking']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_ranking'); ?>">順位を表示</label>
</p>
<p>
<input id="<?php echo $this->get_field_id('show_ranking_cat'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_ranking_cat'); ?>" <?php checked( esc_attr($instance['show_ranking_cat']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_ranking_cat'); ?>">カテゴリ別ランキング</label><br />
※表示されているカテゴリ・タグ・作成者ページのランキングを表示します。(各一覧ページで有効)
</p>


<?php }
function update($new_instance, $old_instance) {
$instance = $old_instance;
if($new_instance['show_author'] || $new_instance['show_comments'] || $new_instance['show_category'] || $new_instance['show_view']|| $new_instance['show_date']){$show_list = 1;}else{$show_list = '';}
if($new_instance['show_author'] || $new_instance['show_comments'] || $new_instance['show_category'] || $new_instance['show_date']){$show_list_img = 1;}else{$show_list_img = '';}
$instance['show_list'] = strip_tags($show_list);
$instance['show_list_img'] = strip_tags($show_list_img);
$instance['title'] = strip_tags($new_instance['title']);
$instance['show_date'] = strip_tags($new_instance['show_date']);
$instance['limit'] = is_numeric($new_instance['limit']) ? $new_instance['limit'] : 5;
$instance['show_comments'] = strip_tags($new_instance['show_comments']);
$instance['show_category'] = strip_tags($new_instance['show_category']);
$instance['show_author'] = strip_tags($new_instance['show_author']);
$instance['show_position'] = strip_tags($new_instance['show_position']);
$instance['show_shape'] = strip_tags($new_instance['show_shape']);
$instance['show_view'] = strip_tags($new_instance['show_view']);
$instance['show_img'] = strip_tags($new_instance['show_img']);
$instance['show_ranking'] = strip_tags($new_instance['show_ranking']);
$instance['show_ranking_cat'] = strip_tags($new_instance['show_ranking_cat']);
return $instance;
}
function widget( $args, $instance ) {extract( $args );
if($instance['title'] != ''){$title = apply_filters('widget_title', $instance['title']);}
echo $before_widget;
if( $title ){echo $before_title . $title . $after_title;}else{echo $before_title . 'ランキング' . $after_title;}
?>
<?php 
//ランキング
$show_date =$instance['show_date'];
$show_view =$instance['show_view'];
$show_author =$instance['show_author'];
$show_comments =$instance['show_comments'];
$show_category =$instance['show_category'];
$show_position =$instance['show_position'];
$show_list =$instance['show_list'];
$show_list_img =$instance['show_list_img'];
if($instance['show_shape']){$show_shape = 'img300x200';}else{$show_shape = 'img300x300';
}
if($instance['show_ranking_cat']){
if(is_category()){$show_catid = get_queried_object_id();
}elseif(is_tag()){$show_tagid = get_queried_object_id();
}elseif(is_author()){$show_authorid = get_queried_object_id();
}}
?><?php 
$post_limit = (wp_is_mobile()) ? 3 : $instance['limit'];
$show_ranking = $instance['show_ranking'];$rank_style = '';if($show_ranking){$rank_style = '2'; }else{$rank_style = '';};$i = 1;$postslist = get_posts('posts_per_page='.wp_filter_nohtml_kses($post_limit).
'&tag_id='.$show_tagid.'&cat='.$show_catid.'&author='.$show_authorid.'&orderby=meta_value_num&meta_key=view&order=DESC');foreach ( $postslist as $val ):setup_postdata( $val );?><?php if($instance['show_img']):?><div class="img-new-post clearfix"> <div class="new-post-img<?php echo wp_filter_nohtml_kses($show_position);?>"><?php if( has_post_thumbnail($val->ID) ): ?><a href="<?php echo esc_url(get_permalink($val->ID));?>"><?php echo get_the_post_thumbnail($val->ID,$show_shape); ?></a><?php else: ?><a href="<?php echo esc_url(get_permalink($val->ID));?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo wp_filter_nohtml_kses($show_shape) ?>.png" alt="no-image"></a><?php endif; ?><?php if($show_ranking){$is = $i++;	echo'<div class="ranking-img"><span class="ranking-i st-i'.$is.'">'.$is.'</span></div>';}?><?php if($show_view):?><div class="list-post-view"><span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta($val->ID,"view",true))); ?></span> <span class="post-views">views</span></div><?php endif; ?></div><div class="new-post-title"><p class="wideget-title-color"><a href="<?php echo esc_url(get_permalink($val->ID)); ?>"><?php echo get_post($val->ID)->post_title?></a></p><?php if($show_list_img):?><?php if($show_category):?><p class="list-category-op"><?php esc_html(the_category(' ','',$val->ID)); ?></p><?php endif; ?><p class="wideget-post-op"><?php if($show_date):?><span class="list-category-date"><?php echo get_the_date('',$val->ID); ?></span><?php endif; ?><?php if($show_comments):?><span class="list-category-comments"><?php echo number_format(get_comments_number($val->ID)); ?> 件</span><?php endif; ?><?php if($show_author):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?></p><?php endif; ?></div></div><?php else: ?><div class="new-post-text<?php echo wp_filter_nohtml_kses($rank_style)?>"><?php if($show_ranking):$ist = $i++;?><div class="new-post-text-left"><span class="ranking st<?php echo wp_filter_nohtml_kses($ist)?>"><?php echo wp_filter_nohtml_kses($ist)?></span></div><?php else:?><?php endif;?><div class="post-ranking-right"><p class="post-justify"><a href="<?php echo esc_url(get_permalink($val->ID)); ?>"><?php echo get_post($val->ID)->post_title?></a></p><?php if($show_list):?><?php if($show_category):?><p class="list-category-op"><?php esc_html(the_category(' ','',$val->ID)); ?></p><?php endif; ?><p class="wideget-post-op">
<?php if($show_date):?>
<span class="list-category-date"><?php echo get_the_date('',$val->ID); ?></span>
<?php endif; ?>
<?php if($show_view):?>
<span class="list-category-view">
<?php echo number_format((int)esc_html(get_post_meta($val->ID,"view",true))); ?> views</span><?php endif; ?>

<?php if($show_comments):?>
<span class="list-category-comments"><?php echo number_format(get_comments_number($val->ID)); ?> 件</span>
<?php endif; ?>


<?php if($show_author):?>
<span class="list-category-author"><?php the_author_posts_link(); ?></span>
<?php endif; ?>
</p>
<?php endif; ?>
</div>


</div>
<?php endif; ?>
<?php endforeach;wp_reset_postdata();?>

<?php echo $after_widget;}}register_widget('ranking_Widget');?>