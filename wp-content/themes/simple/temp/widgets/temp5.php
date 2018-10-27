<?php
/*プロフィール　ウィジェット */
class original_profile_Widget extends WP_Widget {
function original_profile_Widget() {
parent::WP_Widget(
false,
$name = 'プロフィール',
array( 'description' => '【ユーザー】で設定したプロフィールを表示', )
);
}
function form( $instance ) {
?>
<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>">
</p>
<p>
<label for="<?php echo $this->get_field_id('author_id'); ?>">固定表示するユーザーID:</label>
<input type="number" min="1" step="1" id="<?php echo $this->get_field_id('author_id'); ?>" name="<?php echo $this->get_field_name('author_id'); ?>" value="<?php echo esc_attr( $instance['author_id'] ); ?>" size="3"><br />
※ユーザーが複数存在する場合に、サイドバーやフッターで表示する場合などに利用します。</p>
<p>
<label>表示する形：<input id="<?php echo $this->get_field_id('show_shape'); ?>" type="radio" <?php checked( esc_attr($instance['show_shape']), '' ); ?> name="<?php echo $this->get_field_name('show_shape'); ?>" value="">横バージョン　</label>
<label><input id="<?php echo $this->get_field_id('show_shape'); ?>" type="radio" <?php checked( esc_attr($instance['show_shape']), 1 ); ?> name="<?php echo $this->get_field_name('show_shape'); ?>" value="1">縦バージョン　</label>
</p>
<p>※プロフィールのオリジナル自己紹介が表示されます。<a target="_blank" href="<?php echo admin_url( 'users.php' ); ?>">ユーザー一覧</a></p>

<?php }
function update($new_instance, $old_instance) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['author_id'] = strip_tags($new_instance['author_id']);
$instance['show_shape'] = strip_tags($new_instance['show_shape']);
return $instance;
}
function widget( $args, $instance ) {extract( $args );
if($instance['title'] != ''){$title = apply_filters('widget_title', $instance['title']);}
echo $before_widget;
if( $title ){echo $before_title . $title . $after_title;}else{echo $before_title . 'プロフィール' . $after_title;}
$show_shape =$instance['show_shape'];
$author_id = $instance['author_id'];
if($author_id){$author_id = $author_id;}else{$author_id = $user->ID;}
?>
<?php if($show_shape):?>
<?php $org_profile = get_the_author_meta( 'original_profile', $author_id );?>
<div class="original-profile">
<div class="profile-right">
<?php if(isset ($org_profile['original_profile_img'])){$org_profile_img = $org_profile['original_profile_img'];}
echo wp_get_attachment_image( wp_filter_nohtml_kses($org_profile_img)); ?>
</div>
<div class="profile-left">
<p class="profile-name"><?php if(isset ($org_profile['original_profile_name'])){ echo wp_filter_nohtml_kses($org_profile['original_profile_name']);} ?>
</p>
<p class="profile-area"><?php if(isset ($org_profile['original_profile_area'])){ echo wp_filter_post_kses($org_profile['original_profile_area']);} ?></p>
</div>
<div class="profile-original">
<?php if(isset ($org_profile['original_profiles'])){ echo wp_filter_post_kses(wpautop( $org_profile['original_profiles'] ));} ?>
</div>
</div>

<?php else:?>
<?php $org_profile = get_the_author_meta( 'original_profile', $author_id ); ?>
<div class="original-profile">
<div class="profile-right">
<?php if(isset ($org_profile['original_profile_img'])){$org_profile_img = $org_profile['original_profile_img'];}
echo wp_get_attachment_image( wp_filter_nohtml_kses($org_profile_img)); ?>
</div>
<div class="profile-left">
<p class="profile-name"><?php if(isset ($org_profile['original_profile_name'])){ echo wp_filter_nohtml_kses($org_profile['original_profile_name']);} ?></p>
<p class="profile-area"><?php if(isset ($org_profile['original_profile_area'])){ echo wp_filter_post_kses($org_profile['original_profile_area']);} ?></p>
<div class="profile-original2">
<?php if(isset ($org_profile['original_profiles'])){ echo wp_filter_post_kses(wpautop( $org_profile['original_profiles'] ));} ?>
</div>
</div>
</div>

<?php endif;?>
<?php echo $after_widget;}}register_widget('original_profile_Widget');?>