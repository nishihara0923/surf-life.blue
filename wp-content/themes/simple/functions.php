<?php
date_default_timezone_set('Asia/Tokyo');
//サイトマップの更新
if(date('Y-m-d') !== get_option('sitemap_time')){
//更新
update_option( 'sitemap_time', date('Y-m-d') );
sitemap_xml();
}


// カスタム投稿タイプ東京スポットの追加
add_action( 'init', 'create_post_type_tokyo_spot' );
function create_post_type_tokyo_spot() {
register_post_type( 'tokyo_spot',array(
'labels' => array('name' => __( '東京スポット' ),'singular_name' => __( '東京スポット' )),
'public' => true,
'menu_position' =>7,
'has_archive' => true,
));

//カスタムタクソノミー、カテゴリタイプ
  register_taxonomy(
    'tokyo_spot_cat', 
    'tokyo_spot', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => '東京スポットのカテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
   
//カスタムタクソノミー、タグタイプ
  register_taxonomy(
    'tokyo_spot_tag', 
    'tokyo_spot', 
    array(
      'hierarchical' => false, 
      'update_count_callback' => '_update_post_term_count',
      'label' => 'タグ',
      'singular_label' => '東京スポットのタグ',
      'public' => true,
      'show_ui' => true
    )
  );
}

/**カスタム投稿 東京スポット*/
function add_layout_custom_tokyo_spot() {
add_meta_box('tokyo_spot', '東京スポット', 'html_source_tokyo_spot', 'tokyo_spot', 'normal', 'low');
}
add_action('admin_menu', 'add_layout_custom_tokyo_spot');

/**カスタム投稿 東京スポットのカスタムフィールド*/
function html_source_tokyo_spot() {
$spot_data = get_post_meta($_GET['post'], 'tokyo_spot_data', true);
?>
<style type="text/css">
table.sample1{
width: 100%;margin:20px 0 50px;border-top: 1px solid #CCC;border-left: 1px solid #CCC;border-spacing:0;
}
table.sample1 tr th,table.sample1 tr td{
font-size: 12px;border-bottom: 1px solid #CCC;border-right: 1px solid #CCC;padding: 3px;}
table.sample1 tr th{
background:#f5f5f5;width:20%;
}
</style>
<table class="sample1">
<tr><th>メイン画像1</th>
<td><input name="main_img1" value="<?php echo wp_filter_nohtml_kses($spot_data['main_img1']); ?>"  style="width:80%" /> </label></td>
</tr>

<tr><th>メイン画像2</th>
<td><input name="main_img2" value="<?php echo wp_filter_nohtml_kses($spot_data['main_img2']); ?>"  style="width:80%" /></td></tr>
<tr>
<th>よみ</th>
<td><input name="spot_kana" value="<?php echo wp_filter_nohtml_kses($spot_data['spot_kana']); ?>"  style="width:80%" /></td>
</tr>

<tr>
<th>緯度・経度</th>
<td><input name="spot_itude" value="<?php echo wp_filter_nohtml_kses($spot_data['spot_itude']); ?>"  style="width:80%" /></td>
</tr>

<tr>
<th>住所</th>
<td><input name="address" value="<?php echo wp_filter_nohtml_kses($spot_data['address']); ?>"  style="width:80%" /></td>
</tr>

<tr>
<th>googlemap</th>
<td><input name="googlemap" value="<?php echo wp_filter_nohtml_kses($spot_data['googlemap']); ?>"  style="width:80%" /></td>
</tr>

<tr>
<th>交通</th>
<td><textarea name="traffic" rows="4" cols="40"><?php echo wp_filter_nohtml_kses($spot_data['traffic']); ?></textarea></td>
</tr>

<tr>
<th>駐車場</th>
<td><textarea name="car_park" rows="4" cols="40"><?php echo wp_filter_nohtml_kses($spot_data['car_park']); ?></textarea></td>
</tr>

<tr>
<th>期間</th>
<td><input name="data_time" value="<?php echo wp_filter_nohtml_kses($spot_data['data_time']); ?>"  style="width:80%" /></td>
</tr>

<tr>
<th>営業時間</th>
<td><textarea name="business" rows="4" cols="40"><?php echo wp_filter_nohtml_kses($spot_data['business']); ?></textarea></td>
</tr>

<tr>
<th>開催時間</th>
<td><textarea name="time" rows="4" cols="40"><?php echo wp_filter_nohtml_kses($spot_data['time']); ?></textarea></td>
</tr>

<tr>
<th>問合せ</th>
<td><input name="content" value="<?php echo wp_filter_nohtml_kses($spot_data['content']); ?>"  style="width:80%" /></td>
</tr>

<tr>
<th>HP</th>
<td><input name="hp" value="<?php echo wp_filter_nohtml_kses($spot_data['hp']); ?>"  style="width:80%" /></td>
</tr>

<tr>
<th>利用料金</th>
<td><textarea name="charge" rows="4" cols="40"><?php echo wp_filter_nohtml_kses($spot_data['charge']); ?></textarea></td>
</tr>

<tr>
<th>入場料</th>
<td>
<textarea name="entrance" rows="4" cols="40"><?php echo wp_filter_nohtml_kses($spot_data['entrance']); ?></textarea></td>
</tr>

<tr>
<th>定休日</th>
<td><input name="regular_holiday" value="<?php echo wp_filter_nohtml_kses($spot_data['regular_holiday']); ?>"  style="width:30%" /></td>
</tr>

<tr>
<th>備考</th>
<td><input name="remarks" value="<?php echo wp_filter_nohtml_kses($spot_data['remarks']); ?>"  style="width:30%" /></td>
</tr>

<tr>
<th>写真</th>
<td><textarea name="photo" rows="4" cols="40"><?php echo $spot_data['photo']; ?></textarea></td>
</tr>

<tr>
<th>施設</th>
<td><textarea name="institution" rows="4" cols="40"><?php echo $spot_data['institution']; ?></textarea></td>
</tr>
</table>
<?php 
}
//東京スポットデーターの保存
function my_box_tokyo_spot_save($post_id) {
//$mydata2 = $_POST['longitude'];
update_post_meta( $post_id, 'tokyo_spot_data',array(
"main_img1" => $_POST['main_img1'],
"main_img2" => $_POST['main_img2'],
"spot_kana" => $_POST['spot_kana'],
"spot_itude" => $_POST['spot_itude'],
"address" => $_POST['address'],
"googlemap" => $_POST['googlemap'],
"traffic" => $_POST['traffic'],
"car_park" => $_POST['car_park'],
"data_time" => $_POST['data_time'],
"business" => $_POST['business'],
"time" => $_POST['time'],
"content" => $_POST['content'],
"hp" => $_POST['hp'],
"charge" => $_POST['charge'],
"entrance" => $_POST['entrance'],
"regular_holiday" => $_POST['regular_holiday'],
"remarks" => $_POST['remarks'],
"photo" => $_POST['photo'],
"institution" => $_POST['institution']

));
}
add_action('save_post_tokyo_spot', 'my_box_tokyo_spot_save');

//サイトマップ作成　サーバーの権限には注意
function sitemap_xml() {
global $post;
date_default_timezone_set('Asia/Tokyo');
$sitemap = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

$sitemap .= '<url><loc>' .esc_url(home_url('/')). '</loc><lastmod>'.date("Y-m-d").'</lastmod><changefreq>daily</changefreq><priority>1.0</priority></url>';

$args = array(
'posts_per_page' => -1,
'orderby' => 'modified',
'order' => 'DESC',
'post_type' => array('post','page'),
'post_status' => 'publish'
 );
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();
$sitemap .= '<url><loc>' . get_permalink( $post->ID ) . '</loc><lastmod>' .get_the_modified_date("Y-m-d"). '</lastmod><changefreq>weekly</changefreq><priority>0.9</priority></url>';
endwhile;wp_reset_postdata();

$args2 = array(
'posts_per_page' => -1,
'orderby' => 'modified',
'order' => 'DESC',
'post_type' => 'tide_level',
'post_status' => 'publish'
 );
$the_query2 = new WP_Query( $args2 );
while ( $the_query2->have_posts() ) : $the_query2->the_post();
$sitemap .= '<url><loc>https://www.surf-life.blue/tide_level/'.get_post_field('post_name', $post->ID) . '</loc><lastmod>' .date("Y-m-d"). '</lastmod><changefreq>daily</changefreq><priority>0.9</priority></url>';
endwhile;wp_reset_postdata();

$cat_data = get_categories();foreach($cat_data as $value){
$sitemap .= '<url><loc>' . get_category_link($value) . '</loc><lastmod>' .mysql2date("Y-m-d", get_lastpostmodified(), false). '</lastmod><changefreq>weekly</changefreq><priority>0.5</priority></url>';
}

$tag_data = get_tags();foreach($tag_data as $value){
$sitemap .= '<url><loc>' . get_tag_link($value->term_id) . '</loc><lastmod>' .mysql2date("Y-m-d", get_lastpostmodified(), false). '</lastmod><changefreq>weekly</changefreq><priority>0.5</priority></url>';
}
	
$sitemap .= '</urlset>' . "\n";

$fp = fopen( ABSPATH. "sitemap.xml", 'w' );
if ($fp) {
fwrite($fp, $sitemap);
fclose($fp);
}}

// 投稿ステータスが公開または更新でサイトマップを作成するようにする
add_action( "publish_post", "sitemap_xml" );
add_action( "publish_page", "sitemap_xml" );
add_action( "publish_tide_level", "sitemap_xml" );


//一度イベントを作れば不要 消すな
//function my_activation() {
//sitemap_xml();
//イベントを削除するタグ　wp_clear_scheduled_hook('sitemap_event');
//if ( !wp_next_scheduled( 'sitemap_event' ) ) {wp_schedule_event(time(), 'daily', 'sitemap_event');}
//}
//add_action('wp', 'my_activation');

//一日一回サイトマップの更新をする
add_action('sitemap_event', 'sitemap_daily');
function sitemap_daily() {
sitemap_xml();
//動作チェック用wp_insert_post(array("post_title"   => "WP-Cronテスト","post_status"  => "pending","post_content" => "WP-Cronのテストです"));
}
//サイトマップ関係終了

//カスタム投稿
// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
register_post_type( 'tide_level',array(
'labels' => array('name' => __( '全国の潮位' ),'singular_name' => __( '全国の潮位' )),
'public' => true,
'menu_position' =>6,
'has_archive' => true,
));
}

/**カスタム投稿 潮位*/
function add_layout_custom_tide_level() {
add_meta_box('tide_level', '潮位情報', 'html_source_tide_level', 'tide_level', 'normal', 'low');
}
add_action('admin_menu', 'add_layout_custom_tide_level');
function html_source_tide_level() {
$spot_data = get_post_meta($_GET['post'], 'spot_data', true);
?>
<label>地点記号<input name="spot" value="<?php echo wp_filter_nohtml_kses($spot_data['spot']); ?>"  style="width:30%" /> </label>
<label>地点名<input name="spot_name" value="<?php echo wp_filter_nohtml_kses($spot_data['spot_name']); ?>"  style="width:30%" /> </label><br />
<label>緯度<input name="latitude" value="<?php echo wp_filter_nohtml_kses($spot_data['latitude']); ?>"  style="width:30%" /> </label>
<label>経度<input name="longitude" value="<?php echo wp_filter_nohtml_kses($spot_data['longitude']); ?>"  style="width:30%" /> </label><br />

<label>エリア<input name="area" value="<?php echo wp_filter_nohtml_kses(get_post_meta($_GET['post'], 'area', true)); ?>"  style="width:30%" /> </label>
<label>アドレス<input name="address" value="<?php echo wp_filter_nohtml_kses($spot_data['address']); ?>"  style="width:30%" /> </label><br />

<label>天気地点番号<input name="weather_no" value="<?php echo wp_filter_nohtml_kses($spot_data['weather_no']); ?>"  style="width:30%" /> </label>

<label>ライブドア番号<input name="livedoor_no" value="<?php echo wp_filter_nohtml_kses($spot_data['livedoor_no']); ?>"  style="width:30%" /> </label>

<label>一覧スタート<input name="data_time" value="<?php echo wp_filter_nohtml_kses($spot_data['data_time']); ?>"  style="width:30%" /> </label>

<label>取得年<input name="data_time2" value="<?php echo wp_filter_nohtml_kses($spot_data['data_time2']); ?>"  style="width:30%" /> </label>

<label>潮干狩り<input name="shiohigari" value="<?php echo wp_filter_nohtml_kses($spot_data['shiohigari']); ?>"  style="width:30%" /> </label>
<label>ビーチ<input name="beach" value="<?php echo wp_filter_nohtml_kses($spot_data['beach']); ?>"  style="width:100%" /> </label>
<?php 
}
//潮位データーの保存
function my_box_save2($post_id) {
$mydata2 = $_POST['longitude'];
update_post_meta( $post_id, 'spot_data',esc_sql(array(
"spot" => $_POST['spot'],
"spot_name" => $_POST['spot_name'],
"longitude" => $_POST['longitude'],
"latitude" => $_POST['latitude'],
"address" => $_POST['address'],
"weather_no" => $_POST['weather_no'],
"livedoor_no" => $_POST['livedoor_no'],
"data_time" => $_POST['data_time'],

"data_time2" => $_POST['data_time2'],
"shiohigari" => $_POST['shiohigari'],
"beach" => $_POST['beach']
)));
update_post_meta( $post_id, 'area',$_POST['area']);
}
add_action('save_post_tide_level', 'my_box_save2');

//ソートにカスタムフィールドを追加
add_filter( 'query_vars', 'my_query_vars' );
function my_query_vars( $public_query_vars ) {
return array_merge( $public_query_vars, array( 'meta_key', 'meta_value' ) );
}

/*パスワード保護の処理*/
function my_password_form() {
global $post;
$label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
$pwbox_pass = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" class="post-password-form" method="post">
<p>こちらのページはパスワードで保護されています。</p>
<p>閲覧するにはパスワードを入力してください。</p>
<label class="postpass-label" for="' . $label . '">' . __( "Password:" ) . ' </label>
<dl class="login-form">
<dt><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /></dt>
<dd><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" /></dd>
</dl>
<span class="icon-lock"></span></form>';
return $pwbox_pass;
}
add_filter( 'the_password_form', 'my_password_form' );
/*サイト内検索の設定*/
function search_filter($query) {
if ( !is_admin() && $query->is_main_query() ) {
if ($query->is_search) {
$original_site = get_option('original_site');
if(!$original_site['list_search_op']){$query->set('post_type', 'post');}
}}}
add_action('pre_get_posts','search_filter');

/*バージョン4以前のサイト内検索処理*/
function custom_search($search, $wp_query  ) {
if ( isset($wp_query->query['s']) ) $wp_query->is_search = true;
return $search;
}
add_filter('posts_search','custom_search', 10, 2);

/*抜粋の処理 */
function op_excerpt($length) {
global $post;
if(!post_password_required()){
$content = mb_substr(strip_tags($post->post_excerpt),0,$length);
if(!$content){
$content = $post->post_content; //記事の本文を取得
$content = strip_shortcodes($content);
$content = strip_tags($content); 
$content = str_replace("&nbsp;","",$content); 
$content =  html_entity_decode($content,ENT_QUOTES,"UTF-8");
$content =  mb_substr($content,0,$length);
}
}else{
$content =  'こちらのページを閲覧するにはパスワードが必要です。';
}

return $content;
}

//アーカイブページの編集
add_filter( 'wp_title', 'jp_date_wp_title', 10, 3 );
function jp_date_wp_title( $title, $sep, $seplocation ) {
if ( is_date() ) {
$m = get_query_var('m');
if ( $m ) {
$year = substr($m, 0, 4);
$month = intval(substr($m, 4, 2));
$day = intval(substr($m, 6, 2));
} else {
$year = get_query_var('year');
$month = get_query_var('monthnum');
$day = get_query_var('day');
}
$title = ($seplocation != 'right' ? " $sep " : '').($year ? $year . '年' : '') .($month ? $month . '月' : '').($day ? $day . '日' : '').($seplocation == 'right' ? " $sep " : '');
}
return $title;
}
//画像リンクにclassを追加
add_filter( 'image_send_to_editor', 'magnific_popup_img' , 10 ,1);
function magnific_popup_img( $html){
$original_site = get_option('original_site');
if(!$original_site['lightbox_radio']){
return str_replace( '<a ', '<a class="image-popup-no-margins" ', $html );
}else{
return $html;
}
}
/*
//更新情報をチェック
function theme_update_check(){
if (current_user_can('administrator')) {get_template_part('temp/update-check');}}
add_action( 'init','theme_update_check' );
// 管理バーにログアウトを追加
function add_new_item_in_admin_bar() {

//global $wp_admin_bar;

//$wp_admin_bar->add_menu(array(
//'id' => 'new_item_in_admin_bar',
//'title' => __('ログアウト'),
//'href' => wp_logout_url()
//));
//更新情報を表示
if (current_user_can('administrator')) {
global $xml;
global $theme_data;

if(version_compare($theme_data['Version'], $xml->latest) == -1) {
$wp_admin_bar->add_menu(array(
'id' => 'new_item_in_admin_bar2',
'title' => 'テーマの更新',
'href' => admin_url( '/index.php?page='.$theme_data["Name"].'-updates')
));
}}

}
add_action('wp_before_admin_bar_render', 'add_new_item_in_admin_bar');
*/

//バージョンを非表示
remove_action('wp_head', 'wp_generator');

//Embed系を削除
remove_action('wp_head','rest_output_link_wp_head');
remove_action('wp_head','wp_oembed_add_discovery_links');
remove_action('wp_head','wp_oembed_add_host_js');

function my_wp2() {
global $original_site;
$original_site = get_option('original_site');
}
add_action( 'wp', 'my_wp2' );
/*ウィジェット　最新の投稿を削除*/
function default_widget() {
unregister_widget('WP_Widget_Recent_Posts');
}
add_action( 'widgets_init', 'default_widget' );
function site_op() {
$site_options = get_option('site_options');
if(!$site_options){
add_option('cookie_radio','1');
add_option('cookie_date','30');
add_option('original_home', esc_sql(array(
'top_list1_1' => 'date',
'top_list2_1' => 'date',
'top_list3_1' => 'date',
'top_list4_1' => 'date',
'top_list5_1' => 'date',
'top_list1_2' => '5',
'top_list2_2' => '5',
'top_list3_2' => '5',
'top_list4_2' => '5',
'top_list5_2' => '5',
)));

add_option('home_slide', esc_sql(array(
'slide_speed' => '4000',
'slide_color_radio' => 'white',
)));
add_option('original_site', esc_sql(array(
'single_op1' => '1',
'single_op2' => '1',
'single_op3' => '1',
'single_op4' => '1',
'single_op5' => '1',
'single_op6' => '1',
'single_op7' => '1',
'sort_option' => '1',
'sort_option1' => '1',
'sort_option2' => '1',
'sort_option3' => '1',
'sort_option4' => '1',
'single_op' => '1',
'single_sns' => '1',
'single_navi' => '1',
'column_h' => '1',
'column_s' => '1',
'column_p' => '1',
'column_a' => '1',
'related_posi' => '',
'related_radio' => '2',
'related_option1' => '1',
'related_option2' => '1',
'related_option3' => '1',
'related_option' => '1',
'related_position' => '',
'related_title' => '関連記事',
'related_shape' => 'img300x300',
'related_count' => '4',
'lightbox_radio' => '',
'list_option1' => '1',
'list_option2' => '1',
'list_option3' => '1',
'list_option_count' => '1',
'mainlist_position' => '',
'mainlist_shape' => 'img300x300',
'original_op0' => '',
'original_op7_2' => '',
'mediaid' => '',
'original_op1_1' => '',
'original_op1_2' => '',
'original_op1_3' => '',
'original_op1_4' => '',
'original_op1_3_1' => '',
'original_op1_3_2' => '',
'original_op1_3_3' => '',
'original_op2_1' => '',
'original_op2_2' => '',
'original_op2_3' => '',
'original_op2_4' => '',
'original_op2_3_1' => '',
'original_op2_3_2' => '',
'original_op2_3_3' => '',
'original_op3_1' => '',
'original_op3_2' => '',
'original_op3_3' => '',
'original_op3_4' => '',
'original_op3_3_1' => '',
'original_op3_3_2' => '',
'original_op3_3_3' => '',
'original_op4_1' => '',
'original_op4_2' => '',
'original_op4_3' => '',
'original_op4_4' => '',
'original_op4_3_1' => '',
'original_op4_3_2' => '',
'original_op4_3_3' => '',
'original_op5_1' => '',
'original_op5_2' => '',
'original_op5_3' => '',
'original_op5_4' => '',
'original_op5_3_1' => '',
'original_op5_3_2' => '',
'original_op5_3_3' => '',
'original_op6_1' => '',
'original_op6_2' => '',
'original_op6_3' => '',
'original_op6_4' => '',
'original_op6_3_1' => '',
'original_op6_3_2' => '',
'original_op6_3_3' => '',
'sp_option_s' => 'block',
'sp_option_f' => 'block',
)));

add_option('headline_style', esc_sql(array(
"headline_setting" => '',
"h2_style" => '',
"h2_color_1" => '#4C9ED9',
"h2_color_2" => 'ccc',
"h3_style" => '',
"h3_color_1" => '#4C9ED9',
"h3_color_2" => 'ccc',
"h4_style" => '',
"h4_color_1" => '#4C9ED9',
"h4_color_2" => 'ccc',
"h5_style" => '',
"h5_color_1" => '#4C9ED9',
"h5_color_2" => 'ccc',
)));

add_option('site_options', esc_sql(array(
'footer-link'  => '',
'sidebar-link'  => '',
'content-link'  => '1',
'comment-color-bg'  => '#f5f5f5',
'comment-color'  => '#666666',
'comment-color-text1'  => '#fff',
'comment-color-text2'  => '#666666',
'color-rank-t'  => '#fff',
'color-rank-b'  => '#4C9ED9',
'color-h'  => '#4C9ED9',
'color-h-t-b'  => '#ffffff',
'select-t-op'  => '',
'select-t-size'  => '75%',
'color-p'  => '#fff',
'color-icon'  => '#999',
'color-t-l'  => '#555555',
'select-t'  => '14px',
'color-t'  => '#555',
'color-h-t'  => '#ccc',
'select-t-h'  => '12px',
'select-t-t'  => '28px',
'color-l-l'  => '#fff',
'color-s-t'  => '#555555',
'color-s'  => '#ccc',
'color-main'  => '#f9f9f9',
'color-p-t'  => '#555',
'color-p-i'  => '#ccc',
'color-cat-l'  => '#fff',
'select-cat-t'  => '15px',
'copyright-color-b'  => '#666666',
'copyright-color-t'  => '#ffffff',
'footer-color-top'  => '#f0f0f0',
'footer-color-i'  => '#999999',
'footer-color-text'  => '#666666',
'footer-color-title'  => '#303030',
'footer-color-h'  => '#4C9ED9',
'radio-1'  => 'background-repeat:no-repeat;',
'radio-2'  => 'background-position:top left;',
'radio-3'  => 'background-attachment:scroll;',
'color-tag'  => '#4C9ED9',
'title-ber'  => '#4C9ED9',
'color-lnk'  => '#fff',
'radio-1'  => 'background-repeat:repeat;',
'select-t-t-h'  => '30px',
'color-cat-b'  => '#4C9ED9',
'color-cat-t'  => '#ffffff',
'color-cat-radio'  => '3',
'color-cat-b-s'  => '#4C9ED9',
'color-cat-t-s'  => '#ffffff',
'color-cat-radio-s'  => '1',
'color-cat-b-f'  => '#4C9ED9',
'color-cat-t-f'  => '#ffffff',
'color-cat-radio-f'  => '1',
'header_size'  => '1100',
'content_size'  => '1100',
'footer_size'  => '1100',
)));

site_op2();

}
}
add_action( 'after_switch_theme', 'site_op' );
add_action( 'wp_head', 'site_op' );
//add_action( 'customize_register', 'site_op' );
function site_op2() {
$site_options = get_option('site_options');

$original_site = get_option('original_site');
if($site_options['sidebar-link'] == 1){
$sidebar_link = '.sidebar .page_item a,.sidebar .post-justify a,.sidebar .recentcomments a,.sidebar .rsswidget,.sidebar .wideget-title-color a{font-weight:bold}';
}elseif($site_options['sidebar-link'] == 2){
$sidebar_link = '.sidebar a{font-weight:bold}';
}else{
$sidebar_link = '';
}

if($site_options['footer-link'] == 1){
$footer_link = '#site-footer .page_item a,#site-footer .post-justify a,#site-footer .recentcomments a,#site-footer .rsswidget,#site-footer .wideget-title-color a{font-weight:bold}';
}elseif($site_options['footer-link'] == 2){
$footer_link = '#site-footer a{font-weight:bold}';
}else{
$footer_link = '';
}
if($site_options['content-link'] == 1){
$content_link = '
.list-post h2 a,
.related1-title-main a,
.related-list1 a,
.related-title-color a,
.content-b-single .post-justify a,
.content-b-single .page_item a,
.content-b-single .recentcomments a,
.content-b-single .rsswidget,
.content-b-single .wideget-title-color a,
.list-top-title a,
#pagination a,
.home2-right-title a,
.home3-right-title a,
.home1-right-title-sub a
{font-weight:bold}';
}elseif($site_options['content-link'] == 2){
$content_link = '
#pagination a,
.related5s a,
.related1 a,
.related a,
.post_date a,
.list-post a,
.content-b-single a,
.home-d a,
.home1-main a,
.home2-main a,
.home3-main a,
.home4-main a{font-weight:bold}';
}else{
$content_link = '';
}

if($site_options['img-b']){
$background_image = 'background-image:url('.esc_html($site_options['img-b']).');'
.esc_html($site_options['radio-1']).esc_html($site_options['radio-2']).esc_html($site_options['radio-3']);
}

if($site_options['color-s-b']){$color_s_b = '.sidebar{background-color:'.$site_options['color-s-b'].';}';}
$c = $site_options['color-rank-b'];
$str = str_replace('#','', $c);
$arr = str_split($str,2);
$color_rank_g = 'rgba('.hexdec($arr[0]).','.hexdec($arr[1]).','.hexdec($arr[2]).',0.8)';
$z = $site_options['color-h'];
$strs = str_replace('#','', $z);
$arrs = str_split($strs,2);
$color_h = 'rgba('.hexdec($arrs[0]).','.hexdec($arrs[1]).','.hexdec($arrs[2]).',0.8)';
$color_l_l = $site_options['color-l-l'];
$color_tag = $site_options['color-tag'];
$title_ber = $site_options['title-ber'];
$all_font_size = $site_options['select-t'];

if($all_font_size == '20px'){
$font_height = 4;
}elseif($all_font_size == '19px'){
$font_height = 5;
}elseif($all_font_size == '18px'){
$font_height = 5;
}elseif($all_font_size == '17px'){
$font_height = 7;
}elseif($all_font_size == '16px'){
$font_height = 8;
}elseif($all_font_size == '15px'){
$font_height = 9;
}elseif($all_font_size == '14px'){
$font_height = 9;
}elseif($all_font_size == '13px'){
$font_height = 10;
}elseif($all_font_size == '12px'){
$font_height = 13;
}

$color_b1 = $site_options['color-cat-b'];
$color_b1 = str_replace('#','', $color_b1); 
$color_b1 = str_split($color_b1,2);
$color_b1 = 'rgba('.hexdec($color_b1[0]).','.hexdec($color_b1[1]).','.hexdec($color_b1[2]).',0.5)';
if($site_options['select-t-op']){$select_t_op='none';}else{$select_t_op='block';};
if($site_options['color-cat-radio'] == 1){
$cat_radio_cot = 'padding:2px 5px;background-color:'.$site_options['color-cat-b'];
$cat_radio_cot2 ='
#main-content1 .list-category-op a:nth-child(even),
#main-content2 .list-category-op a:nth-child(even),
#main-content3 .list-category-op a:nth-child(even){
border:1px solid '.$site_options['color-cat-b'].'}
';

}elseif($site_options['color-cat-radio'] == 2){
$cat_radio_cot = 'border:1px solid '.$site_options['color-cat-b'];
$cat_radio_cot2 ='';

}elseif($site_options['color-cat-radio'] == 3){
$cat_radio_cot = 'padding:2px 5px;background-color:'.$site_options['color-cat-b'];

$cat_radio_cot2 = '
#main-content1 .list-category-op a:nth-child(even),
#main-content2 .list-category-op a:nth-child(even),
#main-content3 .list-category-op a:nth-child(even){
border:1px solid '.$site_options['color-cat-b'].';
color:'.$site_options['color-cat-b'].';
background-color:inherit;
}'
;
}

if($site_options['color-cat-radio-s'] == 1){
$cat_radio_side = 'background-color:'.$site_options['color-cat-b-s'].';border:none';
$cat_radio_side2 ='';

}elseif($site_options['color-cat-radio-s'] == 2){
$cat_radio_side = 'background-color:inherit;padding:1px 5px;border:1px solid '.$site_options['color-cat-b-s'];
$cat_radio_side2 ='';

}elseif($site_options['color-cat-radio-s'] == 3){
$cat_radio_side = 'background-color:'.$site_options['color-cat-b-s'];

$cat_radio_side2 = '
.sidebar .list-category-op a:nth-child(even){
border:1px solid '.$site_options['color-cat-b-s'].';
color:'.$site_options['color-cat-b-s'].';
background-color:inherit
}'
;
}

if($site_options['color-cat-radio-f'] == 1){
$cat_radio_foot = 'background-color:'.$site_options['color-cat-b-f'];
$cat_radio_foot2 ='';

}elseif($site_options['color-cat-radio-f'] == 2){
$cat_radio_foot = 'background-color:inherit;border:1px solid '.$site_options['color-cat-b-f'];
$cat_radio_foot2 ='';

}elseif($site_options['color-cat-radio-f'] == 3){
$cat_radio_foot = 'background-color:'.$site_options['color-cat-b-f'];

$cat_radio_foot2 = '
#site-footer .list-category-op a:nth-child(even){
border:1px solid '.$site_options['color-cat-b-f'].';
color:'.$site_options['color-cat-b-f'].';
background-color:inherit
}';
}

$comment_color = $site_options['comment-color'];
$data_op_pc =$sidebar_link.$content_link.$footer_link.'
.header-right-title a{font-size:'.$site_options['select-cat-t'].'}

body{
background-color:'.$site_options['color-main'].';'.$background_image.'
font-size:'.$all_font_size.';
color:'.$site_options['color-t'].'}
.header-title,
#header-area {
max-width:'.$site_options['header_size'].'px;
}
#header-rights{
width:'.$site_options['select-t-size'].';
margin-left:'.$site_options['select-t-margin'].';
}

.page-pan-area {
max-width:'.$site_options['header_size'].'px;
}

#page {
max-width:'.$site_options['content_size'].'px;
}

#colophon {
max-width:'.$site_options['footer_size'].'px;
}
.header-title-color{
background-color:'.$site_options['color-h-t-b'].';
}

.header-title{
color:'.$site_options['color-h-t'].';
font-size:'.$site_options['select-t-h'].'}

.site-logo-t a{
font-size:'.$site_options['select-t-t'].';
color:'.$color_l_l.'}

.type-post h1{font-size:'.$site_options['select-t-t-h'].'}

#header_wrap{
background-color:'.$color_h.'}
#page-pan{background-color:'.$site_options['color-p'].'}
a{color:'.$site_options['color-t-l'].'}
.footer-title{border-bottom:solid 2px '.$title_ber.'}

'.$color_s_b.'

.page-404-h1,
#main-content-list h1,
#main-content .home-t h2,
#content-single .rounded2, .related-single{border-bottom: 3px solid '.$title_ber.'}

.list-top-title,.list-post h2{
border-bottom: 2px solid '.$title_ber.'}

.type-page .post_title,
.type-post .post_title{
border-top:'.$title_ber.' 4px solid}

#wp-calendar tbody tr #today,#wp-calendar tbody tr #today a,
#wp-calendar td a{color:'.$color_t_l.'}

.cate-sub .icon-plus,.icon-cross,.icon-menu,.header-right-title-sub,.header-right-title a{
color:'.$site_options['color-cat-l'].'}

.slider-pro{display:none}
#slider-top{overflow:hidden;margin-bottom:15px}
#slider-top .sp-selected-thumbnail{border: 4px solid '.$title_ber.'}

.rounded{
color:'.$site_options['color-s-t'].';
background-color:'.$site_options['color-s'].'}

.sidebar .rounded a{color:'.$site_options['color-s-t'].'}
.pan-s,.page-pan-area a{
color:'.$site_options['color-p-t'].'}

#breadcrumb,#breadcrumb:before{
color:'.$site_options['color-p-i'].'}

.post_author:before,
.post_comments:before,
.post_tag:before,
.post_modified:before,
.post_view:before,
.post_dates:before,
.list-category-comments:before,

.list-category-view:before,
.list-category-date:before,
.rss-date:before{
color:'.$site_options['color-icon'].'}
.single-links,
a .single-links:hover,
#site-footer .site-info-area .tagcloud a,
.tagcloud a,.pages-sp a:hover,.pages-link,.pagination a:hover,.pagination .current,input#submit{
position:relative;
color:'.$site_options['color-lnk'].';
background-color:'.$color_tag.'}

.site-info-area .st3,.site-info-area .st2,.site-info-area .st1,
.site-info-area .st-i3,.site-info-area .st-i2,.site-info-area .st-i1,.st3,.st2,.st1{
background-color:'.$site_options['color-rank-b'].';
color:'.$site_options['color-rank-t'].'}

.st-i3,.st-i2,.st-i1{
background-color:'.$site_options['color-rank-b'].';
background-color:'.$color_rank_g.';
color:'.$site_options['color-rank-t'].'}

#site-footer #searchsubmit:before,
#searchsubmit:before{
color:'.$color_tag.'}

dl.login-form dd input{
background-color:'.$color_tag.';
color:'.$site_options['color-lnk'].';
}

input#submit,#comments #tab li.select{
background-color:'.$comment_color.';
color: '.$site_options['comment-color-text1'].'}



#comments #tab li{
color:'.$site_options['comment-color-text2'].'}

#tab li{
border-bottom: 2px solid '.$comment_color.'}

.comments-area{
background-color:'.$site_options['comment-color-bg'].'}

.footer-title-sp,#site-footer{
background-color: '.$site_options['footer-color-top'].'}

.copyright{
background-color: '.$site_options['copyright-color-b'].';
color: '.$site_options['copyright-color-t'].'}

#site-footer .footer-title .rsswidget,
#site-footer .footer-title a{
color:'.$site_options['footer-color-title'].'}

.footer-title{
color:'.$site_options['footer-color-title'].';
border-bottom: 2px solid '.$site_options['footer-color-h'].'}

.footer-title-sp-t a,.footer-title-sp-t{
color:'.$site_options['footer-color-title'].'}

#site-footer .post_comments:before,
#site-footer .post_tag:before,
#site-footer .post_modified:before,
#site-footer .post_view:before,
#site-footer .post_dates:before,
#site-footer .list-category-view:before,
#site-footer .list-category-date:before,
#site-footer .rss-date:before{
color:'.$site_options['footer-color-i'].'}

.site-info-area span,.site-info-area p,.site-info-area a,.site-info-area{
color:'.$site_options['footer-color-text'].'}

.date-list-cont{
max-height:'.($all_font_size*1.4*3-2).'px;overflow: hidden;

}

.home1-right-content{
max-height:'.($all_font_size*1.5*$font_height).'px;overflow: hidden;
}
.home1-right-title{
max-height:'.(($all_font_size*1.15)*1.4*2-7).'px;overflow: hidden;
}

.home3-right-title,
.home2-right-title{
max-height:'.(($all_font_size*1.2)*1.4*3-6).'px;overflow: hidden;
}

.home2-right-content{
max-height:'.($all_font_size*1.5*5).'px;overflow: hidden;
}

.home3-right-content{
max-height:'.($all_font_size*1.5*3).'px;overflow: hidden;
}

.home1-right-title-sub{
max-height:'.(($all_font_size*0.95)*1.3*3-2).'px;overflow: hidden;

}

.home-t .list-category-op a,
.list-category-op a{
'.$cat_radio_cot.';
color:'.$site_options['color-cat-t'].';
}

'.$cat_radio_cot2.'

.sidebar .list-category-op a{
'.$cat_radio_side.';
color:'.$site_options['color-cat-t-s'].';
}

'.$cat_radio_side2.'
#site-footer .list-category-op a{
'.$cat_radio_foot.';
color:'.$site_options['color-cat-t-f'].';
}

'.$cat_radio_foot2.'



@media screen and (max-width: 770px) {
.header-title-color{display:'.$select_t_op.';}
#header-right-area .right-sub .categories:first-child{border-top:1px solid '.$site_options['color-cat-l'].'}
#header-right-area .right-sub .categories:first-child,#header-right-area .right-sub .categories{border-bottom:1px solid '.$site_options['color-cat-l'].'}
#main-content2-sidebar,#main-content1-sidebar{display:'.$original_site['sp_option_s'].'}
#site-footer{display:'.$original_site['sp_option_f'].'}
}

';

$headline_op ='
.post_title h5,.post_title h4,.post_title h3,.post_title h2{
border-left: 4px solid '.$title_ber.';
clear: both;
margin: 15px 0 8px;
padding: 3px 1.8% 3px 1.8%}
';

$headline_op_min = preg_replace('/\r\n/','', $headline_op);
add_option( 'css_h_min', wp_filter_nohtml_kses($headline_op_min) );
add_option( 'css_h', wp_filter_nohtml_kses($headline_op) );

$data_op_pc = preg_replace('/\r\n/','', $data_op_pc);
update_option( 'site_setting', wp_filter_nohtml_kses($data_op_pc ));
}
add_action( 'customize_preview_init', 'site_op2' );
?>
<?php
//トップページの設定画面
function original_menu2() {
get_template_part( 'temp/admin/original_option2' );
}
function original_option2() {add_options_page('トップページ設定', 'トップページ設定', 10, 'original_option2', 'original_menu2');}
add_action('admin_menu', 'original_option2');
//オリジナルの設定画面
function original_menu() {
get_template_part( 'temp/admin/original_option' );
}
function original_option() {add_options_page('オリジナル設定', 'オリジナル設定', 10, 'original_option', 'original_menu');}
add_action('admin_menu', 'original_option');
//CSS・コード設定画面
function original_css_op() {
get_template_part( 'temp/admin/original_css' );
}
function original_css() {add_options_page('オリジナルCSS', 'オリジナルCSS', 10, 'original_css', 'original_css_op');}
add_action('admin_menu', 'original_css');
//見出し設定画面
function original_headline_op() {
get_template_part( 'temp/admin/headline_option' );
}
function original_headline() {add_options_page('オリジナル見出し', 'オリジナル見出し', 10, 'original_headline', 'original_headline_op');}
add_action('admin_menu', 'original_headline');

//カラーピッカー
add_action("admin_print_scripts-settings_page_original_headline", 'admin_scripts');
function admin_scripts( $hook ) {
//wp−color-pickerの指定
wp_enqueue_style( 'wp-color-picker' );
//外部JSファイルの指定
wp_enqueue_script( 'colorpicker_script',
get_bloginfo( 'stylesheet_directory' ) . '/admin-script.js',
array( 'wp-color-picker' ), false, true );
}

function current_pagehook(){
global $hook_suffix;
if( !current_user_can( 'manage_options') ) return;
echo '<div class="updated"><p>hook_suffix : '.$hook_suffix.'</p></div>';
}
add_action('admin_notices', 'current_pagehook');

//テキストエディタにボタンを追加
function custom_add_quicktags() {
if (wp_script_is('quicktags')){
?>
<script type="text/javascript">
QTags.addButton( 'h2', 'h2', '<h2>', '</h2>', '', 'h2タグ', 1 );
QTags.addButton( 'h3', 'h3', '<h3>', '</h3>', '', 'h3タグ', 1 );
QTags.addButton( 'h4', 'h4', '<h4>', '</h4>', '', 'h4タグ', 1 );
QTags.addButton( 'h5', 'h5', '<h5>', '</h5>', '', 'h5タグ', 1 );

QTags.addButton( 'br', 'br', '<br>', '', '', 'brタグ', 1 );
QTags.addButton( '改行', '改行', '&nbsp;', '', '', '改行タグ', 1 );

QTags.addButton( '分割', '分割', '<!--nextpage-->', '', '', '分割タグ', 120 );
QTags.addButton( 'コード', 'コード', '<pre class="highlight">', '</pre>', '', 'コード', 130 );

QTags.addButton( '中央', '中央', '<div class="single-center">', '</div>', '', '中央寄せ', 130 );
QTags.addButton( '右', '右', '<div class="single-right">', '</div>', '', '右寄せ', 130 );
QTags.addButton( '引用1', '引用1', '<blockquote class="blockquote-style1">', '</blockquote>', '', 'blockquote1タグ', 41 );
QTags.addButton( '引用2', '引用2', '<blockquote class="blockquote-style2">', '</blockquote>', '', 'blockquote2タグ', 42 );
QTags.addButton( '引用3', '引用3', '<blockquote class="blockquote-style3">', '</blockquote>', '', 'blockquote2タグ', 43 );
</script>
<?php }}
add_action( 'admin_print_footer_scripts', 'custom_add_quicktags' );
//投稿・固定・カテゴリ・タグページにJavaScriptを追加
function admin_script() {
wp_enqueue_script( 'admin_script', get_template_directory_uri().'/js/jquery-1.11.1.min.js', array('jquery'));
wp_enqueue_script( 'seo_admin_script', get_template_directory_uri().'/js/seo.js', array('jquery'), '', true);

}
add_action("admin_print_scripts-post-new.php", "admin_script");
add_action("admin_print_scripts-post.php", "admin_script");
add_action("admin_print_scripts-page.php", "admin_script");
add_action ( 'edit_tag_form_fields', 'admin_script');
add_action ( 'edit_category_form_fields', 'admin_script');
//オリジナルページにJavaScriptを追加
function admin_script2() {
wp_enqueue_script( 'admin_script', get_template_directory_uri().'/js/jquery.min.js', array('jquery'));
wp_enqueue_script( 'admin-main_script', get_template_directory_uri().'/js/admin-main.js', array('jquery'));
wp_register_script('mediauploader',get_template_directory_uri() . '/js/mediauploader.js',array( 'jquery' ),false,true);
wp_enqueue_script( 'seo_admin_script', get_template_directory_uri().'/js/seo.js', array('jquery'), '', true);

/* メディアアップローダの javascript API */
wp_enqueue_media();
wp_enqueue_script( 'mediauploader' );

}
add_action("admin_print_scripts-settings_page_original_option", 'admin_script2');
add_action("admin_print_scripts-settings_page_original_option2", 'admin_script2');

/*プロフィール*/
add_action("admin_print_scripts-profile.php", 'admin_script2');
add_action("admin_print_scripts-user-edit.php", 'admin_script2');
add_action("admin_print_scripts-user-new.php", 'admin_script2');


 

//管理画面CSSの追加
function my_admin_style(){
wp_enqueue_style( 'my_admin_style', get_template_directory_uri().'/css/admin-style.css' );}
add_action( 'admin_enqueue_scripts', 'my_admin_style' );

// パンくずリスト
function breadcrumb(){
global $post;
$str ='';
if(!is_admin()){
$str.= '<div id="breadcrumb" class="cf"><div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">';
$str.= '<a href="'. home_url() .'" itemprop="url"><span itemprop="title">Home</span></a> ＞</div>';
 
if(is_category()) {
$cat = get_queried_object();
if($cat -> parent != 0){
$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
foreach($ancestors as $ancestor){
$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a> ＞</div>';
}}
$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a></div>';
} elseif(is_page()){

if($post -> post_parent != 0 ){
$ancestors = array_reverse(get_post_ancestors( $post->ID ));
foreach($ancestors as $ancestor){
$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_permalink($ancestor).'" itemprop="url"><span itemprop="title">'. get_the_title($ancestor) .'</span></a> ＞</div>';
}

}

} elseif(is_singular( 'tide_level' )){
$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. home_url().'/tide-level-area" itemprop="url"><span itemprop="title">【潮位】全国から探す</span></a> ＞</div>';
} elseif(is_single()){
$categories = array_reverse(get_the_category($post->ID));
$cat = $categories[0];
if($cat -> parent != 0){
$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
foreach($ancestors as $ancestor){
$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($ancestor).'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor). '</span></a> ＞</div>';
}}
$str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> ＞</div>';


}elseif(is_search()){

global $search_title;

if (isset($_GET['s']) && empty($_GET['s'])) {
$search_title = '全ての一覧';
} else {
$search_title = get_search_query(false);
}
$str.='<div class="pan-s">検索結果 &rdquo;'. $search_title .'&rdquo;</div>';

}elseif(is_home() && is_paged()){

$str.='<div class="pan-s">過去の一覧</div>';

} else{
if(is_tag()){		
$name = single_tag_title('', false);
$tag = get_term_by('name', $name, 'post_tag');
$tag_link = get_tag_link($tag->term_id);
$str.='<div><a href="'. $tag_link.'" itemprop="url"><span itemprop="title">'. wp_title('', false) .'</span></a></div>';
}else{
$str.='<div class="pan-s">'. wp_title('', false) .'</div>';
}}
$str.='</div>';
}
echo $str;
}
//件数を取得
function result_count_op() {
global $wp_query;
global $total_end;
global $total_op;
$paged_op = get_query_var( 'paged' ) - 1;
$post_page_op   = get_query_var( 'posts_per_page' );
$count_op = $total_op = $wp_query->post_count;

$from_op  = 0;
if ( 0 < $post_page_op ) {
$total_op = $wp_query->found_posts;
if ( 0 < $paged_op )
$from_op  = $paged_op * $post_page_op;
}

if( 1 <= $count_op){
//1件以上の該当がある場合
$from_count = number_format($from_op + 1);
$end_count = number_format($from_op + $count_op);
$total_end = $from_count.'～'.$end_count;
echo '全'.number_format($total_op).'件中 '.$total_end.'件目を表示';

}
}

//ページネーションを追加
function pagination($pages = '', $range = 2){
$showitems = ($range * 2)+1;  
global $paged;
global $total_end;
global $total_op;
//echo $pages;

if(empty($paged)) $paged = 1;
if($pages == ''){
global $wp_query;
$pages = $wp_query->max_num_pages;

if(!$pages){$pages = 1;}} 
if(1 != $pages){


//PC版
echo "<div class=\"pagination\"><ul>";
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class=\"list-first\" href='".get_pagenum_link(1)."'>&laquo; 最初</a>";
if($paged > 1 ) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo; 前へ</a></li>";
for ($i=1; $i <= $pages; $i++)
{if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
}}
if ($paged < $pages ) echo "<a href=\"".get_pagenum_link($paged + 1)."\">次へ &rsaquo;</a>";
if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class=\"list-last\" href='".get_pagenum_link($pages)."'>最後 &raquo;</a>";
echo "</ul></div>";
//スマホ版
echo '<div class="pages-sp">';
if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class=\"pages-link\" href='".get_pagenum_link(1)."'>&laquo; 最初</a>";
if($paged > 1 ) echo "<a class=\"pages-link\" href='".get_pagenum_link($paged - 1)."'>&lsaquo; 前へ</a>";
for ($i=1; $i <= $pages; $i++)
{if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
{
}}
if ($paged < $pages ) echo "<a class=\"pages-link\" href=\"".get_pagenum_link($paged + 1)."\">次へ &rsaquo;</a>";
if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a class=\"pages-link\" href='".get_pagenum_link($pages)."'>最後 &raquo;</a>";
echo '</div><div class="sp-page-count">'.$total_end .'件目 / 全'.$total_op.'件</div>';
}}


//投稿ページオプションスタート
//作成画面SEO
function add_seo_box() {
add_meta_box('works_info', 'SEO設定', 'seo_info_form', 'post', 'normal', 'high');
add_meta_box('works_info', 'SEO設定', 'seo_info_form', 'page', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_seo_box');
function seo_info_form() {  
global $post;
wp_nonce_field(wp_create_nonce(__FILE__), 'my_nonce');
?>
<?php $seo_etc = get_post_meta($post->ID, 'seo_etc', true);
if(!$seo_etc){$seo_etc = array('seo_keywords' => '','seo_descript' => '');}
?>
<div id="works_info">
<p><label>keywords：キーワードが複数ある場合は , (半角カンマ)で区切ってください <br />
<input type="text" name="seo_keywords" value="<?php echo wp_filter_nohtml_kses($seo_etc[seo_keywords]); ?>"  style="width:80%" /></label></p> 
<p><label>description： 全角120文字以内が目安です<br />
<textarea id="seo_description" name="seo_descript" rows="3" style="width:80%;"><?php echo wp_filter_nohtml_kses($seo_etc[seo_descript]); ?></textarea></label></p>
<p><label><input type="checkbox" <?php checked(wp_filter_nohtml_kses($seo_etc[seo_site_title]), 1 ); ?> name="seo_site_title" value="1">サイト名を表示しない</label></p>
<span class="counter-w" >現在の文字数は </span> 文字です<br />
※keywords・descriptionの未入力は、省略されます<br />
</div>
<?php
}
//投稿ページオプションの処理
function my_box_save($post_id) {
global $post;
$my_nonce = isset($_POST['my_nonce']) ? $_POST['my_nonce'] : null;
if(!wp_verify_nonce($my_nonce, wp_create_nonce(__FILE__))) {  
return $post_id;
}
if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {return $post_id; }
if(!current_user_can('edit_post', $post->ID)) {return $post_id; }
if($_POST['post_type'] == 'post' || $_POST['post_type'] == 'page'){
//SEO設定
$seo_site_title = $_POST['seo_site_title'];
$seo_keywords = $_POST['seo_keywords'];
$seo_descript = $_POST['seo_descript'];

if($seo_keywords || $seo_descript || $seo_site_title){
$seo_descript = preg_replace('/\r\n/','', $seo_descript);
update_post_meta( $post_id, 'seo_etc', array(
'seo_site_title' => wp_filter_nohtml_kses($seo_site_title),
'seo_keywords' => wp_filter_nohtml_kses($seo_keywords),
'seo_descript' => wp_filter_nohtml_kses($seo_descript),
));

}else{
delete_post_meta($post->ID, 'seo_etc');
}
//おすすめ設定
$mydata = $_POST['recommend'];
if ($mydata) {
update_post_meta( $post_id, 'recommend', wp_filter_nohtml_kses($mydata)) ;
} else{
delete_post_meta( $post_id, 'recommend' ) ;
}

//アクセス数
$mydata2 = $_POST['view'];
if( ! $mydata2){
update_post_meta( $post_id, 'view', wp_filter_nohtml_kses(0) );
}elseif (is_numeric($mydata2)) {
//数字の時の処理
if ($mydata2) {update_post_meta( $post_id, 'view', wp_filter_nohtml_kses($mydata2) );}
}
}}
add_action('save_post', 'my_box_save');
/**投稿ページ おすすめ設定*/
add_action('admin_menu', 'add_layout_custom_box');
function add_layout_custom_box() {
add_meta_box('recommend', 'おすすめのページ設定', 'html_source_for_layout_custom_box', 'post', 'normal', 'high');
}
 
/* 投稿画面に表示するフォームのHTMLソース */
function html_source_for_layout_custom_box() {
?>
<p><label><input type="checkbox" <?php checked(wp_filter_nohtml_kses(get_post_meta( $_GET['post'], 'recommend', true )), on ); ?> name="recommend" value="on">表示する</label></p>
<?php
}
/**投稿ページ アクセス数*/
function add_layout_custom_view() {
add_meta_box('view', 'アクセス数', 'html_source_view', 'post', 'normal', 'low');
}

function html_source_view() {
?>
<label><input type="number" name="view" min="0" value="<?php echo wp_filter_nohtml_kses(get_post_meta($_GET['post'], 'view', true)); ?>"  style="width:30%" /> views（半角数字）</label>
<?php 
}
//管理画面

//カテゴリーツリーを維持させる
function category_tree_retention($args,$post_id){
if($args['checked_ontop'] !== false){
$args['checked_ontop'] = false;
}
return $args;
}
add_filter('wp_terms_checklist_args', 'category_tree_retention',10,2);

//アイキャッチの追加
add_theme_support('post-thumbnails');
add_action( 'customize_register', 'theme_customize_register2' );
function theme_customize_register2($wp_customize) {
}

//アイキャッチ(オリジナル)の追加
add_image_size('img150x150', 150, 150,true);
add_image_size('img300x200', 300, 200,true);
add_image_size('img300x300', 300, 300,true);
add_image_size('img450x450', 450, 450,true);

//ヘッダーの調整
add_action( 'customize_register', 'theme_customize_register' );
function theme_customize_register($wp_customize) {
get_template_part( 'temp/admin/customize' );
}

//ロゴサイズを保存
function theme_logo_size() {
$site_options = get_option('site_options');

if($site_options['logos']){
$theme_logo = $site_options['logos'];
$theme_logo_size = getimagesize($theme_logo);
$site_options = array_merge($site_options, array(
"theme_logo_width" => $theme_logo_size[0],
"theme_logo_height" => $theme_logo_size[1],
));
return update_option('site_options', $site_options);

}}
//プレビュー用
add_action( 'customize_preview_init', 'theme_logo_size' );
//site_options更新時にtheme_logo_sizeを更新
add_action( 'update_option_site_options', 'theme_logo_size' );


/*コメントエリア*/
add_filter('comment_form_default_fields', 'mytheme_remove_url');
function mytheme_remove_url($arg) {

$arg['url'] = '';
// $arg['email'] = '';
return $arg;
}
 
add_filter("comment_form_defaults","my_special_comment_after");
function my_special_comment_after($args){
$args['comment_notes_after'] = '';
return $args;
}

add_filter( 'comment_form_defaults', 'my_title_reply');
function my_title_reply( $defaults){
$defaults['title_reply'] = '';
return $defaults;
}

function mytheme_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment;
extract($args, EXTR_SKIP);

if ( 'div' == $args['style'] ) {
$tag = 'div';
$add_below = 'comment';
} else {
$tag = 'li';
$add_below = 'div-comment';
}
?>
<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
<?php if ( 'div' != $args['style'] ) : ?>
<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
<?php endif; ?>
<div class="comment-author vcard">
<div class="comment-left">
<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
</div>
<div class="comment-right">
<div class="reply">
<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
</div>
<?php printf( __( '<span class="comment-name">%s</span>' ), get_comment_author_link() ); ?>
</div>
<div class="comment-meta commentmetadata">
<?php
/* translators: 1: date, 2: time */
printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
?>
</div>

<div class="comment-text">
<?php if ( $comment->comment_approved == '0' ) : ?>
<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
<?php endif; ?>
<?php comment_text(); ?></div>
<?php if ( 'div' != $args['style'] ) : ?>
</div>
<?php endif; ?>
</div>
<?php
}
function enable_threaded_comments(){
if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {

wp_enqueue_script('comment-reply');
}}
add_action('get_header', 'enable_threaded_comments');

//追加分
function get_comment_only_number() {
global $wpdb, $tablecomments, $post;
$comments = $wpdb->get_results("SELECT * FROM $wpdb->comments WHERE comment_post_ID = $post->ID AND
comment_type NOT REGEXP '^(trackback|pingback)$' AND comment_approved = '1'");
$cnt = count($comments);
return $cnt;
}

function mytheme_pings($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<li><p><?php printf(__('%s'), get_comment_author_link()) ?><span class="trackback-edit"><?php edit_comment_link(__('(Edit)'),'  ','') ?></span></p>

<?php }

//クッキーのセット
function set_cookie() {
if(is_single()){
$postid = get_the_ID();

if($_COOKIE['single']){
//クッキーあり
$array_cookie = $_COOKIE['single'];
//最終番号を取得
$end_no = end(array_keys($array_cookie));
krsort($array_cookie);
$tmp = array();
foreach($array_cookie as $key => $value){
if(!in_array($value, $tmp)){
$tmp[] =  $value;
//echo $key;
}else{
//重複した配列キー
$array_no =$key;
}
}//foreach($array_cookie
$cookie_count = 'single['.($end_no+1).']';

//重複クッキーを削除
if($array_no){setcookie('single['.$array_no.']','', time() - 60, '/', '', FALSE, TRUE );}

if(!in_array($postid, $_COOKIE['single'])){
$view = get_post_meta($postid,"view",true);
update_post_meta($postid, 'view', wp_filter_nohtml_kses($view+1));
}//in_array

}else{
//クッキーなし
$cookie_count = 'single[1]';
$view = get_post_meta($postid,"view",true);
update_post_meta($postid, 'view', wp_filter_nohtml_kses($view+1));
}//if($_COOKIE['single']){

//クッキーをセット
setcookie($cookie_count , wp_filter_nohtml_kses($postid), time() + 60*60*24*wp_filter_nohtml_kses(get_option('cookie_date')), '/', '', FALSE, TRUE );

}//if(is_single()
}////クッキーのセット

/*クッキー機能が無効な場合は機能停止*/
if(get_option('cookie_radio')){
/**クッキーセット*/
add_action( 'get_header', 'set_cookie');
/*閲覧履歴*/
get_template_part('temp/widgets/temp3');
/*ランキング*/
get_template_part('temp/widgets/temp4');
/**投稿ページ アクセス数*/
add_action('admin_menu', 'add_layout_custom_view');
}

/*ウィジェット追加 */

/*最新の投稿*/
get_template_part('temp/widgets/temp1');
/*人気の記事*/
get_template_part('temp/widgets/temp2');
/*プロフィール*/
get_template_part('temp/widgets/temp5');

/*バナー用*/
get_template_part('temp/widgets/temp6');


//タグクラウドの調整
function ex_wp_tag_cloud( $tags ) {
$match = array("/ style='font-size: \d+(\.)*\d*(pt|px|em|\%);'/i",);
return preg_replace( $match, '',  $tags );
}
add_filter( 'wp_tag_cloud', 'ex_wp_tag_cloud' );

//カテゴリとアーカイブウィジェットの件数編集
function wp_list_categories_archives( $output ) {
$output = str_replace("&nbsp;", " ", $output);
$output = preg_replace('/<\/a> \((\b\d{1,3}(,\d{3})*\b)\)/', ' (${1})</a>', $output);
$output = preg_replace('/<\/a> \(([0-9]*)\)/', ' (${1})</a>', $output);

return $output;
}
add_filter( 'wp_list_categories', 'wp_list_categories_archives', 10, 2 );
add_filter( 'get_archives_link', 'wp_list_categories_archives', 10, 2 );

/*ウィジェットエリアの登録 */
if ( function_exists('register_sidebar') ) {

register_sidebar(array(
'name' => 'サイドバー(共通)',
'id' => 'sidebar',
'before_widget' => '<div class="sidebar_block">',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded">',
'after_title' => '</h2>',
));
register_sidebar( array(
'name' => '投稿ページ 上',
'id' => 'single_sidebar_pc1',
'description'   => 'SNSボタンの下に表示されます(PC用)',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded2">',
'after_title' => '</h2>',
));
register_sidebar(array(
'name' => '投稿ページ 中',
'id' => 'single_sidebar_pc2',
'description'   => '関連記事とコメント欄の間に表示されます(PC用)',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded2">',
'after_title' => '</h2>',
));
register_sidebar(array(
'name' => '投稿ページ 下',
'id' => 'single_sidebar_pc3',
'description'   => '投稿記事の一番下に表示されます(PC用)',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded2">',
'after_title' => '</h2>',
));
register_sidebar(array(
'name' => '固定ページ',
'id' => 'page_sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded">',
'after_title' => '</h2>',
));
register_sidebar(array(
'name' => 'トップページ',
'id' => 'home_sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded">',
'after_title' => '</h2>',
));
register_sidebar(array(
'name' => '一覧ページ',
'id' => 'list_sidebar',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded">',
'after_title' => '</h2>',
));
register_sidebar(array(
'name' => 'フッター',
'id' => 'footer_sidebar',
'before_widget' => '<div class="site-info-area">',
'after_widget' => '</div>',
'before_title' => '<div class="footer-title">',
'after_title' => '</div>',
));
register_sidebar(array(
'name' => 'エラーページ',
'id' => 'single_sidebar_404',
'description'   => '記事が無い場合など、エラーページの下に表示されます(全ページ共通)',
'before_widget' => '<div>',
'after_widget' => '</div>',
'before_title' => '<h2 class="rounded2">',
'after_title' => '</h2>',
));

}

//カテゴリ・タグを削除した際にオプションも削除

add_action ( 'delete_term', 'seo_category_delete');
function seo_category_delete( $term_id ) {
if ( ! empty( $_POST ) && current_user_can( 'manage_categories' ) ) {
delete_option('term_' . $term_id);
}}

add_action ( 'edit_tag_form_fields', 'seo_category_fields');
add_action ( 'edit_category_form_fields', 'seo_category_fields');
function seo_category_fields( $tag ) {
$t_id = $tag->term_id;
$term_meta = get_option( 'term_'.$t_id);
?>
<tr class="form-field">
<th><label for="extra_text">keywords</label></th>
<td><input type="text" name="seo_key" id="seo_key" size="25" value="<?php if(isset ( $term_meta['seo_key'])){ echo esc_html($term_meta['seo_key']);} ?>" /><br />
【SEO設定】キーワードが複数ある場合は , (半角カンマ)で区切ってください
</td>
</tr>
<tr class="form-field">
<th><label for="upload_image">description</label></th>
<td>
<textarea id="seo_description" class="large-text" cols="50" rows="5" name="seo_description"><?php if(isset ( $term_meta['seo_description'])){ echo esc_textarea($term_meta['seo_description']);} ?></textarea><br />
【SEO設定】 全角120文字以内が目安です　<span class="counter-w" >現在の文字数は </span> 文字です<br />
</td>
</tr>
<?php wp_nonce_field( 'original_category_action','original_category_nonce_field' ); ?>
<?php }
add_action ( 'edit_terms', 'save_seo_category_fileds');
function save_seo_category_fileds( $term_id) {
//カスタムメニュー対策
global $hook_suffix;
if($hook_suffix=="nav-menus.php"){
}else{
// チェック
if ( ! empty( $_POST ) && check_admin_referer( 'original_category_action','original_category_nonce_field' ) && current_user_can( 'manage_categories' ) ) {
update_option( "term_".$term_id, array(
"seo_key" => wp_filter_nohtml_kses($_POST['seo_key']),
"seo_description" => wp_filter_post_kses($_POST['seo_description']),)
);
}
}
}

/*カスタムメニューに対応 */
add_theme_support( 'menus' );

//プロフィール
add_action( 'edit_user_profile', 'add_profile_fields' );
add_action( 'show_user_profile', 'add_profile_fields' );
function add_profile_fields( $user ) {
if(current_user_can( 'edit_published_posts' )){
?>
<h3>オリジナル自己紹介(ウィジェット用)</h3>
<?php $org_profile = get_the_author_meta( 'original_profile', $user->ID ); ?>
<table class="form-table">
<tr>
<th>名前</th>
<td>
<input type="text" name="original_profile_name" id="original_profile_name" size="25" value="<?php if(isset ($org_profile['original_profile_name'])){ echo wp_filter_nohtml_kses($org_profile['original_profile_name']);} ?>" /><br />
</td>
</tr>
</table>
<table class="form-table">
<tr>
<th>追加項目<br />
(出身地・趣味など)
</th>
<td>
<input type="text" name="original_profile_area" id="original_profile_area" size="25" value="<?php if(isset ($org_profile['original_profile_area'])){ echo wp_filter_post_kses($org_profile['original_profile_area']);} ?>" /><br />
</td>
</tr>
</table>
<table class="form-table">
<tr>
<th>自己紹介</th>
<td>
<textarea name="original_profiles" rows="10"><?php if(isset ($org_profile['original_profiles'])){ echo wp_filter_post_kses($org_profile['original_profiles']);} ?></textarea><br />
<span class="description">ここに自己紹介文を入力してください。</span>
</td>
</tr>
</table>
<table class="form-table">
<tr>
<th>画像</th>
<td>
<div class="img-choose"><div class="img-left">
<input name="mediaid0" type="text" value="<?php if(isset ($org_profile['original_profile_img'])){ echo wp_filter_nohtml_kses($org_profile['original_profile_img']);} ?>" />
<input type="button" name="media0" value="選択" />
<input type="button" name="media-clear0" class="media-clear" value="クリア" /></div>
<div id="media0"><?php if(isset ($org_profile['original_profile_img'])){$org_profile_img = $org_profile['original_profile_img'];}
echo wp_get_attachment_image( wp_filter_nohtml_kses($org_profile_img)); ?></div></div>
</td>
</tr>
</table>
<hr />
<?php wp_nonce_field( 'profile_option_action','profile_option_nonce_field' ); ?>
<?php
}}
add_action( 'profile_update', 'save_profile_fields' );
function save_profile_fields( $user_id ) {
// チェック
if ( ! empty( $_POST ) && check_admin_referer( 'profile_option_action','profile_option_nonce_field' ) && current_user_can( 'edit_published_posts' ) ) {
update_usermeta( $user_id, 'original_profile', array(
"original_profile_name" => wp_filter_nohtml_kses($_POST['original_profile_name']),
"original_profile_area" => wp_filter_post_kses($_POST['original_profile_area']),
"original_profiles" => wp_filter_post_kses($_POST['original_profiles']),
"original_profile_img" => wp_filter_nohtml_kses($_POST['mediaid0']),
));
}}

add_action('delete_user', 'deleteMetaTerm');
function deleteMetaTerm($user_id){
//ユーザーが削除されたら項目も削除
delete_user_meta($user_id, 'original_profile');
}