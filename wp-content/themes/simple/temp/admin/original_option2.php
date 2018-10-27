<?php
// チェック
if ( ! empty( $_POST ) && check_admin_referer( 'original_option2_action','original_option2_nonce_field' ) && current_user_can( 'manage_options' ) ) {

if( $_POST['submit_flag'] == 'Y' ) {

$top_seo_title = $_POST['top_seo_title'];
$top_seo_keywords = $_POST['top_seo_keywords'];
$top_seo_descript = $_POST['top_seo_descript'];
$top_seo_descript = preg_replace('/\r\n/','', $top_seo_descript);
if ($top_seo_descript || $top_seo_descript || $top_seo_title) {
update_option( 'top_seo', array(
'top_seo_title' => wp_filter_nohtml_kses($top_seo_title),
'top_seo_keywords' => wp_filter_nohtml_kses($top_seo_keywords),
'top_seo_descript' => wp_filter_nohtml_kses($top_seo_descript),));
}else{
delete_option( 'top_seo');
}

$top_list_op1 = $_POST['top_listop1_1'].$_POST['top_listop1_2'].$_POST['top_listop1_3'];
$top_list_op2 = $_POST['top_listop2_1'].$_POST['top_listop2_2'].$_POST['top_listop2_3'];
$top_list_op3 = $_POST['top_listop3_1'].$_POST['top_listop3_2'].$_POST['top_listop3_3'];
$top_list_op4 = $_POST['top_listop4_1'].$_POST['top_listop4_2'].$_POST['top_listop4_3'];
$top_list_op5 = $_POST['top_listop5_1'].$_POST['top_listop5_2'].$_POST['top_listop5_3'];

if($top_list_op1){$top_list_op1 = '1';}
if($top_list_op2){$top_list_op2 = '1';}
if($top_list_op3){$top_list_op3 = '1';}
if($top_list_op4){$top_list_op4 = '1';}
if($top_list_op5){$top_list_op5 = '1';}

$design_count = $_POST['top_design1'].$_POST['top_design2'].$_POST['top_design3'].$_POST['top_design4'].$_POST['top_design5'];
if($design_count){$design_count = 1;}

update_option('original_home', array(
'top_design1' => wp_filter_nohtml_kses($_POST['top_design1']),
'top_design2' => wp_filter_nohtml_kses($_POST['top_design2']),
'top_design3' => wp_filter_nohtml_kses($_POST['top_design3']),
'top_design4' => wp_filter_nohtml_kses($_POST['top_design4']),
'top_design5' => wp_filter_nohtml_kses($_POST['top_design5']),
'design_count' => wp_filter_nohtml_kses($design_count),
'top_op1' => wp_filter_nohtml_kses($_POST['top_op1']),
'top_op2' => wp_filter_nohtml_kses($_POST['top_op2']),
'top_op3' => wp_filter_nohtml_kses($_POST['top_op3']),
'top_op4' => wp_filter_nohtml_kses($_POST['top_op4']),
'top_op5' => wp_filter_nohtml_kses($_POST['top_op5']),
'top_listop1_1' => wp_filter_nohtml_kses($_POST['top_listop1_1']),
'top_listop2_1' => wp_filter_nohtml_kses($_POST['top_listop2_1']),
'top_listop3_1' => wp_filter_nohtml_kses($_POST['top_listop3_1']),
'top_listop4_1' => wp_filter_nohtml_kses($_POST['top_listop4_1']),
'top_listop5_1' => wp_filter_nohtml_kses($_POST['top_listop5_1']),
'top_listop1_2' => wp_filter_nohtml_kses($_POST['top_listop1_2']),
'top_listop2_2' => wp_filter_nohtml_kses($_POST['top_listop2_2']),
'top_listop3_2' => wp_filter_nohtml_kses($_POST['top_listop3_2']),
'top_listop4_2' => wp_filter_nohtml_kses($_POST['top_listop4_2']),
'top_listop5_2' => wp_filter_nohtml_kses($_POST['top_listop5_2']),
'top_listop1_3' => wp_filter_nohtml_kses($_POST['top_listop1_3']),
'top_listop2_3' => wp_filter_nohtml_kses($_POST['top_listop2_3']),
'top_listop3_3' => wp_filter_nohtml_kses($_POST['top_listop3_3']),
'top_listop4_3' => wp_filter_nohtml_kses($_POST['top_listop4_3']),
'top_listop5_3' => wp_filter_nohtml_kses($_POST['top_listop5_3']),



'top_listop1_4' => wp_filter_nohtml_kses($_POST['top_listop1_4']),
'top_listop2_4' => wp_filter_nohtml_kses($_POST['top_listop2_4']),
'top_listop3_4' => wp_filter_nohtml_kses($_POST['top_listop3_4']),
'top_listop4_4' => wp_filter_nohtml_kses($_POST['top_listop4_4']),
'top_listop5_4' => wp_filter_nohtml_kses($_POST['top_listop5_4']),

'top_listop1_5' => wp_filter_nohtml_kses($_POST['top_listop1_5']),
'top_listop2_5' => wp_filter_nohtml_kses($_POST['top_listop2_5']),
'top_listop3_5' => wp_filter_nohtml_kses($_POST['top_listop3_5']),
'top_listop4_5' => wp_filter_nohtml_kses($_POST['top_listop4_5']),
'top_listop5_5' => wp_filter_nohtml_kses($_POST['top_listop5_5']),








'top_list_op1' => wp_filter_nohtml_kses($top_list_op1),
'top_list_op2' => wp_filter_nohtml_kses($top_list_op2),
'top_list_op3' => wp_filter_nohtml_kses($top_list_op3),
'top_list_op4' => wp_filter_nohtml_kses($top_list_op4),
'top_list_op5' => wp_filter_nohtml_kses($top_list_op5),
'top_op1_1' => esc_sql($_POST['top_op1_1']),
'top_op2_1' => esc_sql($_POST['top_op2_1']),
'top_op3_1' => esc_sql($_POST['top_op3_1']),
'top_op4_1' => esc_sql($_POST['top_op4_1']),
'top_op5_1' => esc_sql($_POST['top_op5_1']),
'top_op1_2' => esc_sql($_POST['top_op1_2']),
'top_op2_2' => esc_sql($_POST['top_op2_2']),
'top_op3_2' => esc_sql($_POST['top_op3_2']),
'top_op4_2' => esc_sql($_POST['top_op4_2']),
'top_op5_2' => esc_sql($_POST['top_op5_2']),
'top_op1_3' => esc_sql($_POST['top_op1_3']),
'top_op2_3' => esc_sql($_POST['top_op2_3']),
'top_op3_3' => esc_sql($_POST['top_op3_3']),
'top_op4_3' => esc_sql($_POST['top_op4_3']),
'top_op5_3' => esc_sql($_POST['top_op5_3']),
'top_op1_4' => wp_filter_nohtml_kses($_POST['top_op1_4']),
'top_op2_4' => wp_filter_nohtml_kses($_POST['top_op2_4']),
'top_op3_4' => wp_filter_nohtml_kses($_POST['top_op3_4']),
'top_op4_4' => wp_filter_nohtml_kses($_POST['top_op4_4']),
'top_op5_4' => wp_filter_nohtml_kses($_POST['top_op5_4']),
'top_list1' => wp_filter_nohtml_kses($_POST['top_list1']),
'top_list2' => wp_filter_nohtml_kses($_POST['top_list2']),
'top_list3' => wp_filter_nohtml_kses($_POST['top_list3']),
'top_list4' => wp_filter_nohtml_kses($_POST['top_list4']),
'top_list5' => wp_filter_nohtml_kses($_POST['top_list5']),
'top_list1_1' => wp_filter_nohtml_kses($_POST['top_list1_1']),
'top_list2_1' => wp_filter_nohtml_kses($_POST['top_list2_1']),
'top_list3_1' => wp_filter_nohtml_kses($_POST['top_list3_1']),
'top_list4_1' => wp_filter_nohtml_kses($_POST['top_list4_1']),
'top_list5_1' => wp_filter_nohtml_kses($_POST['top_list5_1']),
'top_list1_2' => wp_filter_nohtml_kses($_POST['top_list1_2']),
'top_list2_2' => wp_filter_nohtml_kses($_POST['top_list2_2']),
'top_list3_2' => wp_filter_nohtml_kses($_POST['top_list3_2']),
'top_list4_2' => wp_filter_nohtml_kses($_POST['top_list4_2']),
'top_list5_2' => wp_filter_nohtml_kses($_POST['top_list5_2']),
));

update_option('home_slide', array(
'slide_radio' => wp_filter_nohtml_kses($_POST['slide_radio']),
'slide_color_radio' => wp_filter_nohtml_kses($_POST['slide_color_radio']),
'original_op00' => wp_filter_nohtml_kses($_POST['original_op00']),
'mediaid0' => wp_filter_nohtml_kses($_POST['mediaid0']),
'mediaid2' => wp_filter_nohtml_kses($_POST['mediaid2']),
'mediaid3' => wp_filter_nohtml_kses($_POST['mediaid3']),
'mediaid4' => wp_filter_nohtml_kses($_POST['mediaid4']),
'mediaid5' => wp_filter_nohtml_kses($_POST['mediaid5']),
'mediaid6' => wp_filter_nohtml_kses($_POST['mediaid6']),
'mediaid7' => wp_filter_nohtml_kses($_POST['mediaid7']),
'mediaid8' => wp_filter_nohtml_kses($_POST['mediaid8']),
'mediaid9' => wp_filter_nohtml_kses($_POST['mediaid9']),
'mediaid10' => wp_filter_nohtml_kses($_POST['mediaid10']),
'mediaid11' => wp_filter_nohtml_kses($_POST['mediaid11']),
'slide_speed' => wp_filter_nohtml_kses($_POST['slide_speed']),
'original_op8_1' => wp_filter_nohtml_kses($_POST['original_op8_1']),
'original_op8_2' => wp_filter_nohtml_kses($_POST['original_op8_2']),
'original_op8_3' => wp_filter_nohtml_kses($_POST['original_op8_3']),
'original_op8_4' => wp_filter_nohtml_kses($_POST['original_op8_4']),
'original_op8_5' => wp_filter_nohtml_kses($_POST['original_op8_5']),
'original_op8_6' => wp_filter_nohtml_kses($_POST['original_op8_6']),
'original_op8_7' => wp_filter_nohtml_kses($_POST['original_op8_7']),
'original_op8_8' => wp_filter_nohtml_kses($_POST['original_op8_8']),
'original_op8_9' => wp_filter_nohtml_kses($_POST['original_op8_9']),
'original_op8_10' => wp_filter_nohtml_kses($_POST['original_op8_10']),
'original_op_tx8_1' => wp_filter_nohtml_kses($_POST['original_op_tx8_1']),
'original_op_tx8_2' => wp_filter_nohtml_kses($_POST['original_op_tx8_2']),
'original_op_tx8_3' => wp_filter_nohtml_kses($_POST['original_op_tx8_3']),
'original_op_tx8_4' => wp_filter_nohtml_kses($_POST['original_op_tx8_4']),
'original_op_tx8_5' => wp_filter_nohtml_kses($_POST['original_op_tx8_5']),
'original_op_tx8_6' => wp_filter_nohtml_kses($_POST['original_op_tx8_6']),
'original_op_tx8_7' => wp_filter_nohtml_kses($_POST['original_op_tx8_7']),
'original_op_tx8_8' => wp_filter_nohtml_kses($_POST['original_op_tx8_8']),
'original_op_tx8_9' => wp_filter_nohtml_kses($_POST['original_op_tx8_9']),
'original_op_tx8_10' => wp_filter_nohtml_kses($_POST['original_op_tx8_10']),
));

update_option('mediaid_main', array(
array(wp_filter_post_kses($_POST['mediaid2']),esc_url($_POST['original_op8_1']),wp_filter_post_kses($_POST['original_op_tx8_1'])),
array(wp_filter_post_kses($_POST['mediaid3']),esc_url($_POST['original_op8_2']),wp_filter_post_kses($_POST['original_op_tx8_2'])),
array(wp_filter_post_kses($_POST['mediaid4']),esc_url($_POST['original_op8_3']),wp_filter_post_kses($_POST['original_op_tx8_3'])),
array(wp_filter_post_kses($_POST['mediaid5']),esc_url($_POST['original_op8_4']),wp_filter_post_kses($_POST['original_op_tx8_4'])),
array(wp_filter_post_kses($_POST['mediaid6']),esc_url($_POST['original_op8_5']),wp_filter_post_kses($_POST['original_op_tx8_5'])),
array(wp_filter_post_kses($_POST['mediaid7']),esc_url($_POST['original_op8_6']),wp_filter_post_kses($_POST['original_op_tx8_6'])),
array(wp_filter_post_kses($_POST['mediaid8']),esc_url($_POST['original_op8_7']),wp_filter_post_kses($_POST['original_op_tx8_7'])),
array(wp_filter_post_kses($_POST['mediaid9']),esc_url($_POST['original_op8_8']),wp_filter_post_kses($_POST['original_op_tx8_8'])),
array(wp_filter_post_kses($_POST['mediaid10']),esc_url($_POST['original_op8_9']),wp_filter_post_kses($_POST['original_op_tx8_9'])),
array(wp_filter_post_kses($_POST['mediaid11']),esc_url($_POST['original_op8_10']),wp_filter_post_kses($_POST['original_op_tx8_10']))
));

}
?>
<div class="updated"><p><strong>設定は保存されました。</strong></p></div>
<?php }?>

<?php $original_home = get_option('original_home');$home_slide = get_option('home_slide');$top_seo = get_option( 'top_seo')?>





<div id="original_option">
<div id="original_options">
<h2>トップページの設定</h2>
<form name="form1" method="post" action="<?php echo esc_url(admin_url( 'options-general.php?page=original_option2' )); ?>">
<input type="hidden" name="submit_flag" value="Y">

<?php 
$top1_1 = is_array(esc_sql($original_home['top_op1_1']));
$top1_2 = is_array(esc_sql($original_home['top_op1_2']));
$top1_3 = is_array(esc_sql($original_home['top_op1_3']));

$top2_1 = is_array(esc_sql($original_home['top_op2_1']));
$top2_2 = is_array(esc_sql($original_home['top_op2_2']));
$top2_3 = is_array(esc_sql($original_home['top_op2_3']));

$top3_1 = is_array(esc_sql($original_home['top_op3_1']));
$top3_2 = is_array(esc_sql($original_home['top_op3_2']));
$top3_3 = is_array(esc_sql($original_home['top_op3_3']));

$top4_1 = is_array(esc_sql($original_home['top_op4_1']));
$top4_2 = is_array(esc_sql($original_home['top_op4_2']));
$top4_3 = is_array(esc_sql($original_home['top_op4_3']));

$top5_1 = is_array(esc_sql($original_home['top_op5_1']));
$top5_2 = is_array(esc_sql($original_home['top_op5_2']));
$top5_3 = is_array(esc_sql($original_home['top_op5_3']));
?>
<h3>フロントページ設定　(トップページ一覧)</h3>

<p class="admin-title">■タイトル(1段目)</p>
<input type="text" name="top_list1" value="<?php echo wp_filter_nohtml_kses($original_home['top_list1']);?>" size="20"><br />
表示オプション ：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop1_1']), 1 ); ?> name="top_listop1_1" value="1">投稿日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop1_2']), 1 ); ?> name="top_listop1_2" value="1">カテゴリ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop1_4']), 1 ); ?> name="top_listop1_4" value="1">閲覧数　</label>


<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop1_5']), 1 ); ?> name="top_listop1_5" value="1">コメント数　</label>



<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop1_3']), 1 ); ?> name="top_listop1_3" value="1">投稿者　</label>


<br />

表示順 ：
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list1_1']), 'date' ); ?> name="top_list1_1" value="date">投稿日順　</label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list1_1']), 'modified' ); ?> name="top_list1_1" value="modified">更新日順　</label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list1_1']), 'rand' ); ?> name="top_list1_1" value="rand">ランダム　</label><br />
表示件数： <input type="number" min="0" step="1" style="width:70px;text-align:center;" name="top_list1_2" value="<?php echo wp_filter_nohtml_kses($original_home['top_list1_2']);?>" size="5"> 件<br />
表示する項目： <select name="top_op1" id="parent">
<option value="">種類を選択</option>
<option <?php selected( wp_filter_nohtml_kses($original_home['top_op1']), 1 ); ?> value="1">カテゴリ(全て)</option>
<option class="a" <?php selected( wp_filter_nohtml_kses($original_home['top_op1']), 2 ); ?> value="2">カテゴリ(指定)</option>
<option class="b" <?php selected( wp_filter_nohtml_kses($original_home['top_op1']), 5 ); ?> value="5">タグ(指定)</option>
<option <?php selected( wp_filter_nohtml_kses($original_home['top_op1']), 3 ); ?> value="3">固定ページ(全て)</option>
<option class="c" <?php selected( wp_filter_nohtml_kses($original_home['top_op1']), 4 ); ?> value="4">固定ページ(指定)</option>
<option class="d" <?php selected( wp_filter_nohtml_kses($original_home['top_op1']), 6 ); ?> value="6">投稿(ID指定)</option>
</select>
<div id="a" class="url-cat">
<select name="top_op1_1[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php $cat_all = get_terms( "category", "get=all" );foreach($cat_all as $value):?>
<option <?php if($top1_1){echo ( in_array( $value->term_id , esc_sql($original_home['top_op1_1']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>

</div>
<div id="b" class="url-cat">
<select name="top_op1_3[]" multiple>
<option value="">表示するタグを選択</option>
<?php $tag_all = get_terms( "post_tag");foreach($tag_all as $value):?>
<option <?php if($top1_3){echo ( in_array( $value->slug , esc_sql($original_home['top_op1_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->slug;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="c" class="url-cat">
<select name="top_op1_2[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php global $post;$my_posts= get_posts(array('post_type' => page,'numberposts' => -1));foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($top1_2){echo ( in_array( get_the_ID() , esc_sql($original_home['top_op1_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo  get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="d" class="url-cat">
投稿ID： <input type="text" name="top_op1_4" value="<?php echo wp_filter_nohtml_kses($original_home['top_op1_4']);?>" size="10"> (半角数字)<br />
※複数指定する場合には半角カンマ( , )で区切ってください
</div>
<div class="admin-top-style">
表示設定 ： 
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design1']), '' ); ?> name="top_design1" value="">表示しない　</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design1']), 1 ); ?> name="top_design1" value="1"><img src="<?php bloginfo('template_url'); ?>/img/d5.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design1']), 2 ); ?> name="top_design1" value="2"><img src="<?php bloginfo('template_url'); ?>/img/d4.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design1']), 3 ); ?> name="top_design1" value="3"><img src="<?php bloginfo('template_url'); ?>/img/d3.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design1']), 4 ); ?> name="top_design1" value="4"><img src="<?php bloginfo('template_url'); ?>/img/d1.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design1']), 5 ); ?> name="top_design1" value="5"><img src="<?php bloginfo('template_url'); ?>/img/d2.png" /></label><br />
</div>
<hr />

<p class="admin-title">■タイトル(2段目)</p>
<input type="text" name="top_list2" value="<?php echo wp_filter_nohtml_kses($original_home['top_list2']);?>" size="20"><br />
表示オプション ：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop2_1']), 1 ); ?> name="top_listop2_1" value="1">投稿日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop2_2']), 1 ); ?> name="top_listop2_2" value="1">カテゴリ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop2_4']), 1 ); ?> name="top_listop2_4" value="1">閲覧数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop2_5']), 1 ); ?> name="top_listop2_5" value="1">コメント数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop2_3']), 1 ); ?> name="top_listop2_3" value="1">投稿者　</label>

<br />

表示順 ： 
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list2_1']), 'date' ); ?> name="top_list2_1" value="date">投稿日順　</label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list2_1']), 'modified' ); ?> name="top_list2_1" value="modified">更新日順　</label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list2_1']), 'rand' ); ?> name="top_list2_1" value="rand">ランダム　</label><br />
表示件数： <input type="number" min="0" step="1" style="width:70px;text-align:center;" name="top_list2_2" value="<?php echo wp_filter_nohtml_kses($original_home['top_list2_2']);?>" size="5"> 件<br />
表示する項目： <select name="top_op2" id="parent2">
<option value="">種類を選択</option>
<option <?php selected( wp_filter_nohtml_kses($original_home['top_op2']), 1 ); ?> value="1">カテゴリ(全て)</option>
<option class="e" <?php selected( wp_filter_nohtml_kses($original_home['top_op2']), 2 ); ?> value="2">カテゴリ(指定)</option>
<option class="f" <?php selected( wp_filter_nohtml_kses($original_home['top_op2']), 5 ); ?> value="5">タグ(指定)</option>
<option <?php selected( wp_filter_nohtml_kses($original_home['top_op2']), 3 ); ?> value="3">固定ページ(全て)</option>
<option class="g" <?php selected( wp_filter_nohtml_kses($original_home['top_op2']), 4 ); ?> value="4">固定ページ(指定)</option>
<option class="h" <?php selected( wp_filter_nohtml_kses($original_home['top_op2']), 6 ); ?> value="6">投稿(ID指定)</option>
</select>
<div id="e" class="url-cat2">
<select name="top_op2_1[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php foreach($cat_all as $value):?>
<option <?php if($top2_1){echo ( in_array( $value->term_id , esc_sql($original_home['top_op2_1']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="f" class="url-cat2">
<select name="top_op2_3[]" multiple>
<option value="">表示するタグを選択</option>
<?php foreach($tag_all as $value):?>
<option <?php if($top2_3){echo ( in_array( $value->slug , esc_sql($original_home['top_op2_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->slug;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="g" class="url-cat2">
<select name="top_op2_2[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($top2_2){echo ( in_array( get_the_ID() , esc_sql($original_home['top_op2_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo  get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="h" class="url-cat2">
投稿ID： <input type="text" name="top_op2_4" value="<?php echo wp_filter_nohtml_kses($original_home['top_op2_4']);?>" size="10"> (半角数字)<br />
※複数指定する場合には半角カンマ( , )で区切ってください
</div>
<div class="admin-top-style">
表示設定 ： 
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design2']), '' ); ?> name="top_design2" value="">表示しない　</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design2']), 1 ); ?> name="top_design2" value="1"><img src="<?php bloginfo('template_url'); ?>/img/d5.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design2']), 2 ); ?> name="top_design2" value="2"><img src="<?php bloginfo('template_url'); ?>/img/d4.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design2']), 3 ); ?> name="top_design2" value="3"><img src="<?php bloginfo('template_url'); ?>/img/d3.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design2']), 4 ); ?> name="top_design2" value="4"><img src="<?php bloginfo('template_url'); ?>/img/d1.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design2']), 5 ); ?> name="top_design2" value="5"><img src="<?php bloginfo('template_url'); ?>/img/d2.png" /></label><br />
</div>
<hr />

<p class="admin-title">■タイトル(3段目)</p>
<input type="text" name="top_list3" value="<?php echo wp_filter_nohtml_kses($original_home['top_list3']);?>" size="20"><br />
表示オプション ：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop3_1']), 1 ); ?> name="top_listop3_1" value="1">投稿日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop3_2']), 1 ); ?> name="top_listop3_2" value="1">カテゴリ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop3_4']), 1 ); ?> name="top_listop3_4" value="1">閲覧数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop3_5']), 1 ); ?> name="top_listop3_5" value="1">コメント数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop3_3']), 1 ); ?> name="top_listop3_3" value="1">投稿者　</label>

<br />
表示順 ： 
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_list3_1']), 'date' ); ?> name="top_list3_1" value="date">投稿日順　</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_list3_1']), 'modified' ); ?> name="top_list3_1" value="modified">更新日順　</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_list3_1']), 'rand' ); ?> name="top_list3_1" value="rand">ランダム　</label><br />
表示件数： <input type="number" min="0" step="1" style="width:70px;text-align:center;" name="top_list3_2" value="<?php echo wp_filter_nohtml_kses($original_home['top_list3_2']);?>" size="5"> 件<br />
表示する項目： <select name="top_op3" id="parent3">
<option value="">種類を選択</option>
<option <?php selected( wp_filter_nohtml_kses($original_home['top_op3']), 1 ); ?> value="1">カテゴリ(全て)</option>
<option class="i" <?php selected( wp_filter_nohtml_kses($original_home['top_op3']), 2 ); ?> value="2">カテゴリ(指定)</option>
<option class="j" <?php selected( wp_filter_nohtml_kses($original_home['top_op3']), 5 ); ?> value="5">タグ(指定)</option>
<option <?php selected( wp_filter_nohtml_kses($original_home['top_op3']), 3 ); ?> value="3">固定ページ(全て)</option>
<option class="k" <?php selected(wp_filter_nohtml_kses($original_home['top_op3']), 4 ); ?> value="4">固定ページ(指定)</option>
<option class="l" <?php selected(wp_filter_nohtml_kses($original_home['top_op3']), 6 ); ?> value="6">投稿(ID指定)</option>
</select>
<div id="i" class="url-cat3">
<select name="top_op3_1[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php foreach($cat_all as $value):?>
<option <?php if($top3_1){echo ( in_array( $value->term_id , esc_sql($original_home['top_op3_1']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="j" class="url-cat3">
<select name="top_op3_3[]" multiple>
<option value="">表示するタグを選択</option>
<?php foreach($tag_all as $value):?>
<option <?php if($top3_3){echo ( in_array( $value->slug , esc_sql($original_home['top_op3_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->slug;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="k" class="url-cat3">
<select name="top_op3_2[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($top3_2){echo ( in_array( get_the_ID() , esc_sql($original_home['top_op3_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo  get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="l" class="url-cat3">
投稿ID： <input type="text" name="top_op3_4" value="<?php echo wp_filter_nohtml_kses($original_home['$top_op_val3_4']);?>" size="10"> (半角数字)<br />
※複数指定する場合には半角カンマ( , )で区切ってください
</div>
<div class="admin-top-style">
表示設定 ： 
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design3']), '' ); ?> name="top_design3" value="">表示しない　</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design3']), 1 ); ?> name="top_design3" value="1"><img src="<?php bloginfo('template_url'); ?>/img/d5.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design3']), 2 ); ?> name="top_design3" value="2"><img src="<?php bloginfo('template_url'); ?>/img/d4.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design3']), 3 ); ?> name="top_design3" value="3"><img src="<?php bloginfo('template_url'); ?>/img/d3.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design3']), 4 ); ?> name="top_design3" value="4"><img src="<?php bloginfo('template_url'); ?>/img/d1.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design3']), 5 ); ?> name="top_design3" value="5"><img src="<?php bloginfo('template_url'); ?>/img/d2.png" /></label><br />
</div>
<hr />

<p class="admin-title">■タイトル(4段目)</p>
<input type="text" name="top_list4" value="<?php echo wp_filter_nohtml_kses($original_home['top_list4']);?>" size="20"><br />
表示オプション ：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop4_1']), 1 ); ?> name="top_listop4_1" value="1">投稿日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop4_2']), 1 ); ?> name="top_listop4_2" value="1">カテゴリ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop4_4']), 1 ); ?> name="top_listop4_4" value="1">閲覧数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop4_5']), 1 ); ?> name="top_listop4_5" value="1">コメント数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop4_3']), 1 ); ?> name="top_listop4_3" value="1">投稿者　</label>

<br />
表示順 ： 
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list4_1']), 'date' ); ?> name="top_list4_1" value="date">投稿日順　</label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list4_1']), 'modified' ); ?> name="top_list4_1" value="modified">更新日順　</label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_list4_1']), 'rand' ); ?> name="top_list4_1" value="rand">ランダム　</label><br />
表示件数： <input type="number" min="0" step="1" style="width:70px;text-align:center;" name="top_list4_2" value="<?php echo wp_filter_nohtml_kses($original_home['top_list4_2']);?>" size="5"> 件<br />
表示する項目： <select name="top_op4" id="parent4">
<option value="">種類を選択</option>
<option <?php selected(wp_filter_nohtml_kses($original_home['top_op4']), 1 ); ?> value="1">カテゴリ(全て)</option>
<option class="m" <?php selected(wp_filter_nohtml_kses($original_home['top_op4']), 2 ); ?> value="2">カテゴリ(指定)</option>
<option class="n" <?php selected(wp_filter_nohtml_kses($original_home['top_op4']), 5 ); ?> value="5">タグ(指定)</option>
<option <?php selected(wp_filter_nohtml_kses($original_home['top_op4']), 3 ); ?> value="3">固定ページ(全て)</option>
<option class="o" <?php selected(wp_filter_nohtml_kses($original_home['top_op4']), 4 ); ?> value="4">固定ページ(指定)</option>
<option class="p" <?php selected(wp_filter_nohtml_kses($original_home['top_op4']), 6 ); ?> value="6">投稿(ID指定)</option>
</select>
<div id="m" class="url-cat4">
<select name="top_op4_1[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php foreach($cat_all as $value):?>
<option <?php if($top4_1){echo ( in_array( $value->term_id , esc_sql($original_home['top_op4_1']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="n" class="url-cat4">
<select name="top_op4_3[]" multiple>
<option value="">表示するタグを選択</option>
<?php foreach($tag_all as $value):?>
<option <?php if($top4_3){echo ( in_array( $value->slug , esc_sql($original_home['top_op4_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->slug;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="o" class="url-cat4">
<select name="top_op4_2[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($top4_2){echo ( in_array( get_the_ID() , esc_sql($original_home['top_op4_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo  get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="p" class="url-cat4">
投稿ID： <input type="text" name="top_op4_4" value="<?php echo wp_filter_nohtml_kses($original_home['top_op4_4']);?>" size="10"> (半角数字)<br />
※複数指定する場合には半角カンマ( , )で区切ってください
</div>
<div class="admin-top-style">
表示設定 ： 
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design4']), '' ); ?> name="top_design4" value="">表示しない　</label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_design4']), 1 ); ?> name="top_design4" value="1"><img src="<?php bloginfo('template_url'); ?>/img/d5.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_design4']), 2 ); ?> name="top_design4" value="2"><img src="<?php bloginfo('template_url'); ?>/img/d4.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_design4']), 3 ); ?> name="top_design4" value="3"><img src="<?php bloginfo('template_url'); ?>/img/d3.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_design4']), 4 ); ?> name="top_design4" value="4"><img src="<?php bloginfo('template_url'); ?>/img/d1.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_home['top_design4']), 5 ); ?> name="top_design4" value="5"><img src="<?php bloginfo('template_url'); ?>/img/d2.png" /></label><br />
</div>
<hr />

<p class="admin-title">■タイトル(5段目)</p>
<input type="text" name="top_list5" value="<?php echo wp_filter_nohtml_kses($original_home['top_list5']);?>" size="20"><br />

表示オプション ：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop5_1']), 1 ); ?> name="top_listop5_1" value="1">投稿日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop5_2']), 1 ); ?> name="top_listop5_2" value="1">カテゴリ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop5_4']), 1 ); ?> name="top_listop5_4" value="1">閲覧数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop5_5']), 1 ); ?> name="top_listop5_5" value="1">コメント数　</label>


<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_home['top_listop5_3']), 1 ); ?> name="top_listop5_3" value="1">投稿者　</label>
<br />

表示順 ： 
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_list5_1']), 'date' ); ?> name="top_list5_1" value="date">投稿日順　</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_list5_1']), 'modified' ); ?> name="top_list5_1" value="modified">更新日順　</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_list5_1']), 'rand' ); ?> name="top_list5_1" value="rand">ランダム　</label><br />
表示件数： <input type="number" min="0" step="1" style="width:70px;text-align:center;" name="top_list5_2" value="<?php echo wp_filter_nohtml_kses($original_home['top_list5_2']);?>" size="5"> 件<br />
表示する項目： <select name="top_op5" id="parent5">
<option value="">種類を選択</option>
<option <?php selected( wp_filter_nohtml_kses($original_home['top_op5']), 1 ); ?> value="1">カテゴリ(全て)</option>
<option class="q" <?php selected( wp_filter_nohtml_kses($original_home['top_op5']), 2 ); ?> value="2">カテゴリ(指定)</option>
<option class="r" <?php selected( wp_filter_nohtml_kses($original_home['top_op5']), 5 ); ?> value="5">タグ(指定)</option>
<option <?php selected( wp_filter_nohtml_kses($original_home['top_op5']), 3 ); ?> value="3">固定ページ(全て)</option>
<option class="s" <?php selected( wp_filter_nohtml_kses($original_home['top_op5']), 4 ); ?> value="4">固定ページ(指定)</option>
<option class="t" <?php selected( wp_filter_nohtml_kses($original_home['top_op5']), 6 ); ?> value="6">投稿(ID指定)</option>
</select>
<div id="q" class="url-cat5">
<select name="top_op5_1[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php foreach($cat_all as $value):?>
<option <?php if($top5_1){echo ( in_array( $value->term_id , esc_sql($original_home['top_op5_1']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="r" class="url-cat5">
<select name="top_op5_3[]" multiple>
<option value="">表示するタグを選択</option>
<?php foreach($tag_all as $value):?>
<option <?php if($top5_3){echo ( in_array( $value->slug , esc_sql($original_home['top_op5_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->slug;?>"><?php echo $value->name;?></option><?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="s" class="url-cat5">
<select name="top_op5_2[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($top5_2){echo ( in_array( get_the_ID() , esc_sql($original_home['top_op5_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo  get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?><?php wp_reset_postdata(); ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="t" class="url-cat5">
投稿ID： <input type="text" name="top_op5_4" value="<?php echo wp_filter_nohtml_kses($original_home['top_op5_4']);?>" size="10"> (半角数字)<br />
※複数指定する場合には半角カンマ( , )で区切ってください
</div>
<div class="admin-top-style">
表示設定 ： 
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design5']), '' ); ?> name="top_design5" value="">表示しない　</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design5']), 1 ); ?> name="top_design5" value="1"><img src="<?php bloginfo('template_url'); ?>/img/d5.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design5']), 2 ); ?> name="top_design5" value="2"><img src="<?php bloginfo('template_url'); ?>/img/d4.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design5']), 3 ); ?> name="top_design5" value="3"><img src="<?php bloginfo('template_url'); ?>/img/d3.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design5']), 4 ); ?> name="top_design5" value="4"><img src="<?php bloginfo('template_url'); ?>/img/d1.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_home['top_design5']), 5 ); ?> name="top_design5" value="5"><img src="<?php bloginfo('template_url'); ?>/img/d2.png" /></label><br />
</div>
<hr />

<h3>フロントページ設定　(トップページ画像)</h3>
<br />
表示する項目： <select name="original_op00" id="parentmain">
<option <?php selected( wp_filter_nohtml_kses($home_slide['original_op00']), 0 ); ?> value="" >表示しない</option>
<option class="main1" <?php selected( wp_filter_nohtml_kses($home_slide['original_op00']), 1 ); ?> value="1">スライダー</option>
<option class="main2" <?php selected( wp_filter_nohtml_kses($home_slide['original_op00']), 2 ); ?> value="2">静止画像</option>
</select>
<br /><br />
<hr />
<div id="main1" class="url-catmain">
<p class="admin-title">■表示の順番</p>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($home_slide['slide_radio']), 'false' ); ?> name="slide_radio" value="false">上から順<br></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($home_slide['slide_radio']), 'true' ); ?> name="slide_radio" value="true">ランダム<br></label>
<p class="admin-title">■テキストの背景カラー</p>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($home_slide['slide_color_radio']), 'white' ); ?> name="slide_color_radio" value="white">ホワイト<br></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($home_slide['slide_color_radio']), 'black' ); ?> name="slide_color_radio" value="black">ブラック<br></label>

<p class="admin-title">■スライダーのスピード（標準は4000ミリ秒）</p>
<input type="number" min="0" step="1" style="width:140px;text-align:center;" name="slide_speed" value="<?php echo wp_filter_nohtml_kses($home_slide['slide_speed']); ?>" size="20"><br /><br />

<p class="admin-title">※画像を3枚以上登録したら表示されます。</p><br />

<div class="img-choose">
<div class="img-left">
URL　 　： <input type="text" name="original_op8_1" value="<?php echo esc_url($home_slide['original_op8_1']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_1" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_1']); ?>" size="20"><br />
画像　　： <input name="mediaid2" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid2']); ?>" />
<input type="button" name="media2" value="選択" />
<input type="button" name="media-clear2" class="media-clear" value="クリア" />
</div>
<div id="media2"><?php echo wp_get_attachment_image( wp_filter_nohtml_kses($home_slide['mediaid2']),array( 150, 150 )); ?></div>
</div>
<hr />

<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_2" value="<?php echo esc_url($home_slide['original_op8_2']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_2" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_2']); ?>" size="20"><br />
画像　　： <input name="mediaid3" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid3']); ?>" />
<input type="button" name="media3" value="選択" />
<input type="button" name="media-clear3" class="media-clear" value="クリア" /></div>
<div id="media3"><?php echo wp_get_attachment_image(wp_filter_nohtml_kses($home_slide['mediaid3']),array( 150, 150 )); ?></div>
</div>
<hr />

<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_3" value="<?php echo esc_url($home_slide['original_op8_3']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_3" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_3']); ?>" size="20"><br />
画像　　： <input name="mediaid4" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid4']); ?>" />
<input type="button" name="media4" value="選択" />
<input type="button" name="media-clear4" class="media-clear" value="クリア" /></div>
<div id="media4"><?php echo wp_get_attachment_image(wp_filter_nohtml_kses($home_slide['mediaid4']),array( 150, 150 )); ?></div></div>
<hr />

<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_4" value="<?php echo esc_url($home_slide['original_op8_4']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_4" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_4']); ?>" size="20"><br />
画像　　： <input name="mediaid5" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid5']); ?>" />
<input type="button" name="media5" value="選択" />
<input type="button" name="media-clear5" class="media-clear" value="クリア" /></div>
<div id="media5"><?php echo wp_get_attachment_image(wp_filter_nohtml_kses($home_slide['mediaid5']),array( 150, 150 )); ?></div></div>
<hr />
<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_5" value="<?php echo esc_url($home_slide['original_op8_5']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_5" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_5']); ?>" size="20"><br />
画像　　： <input name="mediaid6" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid6']); ?>" />
<input type="button" name="media6" value="選択" />
<input type="button" name="media-clear6" class="media-clear" value="クリア" /></div>

<div id="media6"><?php echo wp_get_attachment_image( wp_filter_nohtml_kses($home_slide['mediaid6']),array( 150, 150 )); ?></div></div>

<hr />

<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_6" value="<?php echo esc_url($home_slide['original_op8_6']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_6" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_6']); ?>" size="20"><br />
画像　　： <input name="mediaid7" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid7']); ?>" />
<input type="button" name="media7" value="選択" />
<input type="button" name="media-clear7" class="media-clear" value="クリア" /></div>
<div id="media7"><?php echo wp_get_attachment_image(wp_filter_nohtml_kses($home_slide['mediaid7']),array( 150, 150 )); ?></div></div>
<hr />

<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_7" value="<?php echo esc_url($home_slide['original_op8_7']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_7" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_7']); ?>" size="20"><br />
画像　　： <input name="mediaid8" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid8']); ?>" />
<input type="button" name="media8" value="選択" />
<input type="button" name="media-clear8" class="media-clear" value="クリア" /></div>
<div id="media8"><?php echo wp_get_attachment_image( wp_filter_nohtml_kses($home_slide['mediaid8']),array( 150, 150 )); ?></div></div>
<hr />

<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_8" value="<?php echo esc_url($home_slide['original_op8_8']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_8" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_8']); ?>" size="20"><br />
画像　　： <input name="mediaid9" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid9']); ?>" />
<input type="button" name="media9" value="選択" />
<input type="button" name="media-clear9" class="media-clear" value="クリア" /></div>
<div id="media9"><?php echo wp_get_attachment_image( wp_filter_nohtml_kses($home_slide['mediaid9']),array( 150, 150 )); ?></div></div>
<hr />

<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_9" value="<?php echo esc_url($home_slide['original_op8_9']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_9" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_9']); ?>" size="20"><br />
画像　　： <input name="mediaid10" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid10']); ?>" />
<input type="button" name="media10" value="選択" />
<input type="button" name="media-clear10" class="media-clear" value="クリア" /></div>
<div id="media10"><?php echo wp_get_attachment_image( wp_filter_nohtml_kses($home_slide['mediaid10']),array( 150, 150 )); ?></div></div>
<hr />

<div class="img-choose"><div class="img-left">
URL　 　： <input type="text" name="original_op8_10" value="<?php echo esc_url($home_slide['original_op8_10']); ?>" size="20"><br />
テキスト： <input type="text" name="original_op_tx8_10" value="<?php echo wp_filter_post_kses($home_slide['original_op_tx8_10']); ?>" size="20"><br />
画像　　： <input name="mediaid11" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid11']); ?>" />
<input type="button" name="media11" value="選択" />
<input type="button" name="media-clear11" class="media-clear" value="クリア" /></div>
<div id="media11"><?php echo wp_get_attachment_image( wp_filter_nohtml_kses($home_slide['mediaid11']),array( 150, 150 )); ?></div></div>
<hr />

</div>

<div id="main2" class="url-catmain">
<div class="img-choose"><div class="img-left">
画像　　： <input name="mediaid0" type="text" value="<?php echo wp_filter_nohtml_kses($home_slide['mediaid0']); ?>" />
<input type="button" name="media0" value="選択" />
<input type="button" name="media-clear0" class="media-clear" value="クリア" /></div>
<div id="media0"><?php echo wp_get_attachment_image( wp_filter_nohtml_kses($home_slide['mediaid0']),array( 150, 150 )); ?></div></div>
<hr />
</div>

<h3>SEO設定　(トップページ用)</h3>
<p><label>title： 全角30文字以内が目安<br />
<input type="text" name="top_seo_title" value="<?php echo wp_filter_nohtml_kses($top_seo['top_seo_title']); ?>"  style="width:80%" /></label></p> 
<p><label>keywords：キーワードが複数ある場合は , (半角カンマ)で区切ってください <br />
<input type="text" name="top_seo_keywords" value="<?php echo wp_filter_nohtml_kses($top_seo['top_seo_keywords']); ?>"  style="width:80%" /></label></p> 
<p><label>description： 全角120文字以内が目安です<br />
<textarea id="seo_description" name="top_seo_descript" rows="3" style="width:80%;"><?php echo wp_filter_nohtml_kses($top_seo['top_seo_descript']); ?></textarea></label></p>
<span class="counter-w" >現在の文字数は </span> 文字です<br />
※title・keywords・descriptionの未入力は、省略されます<br />

<hr />

<p class="submit"><input type="submit" name="Submit" class="button-primary" value="更新" /></p>
<?php wp_nonce_field( 'original_option2_action','original_option2_nonce_field' ); ?>
</form>
</div></div>