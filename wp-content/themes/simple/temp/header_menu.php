<?php global $original_site;?>
<?php if($original_site['original_op1_1']): ?>
<div class="categories">
<?php 

if($original_site['original_op1_3'] == 1): ?>
<p class="header-right-title"><a href="<?php echo $original_site['original_op1_3_1']; ?>"<?php if($original_site['original_op1_4'] == 2): ?> target="_blank"<?php endif;?>><?php echo $original_site['original_op1_1']; ?></a></p>
<?php if($original_site['original_op1_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op1_2']; ?></p><?php endif;?>

<?php elseif($original_site['original_op1_3'] == 2):?>
<?php if(count($original_site['original_op1_3_2']) == 1): ?>
<!-- 1件のみなら -->
<?php $arr = $original_site['original_op1_3_2'];?>
<p class="header-right-title"><a href="<?php echo get_category_link($arr[0]);?>"><?php echo $original_site['original_op1_1']; ?></a></p>
<?php if($original_site['original_op1_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op1_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories2">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op1_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op1_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories2 -->
<ul class="accordion">
<?php foreach ($original_site['original_op1_3_2'] as $value) {$pages1 .= $value.',';}wp_list_categories('title_li=&include='.$pages2);?>
</ul>
<?php endif;?>

<?php elseif($original_site['original_op1_3'] == 3):?>
<?php if(count($original_site['original_op1_3_3']) == 1): ?>
<!-- 1件のみなら -->
<?php $arrs = $original_site['original_op1_3_3'];?>
<p class="header-right-title"><a href="<?php echo get_permalink($arrs[0]);?>"><?php echo $original_site['original_op1_1']; ?></a></p>
<?php if($original_site['original_op1_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op1_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories2">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op1_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op1_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories2 -->
<ul class="accordion">
<?php foreach ($original_site['original_op1_3_3'] as $value) {$pages1 .= $value.',';}wp_list_pages('title_li=&include='.$pages1);?>
</ul>
<?php endif;?>
<?php endif;?>
</div>
<?php endif;?>

<?php if($original_site['original_op2_1']): ?>
<div class="categories">
<?php 
if($original_site['original_op2_3'] == 1): ?>
<p class="header-right-title"><a href="<?php echo $original_site['original_op2_3_1']; ?>"<?php if($original_site['original_op2_4'] == 2): ?> target="_blank"<?php endif;?>><?php echo $original_site['original_op2_1']; ?></a></p>
<?php if($original_site['original_op2_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op2_2']; ?></p><?php endif;?>
<?php elseif($original_site['original_op2_3'] == 2):?>
<?php if(count($original_site['original_op2_3_2']) == 1): ?>
<!-- 1件のみなら -->
<?php $arr = $original_site['original_op2_3_2'];?>
<p class="header-right-title"><a href="<?php echo get_category_link($arr[0]);?>"><?php echo $original_site['original_op2_1']; ?></a></p>
<?php if($original_site['original_op2_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op2_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories3">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op2_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op2_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories3 -->
<ul class="accordion3">
<?php foreach ($original_site['original_op2_3_2'] as $value) {$pages2 .= $value.',';}wp_list_categories('title_li=&include='.$pages2);?>
</ul>
<?php endif;?>
<?php elseif($original_site['original_op2_3'] == 3):?>
<?php if(count($original_site['original_op2_3_3']) == 1): ?>
<!-- 1件のみなら -->
<?php $arrs = $original_site['original_op2_3_3'];?>
<p class="header-right-title"><a href="<?php echo get_permalink($arrs[0]);?>"><?php echo $original_site['original_op2_1']; ?></a></p>
<?php if($original_site['original_op2_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op2_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories3">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op2_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op2_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories3 -->
<ul class="accordion3">
<?php foreach ($original_site['original_op2_3_3'] as $value) {$pages2 .= $value.',';}wp_list_pages('title_li=&include='.$pages3);?>
</ul>
<?php endif;?>
<?php endif;?>
</div>
<?php endif;?>

<?php if($original_site['original_op3_1']): ?>
<div class="categories">
<?php 

if($original_site['original_op3_3'] == 1): ?>
<p class="header-right-title"><a href="<?php echo $original_site['original_op3_3_1']; ?>"<?php if($original_site['original_op3_4'] == 2): ?> target="_blank"<?php endif;?>><?php echo $original_site['original_op3_1']; ?></a></p>
<?php if($original_site['original_op3_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op3_2']; ?></p><?php endif;?>
<?php elseif($original_site['original_op3_3'] == 2):?>
<?php if(count($original_site['original_op3_3_2']) == 1): ?>
<!-- 1件のみなら -->
<?php $arr = $original_site['original_op3_3_2'];?>
<p class="header-right-title"><a href="<?php echo get_category_link($arr[0]);?>"><?php echo $original_site['original_op3_1']; ?></a></p>
<?php if($original_site['original_op3_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op3_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories4">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op3_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op3_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories4 -->
<ul class="accordion4">
<?php foreach ($original_site['original_op3_3_2'] as $value) {$pages3 .= $value.',';}wp_list_categories('title_li=&include='.$pages3);?>
</ul>
<?php endif;?>
<?php elseif($original_site['original_op3_3'] == 3):?>
<?php if(count($original_site['original_op3_3_3']) == 1): ?>
<!-- 1件のみなら -->
<?php $arrs = $original_site['original_op3_3_3'];?>
<p class="header-right-title"><a href="<?php echo get_permalink($arrs[0]);?>"><?php echo $original_site['original_op3_1']; ?></a></p>
<?php if($original_site['original_op3_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op3_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories4">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op3_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op3_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories4 -->
<ul class="accordion4">
<?php foreach ($original_site['original_op3_3_3'] as $value) {$pages3 .= $value.',';}wp_list_pages('title_li=&include='.$pages3);?>
</ul>
<?php endif;?>
<?php endif;?>
</div>
<?php endif;?>

<?php if($original_site['original_op4_1']): ?>
<div class="categories">
<?php 

if($original_site['original_op4_3'] == 1): ?>
<p class="header-right-title"><a href="<?php echo $original_site['original_op4_3_1']; ?>"<?php if($original_site['original_op4_4'] == 2): ?> target="_blank"<?php endif;?>><?php echo $original_site['original_op4_1']; ?></a></p>
<?php if($original_site['original_op4_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op4_2']; ?></p><?php endif;?>
<?php elseif($original_site['original_op4_3'] == 2):?>
<?php if(count($original_site['original_op4_3_2']) == 1): ?>
<!-- 1件のみなら -->
<?php $arr = $original_site['original_op4_3_2'];?>
<p class="header-right-title"><a href="<?php echo get_category_link($arr[0]);?>"><?php echo $original_site['original_op4_1']; ?></a></p>
<?php if($original_site['original_op4_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op4_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories5">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op4_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op4_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories5 -->
<ul class="accordion5">
<?php foreach ($original_site['original_op4_3_2'] as $value) {$pages4 .= $value.',';}wp_list_categories('title_li=&include='.$pages4);?>
</ul>
<?php endif;?>
<?php elseif($original_site['original_op4_3'] == 3):?>
<?php if(count($original_site['original_op4_3_3']) == 1): ?>
<!-- 1件のみなら -->
<?php $arrs = $original_site['original_op4_3_3'];?>
<p class="header-right-title"><a href="<?php echo get_permalink($arrs[0]);?>"><?php echo $original_site['original_op4_1']; ?></a></p>
<?php if($original_site['original_op4_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op4_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories5">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op4_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op4_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories5 -->
<ul class="accordion5">
<?php foreach ($original_site['original_op4_3_3'] as $value) {$pages4 .= $value.',';}wp_list_pages('title_li=&include='.$pages4);?>
</ul>
<?php endif;?>
<?php endif;?>
</div>
<?php endif;?>

<?php if($original_site['original_op5_1']): ?>
<div class="categories">
<?php 

if($original_site['original_op5_3'] == 1): ?>
<p class="header-right-title"><a href="<?php echo $original_site['original_op5_3_1']; ?>"<?php if($original_site['original_op5_4'] == 2): ?> target="_blank"<?php endif;?>><?php echo $original_site['original_op5_1']; ?></a></p>
<?php if($original_site['original_op5_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op5_2']; ?></p><?php endif;?>
<?php elseif($original_site['original_op5_3'] == 2):?>
<?php if(count($original_site['original_op5_3_2']) == 1): ?>
<!-- 1件のみなら -->
<?php $arr = $original_site['original_op5_3_2'];?>
<p class="header-right-title"><a href="<?php echo get_category_link($arr[0]);?>"><?php echo $original_site['original_op5_1']; ?></a></p>
<?php if($original_site['original_op5_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op5_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories6">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op5_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op5_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories6 -->
<ul class="accordion6">
<?php foreach ($original_site['original_op5_3_2'] as $value) {$pages5 .= $value.',';}wp_list_categories('title_li=&include='.$pages5);?>
</ul>
<?php endif;?>
<?php elseif($original_site['original_op5_3'] == 3):?>
<?php if(count($original_site['original_op5_3_3']) == 1): ?>
<!-- 1件のみなら -->
<?php $arrs = $original_site['original_op5_3_3'];?>
<p class="header-right-title"><a href="<?php echo get_permalink($arrs[0]);?>"><?php echo $original_site['original_op5_1']; ?></a></p>
<?php if($original_site['original_op5_2']): ?><p class="header-right-title-sub"><?php echo $original_site['original_op5_2']; ?></p><?php endif;?>
<?php else:?>
<!-- 2件以上なら -->
<div class="categories6">
<div class="cate-sub"><p class="header-right-title"><a href="#"><?php echo $original_site['original_op5_1']; ?></a></p><p class="header-right-title-sub"><?php echo $original_site['original_op5_2']; ?></p></div>
<div class="cate-sub"><span class="icon-plus"></span></div>
</div><!-- .categories6 -->
<ul class="accordion6">
<?php foreach ($original_site['original_op5_3_3'] as $value) {$pages5 .= $value.',';}wp_list_pages('title_li=&include='.$pages5);?>
</ul>
<?php endif;?>
<?php endif;?>
</div>
<?php endif;?>