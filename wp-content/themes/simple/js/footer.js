$(document).ready(function() {
//コメント・トラックバック
$("#tab li").click(function() {
var num = $("#tab li").index(this);
$(".content_wrap").addClass('disnon');
$(".content_wrap").eq(num).removeClass('disnon');
$("#tab li").removeClass('select');
$("#tab li").addClass('no_select');
$(this).removeClass('no_select');
$(this).addClass('select')
});
if($(this).scrollTop() > 2){$("div.header-title-color").css({display:"none"});};
//ページトップへ
var pagetop = $('#page-top');
$(window).scroll(function () {
if ($(this).scrollTop() > 2){$("div.header-title-color").css({display:"none"});}else{$("div.header-title-color").css({display:"block"});};
if ($(this).scrollTop() > 100){pagetop.fadeIn();} else {pagetop.fadeOut();}});
pagetop.click(function () {
$('body, html').animate({ scrollTop: 0 }, 500,'swing');
return false;
});
//フッターエリアの幅
mainresize();
});

//フッターエリアの幅
var windowWidths = $(window).width();
$(window).on('resize',function(){
var f_wws = $(window).width();
if(windowWidths != f_wws) {
mainresize();
windowWidths = f_wws;
}
});

function mainresize() {
//フッターエリアの幅	
var footer_width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
if (footer_width >= 771) {
var keisan = 0;
keisan = ( 100 / $(".site-info-area").length)-2.1;
$(".site-info-area").css({width: keisan + '%'});
}else{
$('.site-info-area').removeAttr('style');
}
}