<div class="hit-count">
<?php global $original_site;if($original_site['sort_option']):?>
<div class="sort-form">
<p class="inline-middle">並び替え </p>
<?php $orderby = get_query_var( 'orderby');$order = get_query_var( 'order');$meta_keys = get_query_var( 'meta_key');?>
<select class="sort-select inline-middle" name="sort-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
<?php if($original_site['sort_option1']):?>
<option value="<?php echo esc_url(add_query_arg( array('post_type' => false,'meta_key' => false,'order' => 'DESC','orderby' => 'date'))); ?>"<?php if($orderby == 'date' && $order == 'DESC'){echo ' selected="selected"';}?>>公開日が新しい順</option>
<option value="<?php echo esc_url(add_query_arg( array('post_type' => false,'meta_key' => false,'order' => 'ASC','orderby' => 'date'))); ?>"<?php if($orderby == 'date' && $order == 'ASC'){echo ' selected="selected"';}?>>公開日が古い順</option>
<?php endif;?>
<?php if($original_site['sort_option2']):?>
<option value="<?php echo esc_url(add_query_arg( array('post_type' => false,'meta_key' => false,'order' => 'DESC','orderby' => 'modified'))); ?>"<?php if($orderby == 'modified' && $order == 'DESC'){echo ' selected="selected"';}?>>更新日が新しい順</option>
<option value="<?php echo esc_url(add_query_arg( array('post_type' => false,'meta_key' => false,'order' => 'ASC','orderby' => 'modified'))); ?>"<?php if($orderby == 'modified' && $order == 'ASC'){echo ' selected="selected"';}?>>更新日が古い順</option>
<?php endif;?>
<?php if($original_site['sort_option3']):?>
<option value="<?php echo esc_url(add_query_arg( array('post_type' => 'post','order' => 'DESC','meta_key' => 'view','orderby' => 'meta_value_num') )); ?>"<?php if($meta_key == 'view' && $order == 'DESC'){echo ' selected="selected"';}?>>人気が高い順</option>
<option value="<?php echo esc_url(add_query_arg( array('post_type' => 'post','order' => 'ASC','meta_key' => 'view','orderby' => 'meta_value_num') )); ?>"<?php if($meta_key == 'view' && $order == 'ASC'){echo ' selected="selected"';}?>>人気が低い順</option>
<?php endif;?>
<?php if($original_site['sort_option4']):?>
<option value="<?php echo esc_url(add_query_arg( array('post_type' => false,'meta_key' => false,'order' => 'DESC','orderby' => 'comment_count'))); ?>"<?php if($orderby == 'comment_count' && $order == 'DESC'){echo ' selected="selected"';}?>>コメントが多い順</option>
<option value="<?php echo esc_url(add_query_arg( array('post_type' => false,'meta_key' => false,'order' => 'ASC','orderby' => 'comment_count'))); ?>"<?php if($orderby == 'comment_count' && $order == 'ASC'){echo ' selected="selected"';}?>>コメントが少ない順</option>
<?php endif;?>
</select>
</div>
<?php endif;?>
<div class="conten-count"><?php result_count_op();?></div>
</div>