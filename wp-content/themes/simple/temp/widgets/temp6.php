<?php
/*広告　ウィジェット */
class original_publicity_Widget extends WP_Widget {
function original_publicity_Widget() {
parent::WP_Widget(
false,
$name = '広告バナー用',
array( 'description' => '広告バナー専用', )
);
}
function form( $instance ) {
?>
<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>">
</p>
<p>
<label>表示位置：<input id="<?php echo $this->get_field_id('show_publicity'); ?>" type="radio" <?php checked( esc_attr($instance['show_publicity']), '' ); ?> name="<?php echo $this->get_field_name('show_publicity'); ?>" value="">左寄せ　</label>
<label><input id="<?php echo $this->get_field_id('show_publicity'); ?>" type="radio" <?php checked( esc_attr($instance['show_publicity']), '1' ); ?> name="<?php echo $this->get_field_name('show_publicity'); ?>" value="1">中央　</label>
<label><input id="<?php echo $this->get_field_id('show_publicity'); ?>" type="radio" <?php checked( esc_attr($instance['show_publicity']), '2' ); ?> name="<?php echo $this->get_field_name('show_publicity'); ?>" value="2">右寄せ　</label>
</p>
<p>
<textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('show_source'); ?>" name="<?php echo $this->get_field_name('show_source'); ?>"><?php echo $instance['show_source'] ?></textarea>
</p>
<?php }
function update($new_instance, $old_instance) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['show_source'] = $new_instance['show_source'];
$instance['show_publicity'] = strip_tags($new_instance['show_publicity']);
return $instance;
}
function widget( $args, $instance ) {extract( $args );
if($instance['title'] != ''){$title = apply_filters('widget_title', $instance['title']);}
echo $before_widget;
if( $title ){echo $before_title . $title . $after_title;}
?>
<div class="original-publicity<?php echo $instance['show_publicity']; ?>">
<?php echo $instance['show_source']; ?>
</div>
<?php echo $after_widget;}}register_widget('original_publicity_Widget');?>