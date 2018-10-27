<?php

$css_op_val = get_option('css_op');

// チェック
if ( ! empty( $_POST ) && check_admin_referer( 'css_op_action','css_op_nonce_field' ) && current_user_can( 'manage_options' ) ) {

if( $_POST['submit_flag'] == 'Y' ) {
$css_op_val = $_POST['css_op'];



$css_op_val = str_replace('\\','', $css_op_val);
$css_op_min_val = preg_replace('/\r\n/','', $css_op_val);

$headline_main = get_option('css_h');
$headline_main_min = preg_replace('/\r\n/','', $headline_main);
$css_op_min_val = $headline_main_min.$css_op_min_val;



update_option('css_h_min', wp_filter_nohtml_kses($css_op_min_val));
update_option('css_op',wp_filter_nohtml_kses($css_op_val));


}

?>
<div class="updated"><p><strong>設定は保存されました。</strong></p></div>
<?php }?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/admin-main.js"></script>

<div id="original_option">
<h2>オリジナル設定画面</h2>
<div id="original_options">
<style>
.css_setting{
margin:0 0 5px 0;
}
</style>


<form name="form1" method="post" action="<?php echo esc_url(admin_url( 'options-general.php?page=original_css' )); ?>">
<input type="hidden" name="submit_flag" value="Y">


<h3>オリジナルCSS設定</h3>
<div class="original_area">
<label>
<p class="css_setting">
※&lt;style type=text/css&gt;などは不要で、そのまま入力してください
※半角の￥含むソースは使用できません<br />
<strong>入力例) .demo{width:98%;}</strong>
</p>

<textarea id="description" class="large-text" style="width:100%;" rows="20" name="css_op"><?php echo str_replace('\\', '', wp_filter_nohtml_kses(get_option('css_op'))); ?></textarea>
</label>
</div>




<p class="submit"><input type="submit" name="Submit" class="button-primary" value="更新" /></p>
<?php wp_nonce_field( 'css_op_action','css_op_nonce_field' ); ?>
</form>
</div>
</div>