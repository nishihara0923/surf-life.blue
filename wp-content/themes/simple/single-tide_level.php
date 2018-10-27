<?php get_header(); ?>
<div id="main-content">
<?php global $original_site;?>
<div id="main-content<?php echo $original_site['column_s'];?>-area">
<div id="main-content<?php echo $original_site['column_s'];?>">
<div id="content-single">
<!--[if lt IE 11]>
<style type="text/css">
opacity:inherit;
@media all and (-ms-high-contrast:none){
  *::-ms-backdrop, #pagination a:hover { 
opacity:inherit; } /* IE11 */
}
</style>
<![endif]-->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<!-- 表示内容を記述 -->
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<h1 class="post_shio_title"><?php the_title();?>エリアの潮位</h1>
<ul class="post_date_shio"><li><?php echo '住所：'.$spot_data['address']; ?></li><li><?php echo '緯度：'.$spot_data['latitude']; ?></li><li><?php echo '経度：'.$spot_data['longitude']; ?></li></ul>
<div class="post_title">
<?php
$spot_data_api = get_post_meta($post->ID,"spot_data_api",true);
date_default_timezone_set('Asia/Tokyo');
$now = time();
$check_on='';
//毎年の更新は$min_yearと$max_yearがダウンロードできるか確認 
//http://www.data.jma.go.jp/gmd/kaiyou/data/db/tide/suisan/txt/2019/".$spot_data['spot'].".txt
//$check_onのコメントをはずしてすべてのエリアをダウンロードさせる
//各areaを表示させてダウンロードして表示が確かかチェックする　
$min_total = 2011;
$max_total =2019;
//$check_on=1;
if($check_on){
//echo 'ari';
$min_year =$min_total;
$spot_data_api='';
}else{
$min_year =$spot_data['data_time'];
}
$max_year =$max_total;
$ularr='';
//データーアップデート用　$spot_data_api='';
if($spot_data_api){
//echo 'ari';
$ularr = $spot_data_api;
}else{

$min_y='';
$min_year=$min_total;
for ($i = $min_year; $i <= $max_year; $i++){
if($data_row = @file_get_contents("http://www.data.jma.go.jp/gmd/kaiyou/data/db/tide/suisan/txt/".$i."/".$spot_data['spot'].".txt")){
$ularr .= $data_row;
}else{
//ダウンロードできない年を記録
$min_y = $i;
}
}//for
if($min_y){
//echo 'ari';
//潮位を保存
$spot_data['data_time']=$min_y+1;
update_post_meta($post->ID,'spot_data',$spot_data);
for ($i = $min_y; $i <= $max_year; $i++){
if($data_row = @file_get_contents("http://www.data.jma.go.jp/gmd/kaiyou/data/db/tide/suisan/txt/".$i."/".$spot_data['spot'].".txt")){
$ularr .= $data_row;
}
}
}else{
//潮位を保存
$spot_data['data_time']=$min_year;
update_post_meta($post->ID,'spot_data',$spot_data);
}
//共通
$ularr = explode("\n",$ularr);
//潮位を保存
update_post_meta($post->ID,'spot_data_api',$ularr);
};

//カレンダー用
$date_ds_calender = (strtotime(date("Y-m-d")) - strtotime($min_year.'-01-01')) / ( 60 * 60 * 24);

//1年の何日目かを計算
if(!isset($_POST['tide_data1'])){
//echo '通常';
$date_ds = (strtotime(date("Y-m-d")) - strtotime($min_year.'-01-01')) / ( 60 * 60 * 24);
}else{
//echo '日付変更';
$tide_days_year = $_POST['tide_year'];
$tide_days_month = $_POST['tide_month'];
$tide_days_tide_day = $_POST['tide_day'];
$tide_days = $tide_days_year.'-'.$tide_days_month.'-'.$tide_days_tide_day;
$date_ds = (strtotime($tide_days) - strtotime($min_total.'-01-01')) / ( 60 * 60 * 24);
}

//タイド関係
$date_today0 = substr($ularr[$date_ds],0, 3);
$date_today1 = substr($ularr[$date_ds],3, 3);
$date_today2 = substr($ularr[$date_ds],6, 3);$date_today3 = substr($ularr[$date_ds],9, 3);$date_today4 = substr($ularr[$date_ds],12, 3);$date_today5 = substr($ularr[$date_ds],15, 3);$date_today6 = substr($ularr[$date_ds],18, 3);$date_today7 = substr($ularr[$date_ds],21, 3);$date_today8 = substr($ularr[$date_ds],24, 3);$date_today9 = substr($ularr[$date_ds],27, 3);$date_today10 = substr($ularr[$date_ds],30, 3);$date_today11 = substr($ularr[$date_ds],33, 3);$date_today12 = substr($ularr[$date_ds],36, 3);$date_today13 = substr($ularr[$date_ds],39, 3);$date_today14 = substr($ularr[$date_ds],42, 3);$date_today15 = substr($ularr[$date_ds],45, 3);$date_today16 = substr($ularr[$date_ds],48, 3);$date_today17 = substr($ularr[$date_ds],51, 3);$date_today18 = substr($ularr[$date_ds],54, 3);$date_today19 = substr($ularr[$date_ds],57, 3);$date_today20 = substr($ularr[$date_ds],60, 3);$date_today21 = substr($ularr[$date_ds],63, 3);$date_today22 = substr($ularr[$date_ds],66, 3);$date_today23 = substr($ularr[$date_ds],69, 3);
$array_shio = array($date_today0,$date_today1,$date_today2,$date_today3,$date_today4,$date_today5,$date_today6,$date_today7,$date_today8,$date_today9,$date_today10,$date_today11,$date_today12,$date_today13,$date_today14,$date_today15,$date_today16,$date_today17,$date_today18,$date_today19,$date_today20,$date_today21,$date_today22,$date_today23);

//平均値関係
$average_dye= array();
for ($avl = 0; $avl < 31; $avl++){
$date_avl = $date_ds_calender+$avl;
$age_avl = array(substr($ularr[$date_avl],0, 3),substr($ularr[$date_avl],3, 3),substr($ularr[$date_avl],6, 3),substr($ularr[$date_avl],9, 3),substr($ularr[$date_avl],12, 3),substr($ularr[$date_avl],15, 3),substr($ularr[$date_avl],18, 3),substr($ularr[$date_avl],21, 3),substr($ularr[$date_avl],24, 3),substr($ularr[$date_avl],27, 3),substr($ularr[$date_avl],30, 3),substr($ularr[$date_avl],33, 3),substr($ularr[$date_avl],36, 3),substr($ularr[$date_avl],39, 3),substr($ularr[$date_avl],42, 3),substr($ularr[$date_avl],45, 3),substr($ularr[$date_avl],48, 3),substr($ularr[$date_avl],51, 3),substr($ularr[$date_avl],54, 3),substr($ularr[$date_avl],57, 3),substr($ularr[$date_avl],60, 3),substr($ularr[$date_avl],63, 3),substr($ularr[$date_avl],66, 3),substr($ularr[$date_avl],69, 3));
$average_dye = array_merge($average_dye,$age_avl);

//トータルを計算
$age_total = array_sum($age_avl);
//平均値を計算
$dye_average[] = $average[$avl] = round($age_total / 24);
};
?>

<script language="javascript" type="text/javascript" src="../js/graph/jquery-1.7.1.min.js"></script>
<!--[if lt IE 9]>
<script language="javascript" type="text/javascript" src="./js/graph/excanvas.min.js"></script>
<![endif]-->
<script language="javascript" type="text/javascript" src="../js/graph/jquery.jqplot.min.js"></script>
<link rel="stylesheet" type="text/css" href="../js/graph/jquery.jqplot.min.css" />
<script>
jQuery( function() {

jQuery . jqplot('tidegraph',
[[
[ 0,<?php echo $date_today0 ?>],[ 1,<?php echo $date_today1 ?>],[ 2,<?php echo $date_today2 ?>],[ 3,<?php echo $date_today3 ?>],[ 4,<?php echo $date_today4 ?>],[ 5,<?php echo $date_today5 ?>],[ 6,<?php echo $date_today6 ?>],[ 7,<?php echo $date_today7 ?>],[ 8,<?php echo $date_today8 ?>],[ 9,<?php echo $date_today9 ?>],[ 10,<?php echo $date_today10 ?>],[ 11,<?php echo $date_today11 ?>],[ 12,<?php echo $date_today12 ?>],[ 13,<?php echo $date_today13 ?>],[ 14,<?php echo $date_today14 ?>],[ 15,<?php echo $date_today15 ?>],[ 16,<?php echo $date_today16 ?>],[ 17,<?php echo $date_today17 ?>],[ 18,<?php echo $date_today18 ?>],[ 19,<?php echo $date_today19 ?>],[ 20,<?php echo $date_today20 ?>],[ 21,<?php echo $date_today21 ?>],[ 22,<?php echo $date_today22 ?>],[ 23,<?php echo $date_today23 ?>] 
]],
{
highlighter: {
show:true,
showMarker:true,
sizeAdjust:20,
tooltipLocation:'n',
tooltipAxes:'xy',
formatString:'%s:00<br />%dcm'
},
axes: {
xaxis: {
min: 0,max: 23,
numberTicks: 24,
tickOptions:{
formatString:"%d"
}
},

yaxis: {
tickOptions:{
showLabel:false,
},
min: <?php echo min($array_shio)-10 ?>,
max: <?php echo max($array_shio)+10 ?>,
}
},

grid:{background: '#f5f5f5'},
seriesDefaults: {
color:'#4C9ED9',
shadow:false,
fill:true,
fillAndStroke:true,
fillAlpha: 0.5,
}
});

//月間スタート
jQuery . jqplot('tidegraph-syu',
[[
["<?php echo date('Y-m-d') ?>",<?php echo $average[0] ?>],["<?php echo date('Y-m-d', strtotime('+1 day')) ?>",<?php echo $average[1] ?>],["<?php echo date('Y-m-d', strtotime('+2 day')) ?>",<?php echo $average[2] ?>],["<?php echo date('Y-m-d', strtotime('+3 day')) ?>",<?php echo $average[3] ?>],["<?php echo date('Y-m-d', strtotime('+4 day')) ?>",<?php echo $average[4] ?>],["<?php echo date('Y-m-d', strtotime('+5 day')) ?>",<?php echo $average[5] ?>],["<?php echo date('Y-m-d', strtotime('+6 day')) ?>",<?php echo $average[6] ?>],["<?php echo date('Y-m-d', strtotime('+7 day')) ?>",<?php echo $average[7] ?>],["<?php echo date('Y-m-d', strtotime('+8 day')) ?>",<?php echo $average[8] ?>],["<?php echo date('Y-m-d', strtotime('+9 day')) ?>",<?php echo $average[9] ?>],["<?php echo date('Y-m-d', strtotime('+10 day')) ?>",<?php echo $average[10] ?>],["<?php echo date('Y-m-d', strtotime('+11 day')) ?>",<?php echo $average[11] ?>],["<?php echo date('Y-m-d', strtotime('+12 day')) ?>",<?php echo $average[12] ?>],["<?php echo date('Y-m-d', strtotime('+13 day')) ?>",<?php echo $average[13] ?>],["<?php echo date('Y-m-d', strtotime('+14 day')) ?>",<?php echo $average[14] ?>],["<?php echo date('Y-m-d', strtotime('+15 day')) ?>",<?php echo $average[15] ?>],["<?php echo date('Y-m-d', strtotime('+16 day')) ?>",<?php echo $average[16] ?>],["<?php echo date('Y-m-d', strtotime('+17 day')) ?>",<?php echo $average[17] ?>],["<?php echo date('Y-m-d', strtotime('+18 day')) ?>",<?php echo $average[18] ?>],["<?php echo date('Y-m-d', strtotime('+19 day')) ?>",<?php echo $average[19] ?>],["<?php echo date('Y-m-d', strtotime('+20 day')) ?>",<?php echo $average[20] ?>],["<?php echo date('Y-m-d', strtotime('+21 day')) ?>",<?php echo $average[21] ?>],["<?php echo date('Y-m-d', strtotime('+22 day')) ?>",<?php echo $average[22] ?>],["<?php echo date('Y-m-d', strtotime('+23 day')) ?>",<?php echo $average[23] ?>],["<?php echo date('Y-m-d', strtotime('+24 day')) ?>",<?php echo $average[24] ?>],["<?php echo date('Y-m-d', strtotime('+25 day')) ?>",<?php echo $average[25] ?>],["<?php echo date('Y-m-d', strtotime('+26 day')) ?>",<?php echo $average[26] ?>],["<?php echo date('Y-m-d', strtotime('+27 day')) ?>",<?php echo $average[27] ?>],["<?php echo date('Y-m-d', strtotime('+28 day')) ?>",<?php echo $average[28] ?>],["<?php echo date('Y-m-d', strtotime('+29 day')) ?>",<?php echo $average[29] ?>],["<?php echo date('Y-m-d', strtotime('+30 day')) ?>",<?php echo $average[30] ?>]
]],

{
highlighter: {
show: true,
showMarker: true,
sizeAdjust: 15,
tooltipLocation: 'n',
tooltipAxes: 'xy',
formatString:'%s日<br />%dcm'
},

axes: {
xaxis: {
renderer:jQuery.jqplot.DateAxisRenderer,
min:'<?php echo date('Y-m-d') ?>',
max:'<?php echo date('Y-m-d', strtotime('+30 day')) ?>',
tickOptions:{
formatString: '%#d'
},
tickInterval: '<?php if( wp_is_mobile() ){echo 2;}else{echo 1;} ?> days',
},
yaxis: {
tickOptions:{showLabel:false},
min:<?php echo min($dye_average)-1 ?>,
max:<?php echo max($dye_average)+1 ?>,
}},
grid:{background: '#f5f5f5'},
seriesDefaults: {
color:'#4C9ED9',
shadow:false,
fill:true,
fillAndStroke:true,
fillAlpha: 0.5,
}
});
});
</script>
<?php
//月齢関係　保留中　※消すな
//if(get_option( 'moon_day' ) == date("Y")){
//echo get_option( 'moon_day' );
///*
if(get_option( 'moon_day' ) == date('Y') ){
//if(2019 == date('Y') ){
//echo '保存データ';
$moon_old = get_option( 'moon_data' );
$moon_data_old = get_option( 'moon_data_old' );
}else{
//echo '取得';
get_template_part( 'moon' );
}
?>
<div class="tide-level">
<h2 class="shio-tidegraph"><?php 

if(!isset($_POST['tide_data1'])):?>今日のタイドグラフ <time datetime="<?php echo date("Y-m-d") ?>"><?php echo date('n月d日').' '.$moon_old[$date_ds]?></time><?php echo ' 月齢：'.$moon_data_old[$date_ds]; ?>
<?php else:?>
<?php echo $tide_days_year.'年'.$tide_days_month.'月'.$tide_days_tide_day.'日'?> タイドグラフ <?php echo $moon_old[$date_ds].' 月齢：'.$moon_data_old[$date_ds]; ?>
<?php endif;?>
</h2>
<div class="tide-level-min">最低潮位:<?php echo min($array_shio)?>cm ／</div>
<div class="tide-level-max">最高潮位:<?php echo max($array_shio)?>cm </div>
</div>
<div id="tidegraph"></div>
<p class="graph-explanation">※グラフの縦軸は潮位、横軸は時間を示しています。</p>
<script>
//日付選択表示
$(function(){
<?php if(!isset($_POST['tide_data1'])):?>
var year = <?php echo date('Y')?>;var month = <?php echo date('n')?>;var day = <?php echo date('d')?>;
<?php else:?>
var year = <?php echo $tide_days_year?>;var month = <?php echo $tide_days_month?>;var day = <?php echo $tide_days_tide_day?>;
<?php endif;?>
//期間開始
<?php if(!isset($_POST['tide_data2'])):?>
var year1 = <?php echo date('Y')?>;var month1 = <?php echo date('n')?>;var day1 = <?php echo date('d')?>;
<?php else:?>
<?php
$tide_year_data1 = $_POST['tide_year_data1'];
$tide_month_data1 = $_POST['tide_month_data1'];
$tide_day_data1 = $_POST['tide_day_data1'];
$tide_year_data2 = $_POST['tide_year_data2'];
$tide_month_data2 = $_POST['tide_month_data2'];
$tide_day_data2 = $_POST['tide_day_data2'];
;?>
var year1 = <?php echo $tide_year_data1?>;var month1 = <?php echo $tide_month_data1;?>;var day1 = 
<?php echo $tide_day_data1;?>;
<?php endif;?>
//期間終了
<?php if(!isset($_POST['tide_data2'])):?>
var year2 = <?php echo date('Y', strtotime('+7 day'))?>;var month2 = <?php echo date('m', strtotime('+7 day'))?>;var day2 = <?php echo date('d', strtotime('+7 day'))?>;
<?php else:?>
var year2 = <?php echo $tide_year_data2;?>;var month2 = <?php echo $tide_month_data2;?>;var day2 = <?php echo $tide_day_data2;?>;
<?php endif;?>
var y_min = '<?php echo $min_year?>';
var y_max = '<?php echo $max_year?>';
for (var i = y_max; i >= y_min; i--) {if(i === year){$('#year').append('<option value="' + i + '" selected>' + i + '年</option>');} else {$('#year').append('<option value="' + i + '">' + i + '年</option>');};if(i === year1){$('#year_data1').append('<option value="' + i + '" selected>' + i + '年</option>');} else {$('#year_data1').append('<option value="' + i + '">' + i + '年</option>');};if(i === year2){$('#year_data2').append('<option value="' + i + '" selected>' + i + '年</option>');} else {$('#year_data2').append('<option value="' + i + '">' + i + '年</option>');}    
}
//1月～12月まで表示
for (var i = 1; i <= 12; i++) {if(i === month){$('#month').append('<option value="' + i + '" selected>' + i + '月</option>');} else {$('#month').append('<option value="' + i + '">' + i + '月</option>');};if(i === month1){$('#month_data1').append('<option value="' + i + '" selected>' + i + '月</option>');} else {$('#month_data1').append('<option value="' + i + '">' + i + '月</option>');};if(i === month2){$('#month_data2').append('<option value="' + i + '" selected>' + i + '月</option>');} else {$('#month_data2').append('<option value="' + i + '">' + i + '月</option>');};}

//1日～31日まで表示
for (var i = 1; i <= 31; i++) {if(i === day){$('#day').append('<option value="' + i + '" selected>' + i + '日</option>');} else {$('#day').append('<option value="' + i + '">' + i + '日</option>');};if(i === day1){$('#day_data1').append('<option value="' + i + '" selected>' + i + '日</option>');} else {$('#day_data1').append('<option value="' + i + '">' + i + '日</option>');};if(i === day2){$('#day_data2').append('<option value="' + i + '" selected>' + i + '日</option>');} else {$('#day_data2').append('<option value="' + i + '">' + i + '日</option>');}
}
// 年を選択ごとに日付を修正して表示
$('select#year').change(function(){leapYearCheck();});
$('select#year_data1').change(function(){leapYearCheck1();});
$('select#year_data2').change(function(){leapYearCheck2();});
// 月を選択ごとに日付を修正して表示
$('select#month').change(function(){leapYearCheck();});
$('select#month_data1').change(function(){leapYearCheck1();});
$('select#month_data2').change(function(){leapYearCheck2();});
});

// 閏年判定して日付を表示
function leapYearCheck(){$('#day').empty();var y = $("#year").val();var m = $("#month").val();if (2 == m && (0 == y % 400 || (0 == y % 4 && 0 != y % 100))) {var last = 29;} else {var last = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31)[m - 1];};for (var i = 1; i <= last; i++) {$('#day').append('<option value="' + i + '">' + i + '日</option>');}}
function leapYearCheck1(){$('#day_data1').empty();var y1 = $("#year_data1").val();var m1 = $("#month_data1").val();if (2 == m1 && (0 == y1 % 400 || (0 == y1 % 4 && 0 != y1 % 100))) {var last1 = 29;} else {var last1 = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31)[m1 - 1];};for (var i = 1; i <= last1; i++) {$('#day_data1').append('<option value="' + i + '">' + i + '日</option>');}}
function leapYearCheck2(){$('#day_data2').empty();var y2 = $("#year_data2").val();var m2 = $("#month_data2").val();if (2 == m2 && (0 == y2 % 400 || (0 == y2 % 4 && 0 != y2 % 100))) {var last2 = 29;} else {var last2 = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31)[m2 - 1];};for (var i = 1; i <= last2; i++) {$('#day_data2').append('<option value="' + i + '">' + i + '日</option>');}
}
-->
</script>
<div class="tide-level-select">
<form method="post">
<select id="year" name="tide_year"></select>
<select id="month" name="tide_month"></select>
<select id="day" name="tide_day"></select>
<input type="hidden" name="tide_data1" value="1">
<input type="submit" class="submit_btn" value="更新" />
</form>
</div>
<div class="tide-level-monthly">
<h2 class="shio-tidegraph">30日間のタイドグラフ (<?php echo date('n月d日').'～'.date('n月d日', strtotime('+30 day')) ?>)</h2>
<div class="tide-level-min">最低潮位:<?php echo min($dye_average)?>cm ／</div>
<div class="tide-level-max">最高潮位:<?php echo max($dye_average)?>cm </div>
</div>
<div id="tidegraph-syu"></div>
<p class="graph-explanation">※グラフの縦軸は潮位、横軸は日付を示しています。</p>
<p class="graph-explanation">※日別の平均潮位を示しています。</p>

<h2 class="tide-table"><?php if(!isset($_POST['tide_data2'])):?>
週間の潮位表 (<?php echo date('n月d日').'～'.date('n月d日', strtotime('+7 day')) ?>)
<?php else:?>
<?php echo $tide_year_data1.'年'.$tide_month_data1.'月'.$tide_day_data1 .'日～'.$tide_year_data2.'年'.$tide_month_data2.'月'.$tide_day_data2.'日' ?>の潮位表
<?php endif?></h2>
<?php
if(!isset($_POST['tide_data2'])){
//echo '送信データーなし';
$date_ds_loop = 7;
$date_ds = (strtotime(date("Y-m-d")) - strtotime($min_year.'-01-01')) / ( 60 * 60 * 24);
}else{
//echo '送信データーあり';
//選択された日付を今日より何日前か後かを計算
$date_ds_day = (strtotime($tide_year_data1.'-'.$tide_month_data1.'-'.$tide_day_data1) - strtotime(date('Y-m-d'))) / ( 60 * 60 * 24);
//選択された日付がプラスなら+を追加する※マイナスは自動で付くので処理は無し
if(0 <= $date_ds_day){$date_ds_day = '+'.$date_ds_day;}
//echo '<br />';
//選択された日付の開始日を計算
$date_ds = (strtotime($tide_year_data1.'-'.$tide_month_data1.'-'.$tide_day_data1) - strtotime($min_year.'-01-01')) / ( 60 * 60 * 24);
//echo '<br />';
//選択された日付の終了日を計算
$date_ds_end = (strtotime($tide_year_data2.'-'.$tide_month_data2.'-'.$tide_day_data2) - strtotime($min_year.'-01-01')) / ( 60 * 60 * 24);
//echo '<br />';
//開始日から終了日を計算してループ回数を出す
$date_ds_loop = $date_ds_end - $date_ds;
if($date_ds_loop <= 0){
echo 'エラー';
$date_error = '<div class="date_error">選択期間を確認してください</div> ';
}
}
echo '<table class="shio"><tr><td colspan="3" rowspan="2">日付</td><td colspan="4">満潮</td><td colspan="4">干潮</td><td rowspan="2">日の出</td><td rowspan="2">日の入</td></tr><tr><td>時刻</td><td>潮位</td><td>時刻</td><td>潮位</td><td>時刻</td><td>潮位</td><td>時刻</td><td>潮位</td></tr>';
for ($num = 0; $num <= $date_ds_loop; ++$num){
$date_d = $date_ds+$num;
//満潮1
if(substr($ularr[$date_d], 80, 2) !== '99'){
$mancho1 = '<td>'.substr($ularr[$date_d],  80, 2).':'.sprintf('%02d', substr($ularr[$date_d],  82, 2)).'</td><td>'.substr($ularr[$date_d],  84, 3).'</td>';
}else{$mancho1 = '<td></td><td></td>';};

//満潮2
if(substr($ularr[$date_d], 87, 2) !== '99'){
$mancho2 = '<td>'.substr($ularr[$date_d],  87, 2).':'.sprintf('%02d', substr($ularr[$date_d],  89, 2)).'</td><td>'.substr($ularr[$date_d],  91, 3).'</td>';
}else{$mancho2 = '<td></td><td></td>';};

//干潮1
if(substr($ularr[$date_d], 108, 2) !== '99'){
$kancho1 = '<td>'.substr($ularr[$date_d],  108, 2).':'.sprintf('%02d', substr($ularr[$date_d],  110, 2)).'</td><td>'.substr($ularr[$date_d],  112, 3).'</td>';
}else{$kancho1 = '<td></td><td></td>';};

//干潮2
if(substr($ularr[$date_d], 115, 2) !== '99'){
$kancho2 = '<td>'.substr($ularr[$date_d],  115, 2).':'.sprintf('%02d', substr($ularr[$date_d],  117, 2)).'</td><td>'.substr($ularr[$date_d],  119, 3).'</td>';
}else{$kancho2 = '<td></td><td></td>';};

echo '<tr><td colspan="3">'.date('n月d日', strtotime($date_ds_day+$num.' day')).' '.$moon_old[$date_ds+$num].'</td>'.$mancho1.$mancho2.$kancho1.$kancho2.'<td>'.date_sunrise($now-86400+($num*86400), SUNFUNCS_RET_STRING, $spot_data['latitude'], $spot_data['longitude']).'</td><td>'.date_sunset($now+($num*86400), SUNFUNCS_RET_STRING, $spot_data['latitude'], $spot_data['longitude']).'</td></tr>';}
echo '</table>';
echo $date_error;
;?>
<div class="shio-cyui">
<p>※表示される情報は航海の用に供するものではありません。航海用は必ず海上保安庁水路部発行の潮汐表を使用してください。</p>
<p>※日の出日の入・潮汐情報（満潮・干潮）は<?php the_title(); ?>の情報になります。</p>
<p>※潮位の単位はcmになります。</p>
</div>
<div class="tide-level-select">
<form method="post">
<select id="year_data1" name="tide_year_data1"></select>
<select id="month_data1" name="tide_month_data1"></select>
<select id="day_data1" name="tide_day_data1"></select>
<span>～</span>
<select id="year_data2" name="tide_year_data2"></select>
<select id="month_data2" name="tide_month_data2"></select>
<select id="day_data2" name="tide_day_data2"></select>
<input type="hidden" name="tide_data2" value="1">
<input type="submit" class="submit_btn" value="更新" />
</form>
</div>
<div style="margin:10px -6px -15px;">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- surf-life.blue　潮 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8581077115110557"
     data-ad-slot="4821087587"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<h2 class="tide-table"><?php the_title(); ?>エリアの地図</h2>
<div id="map_block">
<div id="map"></div>
<div id="map_b_right">
<div class="map_title_area">周辺施設を表示</div><p><input name="place_type" id="place_market" value="スーパーマーケット" type="checkbox"><label for="place_market" class="checkbox place_market"><span class="market_icon">スーパー</span></label></p><p><input name="place_type" id="place_conv" value="コンビニ" type="checkbox"><label for="place_conv" class="checkbox"><span class="convenience_icon">コンビニ</span></label></p><p><input name="place_type" id="place_shopping" value="ショッピングモール" type="checkbox"><label for="place_shopping" class="checkbox"><span class="shopping_icon">大型商業施設</span></label></p><p><input name="place_type" id="place_food" value="レストラン|食堂|飲食|カフェ|バー|寿司|亭|ステーキ|焼肉" type="checkbox"><label for="place_food" class="checkbox"><span class="food_icon">飲食店</span></label></p><p><input name="place_type" id="place_medicine" value="釣り具" type="checkbox"><label for="place_medicine" class="checkbox"><span class="lure_icon">釣り具</span></label></p><p><input name="place_type" id="place_school" value="潮干狩" type="checkbox"><label for="place_school" class="checkbox"><span class="kumade_icon">潮干狩り</span></label></p><p><input name="place_type" id="beach_resort" value="海水浴場|人工ビーチ" type="checkbox"><label for="beach_resort" class="checkbox"><span class="beach_icon">海水浴場・ビーチ</span></label></p>
</div>
</div>

<div id="map_block2">
<div id="map_load">Googleマップで確認</div>
</div>


<?php if($spot_data['shiohigari']){?>
<div class="sub_spot">■<?php echo the_title()?>エリアの潮干狩り<p><?php echo $spot_data['shiohigari']?></p></div>
<?php }?>
<?php if($spot_data['beach']){?>
<div class="sub_spot">■<?php echo the_title()?>エリアの海水浴場・ビーチ<p><?php echo $spot_data['beach']?></p></div>
<?php }?>
<!-- <div id="map_data"></div><br /><div id="map_data2"></div> -->
<h2 class="weather-aria"><?php echo $area =get_post_meta($post->ID,"area",true);?>エリアの週間天気</h2>
<?php

//echo $spot_data[weather_no];

//天気概要を取得　ライブドア
echo $livedoor = @simplexml_load_file('http://weather.livedoor.com/forecast/rss/area/'.$spot_data["livedoor_no"].'.xml');
$livedoor = json_encode($livedoor);$livedoor = json_decode($livedoor,TRUE);
//マルチバイトに対応uを入れる
echo '<div class="weather-live">'.$livedoor = preg_replace(array('/.*]/','!。[^。]*$!u'), array('','。'), $livedoor['channel']['description']).'</div>';

//通常天気スタート　drk7.jp
$weather = @simplexml_load_file("https://www.drk7.jp/weather/xml/$spot_data[weather_no].xml");
$weather = json_encode($weather);
$weather = json_decode($weather,TRUE);

if(!empty($weather['pref']['area']['@attributes'])){

//特殊エリア
$n_max = count($weather['pref']['area']['@attributes']);

for ($n_c = 0; $n_c < $n_max; $n_c++){
echo '<h3 class="weather-t">'.$weather['pref']['area']['@attributes']['id'].'</h3>';
echo '<table class="weather">';
$a_max = count($weather['pref']['area']['info']);
echo '<tr><td>日付</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
//print_r($weather['pref']['area']['info'][$a_c]['@attributes']['date']);
echo '<td class="weather-date">'.preg_replace('/20.*?\//', '', $weather['pref']['area']['info'][$a_c]['@attributes']['date']).'</td>';
}
echo '</tr>';
echo '<tr><td>天気</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
$weather_img = str_replace("http://www.drk7.jp/MT/images/MTWeather/", "", $weather['pref']['area']['info'][$a_c]['img']); 
echo '<td><img src="/img/weather2/'.$weather_img.'"><p class="weather_con1">'.$weather['pref']['area'][$n_c]['info'][$a_c]['weather_detail'].'</p></td>';
}
echo '</tr>';
echo '<tr><td>気温</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td><span class="weather-max">'.$weather['pref']['area']['info'][$a_c]['temperature']['range'][0].'</span>／<span class="weather-min">'.$weather['pref']['area']['info'][$a_c]['temperature']['range'][1].'</span></td>';
}
echo '</tr>';
echo '<tr><td>波の高さ</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
$weather_wave = str_replace(array('波　','　','メートル','．'), array('','','m','.'),$weather['pref']['area']['info'][$a_c]['wave']);
echo '<td class="weather-wave">'.$weather_wave.'</td>';
}
echo '</tr>';
echo '<tr><td><p class="weather_con2">降水確率</p>00-06</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td>'.$weather['pref']['area']['info'][$a_c]['rainfallchance']['period'][0].'%</td>';
}
echo '</tr>';
echo '<tr><td>06-12</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td>'.$weather['pref']['area']['info'][$a_c]['rainfallchance']['period'][1].'%</td>';
}
echo '</tr>';
echo '<tr><td>12-18</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td>'.$weather['pref']['area']['info'][$a_c]['rainfallchance']['period'][2].'%</td>';
}
echo '</tr>';
echo '<tr><td>18-24</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td>'.$weather['pref']['area']['info'][$a_c]['rainfallchance']['period'][3].'%</td>';
}
}
echo '</tr>';
echo '</table>';

}else{
//通常area
$n_max = count($weather['pref']['area']);
for ($n_c = 0; $n_c < $n_max; $n_c++){
echo '<h3 class="weather-t">'.$weather['pref']['area'][$n_c]['@attributes']['id'].'</h3>';
echo '<table class="weather">';
$a_max = count($weather['pref']['area'][$n_c]['info']);
echo '<tr><td>日付</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td class="weather-date">'.preg_replace('/20.*?\//', '', $weather['pref']['area'][$n_c]['info'][$a_c]['@attributes']['date']).'</td>';
}
echo '</tr>';
echo '<tr><td>天気</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
$weather_img = str_replace("http://www.drk7.jp/MT/images/MTWeather/", "", $weather['pref']['area'][$n_c]['info'][$a_c]['img']); 
echo '<td><img src="/img/weather2/'.$weather_img.'"><p class="weather_con1">'.$weather['pref']['area'][$n_c]['info'][$a_c]['weather_detail'].'</p></td>';
}
echo '</tr>';
echo '<tr><td>気温</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td><span class="weather-max">'.$weather['pref']['area'][$n_c]['info'][$a_c]['temperature']['range'][0].'</span>／<span class="weather-min">'.$weather['pref']['area'][$n_c]['info'][$a_c]['temperature']['range'][1].'</span></td>';
}
echo '</tr>';
echo '<tr><td>波の高さ</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
$weather_wave = str_replace(array('波　','　','メートル','．'), array('','','m','.'), $weather['pref']['area'][$n_c]['info'][$a_c]['wave']);
echo '<td class="weather-wave">'.$weather_wave.'</td>';
}
echo '</tr>';
echo '<tr><td><p class="weather_con2">降水確率</p>00-06</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td>'.$weather['pref']['area'][$n_c]['info'][$a_c]['rainfallchance']['period'][0].'%</td>';
}
echo '</tr>';
echo '<tr><td>06-12</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td>'.$weather['pref']['area'][$n_c]['info'][$a_c]['rainfallchance']['period'][1].'%</td>';
}
echo '</tr>';
echo '<tr><td>12-18</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td>'.$weather['pref']['area'][$n_c]['info'][$a_c]['rainfallchance']['period'][2].'%</td>';
}
echo '</tr>';
echo '<tr><td>18-24</td>';
for ($a_c = 0; $a_c < $a_max; $a_c++){
echo '<td>'.$weather['pref']['area'][$n_c]['info'][$a_c]['rainfallchance']['period'][3].'%</td>';
}
echo '</tr>';
echo '</table>';
}
}//print_r($weather['pref']['area']);
; ?>
<div style="margin:15px -6px -40px;">
<!-- surf-life.blue　潮の下部 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8581077115110557"
     data-ad-slot="2136048647"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<h3  class="weather-aria3"><?php echo $area;?>エリアから探す</h3>
<ul class="tide_list">
<?php $args = Array('post_type' => 'tide_level','posts_per_page' => -1,'meta_key' => 'area','meta_value' => $area,'post__not_in' => array($post->ID));$the_query = new WP_Query($args);if($the_query -> have_posts()):while($the_query -> have_posts()): $the_query -> the_post();
?><li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li><?php endwhile;endif;wp_reset_postdata();?>
</ul>
<div class="tide-table-aria"><a href="<?php echo home_url(); ?>/?page_id=528">他のエリアから探す</a></div>
</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- SNS -->
<?php if(!empty($original_site['single_sns'])){get_template_part( 'temp/sns' );}?>
<!-- PCサイト -->
<div class="tide-table-content">
<p>※<?php the_title();?>エリアの天気・潮位情報の提供は気象庁になります。</p>
<p>※掲載情報を利用したことにより、万が一損害が生じても責任を負いかねます。</p>
</div>
</div>
</div>
</div><!-- #content-single -->
<?php if ($original_site['column_s'] <= 2 ) : ?>
<!-- 2カラム -->
<div id="main-content<?php echo $original_site['column_s'];?>-sidebar"><?php get_sidebar();?></div>
<?php endif; ?>
</div><!-- #main-content -->
<?php 
//AIzaSyBkaU2cLYi2MlQ7SdD9-3qxgxLXxOCiEzs
//AIzaSyBGBEIbr7eE1-5_wvaky5xsttlyAe4cYas
//AIzaSyDzgJMVDw79c8lRLGvhkb4J_1VG9t7RgHA
//AIzaSyDobjdSSi2d-_SEiBqChqeuY03iwxinVg4
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDobjdSSi2d-_SEiBqChqeuY03iwxinVg4&libraries=places,geometry&v=3.26&"></script>
<script>
<!--
/* ページ読み込み時に地図を初期化 */
$(window).on('load',function(){


var disp_pc = $('#map_block').is(':visible');
var disp_sp = $('#map_block2').is(':visible');

if(!disp_sp && disp_pc){
map_start();
//console.log('PC_on'); 
}else{
//console.log('SP_on'); 
}



$('#map_block2').on('click', function() {	
$('#map_block').show();
map_start()
$('#map_block2').hide();
});	
	
	
function map_start() {
	
	
//チェックボックスをはずす
$('input[name="place_type"]').prop("checked",false);
var map, service, openFLG=[],overlays=[],iterator=0,current,latlng;
var place_cat = ['atm','bank','restaurant','cafe','food','bar','convenience_store','dentist','grocery_or_supermarket','hospital','liquor_store','post_office','school','veterinary_care','doctor','pharmacy','health','pet_store','department_store','shopping_mall'];

//var map_check = '';
var map_check = 1;
if(map_check){
//住所から検索
//GEO処理開始
var map_address ='<?php echo $spot_data['address'];?>';
var geocoder = new google.maps.Geocoder();
geocoder.geocode({'address': map_address,'region': 'jp'},function(results, status){
if(status==google.maps.GeocoderStatus.OK){latlng = new google.maps.LatLng(results[0].geometry.location.lat(),results[0].geometry.location.lng());initialize(latlng);
}//if status　
});
}else{
//緯度経度から検索
var b_lat ='<?php echo $spot_data['latitude'];?>';
var b_lng ='<?php echo $spot_data['longitude'];?>';
latlng = new google.maps.LatLng(b_lat,b_lng);
initialize(latlng);
}

$('[name="place_type"]').change(function(){
var place_check ='';
$('[name="place_type"]:checked').map(function(){
place_check += $(this).val()+'|';});
fGetPlaceInfo(place_check);
});
var openFLG=[],iterator=0;

//オーバーレイ全削除
function resetOverlay(deleteFLG){
if(overlays.length>0){for(i in overlays){overlays[i][1].close();if(deleteFLG==1){openFLG[i]=0;overlays[i][0].setMap(null);}}if(deleteFLG==1) overlays.length=0;if(deleteFLG==1) iterator=0;}
}

function initialize(latlng) {
map=new google.maps.Map(document.getElementById('map'), {
center: latlng,
zoom:10,
mapTypeId: google.maps.MapTypeId.ROADMAP,
scrollwheel: false /* スクロールホイールによる拡大・縮小無効化 */
});
var marker = new google.maps.Marker({position:latlng,icon: {url: "/img/mak.png" ,scaledSize: new google.maps.Size( 40, 40 )},map:map});
service=new google.maps.places.PlacesService(map);
fGetPlaceInfo();
}

function fGetPlaceInfo(place_check){
//console.log(place_check); 
if(place_check){
map.setCenter(latlng);
resetOverlay(1);
var request={
location: latlng,
radius:"20000",
//type:"convenience_store",//types: ['store'],//beach_resort natural_feature restaurant food 除外keyword: [ '海水浴場 -海の家' ]
keyword: [ place_check ]
};
service.search(request, callback);
}else{
resetOverlay(1);
}//type_arr
}//fGetPlaceInfo

function callback(results, status,pagination) {
//次のページ取得
if(pagination.hasNextPage){pagination.nextPage();}
if (status==google.maps.places.PlacesServiceStatus.OK && results.length>0){
for (var i=0; i<results.length; i++) {
if(!results[i]['name'].match(/（株）|株式|会社|（有）|(株)|サイドイン|ペンション|漁協|駐車場|ビーチセンター|海の家/i)){
for(var f=0; f < results[i].types.length; f++) {
if(place_cat.indexOf(results[i].types[f]) >= 0){
results[i]['img_name'] = results[i].types[f];
break;
}
}//for

if(!results[i]['img_name']){
if(results[i]['name'].match(/ファミリーマート|セブンイレブン|ローソン/)){
results[i]['img_name']= 'convenience_store';
}else if(results[i]['name'].match(/釣り|釣具|フィッシング|つり具|上州屋|キャスティング|釣道具|つり吉/)){
results[i]['img_name']= 'lure';
}else if(results[i]['name'].match(/潮干/)){
results[i]['img_name']= 'shiohi';
}else if(results[i]['name'].match(/ビーチ|海水浴/)){
results[i]['img_name']= 'beach';
}else if(results[i]['name'].match(/カフェ＆|＆カフェ|喫茶/)){
results[i]['img_name']= 'cafe';
}else if(results[i]['name'].match(/居酒屋|飲食店/)){
results[i]['img_name']= 'food';
}else{
//表示されないplace
console.log(results[i]['name']+results[i].types);
}
}
//画像ありのみ登録
if(results[i]['img_name']){var place=results[i];createMarker(results[i]);iterator++;}
}}}
}//callback

function createMarker(place) {
var placeLoc=place.geometry.location;
/* マーカー */
var marker=new google.maps.Marker({map: map,icon: {url: "/img/" + place.img_name + ".png" ,scaledSize: new google.maps.Size( 30, 30 ) ,},position: new google.maps.LatLng(placeLoc.lat(), placeLoc.lng())
});

//情報ウィンドウ
var infowindow=new google.maps.InfoWindow({
maxWidth:320,
maxHeight:1000
});
//ID、フラグセット
marker.set("id",iterator);
infowindow.set("id",iterator);
overlays.push([marker,infowindow]);

//情報ウィンドウの×ボタンと押した時
google.maps.event.addListener(infowindow,"closeclick",function(){
openFLG[infowindow.get("id")]=0;
});

//マーカークリックで情報ウィンドウを開閉
google.maps.event.addListener(marker, "click", function(){
var id=this.get("id");
//マップをクリックで情報ウィンドウを閉じる
google.maps.event.addListener(map, "click", function(){infowindow.close();openFLG[id]=0;});
if(current>=0 && current!=id){openFLG[current]=0;}
resetOverlay(0);
var s ="";
current=id;
var infowindow=overlays[id][1];
if(openFLG[id]!=1){
openFLG[id]=1;
var request = {placeId:place.place_id};
service.getDetails(request, function(place, status){
if(!place) return;
//dbg(place);
var s="";s+="<div class='map_out'>";if(place.photos && place.photos.length>=1){s+= "<div class='map_left'><img src='"+place.photos[0].getUrl({"maxWidth":100,"maxHeight":100})+"'></div><div class='map_right'>";}else{s+="<div class='map_main'>";};s+="<p class='map_name'>" + place.name + "</p>";s+= "<p class='map_text'>" + place.vicinity + "</p>";s+="</div></div>";/* 営業時間 */var tmp={};var d_count=1;var weeks;if(place.opening_hours){$.each(place.opening_hours.periods,function(x,openclose){var open=(openclose.open && openclose.open.time)?openclose.open.time:"";var close=(openclose.close && openclose.close.time)?openclose.close.time:"";if(!tmp[fChgWeek(openclose.open.nextDate)]){tmp[fChgWeek(openclose.open.nextDate)]=new Array();};tmp[fChgWeek(openclose.open.nextDate)].push([open,close]);});var tmpmax=aryCount(tmp);for(var i in tmp){if(d_count){if(!tmp[i][1]){d_count=3;}else if(tmp[i][3]){d_count=9;}else if(tmp[i][2]){d_count=7;}else if(tmp[i][1]){d_count=5;}s+="<table><tr><td class='info_title' colspan='"+d_count+"'>営業時間</td></tr>";};d_count=''; if(tmp[i]){for(var j in tmp[i]){if(tmp[i][j]){if(tmp[i][j][0]=="0000" && !tmp[i][j][1]){s+="<td colspan='3' class='info_time2'>24時間営業</td>";}else{if(tmp[i][j][0]){if(weeks !== week[i]){s+="<td class='info_periods'>"+week[i]+"</td>";};weeks = week[i];s+="<td colspan='2' class='info_time'>"+tmp[i][j][0].substring(0,2)+":"+tmp[i][j][0].substring(2,4)+"";};if(tmp[i][j][1]){if(tmp[i][j][0]) s+="～" + tmp[i][j][1].substring(0,2)+":"+tmp[i][j][1].substring(2,4)+"";};};};};};s+="</td></tr>";};s+="</table>";};/* クチコミ */if(place.reviews){var _s="";var rcnt=0;$.each(place.reviews,function(x,review){var author_name=(review.author_name)?review.author_name:"";var reviewtext=(review.text)?review.text:"";var reviewtime=(review.time)?fChgTime(review.time):"";if(reviewtext!=""){_s+="<li><p class='review_title'>"+author_name +"";_s+=(reviewtime)?"（"+reviewtime+"）</p>":"</p>";_s+="<p>"+reviewtext+"</p></li>";rcnt++;};});if(_s!=""){s+="<p><span  class='review_cnt'>"+rcnt+"</span>件の口コミがあります。<a href='"+place.url+"' target='_blank'>Google</a></p>";s+="<div class='review_comment'><ul>"+_s+"</ul></div>";};};infowindow.setContent("<div class='info_block'>"+s+"</div></div>");infowindow.open(map, marker);marker.setZIndex(9999);openFLG[id]=1;});}else{infowindow.close();openFLG[id]=0;};});};var week={"0":"日","1":"月","2":"火","3":"水","4":"木","5":"金","6":"土"};/*連想配列カウント*/function aryCount(ary){var i=0;for(key in ary ){ i++;};return i;};/*曜日取得*/function fGetWeek(){var d=new Date();return d.getDay();};/*日付文字列に変換*/function fChgTime(EpochSec){var d=new Date();d.setTime(EpochSec*1000);var year=d.getFullYear();var month=d.getMonth()+1;var day=d.getDate();return year+"-"+month+"-"+day;};/*曜日に変換*/function fChgWeek(EpochSec){var d=new Date();d.setTime(EpochSec);return d.getDay();};function dbg(str){try{if(window.console && console.log){/*console.log(str)*/};}catch(err){/*console.log("error:"+err)*/}}


}//map_start関数



});//$(window).on
// -->
</script>
<?php get_footer();?>