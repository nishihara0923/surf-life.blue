$(function(){
var $script = $('#script');
var _catline = $script.attr('cat-bot');
$("[class^=accordion] li ul").parent().addClass('has-sub');
$("[class^=accordion] .has-sub").prepend('<span class="icon-plus"></span>');

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
var widthwindow2 = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
//スマホ版
$('.site-logo-t,.site-logo').before('<span class="icon-menu"></span>')

});

//横幅のサイズが変更した場合
var windowWidths = $(window).width();
$(window).on('resize',function(){
var wws = $(window).width();
if(windowWidths != wws) {
pcclick = false;pcclick3 = false;pcclick4 = false;pcclick5 = false;pcclick6 = false;pcclick7 = false;
var widthwindow = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;



//スマホ版
$('[class^=accordion] .icon-minus,[class^=categories] .icon-minus').toggleClass("icon-minus");
$('.icon-menu').remove();
$('.icon-cross').remove();
$

('.site-logo-t,.site-logo').before('<span class="icon-menu"></span>');
$('.categories').removeAttr('style');
$('[class^=accordion]').removeAttr('style');
$("[class^=accordion] span:first").css({"border-right":"none"});
$("#header-rights").show();
$("[class^=accordion]").show();
$("[class^=accordion] ul").show();



$('.accordion .has-sub a:nth-child(2)').each(function(z) {
//z = z +1
$(".accordion .icon-plus:eq(" + z + ")").css({height: $(this).height()+30,lineHeight: $(this).height()+30+"px"});

//console.log( $(this).height()+30+'固定')
//console.log( $(this).text())
});


$('.accordion3 .has-sub a:nth-child(2)').each(function(k) {
$(".accordion3 .icon-plus:eq(" + k + ")").css({height: $(this).height()+30,lineHeight: $(this).height()+30+"px"});
});
$('.accordion4 .has-sub a:nth-child(2)').each(function(k) {
$(".accordion4 .icon-plus:eq(" + k + ")").css({height: $(this).height()+30,lineHeight: $(this).height()+30+"px"});
});
$('.accordion5 .has-sub a:nth-child(2)').each(function(k) {
$(".accordion5 .icon-plus:eq(" + k + ")").css({height: $(this).height()+30,lineHeight: $(this).height()+30+"px"});
});
$('.accordion6 .has-sub a:nth-child(2)').each(function(k) {
$(".accordion6 .icon-plus:eq(" + k + ")").css({height: $(this).height()+30,lineHeight: $(this).height()+30+"px"});
});

/*閉じる高さを調べる*/
$("[class^=accordion]").hide();
$("[class^=accordion] ul").hide();
$("#header-rights").hide();
}
windowWidths = wws;

});

//カテゴリスライド　PC
var pcclick = false;
$(".categories2,.categories2 a,.categories2 .icon-plus").on('click', function() {

//console.log(pcclick);


if (pcclick == false) {


$(".accordion").show();
$(".accordion ul").show();
var widthwindow2 = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
$('.accordion .has-sub a:nth-child(2)').each(function(z) {
z = z +1
$(".icon-plus:eq(" + z + ")").css({height: $(this).height()+20,lineHeight: $(this).height()+20+"px"});
});

//閉じる高さを調べる
$(".accordion ul").hide();
$(".accordion").hide();
}
//console.log(pcclick);
pcclick = true;
$('.accordion3,.accordion4,.accordion5,.accordion6').hide();



$('.categories3 .icon-minus,.categories4 .icon-minus,.categories5 .icon-minus,.categories6 .icon-minus').toggleClass("icon-minus");

$('.accordion').toggle();
$('.categories2 .icon-plus').toggleClass("icon-minus");








return false;
});


//カテゴリ3スライド　PC
var pcclick3 = false;
$(".categories3,.categories3 a,.categories3 .icon-plus").on('click', function() {

if (pcclick3 == false) {
$(".accordion3").show();
$(".accordion3 ul").show();
var widthwindow3 = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

$('.accordion3 .has-sub a:nth-child(2)').each(function(k) {
//k = k +1
$(".accordion3 .icon-plus:eq(" + k + ")").css({height: $(this).height()+20,lineHeight: $(this).height()+20+"px"});
//console.log( $(this).text())
//console.log( $(this).height()+30+'固定')
});

//閉じる高さを調べる
$(".accordion3 ul").hide();
$(".accordion3").hide();
}
pcclick3 = true;

$('.accordion,.accordion4,.accordion5,.accordion6').hide();
$('.categories2 .icon-minus,.categories4 .icon-minus,.categories5 .icon-minus,.categories6 .icon-minus').toggleClass("icon-minus");

$('.accordion3').toggle();
$('.categories3 .icon-plus').toggleClass("icon-minus");

return false;
});

//カテゴリ4スライド　PC
var pcclick4 = false;
$(".categories4,.categories4 a,.categories4 .icon-plus").on('click', function() {
if (pcclick4 == false) {
$(".accordion4").show();
$(".accordion4 ul").show();
var widthwindow4 = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
$('.accordion4 .has-sub a:nth-child(2)').each(function(k) {
//k = k +1
$(".accordion4 .icon-plus:eq(" + k + ")").css({height: $(this).height()+20,lineHeight: $(this).height()+20+"px"});
//console.log( $(this).text())
//console.log( $(this).height()+30+'固定')
});

//閉じる高さを調べる
$(".accordion4 ul").hide();
$(".accordion4").hide();
}
pcclick4 = true;
$('.accordion3,.accordion,.accordion5,.accordion6').hide();
$('.categories3 .icon-minus,.categories2 .icon-minus,.categories5 .icon-minus,.categories6 .icon-minus').toggleClass("icon-minus");





$('.accordion4').toggle();
$('.categories4 .icon-plus').toggleClass("icon-minus");
return false;
});
//カテゴリ5スライド　PC
var pcclick5 = false;
$(".categories5,.categories5 a,.categories5 .icon-plus").on('click', function() {

if (pcclick5 == false) {
$(".accordion5").show();

$(".accordion5 ul").show();
var widthwindow5 = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
$('.accordion5 .has-sub a:nth-child(2)').each(function(k) {
//k = k +1
$(".accordion5 .icon-plus:eq(" + k + ")").css({height: $(this).height()+20,lineHeight: $(this).height()+20+"px"});
//console.log( $(this).text())
//console.log( $(this).height()+30+'固定')
});

//閉じる高さを調べる
$(".accordion5 ul").hide();
$(".accordion5").hide();
}
pcclick5 = true;
$('.accordion3,.accordion4,.accordion,.accordion6').hide();
$('.categories3 .icon-minus,.categories4 .icon-minus,.categories2 .icon-minus,.categories6 .icon-minus').toggleClass("icon-minus");



$('.accordion5').toggle();
$('.categories5 .icon-plus').toggleClass("icon-minus");
return false;
});
//カテゴリ6スライド　PC
var pcclick6 = false;
$(".categories6,.categories6 a,.categories6 .icon-plus").on('click', function() {
if (pcclick6 == false) {
$(".accordion6").show();
$(".accordion6 ul").show();
var widthwindow6 = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
$('.accordion6 .has-sub a:nth-child(2)').each(function(k) {
//k = k +1
$(".accordion6 .icon-plus:eq(" + k + ")").css({height: $(this).height()+20,lineHeight: $(this).height()+20+"px"});
//console.log( $(this).text())
//console.log( $(this).height()+30+'固定')
});

//閉じる高さを調べる
$(".accordion6 ul").hide();
$(".accordion6").hide();
}
pcclick6 = true;
$('.accordion3,.accordion4,.accordion5,.accordion').hide();
$('.categories3 .icon-minus,.categories4 .icon-minus,.categories5 .icon-minus,.categories2 .icon-minus').toggleClass("icon-minus");



$('.accordion6').toggle();
$('.categories6 .icon-plus').toggleClass("icon-minus");
return false;
});



/*カテゴリーのスライド*/
$("[class^=accordion] .icon-plus").on('click', function() {
$(this).siblings('ul').toggle();
$(this).toggleClass("icon-minus");
return false;
});






}) 