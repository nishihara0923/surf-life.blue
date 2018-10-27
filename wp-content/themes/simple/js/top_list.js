/**
 * Flatten height same as the highest element for each row.
 *
 * Copyright (c) 2011 Hayato Takenaka
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * @author: Hayato Takenaka (https://github.com/urin/jquery.tile.js)
 * @version: 1.1.1
 **/
(function($) {$.fn.tile = function(columns) {var tiles, $tile, max, c, h, remove, s = document.body.style, a = ["height"],last = this.length - 1;if(!columns) columns = this.length;remove = s.removeProperty ? s.removeProperty : s.removeAttribute;return this.each(function() {remove.apply(this.style, a);}).each(function(i) {c = i % columns;if(c == 0) tiles = [];$tile = tiles[c] = $(this);h = ($tile.css("box-sizing") == "border-box") ? $tile.outerHeight() : $tile.innerHeight();if(c == 0 || h > max) max = h;if(i == last || c == columns - 1) {$.each(tiles, function() { this.css("height", max); });};});};})(jQuery);

$(function(){
$(window).load(function(){func_top(); });
var timer = false;var winWidth = $(window).width();var winWidth_resized;
$(window).resize(function() {
if (timer !== false) {clearTimeout(timer);}
timer = setTimeout(function() {
winWidth_resized = $(window).width();
if ( winWidth != winWidth_resized ) {
func_top();
winWidth = $(window).width();}},200);
});

function func_top() {
var widthwindow_top = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
if (widthwindow_top >= 601) {
//console.log('601エリア')
$('.related2').tile(2);$('.related5').tile(4);$('.home4-main-sub').tile(4);$('.home1-main-sub').tile(4);$('.home2-main-sub').tile(2);
} else if (widthwindow_top >= 416){
//console.log('416エリア')
$('.home4-main-sub').tile(2);
$('.home2-main-sub').tile(2);
$('.home1-main-sub').tile(2);
$('.related5').tile(4);
$('.related2').tile(2);
} else {
//console.log('etcエリア')
$('.related2').removeAttr('style');$('.related5').removeAttr('style');$('.home1-main-sub').tile(2);$('.home4-main-sub').tile(2);$('.home2-main-sub').tile(2);
};};
});