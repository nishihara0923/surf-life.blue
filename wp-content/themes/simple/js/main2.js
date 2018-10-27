$(function(){
var $script = $('#script');
var _catline = $script.attr('cat-bot');
var width_window_load = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
$("[class^=accordion] li ul").parent().addClass('has-sub');
$("[class^=accordion] .has-sub").children("a").addClass('has-sub2');
$("[class^=accordion] .children").before('<span class="icon-plus"></span>');

//クリック後計算　スマホ
$(document).on('click','.icon-menu',function(){
$('#header-rights').toggle();
$(this).toggleClass("icon-cross")
$(".categories2 .icon-plus").css({height: $(".categories2").height(),lineHeight: $(".categories2").height()+"px"});
$(".categories3 .icon-plus").css({height: $(".categories3").height(),lineHeight: $(".categories3").height()+"px"});
$(".categories4 .icon-plus").css({height: $(".categories4").height(),lineHeight: $(".categories4").height()+"px"});
$(".categories5 .icon-plus").css({height: $(".categories5").height(),lineHeight: $(".categories5").height()+"px"});
$(".categories6 .icon-plus").css({height: $(".categories6").height(),lineHeight: $(".categories6").height()+"px"});
});


//ロードした場合
$(window).on('load', function(){

if (window.navigator.appVersion.toLowerCase().indexOf("msie 7") != -1 || window.navigator.appVersion.toLowerCase().indexOf("msie 8") != -1) {
if (width_window_load <= 771) {
//スマホ版
$(".categories:first").css({"border-top":"1px solid "+ _catline});
$(".categories").css({"border-bottom":"1px solid "+ _catline});
}}});

//横幅のサイズが変更した場合
var windowWidths = $(window).width();
$(window).on('resize',function(){
var wws = $(window).width();
if(windowWidths != wws) {
var widthwindow_resize = document.documentElement.clientWidth || window.innerWidth || document.body.clientWidth;
if (widthwindow_resize >= 771) {
//PC版

$('[class^=accordion] .icon-minus,[class^=categories] .icon-minus').toggleClass("icon-minus");

$('[class^=accordion]').hide();

$("#header-rights").show();


if (window.navigator.appVersion.toLowerCase().indexOf("msie 7") != -1) {
$('.categories').removeAttr('style');

} else if (window.navigator.appVersion.toLowerCase().indexOf("msie 8") != -1) {
$('.categories').removeAttr('style');

}

//cat_accordion();
//$('[class^=accordion]').removeAttr('style');
//$('[class^=accordion]').removeAttr('style');

}else{
//スマホ版
$("#header-rights").hide();
$('[class^=accordion]').removeAttr('style');

$('[class^=accordion] .icon-minus,[class^=categories] .icon-minus').toggleClass("icon-minus");
$('#header-area .icon-cross').toggleClass("icon-cross");

if (window.navigator.appVersion.toLowerCase().indexOf("msie 7") != -1 || window.navigator.appVersion.toLowerCase().indexOf("msie 8") != -1) {
$('.categories').removeAttr('style');
$(".categories:first").css({"border-top":"1px solid "+ _catline,"border-right":"none"});
$(".categories").css({"border-bottom":"1px solid "+ _catline});
}

}
windowWidths = wws;
}
});
/*横幅のサイズが変更した場合終了*/



//カテゴリスライド　PC

$(".categories2").on('click', function() {
$('.accordion .icon-minus').toggleClass("icon-minus");
$(".accordion ul").hide();
$('.accordion3,.accordion4,.accordion5,.accordion6').hide();
$('.categories3 .icon-minus,.categories4 .icon-minus,.categories5 .icon-minus,.categories6 .icon-minus').toggleClass("icon-minus");
$('.accordion').toggle();
$('.categories2 .icon-plus').toggleClass("icon-minus");
});


//カテゴリ3スライド　PC
$(".categories3").on('click', function() {
$('.accordion3 .icon-minus').toggleClass("icon-minus");
$(".accordion3 ul").hide();
$('.accordion,.accordion4,.accordion5,.accordion6').hide();
$('.categories2 .icon-minus,.categories4 .icon-minus,.categories5 .icon-minus,.categories6 .icon-minus').toggleClass("icon-minus");
$('.accordion3').toggle();
$('.categories3 .icon-plus').toggleClass("icon-minus");
});

//カテゴリ4スライド　PC
$(".categories4").on('click', function() {
$('.accordion4 .icon-minus').toggleClass("icon-minus");
$(".accordion4 ul").hide();
$('.accordion3,.accordion,.accordion5,.accordion6').hide();
$('.categories3 .icon-minus,.categories2 .icon-minus,.categories5 .icon-minus,.categories6 .icon-minus').toggleClass("icon-minus");
$('.accordion4').toggle();
$('.categories4 .icon-plus').toggleClass("icon-minus");
});

//カテゴリ5スライド　PC
$(".categories5").on('click', function() {
$('.accordion5 .icon-minus').toggleClass("icon-minus");
$(".accordion5 ul").hide();
$('.accordion3,.accordion4,.accordion,.accordion6').hide();
$('.categories3 .icon-minus,.categories4 .icon-minus,.categories2 .icon-minus,.categories6 .icon-minus').toggleClass("icon-minus");
$('.accordion5').toggle();
$('.categories5 .icon-plus').toggleClass("icon-minus");
});

//カテゴリ6スライド　PC
$(".categories6").on('click', function() {
$('.accordion6 .icon-minus').toggleClass("icon-minus");
$(".accordion6 ul").hide();
$('.accordion3,.accordion4,.accordion5,.accordion').hide();
$('.categories3 .icon-minus,.categories4 .icon-minus,.categories5 .icon-minus,.categories2 .icon-minus').toggleClass("icon-minus");
$('.accordion6').toggle();
$('.categories6 .icon-plus').toggleClass("icon-minus");
});


/*カテゴリーのスライド*/
$("[class^=accordion] .icon-plus").on('click', function() {
$(this).siblings('ul').toggle();
$(this).toggleClass("icon-minus");
return false;
});

//エリア外をクリックで閉じる
$(document).on('click', function(evt){
if( !$(evt.target).closest('[class^=accordion],.categories').length ){
$('[class^=accordion]').hide();
$('[class^=accordion] .children').hide();
$('[class^=categories] .icon-minus').toggleClass("icon-minus");
}
});

/*
function  cat_accordion(){
$(".categories .accordion").css({width: $(".categories2").width()});
$(".categories .accordion3").css({width: $(".categories3").width()});
$(".categories .accordion4").css({width: $(".categories4").width()});
$(".categories .accordion5").css({width: $(".categories5").width()});
$(".categories .accordion6").css({width: $(".categories6").width()});
};

function ie_margin_l() {
$(".categories .accordion").css({marginLeft: - $(".categories2").width() / 2 + "px"});
$(".categories .accordion3").css({marginLeft: - $(".categories3").width() / 2 + "px"});
$(".categories .accordion4").css({marginLeft: - $(".categories4").width() / 2 + "px"});
$(".categories .accordion5").css({marginLeft: - $(".categories5").width() / 2 + "px"});
$(".categories .accordion6").css({marginLeft: - $(".categories6").width() / 2 + "px"});
};
*/

//console.log( $(this).height()+30+'固定')
//console.log( $(this).text())

}) 