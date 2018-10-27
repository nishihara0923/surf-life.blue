<?php
// チェック
if ( ! empty( $_POST ) && check_admin_referer( 'original_option_action','original_option_nonce_field' ) && current_user_can( 'manage_options' ) ) {

if( $_POST['submit_flag'] == 'Y' ) {

update_option('cookie_date', wp_filter_nohtml_kses($_POST['cookie_date']));
update_option('cookie_radio', wp_filter_nohtml_kses($_POST['cookie_radio']));

if(mb_strlen($_POST['original_op7_1']) > 1){
update_option('original_op7_1', wp_filter_nohtml_kses($_POST['original_op7_1']));	
}else{
$original_op7_1 = '';
update_option('original_op7_1', wp_filter_nohtml_kses($original_op7_1));
};




$list_option_count = $_POST['list_option1'].$_POST['list_option2'].$_POST['list_option4'].$_POST['list_option5'];
if($list_option_count){$list_option_count = '1';};


if($_POST['related_count']){$related_count = $_POST['related_count'];}else{$related_count = '4';}

$single_op = $_POST['single_op1'].$_POST['single_op2'].$_POST['single_op3'].$_POST['single_op4'].$_POST['single_op5'].$_POST['single_op6'].$_POST['single_op7'];
if($single_op){$single_op = '1';}

$related_option = $_POST['related_option1'].$_POST['related_option2'].$_POST['related_option3'].$_POST['related_option4'].$_POST['related_option5'];

$related_option_img = $_POST['related_option1'].$_POST['related_option2'].$_POST['related_option3'].$_POST['related_option5'];

if($related_option){$related_option = '1';}
if($related_option_img){$related_option_img = '1';}

$sp_option_s = $_POST['sp_option_s'];
if($sp_option_s){ $sp_option_s = 'block';}else{$sp_option_s = 'none';}


$sp_option_f = $_POST['sp_option_f'];
if($sp_option_f){ $sp_option_f = 'block';}else{$sp_option_f = 'none';}


$sort_option = $_POST['sort_option1'].$_POST['sort_option2'].$_POST['sort_option3'].$_POST['sort_option4'];





$site_options = get_option('site_options');
if($_POST['logo_retina'] == 1){
$theme_logo_width = floor($site_options['theme_logo_width'] / 2);
$theme_logo_height = floor($site_options['theme_logo_height'] / 2);
}else{
$theme_logo_width = floor($site_options['theme_logo_width']);
$theme_logo_height = floor($site_options['theme_logo_height']);
}



update_option('original_site', array(

'single_op1' => wp_filter_nohtml_kses($_POST['single_op1']),
'single_op2' => wp_filter_nohtml_kses($_POST['single_op2']),
'single_op3' => wp_filter_nohtml_kses($_POST['single_op3']),
'single_op4' => wp_filter_nohtml_kses($_POST['single_op4']),
'single_op5' => wp_filter_nohtml_kses($_POST['single_op5']),
'single_op6' => wp_filter_nohtml_kses($_POST['single_op6']),
'single_op7' => wp_filter_nohtml_kses($_POST['single_op7']),
'single_op' => wp_filter_nohtml_kses($single_op),
'sp_option_s' => wp_filter_nohtml_kses($sp_option_s),
'sp_option_f' => wp_filter_nohtml_kses($sp_option_f),

'sort_option' => wp_filter_nohtml_kses($sort_option),

'sort_option1' => wp_filter_nohtml_kses($_POST['sort_option1']),
'sort_option2' => wp_filter_nohtml_kses($_POST['sort_option2']),
'sort_option3' => wp_filter_nohtml_kses($_POST['sort_option3']),
'sort_option4' => wp_filter_nohtml_kses($_POST['sort_option4']),


'theme_logo_width' => wp_filter_nohtml_kses($theme_logo_width),
'theme_logo_height' => wp_filter_nohtml_kses($theme_logo_height),
'logo_retina' => wp_filter_nohtml_kses($_POST['logo_retina']),






'single_sns' => wp_filter_nohtml_kses($_POST['single_sns']),
'single_navi' => wp_filter_nohtml_kses($_POST['single_navi']),
'column_h' => wp_filter_nohtml_kses($_POST['column_h']),
'column_s' => wp_filter_nohtml_kses($_POST['column_s']),
'column_p' => wp_filter_nohtml_kses($_POST['column_p']),
'column_a' => wp_filter_nohtml_kses($_POST['column_a']),
'related_posi' => wp_filter_nohtml_kses($_POST['related_posi']),
'related_radio' => wp_filter_nohtml_kses($_POST['related_radio']),
'related_option1' => wp_filter_nohtml_kses($_POST['related_option1']),
'related_option2' => wp_filter_nohtml_kses($_POST['related_option2']),
'related_option3' => wp_filter_nohtml_kses($_POST['related_option3']),

'related_option4' => wp_filter_nohtml_kses($_POST['related_option4']),

'related_option5' => wp_filter_nohtml_kses($_POST['related_option5']),

'related_option' => wp_filter_nohtml_kses($related_option),


'related_option_img' => wp_filter_nohtml_kses($related_option_img),



'lightbox_radio' => wp_filter_nohtml_kses($_POST['lightbox_radio']),



'related_position' => wp_filter_nohtml_kses($_POST['related_position']),
'related_title' => wp_filter_nohtml_kses($_POST['related_title']),
'related_shape' => wp_filter_nohtml_kses($_POST['related_shape']),
'related_count' => wp_filter_nohtml_kses($related_count),
'list_option1' => wp_filter_nohtml_kses($_POST['list_option1']),
'list_option2' => wp_filter_nohtml_kses($_POST['list_option2']),
'list_option3' => wp_filter_nohtml_kses($_POST['list_option3']),
'list_option4' => wp_filter_nohtml_kses($_POST['list_option4']),
'list_option5' => wp_filter_nohtml_kses($_POST['list_option5']),



'list_option_count' => wp_filter_nohtml_kses($list_option_count),

'list_search_op' => wp_filter_nohtml_kses($_POST['list_search_op']),


'mainlist_position' => wp_filter_nohtml_kses($_POST['mainlist_position']),
'mainlist_shape' => wp_filter_nohtml_kses($_POST['mainlist_shape']),
'original_op0' => wp_filter_nohtml_kses($_POST['original_op0']),
'original_op7_2' => wp_filter_nohtml_kses($_POST['original_op7_2']),
'mediaid' => wp_filter_nohtml_kses($_POST['mediaid']),




'original_op1_1' => wp_filter_nohtml_kses($_POST['original_op1_1']),

'original_op1_3' => wp_filter_nohtml_kses($_POST['original_op1_3']),
'original_op1_4' => wp_filter_nohtml_kses($_POST['original_op1_4']),
'original_op1_3_1' => wp_filter_nohtml_kses($_POST['original_op1_3_1']),
'original_op1_3_2' => esc_sql($_POST['original_op1_3_2']),
'original_op1_3_3' => esc_sql($_POST['original_op1_3_3']),
'original_op2_1' => wp_filter_nohtml_kses($_POST['original_op2_1']),

'original_op2_3' => wp_filter_nohtml_kses($_POST['original_op2_3']),
'original_op2_4' => wp_filter_nohtml_kses($_POST['original_op2_4']),
'original_op2_3_1' => wp_filter_nohtml_kses($_POST['original_op2_3_1']),
'original_op2_3_2' => esc_sql($_POST['original_op2_3_2']),
'original_op2_3_3' => esc_sql($_POST['original_op2_3_3']),
'original_op3_1' => wp_filter_nohtml_kses($_POST['original_op3_1']),

'original_op3_3' => wp_filter_nohtml_kses($_POST['original_op3_3']),
'original_op3_4' => wp_filter_nohtml_kses($_POST['original_op3_4']),
'original_op3_3_1' => wp_filter_nohtml_kses($_POST['original_op3_3_1']),
'original_op3_3_2' => esc_sql($_POST['original_op3_3_2']),
'original_op3_3_3' => esc_sql($_POST['original_op3_3_3']),
'original_op4_1' => wp_filter_nohtml_kses($_POST['original_op4_1']),

'original_op4_3' => wp_filter_nohtml_kses($_POST['original_op4_3']),
'original_op4_4' => wp_filter_nohtml_kses($_POST['original_op4_4']),
'original_op4_3_1' => wp_filter_nohtml_kses($_POST['original_op4_3_1']),
'original_op4_3_2' => esc_sql($_POST['original_op4_3_2']),
'original_op4_3_3' => esc_sql($_POST['original_op4_3_3']),
'original_op5_1' => wp_filter_nohtml_kses($_POST['original_op5_1']),

'original_op5_3' => wp_filter_nohtml_kses($_POST['original_op5_3']),
'original_op5_4' => wp_filter_nohtml_kses($_POST['original_op5_4']),
'original_op5_3_1' => wp_filter_nohtml_kses($_POST['original_op5_3_1']),
'original_op5_3_2' => esc_sql($_POST['original_op5_3_2']),
'original_op5_3_3' => esc_sql($_POST['original_op5_3_3']),
));
//カスタマイザーにスマホ表示設定を反映
site_op2();
}

?>
<div class="updated"><p><strong>設定は保存されました。</strong></p></div>
<?php }?>
<?php $original_site = get_option('original_site');?>
<div id="original_option">
<div id="original_options">
<h2>オリジナル設定画面</h2>

<form name="form1" method="post" action="<?php echo esc_url(admin_url( 'options-general.php?page=original_option' )); ?>">
<input type="hidden" name="submit_flag" value="Y">



<h3>Retina対策 ロゴ</h3>
<div class="original_area">
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['logo_retina']), '' ); ?> name="logo_retina" value="">対策をしない</label>

 <label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['logo_retina']), 1 ); ?> name="logo_retina" value="1">対策をする</label>
<br />
※Retina対策(スマホでロゴがボヤけて見えてしまう)をするとアップロードしたロゴサイズが半分になります
</div>





<h3>スタイル設定　(トップページ)</h3>

<div class="admin-top-style">
トップページのみ ： 
 <label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['column_h']), 1 ); ?> name="column_h" value="1">　<img src="<?php bloginfo('template_url'); ?>/img/st1.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['column_h']), 2 ); ?> name="column_h" value="2"><img src="<?php bloginfo('template_url'); ?>/img/st2.png" /></label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['column_h']), 3 ); ?> name="column_h" value="3"><img src="<?php bloginfo('template_url'); ?>/img/st3.png" /></label>
<br />
</div>
<hr />

<div class="admin-top-style">
投稿ページのみ ： 
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_s']), 1 ); ?> name="column_s" value="1">　<img src="<?php bloginfo('template_url'); ?>/img/st1.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_s']), 2 ); ?> name="column_s" value="2"><img src="<?php bloginfo('template_url'); ?>/img/st2.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_s']), 3 ); ?> name="column_s" value="3"><img src="<?php bloginfo('template_url'); ?>/img/st3.png" /></label>
<br />
</div>
<hr />

<div class="admin-top-style">
固定ページのみ ： 
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_p']), 1 ); ?> name="column_p" value="1">　<img src="<?php bloginfo('template_url'); ?>/img/st1.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_p']), 2 ); ?> name="column_p" value="2"><img src="<?php bloginfo('template_url'); ?>/img/st2.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_p']), 3 ); ?> name="column_p" value="3"><img src="<?php bloginfo('template_url'); ?>/img/st3.png" /></label>
<br />
</div>
<hr />

<div class="admin-top-style">
一覧・エラーページ ：
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_a']), 1 ); ?> name="column_a" value="1">　<img src="<?php bloginfo('template_url'); ?>/img/st1.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_a']), 2 ); ?> name="column_a" value="2"><img src="<?php bloginfo('template_url'); ?>/img/st2.png" /></label>
<label><input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['column_a']), 3 ); ?> name="column_a" value="3"><img src="<?php bloginfo('template_url'); ?>/img/st3.png" /></label>
<br />
</div>
<hr />








<h3>投稿ページ設定</h3>
<div class="original_area">
表示オプション ：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_op1']), 1 ); ?> name="single_op1" value="1">投稿日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_op2']), 1 ); ?> name="single_op2" value="1">更新日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_op3']), 1 ); ?> name="single_op3" value="1">カテゴリ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_op4']), 1 ); ?> name="single_op4" value="1">タグ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_op5']), 1 ); ?> name="single_op5" value="1">閲覧数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_op7']), 1 ); ?> name="single_op7" value="1">コメント数　</label>

<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_op6']), 1 ); ?> name="single_op6" value="1">投稿者　</label>



<br />
SNSボタン：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_sns']), 1 ); ?> name="single_sns" value="1">表示する　</label><br />


前後記事のナビゲーション：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['single_navi']), 1 ); ?> name="single_navi" value="1">表示する　</label>




</div>
<h3>関連記事設定　(投稿ページ)</h3>
<div class="original_area">

タイトル名： <input type="text" name="related_title" value="<?php echo wp_filter_nohtml_kses($original_site['related_title']); ?>" size="20"><br />

表示する位置： <label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['related_posi']), "" ); ?> name="related_posi" value="">コメント欄より上</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['related_posi']), 1 ); ?> name="related_posi" value="1">コメント欄より下</label><br />
表示オプション ：
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['related_option1']), 1 ); ?> name="related_option1" value="1">投稿日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['related_option2']), 1 ); ?> name="related_option2" value="1">カテゴリ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['related_option4']), 1 ); ?> name="related_option4" value="1">閲覧数　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['related_option5']), 1 ); ?> name="related_option5" value="1">コメント数　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['related_option3']), 1 ); ?> name="related_option3" value="1">投稿者　</label>
<br />

<script type="text/javascript">
$(function(){
$('.img_show1').change(function(){
$('.img_val1').show();
$('.img_val2').show();
})

$('.img_show2').change(function(){
$('.img_val2').show();
$('.img_val1').hide();
})

$('.img_show_no').change(function(){
$('.img_val1').hide();
$('.img_val2').hide();

})
})
</script>
<?php 

$related_val = $original_site['related_radio'];
if($related_val==2){
$img_no1=1;
$img_no2=1;
}elseif($related_val==3){
$img_no1='1';
$img_no2=1;
}elseif($related_val==4){
$img_no1='1';
$img_no2=1;
}?>
<label><input class="img_show_no" type="radio" <?php checked( wp_filter_nohtml_kses($related_val), "" ); ?> name="related_radio" value="">表示しない<br></label>
<label><input class="img_show_no" type="radio" <?php checked( wp_filter_nohtml_kses($related_val), 1 ); ?> name="related_radio" value="1">テキストのみ<br></label>
<label><input class="img_show1" type="radio" <?php checked( wp_filter_nohtml_kses($related_val), 2 ); ?> name="related_radio" value="2">アイキャッチあり（1列）<br></label>
<label><input class="img_show1" type="radio" <?php checked( wp_filter_nohtml_kses($related_val), 3 ); ?> name="related_radio" value="3">アイキャッチあり（2列）<br></label>
<label><input class="img_show1" type="radio" <?php checked( wp_filter_nohtml_kses($related_val), 4 ); ?> name="related_radio" value="4">アイキャッチあり（4列）<br></label>


<div class="img_val1 img_<?php echo $img_no1;?>">
<label>アイキャッチを表示する位置 ： <input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['related_position']), "" ); ?> name="related_position" value="">左側</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['related_position']), 1 ); ?> name="related_position" value="1">右側</label>　※一部スマートフォンで使われます<br>
</div>
<div class="img_val2 img_<?php echo $img_no2;?>">



<label>アイキャッチの形 ： <input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['related_shape']), "img300x300" ); ?> name="related_shape" value="img300x300">正方形</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['related_shape']), "img300x200" );; ?> name="related_shape" value="img300x200">長方形<br></label>



</div>
<p>表示件数：<input type="number" step="1" style="width:70px;text-align:center;" name="related_count" value="<?php echo wp_filter_nohtml_kses($original_site['related_count']) ?>"> 件</p>
</div>




<h3>一覧ページ設定</h3>
<div class="original_area">

ソートオプション ： 
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['sort_option1']), 1 ); ?> name="sort_option1" value="1">公開日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['sort_option2']), 1 ); ?> name="sort_option2" value="1">更新日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['sort_option3']), 1 ); ?> name="sort_option3" value="1">人気　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['sort_option4']), 1 ); ?> name="sort_option4" value="1">コメント　</label>
<br />



表示オプション ： 
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['list_option1']), 1 ); ?> name="list_option1" value="1">投稿日　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['list_option2']), 1 ); ?> name="list_option2" value="1">カテゴリ　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['list_option3']), 1 ); ?> name="list_option3" value="1">閲覧数　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['list_option5']), 1 ); ?> name="list_option5" value="1">コメント数　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['list_option4']), 1 ); ?> name="list_option4" value="1">投稿者　</label>




<br />

<label>アイキャッチを表示する位置 ： <input type="radio" <?php checked(wp_filter_nohtml_kses($original_site['mainlist_position']), "" ); ?> name="mainlist_position" value="">左側</label>
<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['mainlist_position']), 1 ); ?> name="mainlist_position" value="1">右側<br></label>


<label>アイキャッチの形 ： <input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['mainlist_shape']), "img300x300" ); ?> name="mainlist_shape" value="img300x300">正方形</label> <label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['mainlist_shape']), 'img300x200' ); ?> name="mainlist_shape" value="img300x200">長方形<br></label>



<label>サイト内検索オプション ： <input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['list_search_op']), 1 ); ?> name="list_search_op" value="1">固定ページも含める<br></label>

</div>


<h3>画像設定</h3>
<div class="original_area">

<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['lightbox_radio']), '' ); ?> name="lightbox_radio" value="">利用する</label>　

<label><input type="radio" <?php checked( wp_filter_nohtml_kses($original_site['lightbox_radio']), 1 ); ?> name="lightbox_radio" value="1">利用しない<br></label>

※標準機能Lightbox系（画像を拡大する機能）のプラグイン設定<br />

</div>





<style>
.cookie_setting{
margin:8px 0px 0px 0px;
}
</style>


<h3>クッキー設定</h3>
<div class="original_area">

<label><input class="cookie_show" type="radio" <?php checked( wp_filter_nohtml_kses(get_option('cookie_radio')), 1 ); ?> name="cookie_radio" value="1">利用する</label>　

保存日数：<input type="number" name="cookie_date" step="1" min="1" max="365" style="width:70px;text-align:center;" value="<?php if(get_option('cookie_date')){echo wp_filter_nohtml_kses(get_option('cookie_date'));}else{echo '30'; }; ?>"> 日間　

<label><input class="cookie_hide" type="radio" <?php checked( wp_filter_nohtml_kses(get_option('cookie_radio')), '' ); ?> name="cookie_radio" value="">利用しない<br></label>
<div class="cookie_setting">
※閲覧数・ランキング機能を利用する場合は、<strong>利用する</strong>にチェック。利用しない場合は、<strong>利用しない</strong>にチェックしてください。<br />

</div>
</div>


<h3>スマートフォン表示設定</h3>
<div class="original_area">
表示エリア ： 
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['sp_option_s']), "block" ); ?> name="sp_option_s" value="block">サイドバー　</label>
<label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($original_site['sp_option_f']), "block" ); ?> name="sp_option_f" value="block">フッター　</label>

<br />

<div class="cookie_setting">
※スマートフォン版で非表示にしたい場合、チェックをはずしてください

<br />

</div>


</div>




<h3>ヘッダー部分の表示設定（共通）</h3>
<?php 
$op1_1 = is_array(esc_sql($original_site['original_op1_3_2']));
$op1_2 = is_array(esc_sql($original_site['original_op1_3_3']));

$op2_1 = is_array(esc_sql($original_site['original_op2_3_2']));
$op2_2 = is_array(esc_sql($original_site['original_op2_3_3']));

$op3_1 = is_array(esc_sql($original_site['original_op3_3_2']));
$op3_2 = is_array(esc_sql($original_site['original_op3_3_3']));

$op4_1 = is_array(esc_sql($original_site['original_op4_3_2']));
$op4_2 = is_array(esc_sql($original_site['original_op4_3_3']));

$op5_1 = is_array(esc_sql($original_site['original_op5_3_2']));
$op5_2 = is_array(esc_sql($original_site['original_op5_3_3']));

?>

表示する項目： <select name="original_op0" id="parentmain">
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op0']), '' ); ?> value="" >表示しない</option>
<option class="main1" <?php selected( wp_filter_nohtml_kses($original_site['original_op0']), 1 ); ?> value="1">リンク</option>
<option class="main2" <?php selected( wp_filter_nohtml_kses($original_site['original_op0']), 2 ); ?> value="2">広告バナー</option>
</select>
<hr />

<div id="main1" class="url-catmain">

<div class="original_area">
※文字数が多い場合や、タイトル数が多い場合にレイアウトが崩れる場合があります。<br /><br />

<h4>タイトル1</h4>
テキスト　　： <input type="text" name="original_op1_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op1_1']); ?>" size="20"><br />
表示する項目： <select name="original_op1_3" id="parent">
<option value="">種類を選択</option>
<option class="a" <?php selected( wp_filter_nohtml_kses($original_site['original_op1_3']), 1 ); ?> value="1">URL</option>
<option class="b" <?php selected( wp_filter_nohtml_kses($original_site['original_op1_3']), 2 ); ?> value="2">カテゴリ</option>
<option class="c" <?php selected( wp_filter_nohtml_kses($original_site['original_op1_3']), 3 ); ?> value="3">固定ページ</option>
</select>
<div id="a" class="url-cat">
URL　　　　： <input type="text" name="original_op1_3_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op1_3_1']); ?>" size="20">
<select name="original_op1_4">
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op1_4']), 1 ); ?> value="1">同じタブで開く</option>
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op1_4']), 2 ); ?> value="2">新しいタブで開く</option>
</select>
</div>
<div id="b" class="url-cat">
<select name="original_op1_3_2[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php $cat_all = get_terms( "category");foreach($cat_all as $value):?>
<option <?php if($op1_1){echo ( in_array( $value->term_id , esc_sql($original_site['original_op1_3_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="c" class="url-cat">
<select name="original_op1_3_3[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php global $post;$my_posts= get_posts(array('post_type' => page,'numberposts' => -1));foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($op1_2){echo ( in_array( get_the_ID() , esc_sql($original_site['original_op1_3_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<hr />

<h4>タイトル2</h4>
テキスト　　： <input type="text" name="original_op2_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op2_1']); ?>" size="20"><br />
表示する項目： <select name="original_op2_3" id="parent2">
<option value="">種類を選択</option>
<option class="d" <?php selected( wp_filter_nohtml_kses($original_site['original_op2_3']), 1 ); ?> value="1">URL</option>
<option class="e" <?php selected( wp_filter_nohtml_kses($original_site['original_op2_3']), 2 ); ?> value="2">カテゴリ</option>
<option class="f" <?php selected( wp_filter_nohtml_kses($original_site['original_op2_3']), 3 ); ?> value="3">固定ページ</option>
</select>
<div id="d" class="url-cat2">
URL　　　　： <input type="text" name="original_op2_3_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op2_3_1']); ?>" size="20">
<select name="original_op2_4">
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op2_4']), 1 ); ?> value="1">同じタブで開く</option>
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op2_4']), 2 ); ?> value="2">新しいタブで開く</option>
</select>
</div>
<div id="e" class="url-cat2">
<select name="original_op2_3_2[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php $cat_all = get_terms( "category");foreach($cat_all as $value):?>
<option <?php if($op2_1){echo ( in_array( $value->term_id , esc_sql($original_site['original_op2_3_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="f" class="url-cat2">
<select name="original_op2_3_3[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php global $post;$my_posts= get_posts(array('post_type' => page,'numberposts' => -1));foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($op2_2){echo ( in_array( get_the_ID() , esc_sql($original_site['original_op2_3_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<hr />

<h4>タイトル3</h4>
テキスト　　： <input type="text" name="original_op3_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op3_1']); ?>" size="20"><br />
表示する項目： <select name="original_op3_3" id="parent3">
<option value="">種類を選択</option>
<option class="g" <?php selected( wp_filter_nohtml_kses($original_site['original_op3_3']), 1 ); ?> value="1">URL</option>
<option class="h" <?php selected( wp_filter_nohtml_kses($original_site['original_op3_3']), 2 ); ?> value="2">カテゴリ</option>
<option class="i" <?php selected( wp_filter_nohtml_kses($original_site['original_op3_3']), 3 ); ?> value="3">固定ページ</option>
</select>
<div id="g" class="url-cat3">
URL　　　　： <input type="text" name="original_op3_3_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op3_3_1']); ?>" size="20">
<select name="original_op3_4">
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op3_4']), 1 ); ?> value="1">同じタブで開く</option>
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op3_4']), 2 ); ?> value="2">新しいタブで開く</option>
</select>
</div>
<div id="h" class="url-cat3">
<select name="original_op3_3_2[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php $cat_all = get_terms( "category");foreach($cat_all as $value):?>
<option <?php if($op3_1){echo ( in_array( $value->term_id , esc_sql($original_site['original_op3_3_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="i" class="url-cat3">
<select name="original_op3_3_3[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php global $post;$my_posts= get_posts(array('post_type' => page,'numberposts' => -1));foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($op3_2){echo ( in_array( get_the_ID() , esc_sql($original_site['original_op3_3_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<hr />

<h4>タイトル4</h4>
テキスト　　： <input type="text" name="original_op4_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op4_1']); ?>" size="20"><br />
表示する項目： <select name="original_op4_3" id="parent4">
<option value="">種類を選択</option>
<option class="j" <?php selected(wp_filter_nohtml_kses($original_site['original_op4_3']), 1 ); ?> value="1">URL</option>
<option class="k" <?php selected(wp_filter_nohtml_kses($original_site['original_op4_3']), 2 ); ?> value="2">カテゴリ</option>
<option class="l" <?php selected(wp_filter_nohtml_kses($original_site['original_op4_3']), 3 ); ?> value="3">固定ページ</option>
</select>
<div id="j" class="url-cat4">
URL　　　　： <input type="text" name="original_op4_3_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op4_3_1']); ?>" size="20">
<select name="original_op4_4">
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op4_4']), 1 ); ?> value="1">同じタブで開く</option>
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op4_4']), 2 ); ?> value="2">新しいタブで開く</option>
</select>
</div>   
<div id="k" class="url-cat4">
<select name="original_op4_3_2[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php $cat_all = get_terms( "category");foreach($cat_all as $value):?>
<option <?php if($op4_1){echo ( in_array( $value->term_id , esc_sql($original_site['original_op4_3_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="l" class="url-cat4">
<select name="original_op4_3_3[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php global $post;$my_posts= get_posts(array('post_type' => page,'numberposts' => -1));foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($op4_2){echo ( in_array( get_the_ID() , esc_sql($original_site['original_op4_3_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?>

</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<hr />

<h4>タイトル5</h4>
テキスト　　： <input type="text" name="original_op5_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op5_1']); ?>" size="20"><br />
表示する項目： <select name="original_op5_3" id="parent5">
<option value="">種類を選択</option>
<option class="m" <?php selected( wp_filter_nohtml_kses($original_site['original_op5_3']), 1 ); ?> value="1">URL</option>
<option class="n" <?php selected( wp_filter_nohtml_kses($original_site['original_op5_3']), 2 ); ?> value="2">カテゴリ</option>
<option class="o" <?php selected( wp_filter_nohtml_kses($original_site['original_op5_3']), 3 ); ?> value="3">固定ページ</option>
</select>
<div id="m" class="url-cat5">
URL　　　　： <input type="text" name="original_op5_3_1" value="<?php echo wp_filter_nohtml_kses($original_site['original_op5_3_1']); ?>" size="20">
<select name="original_op5_4">
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op5_4']), 1 ); ?> value="1">同じタブで開く</option>
<option <?php selected( wp_filter_nohtml_kses($original_site['original_op5_4']), 2 ); ?> value="2">新しいタブで開く</option>
</select>
</div> 
<div id="n" class="url-cat5">
<select name="original_op5_3_2[]" multiple>
<option value="">表示するカテゴリを選択</option>
<?php $cat_all = get_terms( "category");foreach($cat_all as $value):?>
<option <?php if($op5_1){echo ( in_array( $value->term_id , esc_sql($original_site['original_op5_3_2']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo $value->term_id;?>"><?php echo $value->name;?></option><?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<div id="o" class="url-cat5">
<select name="original_op5_3_3[]" multiple>
<option value="">表示する固定ページを選択</option>
<?php global $post;$my_posts= get_posts(array('post_type' => page,'numberposts' => -1));foreach($my_posts as $post):setup_postdata($post);?>
<option <?php if($op5_2){echo ( in_array( get_the_ID() , esc_sql($original_site['original_op5_3_3']) ) ) ? 'selected="selected" ' : '';}?>value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
<?php endforeach; ?>
</select><br />
<p class="text_admin1">※複数指定が可能　(Windowsの場合は、「Shift」または「Ctrl」キーを押しながら選択 Macの場合は、「Cmd」キーを押しながら選択)</p>
</div>
<hr />


</div>
</div>
    
<div id="main2" class="url-catmain">
※【広告バナー1】・【広告バナー2】のどちらかを入力してください<br />
※最大サイズ： 728px × 90px
<p class="admin-title">【広告バナー1】ソースコードで入力</p>
<textarea style="width:100%" rows="4" cols="60" name="original_op7_1"><?php echo wp_filter_nohtml_kses(get_option('original_op7_1')); ?></textarea>
<br /><br />
<hr />

<p class="admin-title">【広告バナー2】画像・URLを指定する</p>
<div class="img-choose">
<div class="img-left">
URL　 ： <input type="text" name="original_op7_2" value="<?php echo wp_filter_nohtml_kses($original_site['original_op7_2']); ?>" size="20"><br />
画像　： <input name="mediaid" type="text" value="<?php echo wp_filter_nohtml_kses($original_site['mediaid']); ?>" />
<input type="button" name="media" value="選択" />
<input type="button" name="media-clear" value="クリア" />

</div>
<div id="media"><?php echo wp_get_attachment_image(wp_filter_nohtml_kses($original_site['mediaid'])); ?></div>
</div></div>
<p class="submit"><input type="submit" name="Submit" class="button-primary" value="更新" /></p>
<?php wp_nonce_field( 'original_option_action','original_option_nonce_field' ); ?>
</form>
</div>
</div>