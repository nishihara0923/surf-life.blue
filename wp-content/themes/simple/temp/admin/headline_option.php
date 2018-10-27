<?php
//見出し設定画面

// チェック
if ( ! empty( $_POST ) && check_admin_referer( 'headline_option_action','headline_option_nonce_field' ) && current_user_can( 'manage_options' ) ) {

if( $_POST['submit_flag'] == 'Z' ) {

update_option('headline_style', esc_sql(array(
"headline_setting" => $_POST['headline_setting'],
"h2_style" => $_POST['h2_style'],
"h2_color_1" => $_POST['h2_color_1'],
"h2_color_2" => $_POST['h2_color_2'],

"h3_style" => $_POST['h3_style'],
"h3_color_1" => $_POST['h3_color_1'],
"h3_color_2" => $_POST['h3_color_2'],

"h4_style" => $_POST['h4_style'],
"h4_color_1" => $_POST['h4_color_1'],
"h4_color_2" => $_POST['h4_color_2'],

"h5_style" => $_POST['h5_style'],
"h5_color_1" => $_POST['h5_color_1'],
"h5_color_2" => $_POST['h5_color_2'],

)));


if($_POST['h2_style'] == '1'){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline2']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_1'], $css_h2_val);
$css_h2_val = preg_replace('/change_color2/',$_POST['h2_color_2'], $css_h2_val);

}elseif($_POST['h2_style'] == '2'){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline3']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_1'], $css_h2_val);

}elseif($_POST['h2_style'] == '3'){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline4']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_2'], $css_h2_val);
$css_h2_val = preg_replace('/change_color2/',$_POST['h2_color_1'], $css_h2_val);

}elseif($_POST['h2_style'] == '4'){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline5']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_2'], $css_h2_val);
$css_h2_val = preg_replace('/change_color2/',$_POST['h2_color_1'], $css_h2_val);

}elseif($_POST['h2_style'] == '5'){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline6']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_1'], $css_h2_val);
$css_h2_val = preg_replace('/change_color2/',$_POST['h2_color_2'], $css_h2_val);

}elseif($_POST['h2_style'] == '6'){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline7']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_1'], $css_h2_val);
$css_h2_val = preg_replace('/change_color2/',$_POST['h2_color_2'], $css_h2_val);

}elseif($_POST['h2_style'] == '7'){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline8']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_1'], $css_h2_val);
$css_h2_val = preg_replace('/change_color2/',$_POST['h2_color_2'], $css_h2_val);

}elseif($_POST['h2_style'] == '8'){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline9']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_1'], $css_h2_val);
$css_h2_val = preg_replace('/change_color2/',$_POST['h2_color_2'], $css_h2_val);

}elseif($_POST['h2_style'] == ''){
$css_h2_val = preg_replace('/change_title/','h2', $_POST['headline1']);
$css_h2_val = preg_replace('/change_color1/',$_POST['h2_color_1'], $css_h2_val);

}

if($_POST['h3_style'] == '1'){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline2']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_1'], $css_h3_val);
$css_h3_val = preg_replace('/change_color2/',$_POST['h3_color_2'], $css_h3_val);

}elseif($_POST['h3_style'] == '2'){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline3']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_1'], $css_h3_val);

}elseif($_POST['h3_style'] == '3'){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline4']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_2'], $css_h3_val);
$css_h3_val = preg_replace('/change_color2/',$_POST['h3_color_1'], $css_h3_val);

}elseif($_POST['h3_style'] == '4'){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline5']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_2'], $css_h3_val);
$css_h3_val = preg_replace('/change_color2/',$_POST['h3_color_1'], $css_h3_val);

}elseif($_POST['h3_style'] == '5'){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline6']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_1'], $css_h3_val);
$css_h3_val = preg_replace('/change_color2/',$_POST['h3_color_2'], $css_h3_val);

}elseif($_POST['h3_style'] == '6'){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline7']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_1'], $css_h3_val);
$css_h3_val = preg_replace('/change_color2/',$_POST['h3_color_2'], $css_h3_val);

}elseif($_POST['h3_style'] == '7'){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline8']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_1'], $css_h3_val);
$css_h3_val = preg_replace('/change_color2/',$_POST['h3_color_2'], $css_h3_val);

}elseif($_POST['h3_style'] == '8'){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline9']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_1'], $css_h3_val);
$css_h3_val = preg_replace('/change_color2/',$_POST['h3_color_2'], $css_h3_val);

}elseif($_POST['h3_style'] == ''){
$css_h3_val = preg_replace('/change_title/','h3', $_POST['headline1']);
$css_h3_val = preg_replace('/change_color1/',$_POST['h3_color_1'], $css_h3_val);

}

if($_POST['h4_style'] == '1'){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline2']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_1'], $css_h4_val);
$css_h4_val = preg_replace('/change_color2/',$_POST['h4_color_2'], $css_h4_val);

}elseif($_POST['h4_style'] == '2'){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline3']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_1'], $css_h4_val);

}elseif($_POST['h4_style'] == '3'){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline4']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_2'], $css_h4_val);
$css_h4_val = preg_replace('/change_color2/',$_POST['h4_color_1'], $css_h4_val);

}elseif($_POST['h4_style'] == '4'){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline5']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_2'], $css_h4_val);
$css_h4_val = preg_replace('/change_color2/',$_POST['h4_color_1'], $css_h4_val);

}elseif($_POST['h4_style'] == '5'){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline6']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_1'], $css_h4_val);
$css_h4_val = preg_replace('/change_color2/',$_POST['h4_color_2'], $css_h4_val);

}elseif($_POST['h4_style'] == '6'){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline7']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_1'], $css_h4_val);
$css_h4_val = preg_replace('/change_color2/',$_POST['h4_color_2'], $css_h4_val);

}elseif($_POST['h4_style'] == '7'){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline8']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_1'], $css_h4_val);
$css_h4_val = preg_replace('/change_color2/',$_POST['h4_color_2'], $css_h4_val);

}elseif($_POST['h4_style'] == '8'){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline9']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_1'], $css_h4_val);
$css_h4_val = preg_replace('/change_color2/',$_POST['h4_color_2'], $css_h4_val);

}elseif($_POST['h4_style'] == ''){
$css_h4_val = preg_replace('/change_title/','h4', $_POST['headline1']);
$css_h4_val = preg_replace('/change_color1/',$_POST['h4_color_1'], $css_h4_val);

}

if($_POST['h5_style'] == '1'){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline2']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_1'], $css_h5_val);
$css_h5_val = preg_replace('/change_color2/',$_POST['h5_color_2'], $css_h5_val);

}elseif($_POST['h5_style'] == '2'){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline3']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_1'], $css_h5_val);

}elseif($_POST['h5_style'] == '3'){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline4']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_2'], $css_h5_val);
$css_h5_val = preg_replace('/change_color2/',$_POST['h5_color_1'], $css_h5_val);

}elseif($_POST['h5_style'] == '4'){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline5']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_2'], $css_h5_val);
$css_h5_val = preg_replace('/change_color2/',$_POST['h5_color_1'], $css_h5_val);

}elseif($_POST['h5_style'] == '5'){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline6']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_1'], $css_h5_val);
$css_h5_val = preg_replace('/change_color2/',$_POST['h5_color_2'], $css_h5_val);

}elseif($_POST['h5_style'] == '6'){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline7']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_1'], $css_h5_val);
$css_h5_val = preg_replace('/change_color2/',$_POST['h5_color_2'], $css_h5_val);

}elseif($_POST['h5_style'] == '7'){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline8']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_1'], $css_h5_val);
$css_h5_val = preg_replace('/change_color2/',$_POST['h5_color_2'], $css_h5_val);

}elseif($_POST['h5_style'] == '8'){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline9']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_1'], $css_h5_val);
$css_h5_val = preg_replace('/change_color2/',$_POST['h5_color_2'], $css_h5_val);

}elseif($_POST['h5_style'] == ''){
$css_h5_val = preg_replace('/change_title/','h5', $_POST['headline1']);
$css_h5_val = preg_replace('/change_color1/',$_POST['h5_color_1'], $css_h5_val);

}

$headline_main = $css_h2_val.$css_h3_val.$css_h4_val.$css_h5_val;

if($_POST['headline_setting']){
$headline_main_mins ='';
}else{
$headline_main_mins = preg_replace('/\r\n/','', $headline_main);
}
//オリジナルCSSと結合
$css_op_val = get_option('css_op');
$css_op_val = str_replace('\\','', $css_op_val);
$css_op_min = preg_replace('/\r\n/','', $css_op_val);

$headline_main_min = $headline_main_mins.$css_op_min;


update_option('css_h_min', wp_filter_nohtml_kses($headline_main_min));
update_option('css_h', wp_filter_nohtml_kses($headline_main));

}
?>
<div class="updated"><p><strong>設定は保存されました。</strong></p></div>
<?php }?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>

<?php $headline_style = get_option('headline_style');?>
<div id="original_option">
<div id="original_options">
<h2>オリジナル設定画面</h2>
<form name="form1" method="post" action="<?php echo esc_url(admin_url( 'options-general.php?page=original_headline' )); ?>">
<input type="hidden" name="submit_flag" value="Z">
<h3>オリジナル見出し設定（投稿ページ用）</h3>

<label><input class="headline_hide" type="radio" <?php checked( wp_filter_nohtml_kses($headline_style[headline_setting]), "" ); ?> name="headline_setting" value="">自動反映する</label>
<label><input class="headline_show" type="radio" <?php checked( wp_filter_nohtml_kses($headline_style[headline_setting]), 1 ); ?> name="headline_setting" value="1">手動で設定する<br></label>

<p class="details">
※選択したオリジナル見出しをCSSで変更する場合は、<strong>手動で設定する</strong>を選択してください<br />
※下部にソースが表示されます
</p>

<div class="original_area">
<script type="text/javascript">
$(function(){
$('.headline_hide').change(function(){$('.large-text_area').hide();})
$('.headline_show').change(function(){$('.large-text_area').show();})
$('.h2_color_show1').change(function(){$('.h2_color1').show();$('.h2_color2').hide();})
$('.h2_color_show2').change(function(){$('.h2_color1').show();$('.h2_color2').show();})
$('.h3_color_show1').change(function(){$('.h3_color1').show();$('.h3_color2').hide();})
$('.h3_color_show2').change(function(){$('.h3_color1').show();$('.h3_color2').show();})
$('.h4_color_show1').change(function(){$('.h4_color1').show();$('.h4_color2').hide();})
$('.h4_color_show2').change(function(){$('.h4_color1').show();$('.h4_color2').show();})
$('.h5_color_show1').change(function(){$('.h5_color1').show();$('.h5_color2').hide();})
$('.h5_color_show2').change(function(){$('.h5_color1').show();$('.h5_color2').show();})
})

//切替タブ用
$(function(){
$('.tabbox:first').show();
$('#tab li:first').addClass('active');
$('#tab li').click(function() {
$('#tab li').removeClass('active');

$(this).addClass('active');
$('.tabbox').hide();
$($(this).find('a').attr('href')).fadeIn();
return false;
});

});
</script>

<style>
.large-text_area.display-block{
display:block;}
.details{
font-size:11px;
margin:0px 0px 10px 0px;
}
.details2{
font-size:11px;
margin:0px 0px 0px 0px;
}
.style1{padding:2px;background-color:#ccc;}
.large-text2{display:none;}
.h2_color2{display:none;}
.large-text_area{display:none;}
</style>

<ul id="tab">
<li class="selected"><a href="#tab1">h2見出し</a></li>
<li><a href="#tab2">h3見出し</a></li>
<li><a href="#tab3">h4見出し</a></li>
<li><a href="#tab4">h5見出し</a></li>
</ul>

<div id="detail">
<div id="tab1" class="tabbox">
<!-- #tab1 -->
<p class="admin-title">■h2見出し</p>

<div class="post_title">

<label><input class="h2_color_show1" type="radio" <?php checked( wp_filter_nohtml_kses($headline_style[h2_style]), "" ); ?> name="h2_style" value="">　<img src="<?php bloginfo('template_url'); ?>/img/h1.png" /><br></label>

<label><input class="h2_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h2_style]), 1 ); ?> name="h2_style" value="1">　<img src="<?php bloginfo('template_url'); ?>/img/h2.png" /><br></label>

<label><input class="h2_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h2_style]), 2 ); ?> name="h2_style" value="2">　<img src="<?php bloginfo('template_url'); ?>/img/h3.png" /><br></label>

<label><input class="h2_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h2_style]), 3 ); ?> name="h2_style" value="3">　<img src="<?php bloginfo('template_url'); ?>/img/h4.png" /><br></label>

<label><input class="h2_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h2_style]), 4 ); ?> name="h2_style" value="4">　<img src="<?php bloginfo('template_url'); ?>/img/h5.png" /><br></label>

<label><input class="h2_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h2_style]), 6 ); ?> name="h2_style" value="6">　<img src="<?php bloginfo('template_url'); ?>/img/h6.png" /><br></label>

<label><input class="h2_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h2_style]), 7 ); ?> name="h2_style" value="7">　<img src="<?php bloginfo('template_url'); ?>/img/h7.png" /><br></label>

<label><input class="h2_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h2_style]), 8 ); ?> name="h2_style" value="8">　<img src="<?php bloginfo('template_url'); ?>/img/h8.png" /><br></label>

<label><input class="h2_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h2_style]), 5 ); ?> name="h2_style" value="5">　<img src="<?php bloginfo('template_url'); ?>/img/h9.png" /><br></label>

</div>
<?php 
$h2_color_val = $headline_style[h2_style];
if($h2_color_val == 2 || $h2_color_val == 7 || $h2_color_val == ''){
$h2_color_show1 = 'block';
$h2_color_show2 = 'none';
}else{
$h2_color_show1 = 'block';
$h2_color_show2 = 'block';
} ?>

<div class="h2_color1" style="display:<?php echo $h2_color_show1?>;">
<input type="text" name="h2_color_1" class="myColorPicker" value="<?php echo wp_filter_nohtml_kses($headline_style[h2_color_1])?>">　
</div>
<div class="h2_color2" style="display:<?php echo $h2_color_show2?>;">
<input type="text" name="h2_color_2" class="myColorPicker" value="<?php echo wp_filter_nohtml_kses($headline_style[h2_color_2])?>">
</div>

</div><!-- #tab1 -->

<div id="tab2" class="tabbox">
<!-- #tab2 -->

<p class="admin-title">■h3見出し</p>

<div class="post_title">
<label><input class="h3_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), "" ); ?> name="h3_style" value="">　<img src="<?php bloginfo('template_url'); ?>/img/h1.png" /><br></label>
<label><input class="h3_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), 1 ); ?> name="h3_style" value="1">　<img src="<?php bloginfo('template_url'); ?>/img/h2.png" /><br></label>
<label><input class="h3_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), 2 ); ?> name="h3_style" value="2">　<img src="<?php bloginfo('template_url'); ?>/img/h3.png" /><br></label>

<label><input class="h3_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), 3 ); ?> name="h3_style" value="3">　<img src="<?php bloginfo('template_url'); ?>/img/h4.png" /><br></label>

<label><input class="h3_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), 4 ); ?> name="h3_style" value="4">　<img src="<?php bloginfo('template_url'); ?>/img/h5.png" /><br></label>

<label><input class="h3_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), 6 ); ?> name="h3_style" value="6">　<img src="<?php bloginfo('template_url'); ?>/img/h6.png" /><br></label>

<label><input class="h3_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), 7 ); ?> name="h3_style" value="7">　<img src="<?php bloginfo('template_url'); ?>/img/h7.png" /><br></label>

<label><input class="h3_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), 8 ); ?> name="h3_style" value="8">　<img src="<?php bloginfo('template_url'); ?>/img/h8.png" /><br></label>

<label><input class="h3_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h3_style]), 5 ); ?> name="h3_style" value="5">　<img src="<?php bloginfo('template_url'); ?>/img/h9.png" /><br></label>
</div>

<?php 
$h3_color_val = $headline_style[h3_style];
if($h3_color_val == 2 || $h3_color_val == 7 || $h3_color_val == ''){
$h3_color_show1 = 'block';
$h3_color_show2 = 'none';
}else{
$h3_color_show1 = 'block';
$h3_color_show2 = 'block';
} ?>

<div class="h3_color1" style="display:<?php echo $h3_color_show1?>;">
<input type="text" name="h3_color_1" class="myColorPicker" value="<?php echo wp_filter_nohtml_kses($headline_style[h3_color_1])?>">　
</div>
<div class="h3_color2" style="display:<?php echo $h3_color_show2?>;">
<input type="text" name="h3_color_2" class="myColorPicker" value="<?php echo wp_filter_nohtml_kses($headline_style[h3_color_2])?>">
</div>
</div><!-- #tab2 -->

<div id="tab3" class="tabbox">
<!-- #tab3 -->

<p class="admin-title">■h4見出し</p>

<div class="post_title">
<label><input class="h4_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), "" ); ?> name="h4_style" value="">　<img src="<?php bloginfo('template_url'); ?>/img/h1.png" /><br></label>
<label><input class="h4_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), 1 ); ?> name="h4_style" value="1">　<img src="<?php bloginfo('template_url'); ?>/img/h2.png" /><br></label>
<label><input class="h4_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), 2 ); ?> name="h4_style" value="2">　<img src="<?php bloginfo('template_url'); ?>/img/h3.png" /><br></label>

<label><input class="h4_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), 3 ); ?> name="h4_style" value="3">　<img src="<?php bloginfo('template_url'); ?>/img/h4.png" /><br></label>

<label><input class="h4_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), 4 ); ?> name="h4_style" value="4">　<img src="<?php bloginfo('template_url'); ?>/img/h5.png" /><br></label>

<label><input class="h4_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), 6 ); ?> name="h4_style" value="6">　<img src="<?php bloginfo('template_url'); ?>/img/h6.png" /><br></label>

<label><input class="h4_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), 7 ); ?> name="h4_style" value="7">　<img src="<?php bloginfo('template_url'); ?>/img/h7.png" /><br></label>

<label><input class="h4_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), 8 ); ?> name="h4_style" value="8">　<img src="<?php bloginfo('template_url'); ?>/img/h8.png" /><br></label>

<label><input class="h4_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h4_style]), 5 ); ?> name="h4_style" value="5">　<img src="<?php bloginfo('template_url'); ?>/img/h9.png" /><br></label>
</div>

<?php 
$h4_color_val = $headline_style[h4_style];
if($h4_color_val == 2 || $h4_color_val == 7 || $h4_color_val == ''){
$h4_color_show1 = 'block';
$h4_color_show2 = 'none';
}else{
$h4_color_show1 = 'block';
$h4_color_show2 = 'block';
} ?>

<div class="h4_color1" style="display:<?php echo $h4_color_show1?>;">
<input type="text" name="h4_color_1" class="myColorPicker" value="<?php echo wp_filter_nohtml_kses($headline_style[h4_color_1])?>">　
</div>
<div class="h4_color2" style="display:<?php echo $h4_color_show2?>;">
<input type="text" name="h4_color_2" class="myColorPicker" value="<?php echo wp_filter_nohtml_kses($headline_style[h4_color_2])?>">
</div>
</div><!-- #tab3 -->

<div id="tab4" class="tabbox">
<!-- #tab4 -->

<p class="admin-title">■h5見出し</p>
<div class="post_title">
<label><input class="h5_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), "" ); ?> name="h5_style" value="">　<img src="<?php bloginfo('template_url'); ?>/img/h1.png" /><br></label>

<label><input class="h5_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), 1 ); ?> name="h5_style" value="1">　<img src="<?php bloginfo('template_url'); ?>/img/h2.png" /><br></label>

<label><input class="h5_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), 2 ); ?> name="h5_style" value="2">　<img src="<?php bloginfo('template_url'); ?>/img/h3.png" /><br></label>

<label><input class="h5_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), 3 ); ?> name="h5_style" value="3">　<img src="<?php bloginfo('template_url'); ?>/img/h4.png" /><br></label>

<label><input class="h5_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), 4 ); ?> name="h5_style" value="4">　<img src="<?php bloginfo('template_url'); ?>/img/h5.png" /><br></label>

<label><input class="h5_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), 6 ); ?> name="h5_style" value="6">　<img src="<?php bloginfo('template_url'); ?>/img/h6.png" /><br></label>

<label><input class="h5_color_show1" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), 7 ); ?> name="h5_style" value="7">　<img src="<?php bloginfo('template_url'); ?>/img/h7.png" /><br></label>

<label><input class="h5_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), 8 ); ?> name="h5_style" value="8">　<img src="<?php bloginfo('template_url'); ?>/img/h8.png" /><br></label>

<label><input class="h5_color_show2" type="radio" <?php checked(wp_filter_nohtml_kses($headline_style[h5_style]), 5 ); ?> name="h5_style" value="5">　<img src="<?php bloginfo('template_url'); ?>/img/h9.png" /><br></label>
</div>

<?php 
$h5_color_val = $headline_style[h5_style];
if($h5_color_val == 2 || $h5_color_val == 7 || $h5_color_val == ''){
$h5_color_show1 = 'block';
$h5_color_show2 = 'none';
}else{
$h5_color_show1 = 'block';
$h5_color_show2 = 'block';
} ?>

<div class="h5_color1" style="display:<?php echo $h5_color_show1?>;">
<input type="text" name="h5_color_1" class="myColorPicker" value="<?php echo wp_filter_nohtml_kses($headline_style[h5_color_1])?>">　
</div>
<div class="h5_color2" style="display:<?php echo $h5_color_show2?>;">
<input type="text" name="h5_color_2" class="myColorPicker" value="<?php echo wp_filter_nohtml_kses($headline_style[h5_color_2])?>">
</div>

</div><!-- #tab4 -->

<!-- #detail --></div>

<hr>

<textarea id="description" class="large-text2" name="headline1">
.type-post .post_title change_title {
border-left:4px solid change_color1;
clear:both;
margin:15px 0 8px;
padding:3px 10px;
}
</textarea>

<textarea id="description" class="large-text2" name="headline2">
.type-post .post_title change_title{
position:relative;
border-bottom:1px solid #ccc;
font-weight:bold;
padding:3px 1.8% 5px 28px;
margin:15px 0 8px;
/padding:3px 0 5px 10px
}
     
.type-post .post_title change_title:before{
content:""; 
height:12px; 
width:12px; 
display:block; 
background:change_color1; 
box-shadow:0 0 5px rgba(255, 255, 255, 0.3) inset;
-box-shadow:0 0 5px rgba(255, 255, 255, 0.3) inset;
-webkit-box-shadow:0 0 5px rgba(255, 255, 255, 0.3) inset;
-moz-box-shadow:0 0 5px rgba(255, 255, 255, 0.3) inset; 
position:absolute; 
top:-0px; 
left:8px;
transform:rotate(-50deg);
-webkit-transform:rotate(-50deg);
-moz-transform:rotate(-50deg);
-o-transform:rotate(-50deg);
-ms-transform:rotate(-50deg)
}

.type-post .post_title change_title:after{
content:"";
height:6px; 
width:6px; 
display:block; 
background:change_color2; 
box-shadow:0 0 5px rgba(255, 255, 255, 0.3) inset;
-box-shadow:0 0 5px rgba(255, 255, 255, 0.3) inset;
-webkit-box-shadow:0 0 5px rgba(255, 255, 255, 0.3) inset;
-moz-box-shadow:0 0 5px rgba(255, 255, 255, 0.3) inset; 
position:absolute; 
top:16px; 
left:4px;
transform:rotate(-90deg);
-webkit-transform:rotate(-90deg);
-moz-transform:rotate(-90deg);
-o-transform:rotate(-90deg);
-ms-transform:rotate(-75deg)
}
</textarea>

<textarea id="description" class="large-text2" name="headline3">
.type-post .post_title change_title{
position:relative;
border-bottom:1px solid #ccc;
font-weight:bold;
margin:15px 0 8px;
padding:3px 0 5px 32px;
/padding:3px 0 5px 10px
}
     
.type-post .post_title change_title:after, .type-post .post_title change_title:before{
content:""; 
height:18px; 
width:4px; 
display:block; 
background:change_color1; 
position:absolute; 
top:5px; 
left:16px; 
border-radius:10px;
-webkit-border-radius:10px;
-moz-border-radius:10px; 
transform:rotate(45deg);
-webkit-transform:rotate(45deg);
-moz-transform:rotate(45deg);
-o-transform:rotate(45deg);
-ms-transform:rotate(45deg)
}
     
.type-post .post_title change_title:before{
height:10px; 
transform:rotate(-45deg);
-webkit-transform:rotate(-45deg);
-moz-transform:rotate(-45deg);
-o-transform:rotate(-45deg);
-ms-transform:rotate(-45deg); 
top:13px; 
left:8px
}
</textarea>

<textarea id="description" class="large-text2" name="headline4">
.type-post .post_title change_title{
position:relative;
border-bottom:1px solid #ccc;
font-weight:bold;
margin:15px 0 8px;
padding:5px 1.8% 5px 30px;
/padding:3px 0 5px 10px
}
     
.type-post .post_title change_title:before{
content:""; 
border-radius:30px;
-webkit-border-radius:30px;
-moz-border-radius:30px; 
height:12px; 
width:12px; 
display:block; 
position:absolute; 
top:14px; 
left:10px; 
background-color:change_color1;
box-shadow:0 0 2px 2px rgba(255,255,255,0.2) inset;
filter:alpha(opacity=50);
-moz-opacity:0.50;
-khtml-opacity:0.50;
opacity:0.50;
z-index:1
}
     
.type-post .post_title change_title:after{
content:""; 
border-radius:30px;
-webkit-border-radius:30px;
-moz-border-radius:30px; 
height:15px; 
width:15px; 
display:block; 
position:absolute; 
top:7px; 
left:5px; 
background-color:change_color2;
box-shadow:0 0 2px 2px rgba(255,255,255,0.2) inset
}
</textarea>

<textarea id="description" class="large-text2" name="headline5">
.type-post .post_title change_title {
background-color:change_color2;
padding:7px 10px;
margin:15px 0 10px;
position:relative;
font-weight:bold;
color:change_color1;
border-radius:3px;
-webkit-border-radius:3px;
-moz-border-radius:3px;
/padding:8px 15px 6px 15px
}

.type-post .post_title change_title:after {
content:' ';
height:0;
position:absolute;
width:0;
border:8px solid transparent;
border-top-color:change_color2;
top:100%;
left:10px
}
</textarea>


<textarea id="description" class="large-text2" name="headline6">
.type-post .post_title change_title{
font-weight:bold;
position:relative;
padding:3px 10px 5px 10px;
margin:15px 0 8px;
border-bottom:4px solid change_color2;
}
.type-post .post_title change_title::after {
position:absolute;
bottom:-4px;
left:0;
z-index:2;
content:"";
width:25%;
height:4px;
background-color:change_color1
}
</textarea>

<textarea id="description" class="large-text2" name="headline7">
.type-post .post_title change_title {
background-color:change_color1;
color:change_color2;
position:relative;
padding:5px 19px 6px 10px;
margin:15px 0 8px;
/padding:10px 1% 8px 1%
}

.type-post .post_title change_title:after {
content:' ';
height:0;
position:absolute;
width:0;
border:8px solid transparent;
border-color:#fff #fff #ddd #ddd;
box-shadow:-2px 3px 2px  rgba(0, 0, 0, .2);
top:0%;
right:0%
}
</textarea>

<textarea id="description" class="large-text2" name="headline8">
.type-post .post_title change_title {
border-bottom:3px solid change_color1;
clear:both;
margin:15px 0 8px;
padding:3px 10px 4px 10px;
/padding:3px 10px 5px 10px
}
</textarea>

<textarea id="description" class="large-text2" name="headline9">
.type-post .post_title change_title {
background-color:change_color1;
color:change_color2;
clear:both;
margin:15px 0 8px;
padding:5px 10px;
/padding:5px 10px 6px 10px
}
</textarea>

</div>
<p class="submit"><input type="submit" name="Submit" class="button-primary" value="更新" /></p>
<?php wp_nonce_field( 'headline_option_action','headline_option_nonce_field' ); ?>
</form>
</div>
</div>
<div class="large-text_area<?php if($headline_style[headline_setting]){echo ' display-block';};?>">
<p class="details2">
※見出しを選択後、更新ボタンをクリックして更新してください<br />
※下記のCSSソースをすべてコピーして、<a href="<?php echo esc_url(admin_url( 'options-general.php?page=original_css' )); ?>" target="_blank">オリジナルCSS</a>に張り付けて編集してください</p>
<textarea id="description" class="large-text" style="width:100%;background-color:#fff;" onclick="this.focus();this.select()" rows="10" readonly><?php echo str_replace('\\', '', wp_filter_nohtml_kses(get_option('css_h'))); ?></textarea>
</div>