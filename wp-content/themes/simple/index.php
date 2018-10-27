<?php get_header(); ?>

<div id="main-content">

<?php $site_options =  get_option('site_options');
$column = esc_html($site_options['column-h']);
?>






<div id="main-content<?php echo $column;?>-area">
<div id="main-content<?php echo $column;?>">
サイドバーとは、ソフトウェアのウィンドウやWebページの左側や右側に縦長に配置され る表示領域のこと。メイン領域の表示の変遷に関わらず常に同じ内容が表示されるよう 設定されていることが多く、そのソフトウェアの使用やWebサイトの閲覧に際して頻繁に  ..
</div>
</div>
















<?php if ( $column <= 2 ) : ?>
<!-- 2カラム -->
<div id="main-content<?php echo $column;?>-sidebar"><?php get_sidebar();?></div>
<?php endif; ?>



















</div><!-- #main-content -->

<?php get_footer();?>