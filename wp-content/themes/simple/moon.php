<?php

/**
 *  MoonAge : moon age calculator class by php5
 *  月齢計算 クラス by php5
 *  @see <a href="http://news.local-group.jp/moonage/moonage.js.txt">ユリウス通日から月齢計算式(C)opyright 1998 福原直人</a> をphpへ移植
 *  @auther original by 福原直人
 *  @auther to php by miz : 2008-09-20
 *  万年対応：一応現在のグレゴリオ暦（１５８２年１０月１５日以降）対応
 *  １５８２年は途中からなので、実際は、1583年１月以降対応
 *   @version 2008-09-20 : v1 : カレンダー関数やpearなどを使わず、ごりごりとコーディングしてみる
 *   @version 2009-07-26 : v1.1: 計算開始年データは、const 定数にする
 *   @version 2010-02-07 : v2 : 入力値のvalidate , phpdocumentor に沿ったcomment を付けてみる。
*/

date_default_timezone_set('Asia/Tokyo'); //  date() を利用する時(strict modeで必須);
//  このクラス内では使ってないが、外部呼び出し時には本日日付の取得が行われることがほとんどなので、ここで宣言しておく。

class MoonAge {
static private  $debug_flag=0;	//  すべてstatic method なので、field もstatic
static function  set_debug($debug){
	self::$debug_flag = $debug;
	//  self::$debug_flag  static field の呼び出し
}

/**
 *  min_year : このプラグラムの対応開始年 1583
 *    グレゴリオ暦（１５８２年１０月１５日以降）に基づく
 *  @access const
*/
const  min_year = 1583;
//const  min_year = 2017;


//  min_year  をprivate 変数にしていた名残
static function getMinYear(){
return self::min_year;
}
/**
 *  getInfo : このクラスの説明
*/
static function getInfo($style=''){
	return "<p $style > グレゴリオ暦 " .self::min_year. '年以降対応 月齢計算 オブジェクト'
		."\n<br>from http://news.local-group.jp/moonage/moonage.js.txt"
		."\n<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (C)opyright 1998 福原直人&copy;"
		."\n<br> to php by miz</p>\n";
}

/**
 *  checkYearMonthDay : 実際のグレゴリオ暦日に変換
 *  @param  $year  : >1582, 西暦年
 *  @param  $month : 実月名数指定, 1-12 : これより大きかったり小さければ、年を増減して調整
 *  @param  $day   : 日付 1-31 : これより大きかったり小さければ、月を増減して調整
 *    不正データの時false
 *  @return array($the_year, $the_month, $the_day); 実際のグレゴリオ暦日
*/
static function  checkYearMonthDay( $year,$month,$day ){
	if( self::$debug_flag ){
	print "<div >input : $year/$month/$day  </div>\n" ;
	}
	if( !is_int($year) or !is_int($month) or !is_int($day) ){
		return false;	// どれかが不適切ならfalse
	}

	$the_year = (int)$year;
	$the_month = (int)$month;	//  $the_month実月名の数とする
		while( $the_month >12 ){ $the_year ++; $the_month -= 12;}
		while( $the_month <1  ){ $the_year --; $the_month += 12;}
	$the_day = (int)$day;
		while( $the_day <1  ){
			$the_month --;
			if( $the_month <1  ){ $the_year --; $the_month += 12;}
			$last =  self::getLastDate($the_year, $the_month);
			$the_day += $last;
		}
		while( $the_day > ($last= self::getLastDate($the_year, $the_month)) ){
			$the_day -= $last; $the_month ++;
			if(  $the_month >12 ){ $the_year ++; $the_month -= 12;}
		}

	if( self::$debug_flag ){
	print "<div >:real $the_year/$the_month/$the_day :</div>\n" ;
	}

	if(  self::min_year > $the_year){
		return false;
	}

	return array($the_year, $the_month, $the_day);
}

/*
 *  getLastDate : 月間の日数を求める
 *  @access private
 *  @param  $lyear  : >1582, 西暦年
 *  @param  $lmonth : 実月名数指定, 1-12
 *    不適切データはチェック済みとする。checkYearMonthDayからの呼び出し用にてエラーチェック無し
*/
static private function  getLastDate($lyear, $lmonth){
	$mdays = array(1=>31, 28,31,30,31,30,31,31,30,31,30,31);
	if( (($lyear % 400)==0) || ( (($lyear % 4)==0 ) && (($lyear % 100)!=0 ) )  ){
		$mdays[2] = 29;
	}
	return $mdays[ $lmonth ];
}

/**
 *  getMoonAgeReal : 月齢を求める。グレゴリオ暦日が正しいかのチェック付き
 *  @access public
 *  @param  $year  : >1582, 西暦年
 *  @param  $month : 実月名数指定, 1-12
 *  @param  $day   : 日付 1-31
 *  @param  $hour  : 時刻 0-23 GMTで指定, 省略可能、default GMT9=日本時間18時
 *    $year,$mon,$day が不適切データの時false
 *  @return array($moon_age, $julius, $ryear,$rmon,$rday, $hour); 正しいグレゴリオ暦日も返す
*/
static function getMoonAgeReal($year,$mon,$day, $hour=9){
	$jymd =  self::getJulian( $year,$mon,$day );
	if(! $jymd ){	return false;	}
	list($julian,$ryear,$rmon,$rday) = $jymd;

	$julius = $julian+ $hour/24.0;
//  GMT0時のJulian day + 9(h)/24(h/day)
	$new_moon = self::getNewMoon($julius);

	if( self::$debug_flag ){
	print "<div >input $year/$mon/$day :real $ryear/$rmon/$rday :moon hour $hour GMT :julianday $julius, last new $new_moon</div>\n" ;
	}
//  getNewMoonは新月直前の日を与えるとうまく計算できないのでその対処
//  (一日前の日付で再計算してみる)
	if ($new_moon > $julius) {
		if( self::$debug_flag ){
		print "<div  >新月直前  $ryear / $rmon / $rday :julian $julius: new moon $new_moon →再計算</div>\n";
		}
		$new_moon = self::getNewMoon($julius - 1.0);
	}
	$age = $julius - $new_moon;
	return array($age, $julius, $ryear,$rmon,$rday, $hour);
}

/*
###   ***  以下は拝借関数  ***
###    月齢計算 version 2.3                for JavaScript 1.1
###                                        (C)opyright 1998 福原直人
###  http://news.local-group.jp/moonage/moonage.js.txt
###  to php by miz : 2008/09/20
*/
/**
 *   getNewMoon : 新月日計算
 *   @param  $julian : ユリウス通日
 *   @return double : 与えられたユリウス通日に対する直前の新月日(ユリウス日)
*/
static function  getNewMoon($julian){
 $k     = floor(($julian - 2451550.09765) / 29.530589);
 $t     = $k / 1236.85;
 $nmoon = 2451550.09765
            + 29.530589  * $k
            +  0.0001337 * $t * $t
            -  0.40720   * sin((201.5643 + 385.8169 * $k) * 0.017453292519943)
            +  0.17241   * sin((2.5534 +  29.1054 * $k) * 0.017453292519943);
  return $nmoon;  //  julian - nmoonが現在時刻の月齢
}

/**
 *  getJulian : ユリウス通日計算
 *    php には、カレンダー関数というのもあるが、関数利用が有効になってないサーバーもあるので自前計算する。
 *  @param  $year  : >1582, 西暦年
 *  @param  $month : 実月名数指定, 1-12
 *  @param  $day   : 日付 1-31
 *    →万年対策のためグレゴリオ暦の修正ユリウス日(MJD,正午基準)から算出（1583年以降対応のみ）
 *  @return  array( double : ユリウス通日(浮動小数点数)世界標準時午前０時＝日本時間am９時, ryear, rmonth , rday )
      年月日がグレゴリオ暦日に相当するかチェック、正しく計算し直したグレゴリオ暦日も配列に入れて返す。
      グレゴリオ暦日に非該当時は、false.
*/
static function  getJulian($year,$mon,$day){
	$ymd =  self::checkYearMonthDay( $year,$mon,$day );
	if(! $ymd ){	return false;	}
	list($y,$m,$d) = $ymd;
	if( $m < 3 ){ $y--; $m += 12;  }	// ユリウス計算用、２月までを前年とする
	$julian = floor($y* 365.25 ) + floor( $y / 400 ) -  floor( $y / 100 ) 
		+ floor( 30.59* ( $m - 2 ) ) + $d - 678912 +2400000.5;
//  修正ユリウス日(MJD,正午基準)+2400000.5 = ユリウス通日　世界標準時午前０時＝日本時間am９時
	return array( $julian , $ymd[0],$ymd[1],$ymd[2]);
}

//  class end
}
//  file end
?>

<?php
/*
#  月齢計算  by php,  for ssi
*/
global $moon_old;
global $moon_data_old;
global $min_total;

//毎年更新する際はMAX値を確認
for ($moon_avl = 0; $moon_avl < 3300; $moon_avl++){
//$y = 2016;
//$y = (int)date("Y");
$y = (int)$min_total;

$m = 1;
$d = 1+$moon_avl;
$jh= 12;$gh= $jh-9;    
list($age, $julius, $ryear,$rmon,$rday, $ghour) = MoonAge::getMoonAgeReal($y,$m,$d, $gh);

$moon_old_data =  round(floor($age * 100) /100,1) ;

//潮回り
if($moon_old_data < 2.5){
$tide_old ='大潮';
}elseif($moon_old_data < 6.5){
$tide_old ='中潮';
}elseif($moon_old_data < 9.5){
$tide_old ='小潮';
}elseif($moon_old_data < 10.5){
$tide_old ='長潮';
}elseif($moon_old_data < 11.5){
$tide_old ='若潮';
}elseif($moon_old_data < 13.5){
$tide_old ='中潮';
}elseif($moon_old_data < 17.5){
$tide_old ='大潮';
}elseif($moon_old_data < 21.5){
$tide_old ='中潮';
}elseif($moon_old_data < 24.5){
$tide_old ='小潮';
}elseif($moon_old_data < 25.5){
$tide_old ='長潮';
}elseif($moon_old_data < 26.5){
$tide_old ='若潮';
}elseif($moon_old_data < 28.5){
$tide_old ='中潮';
}else{                        
$tide_old ='大潮';
}

$moon_old[] = $tide_old;
$moon_data_old[] = $moon_old_data;

}
/*
//  本日の日付
$y = (int)date('Y');
$m = (int)date('n');
$d = (int)date('j')+30;
$jh= 12;$gh= $jh-9;    
list($age, $julius, $ryear,$rmon,$rday, $ghour) = MoonAge::getMoonAgeReal($y,$m,$d, $gh);
$moon_age =  floor($age * 100) /100 ;    ###  小数第２位まで
print "<p >$ryear 年 $rmon 月 $rday 日  $ghour 時(GMT): 日本時間 $jh 時 の月齢 : $age 日</p>\n";
*/
//echo  '<br />';
//echo $moon_old;
//echo date('Y-m-d');
update_option( 'moon_day', date('Y') );

update_option( 'moon_data', $moon_old );
update_option( 'moon_data_old', $moon_data_old);

//update_option( 'moon_data', '');
//update_option( 'moon_data_old', '');

?>