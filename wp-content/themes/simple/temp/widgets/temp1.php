<?php
/*最新の記事　ウィジェット */
class new_Widget extends WP_Widget {
function new_Widget() {
parent::WP_Widget(
false,
$name = '最新の投稿',
array( 'description' => '最新の投稿を表示', )
);
}
function form( $instance ) {
?>
<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>"></p>

<p><label for="<?php echo $this->get_field_id('limit'); ?>"><?php _e('表示する投稿数:'); ?></label>
<input type="number" min="1" step="1" id="<?php echo $this->get_field_id('limit'); ?>" name="<?php echo $this->get_field_name('limit'); ?>" value="<?php echo esc_attr( $instance['limit'] ); ?>" size="3"></p>


<p><input id="<?php echo $this->get_field_id('show_category'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_category'); ?>" <?php checked( esc_attr($instance['show_category']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_category'); ?>">カテゴリを表示</label></p>


<p><input id="<?php echo $this->get_field_id('show_date'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_date'); ?>" <?php checked( esc_attr($instance['show_date']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_date'); ?>">投稿日を表示</label></p>

<p><input id="<?php echo $this->get_field_id('show_view'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_view'); ?>" <?php checked( esc_attr($instance['show_view']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_view'); ?>">閲覧数を表示</label></p>

<p><input id="<?php echo $this->get_field_id('show_comments'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_comments'); ?>" <?php checked( esc_attr($instance['show_comments']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_comments'); ?>">コメント数を表示</label></p>

<p><input id="<?php echo $this->get_field_id('show_author'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_author'); ?>" <?php checked( esc_attr($instance['show_author']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_author'); ?>">投稿者を表示</label></p>

<p><input id="<?php echo $this->get_field_id('show_img'); ?>" class="checkbox" type="checkbox" name="<?php echo $this->get_field_name('show_img'); ?>" <?php checked( esc_attr($instance['show_img']), on ); ?>>
<label for="<?php echo $this->get_field_id('show_img'); ?>">アイキャッチを表示</label></p>

<p><label>表示する位置：<input id="<?php echo $this->get_field_id('show_position'); ?>" type="radio" <?php checked( esc_attr($instance['show_position']), '' ); ?> name="<?php echo $this->get_field_name('show_position'); ?>" value="">左側　</label>
<label><input id="<?php echo $this->get_field_id('show_position'); ?>" type="radio" <?php checked( esc_attr($instance['show_position']), 1 ); ?> name="<?php echo $this->get_field_name('show_position'); ?>" value="1">右側　</label></p>

<p><label>表示する形：<input id="<?php echo $this->get_field_id('show_shape'); ?>" type="radio" <?php checked( esc_attr($instance['show_shape']), '' ); ?> name="<?php echo $this->get_field_name('show_shape'); ?>" value="">正方形　</label>
<label><input id="<?php echo $this->get_field_id('show_shape'); ?>" type="radio" <?php checked( esc_attr($instance['show_shape']), 1 ); ?> name="<?php echo $this->get_field_name('show_shape'); ?>" value="1">長方形　</label></p>
<?php }
function update($new_instance, $old_instance) {
$instance = $old_instance;
if($new_instance['show_author'] || $new_instance['show_comments'] || $new_instance['show_category'] || $new_instance['show_view']|| $new_instance['show_date']){$show_list = 1;}else{$show_list = '';}
if($new_instance['show_author'] || $new_instance['show_comments'] || $new_instance['show_category'] || $new_instance['show_date']){$show_list_img = 1;}else{$show_list_img = '';}
$instance['show_list'] = strip_tags($show_list);
$instance['show_list_img'] = strip_tags($show_list_img);
$instance['title'] = strip_tags($new_instance['title']);
$instance['show_date'] = strip_tags($new_instance['show_date']);
$instance['show_view'] = strip_tags($new_instance['show_view']);
$instance['show_author'] = strip_tags($new_instance['show_author']);
$instance['show_category'] = strip_tags($new_instance['show_category']);
$instance['show_comments'] = strip_tags($new_instance['show_comments']);
$instance['show_position'] = strip_tags($new_instance['show_position']);
$instance['show_shape'] = strip_tags($new_instance['show_shape']);
$instance['show_img'] = strip_tags($new_instance['show_img']);
$instance['limit'] = is_numeric($new_instance['limit']) ? $new_instance['limit'] : 5;
return $instance;
}
function widget( $args, $instance ) {extract( $args );
if($instance['title'] != ''){$title = apply_filters('widget_title', $instance['title']);}
echo $before_widget;
if( $title ){echo $before_title . $title . $after_title;}else{echo $before_title . '最新の投稿' . $after_title;}
?>
<?php //最新の投稿
$show_date =$instance['show_date'];
$show_view =$instance['show_view'];
$show_author =$instance['show_author'];
$show_comments =$instance['show_comments'];
$show_category =$instance['show_category'];
$show_position =$instance['show_position'];
$show_list =$instance['show_list'];
$show_list_img =$instance['show_list_img'];
if($instance['show_shape']){$show_shape = 'img300x200';}else{$show_shape = 'img300x300';}
?>
<?php
$post_limit = (wp_is_mobile()) ? 3 : $instance['limit'];
$args = Array('post_type' => 'post','posts_per_page' => wp_filter_nohtml_kses($post_limit), );
$postitem = new WP_Query($args); 
if($postitem -> have_posts()) :
while ($postitem -> have_posts()) : $postitem -> the_post();?><?php if($instance['show_img']):?><div class="img-new-post clearfix"><div class="new-post-img<?php echo wp_filter_nohtml_kses($show_position);?>"><?php if( has_post_thumbnail() ): ?><a href="<?php the_permalink(); ?>"><?php esc_url(the_post_thumbnail($show_shape)); ?></a><?php else: ?><a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/no-<?php echo $show_shape ?>.png" alt="no-image"></a><?php endif; ?><?php if($show_view):?><div class="list-post-view"><span class="post-view-count"><?php echo number_format((int)esc_html(get_post_meta(get_the_ID(),"view",true))); ?></span> <span class="post-views">views</span></div><?php endif; ?></div><div class="new-post-title"><p class="wideget-title-color"><a href="<?php the_permalink(); ?>"><?php echo the_title()?></a></p><?php if($show_list_img):?><?php if($show_category):?><p class="list-category-op"><?php the_category(' '); ?></p><?php endif; ?><p class="wideget-post-op"><?php if($show_date):?><span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?><?php if($show_comments):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?><?php if($show_author):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?></p><?php endif; ?></div></div><?php else: ?><div class="new-post-text"><p class="wideget-title-color"><a href="<?php the_permalink(); ?>"><?php echo the_title()?></a></p><?php if($show_list):?><?php if($show_category):?><p class="list-category-op"><?php the_category(' '); ?></p><?php endif; ?><p class="wideget-post-op"><?php if($show_date):?><span class="list-category-date"><?php echo get_the_date(); ?></span><?php endif; ?><?php if($show_view):?><span class="list-category-view"><?php echo number_format((int)esc_html(get_post_meta(get_the_ID(),"view",true))); ?> views</span><?php endif; ?><?php if($show_comments):?><span class="list-category-comments"><?php echo number_format(get_comments_number()); ?> 件</span><?php endif; ?><?php if($show_author):?><span class="list-category-author"><?php the_author_posts_link(); ?></span><?php endif; ?></p><?php endif; ?></div><?php endif; ?><?php endwhile;endif;wp_reset_postdata();?>
<?php echo $after_widget;}}register_widget('new_Widget');?>