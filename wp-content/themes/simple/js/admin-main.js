
$(function(){
// $(".parent[@value='']").attr("checked","checked");


$("[class^=url-cat]").addClass('hide');
$('#' + $("#parent option:selected").attr("class")).removeClass("hide");
// プルダウンが変更



$("#parent").change(function(){
// 全て非表示
$(".url-cat").addClass('hide');
// 選択されたら表示
$('#' + $("#parent option:selected").attr("class")).removeClass("hide");
});


$("#parent2").change(function(){
// 全て非表示
$(".url-cat2").addClass('hide');
// 選択されたら表示
$('#' + $("#parent2 option:selected").attr("class")).removeClass("hide");
});

$("#parent3").change(function(){
// 全て非表示
$(".url-cat3").addClass('hide');
// 選択されたら表示
$('#' + $("#parent3 option:selected").attr("class")).removeClass("hide");
});

$("#parent4").change(function(){
// 全て非表示
$(".url-cat4").addClass('hide');
// 選択されたら表示
$('#' + $("#parent4 option:selected").attr("class")).removeClass("hide");
});


$("#parent5").change(function(){
// 全て非表示
$(".url-cat5").addClass('hide');
// 選択されたら表示
$('#' + $("#parent5 option:selected").attr("class")).removeClass("hide");
});

$("#parent6").change(function(){
// 全て非表示
$(".url-cat6").addClass('hide');
// 選択されたら表示
$('#' + $("#parent6 option:selected").attr("class")).removeClass("hide");
});


$("#parentmain").change(function(){
// 全て非表示
$(".url-catmain").addClass('hide');
// 選択されたら表示
$('#' + $("#parentmain option:selected").attr("class")).removeClass("hide");
});


$('#' + $("#parent option:selected").attr("class")).removeClass("hide");
$('#' + $("#parent2 option:selected").attr("class")).removeClass("hide");
$('#' + $("#parent3 option:selected").attr("class")).removeClass("hide");
$('#' + $("#parent4 option:selected").attr("class")).removeClass("hide");
$('#' + $("#parent5 option:selected").attr("class")).removeClass("hide");
$('#' + $("#parent6 option:selected").attr("class")).removeClass("hide");
$('#' + $("#parentmain option:selected").attr("class")).removeClass("hide");


})
