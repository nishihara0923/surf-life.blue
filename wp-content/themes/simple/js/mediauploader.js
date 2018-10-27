(function ($) {
var custom_uploader;
$("input:button[name=media]").click(function(e)
{e.preventDefault();if(custom_uploader) {custom_uploader.open();return;}
custom_uploader = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader.on("select", function() {
var images = custom_uploader.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid]").val("");
$("#media").empty();
$("input:text[name=mediaid]").val(file.id);
$("#media").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media").empty();
});

var custom_uploader2;
$("input:button[name=media2]").click(function(e)
{e.preventDefault();if(custom_uploader2) {custom_uploader2.open();return;}
custom_uploader2 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader2.on("select", function() {
var images = custom_uploader2.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid2]").val("");
$("#media2").empty();
$("input:text[name=mediaid2]").val(file.id);
$("#media2").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader2.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear2]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media2").empty();
});


var custom_uploader3;
$("input:button[name=media3]").click(function(e)
{e.preventDefault();if(custom_uploader3) {custom_uploader3.open();return;}
custom_uploader3 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader3.on("select", function() {
var images = custom_uploader3.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid3]").val("");
$("#media3").empty();
$("input:text[name=mediaid3]").val(file.id);
$("#media3").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader3.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear3]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media3").empty();
});


var custom_uploader4;
$("input:button[name=media4]").click(function(e)
{e.preventDefault();if(custom_uploader4) {custom_uploader4.open();return;}
custom_uploader4 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader4.on("select", function() {
var images = custom_uploader4.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid4]").val("");
$("#media4").empty();
$("input:text[name=mediaid4]").val(file.id);
$("#media4").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader4.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear4]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media4").empty();
});


var custom_uploader5;
$("input:button[name=media5]").click(function(e)
{e.preventDefault();if(custom_uploader5) {custom_uploader5.open();return;}
custom_uploader5 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader5.on("select", function() {
var images = custom_uploader5.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid5]").val("");
$("#media5").empty();
$("input:text[name=mediaid5]").val(file.id);
$("#media5").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader5.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear5]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media5").empty();
});


var custom_uploader6;
$("input:button[name=media6]").click(function(e)
{e.preventDefault();if(custom_uploader6) {custom_uploader6.open();return;}
custom_uploader6 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader6.on("select", function() {
var images = custom_uploader6.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid6]").val("");
$("#media6").empty();
$("input:text[name=mediaid6]").val(file.id);
$("#media6").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader6.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear6]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media6").empty();
});


var custom_uploader7;
$("input:button[name=media7]").click(function(e)
{e.preventDefault();if(custom_uploader7) {custom_uploader7.open();return;}
custom_uploader7 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader7.on("select", function() {
var images = custom_uploader7.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid7]").val("");
$("#media7").empty();
$("input:text[name=mediaid7]").val(file.id);
$("#media7").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader7.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear7]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media7").empty();
});


var custom_uploader8;
$("input:button[name=media8]").click(function(e)
{e.preventDefault();if(custom_uploader8) {custom_uploader8.open();return;}
custom_uploader8 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader8.on("select", function() {
var images = custom_uploader8.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid8]").val("");
$("#media8").empty();
$("input:text[name=mediaid8]").val(file.id);
$("#media8").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader8.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear8]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media8").empty();
});


var custom_uploader9;
$("input:button[name=media9]").click(function(e)
{e.preventDefault();if(custom_uploader9) {custom_uploader9.open();return;}
custom_uploader9 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader9.on("select", function() {
var images = custom_uploader9.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid9]").val("");
$("#media9").empty();
$("input:text[name=mediaid9]").val(file.id);

$("#media9").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader9.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear9]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media9").empty();
});

var custom_uploader10;
$("input:button[name=media10]").click(function(e)
{e.preventDefault();if(custom_uploader10) {custom_uploader10.open();return;}
custom_uploader10 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader10.on("select", function() {
var images = custom_uploader10.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid10]").val("");
$("#media10").empty();
$("input:text[name=mediaid10]").val(file.id);
$("#media10").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader10.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear10]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media10").empty();
});


var custom_uploader11;
$("input:button[name=media11]").click(function(e)
{e.preventDefault();if(custom_uploader11) {custom_uploader11.open();return;}
custom_uploader11 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader11.on("select", function() {
var images = custom_uploader11.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid11]").val("");
$("#media11").empty();
$("input:text[name=mediaid11]").val(file.id);
$("#media11").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader11.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear11]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media11").empty();
});


var custom_uploader0;
$("input:button[name=media0]").click(function(e)
{e.preventDefault();if(custom_uploader0) {custom_uploader0.open();return;}
custom_uploader0 = wp.media({title:"Choose Image",library: {type:"image"},button: {text:"Choose Image"},multiple: false});
custom_uploader0.on("select", function() {
var images = custom_uploader0.state().get("selection");
images.each(function(file){
$("input:text[name=mediaid0]").val("");
$("#media0").empty();
$("input:text[name=mediaid0]").val(file.id);
$("#media0").append('<img src="'+file.attributes.sizes.full.url+'" />');
});});
custom_uploader0.open();
});
/* クリアボタンを押した時の処理 */
$("input:button[name=media-clear0]").click(function() {$(this).prevAll(".img-choose input:[name^=mediaid]").val("");
$("#media0").empty();
});
})(jQuery);