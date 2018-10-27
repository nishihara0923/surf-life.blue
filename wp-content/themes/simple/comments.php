<?php $comments_open = comments_open();$pings_open = pings_open();if ($comments_open || $pings_open ) : ?>
<?php if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
if ( post_password_required() ) { ?>
<div class="nocomments"><p>こちらのページはパスワードで保護されています。</p><p>コメントを表示するにはパスワードを入力してください。</p></div>
<?php return; } ?>
<?php if ( post_password_required() ) {return;}?>
<div id="comments" class="comments-area">
<?php $comments_cnt = get_comment_only_number(); ?>
<ul id="tab">

<?php if ($comments_open ) : ?>
<li class="select">
<span class="tab-b">Comments</span>
コメント(<?php echo $comments_cnt; ?>件)
</li>
<?php endif; ?>
<?php if($pings_open) : ?>
<?php if($pings_open && $comments_open == 0 ) : ?>
<li class="no_select"><?php else: ?><li class="no_select"><?php endif; ?>
<span class="tab-b">Trackback</span>
トラックバック(<?php echo get_comments_number()-$comments_cnt; ?>件)</li>
<?php endif; ?>
</ul>

<?php if ($comments_open) : ?>
<div class="content_wrap">
<ul class="commentlist">
<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
</ul>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<div class="navigation">
<div class="nav-previous"><?php previous_comments_link('&laquo; 前のコメントへ', '' ); ?></div>
<div class="nav-next"><?php next_comments_link('次のコメントへ &raquo;',''); ?></div>
</div><!-- .navigation -->
<?php endif; ?>
<?php
//コメントが無い場合の処理
if(get_comment_pages_count()){$comment_a ='comment-form-author';}else{$comment_a ='comment-form-author2';}
$comments_args = array(
'fields' => array(
'author' => '<p class="'.$comment_a.'">' . '<label for="author">' . __( 'Name' ) . ( $req ? '<span class="required">（必須）</span>' : '' ) . '</label> ' .'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? '<span class="required">（必須）</span><span class="required-email">公開されることはありません</span>' : '' ) . '</label> ' .
'<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
),
'comment_notes_before' => '',
);
comment_form($comments_args);
?>
</div>
<?php endif; ?>
<?php if($pings_open ) : ?>
<?php if($pings_open && $comments_open == 0 ) : ?>
<div class="content_wrap">
<?php else: ?>
<div class="content_wrap disnon">
<?php endif; ?>





<ul class="trackback-body">
<?php wp_list_comments('type=pings&callback=mytheme_pings'); ?>
</ul>
<div class="trackback-title">この記事のトラックバック用URL</div>
<input class="trackback_field" type="text" readonly="readonly" onfocus="this.select();" value="<?php trackback_url(); ?>">
</div>
<?php endif; ?>
</div><!-- #comments -->
<?php endif; ?>