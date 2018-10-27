<?php
/**
 * Provides a notification everytime the theme is updated
 * Original code courtesy of João Araújo of Unisphere Design - http://themeforest.net/user/unisphere
 */

function update_notifier_menu() {  

global $xml;
global $theme_data;

$xml = get_latest_theme_version(21600);//6時間
$theme_data = get_theme_data(TEMPLATEPATH . '/style.css');

if(version_compare($theme_data['Version'], $xml->latest) == -1) {
add_dashboard_page( $theme_data['Name'] . 'Theme Updates','テーマの更新<span class="update-plugins count-1"><span class="update-count">New</span></span>', 'administrator', strtolower($theme_data['Name']) . '-updates', update_notifier);
}
}  
add_action('admin_menu', 'update_notifier_menu');


function update_notifier() { 
$xml = get_latest_theme_version(21600); //6時間
$theme_data = get_theme_data(TEMPLATEPATH . '/style.css');?>
	
<style>
.update-nag {display: none;}
#instructions {max-width: 800px;}
h3.title {margin: 30px 0 0 0; padding: 30px 0 0 0; border-top: 1px solid #ddd;}
</style>

<div class="wrap">
<div id="icon-tools" class="icon32"></div>
<h2><?php echo $theme_data['Name']; ?> テーマの更新情報</h2>
<div id="message" class="updated below-h2"><p><strong>現在ご利用中のテーマ <?php echo $theme_data['Name']; ?> の最新版が公開されています。　</strong>現在利用中のバージョンは【<strong> <?php echo $theme_data['Version']; ?> </strong>】です。最新の 【<strong> <?php echo $xml->latest; ?> </strong>】に更新できます。</p></div>
        
<img style="float: left; margin: 0 20px 20px 0; border: 1px solid #ddd;" src="<?php echo get_bloginfo( 'template_url' ) . '/screenshot.png'; ?>" />
   
   
   
        
<div id="instructions" style="max-width: 800px;">


【 <a href="http://192.168.10.4/abc/simple.zip">最新版のテーマをダウンロードする</a> 

<h3>Update Download and Instructions</h3>
<p><strong>Please note:</strong> make a <strong>backup</strong> of the Theme inside your WordPress installation folder <strong>/wp-content/themes/<?php echo strtolower($theme_data['Name']); ?>/</strong></p>
<p>To update the Theme, login to your account, head over to your <strong>downloads</strong> section and re-download the theme like you did when you bought it.</p>
<p>Extract the zip's contents, look for the extracted theme folder, and after you have all the new files upload them using FTP to the <strong>/wp-content/themes/<?php echo strtolower($theme_data['Name']); ?>/</strong> folder overwriting the old ones (this is why it's important to backup any changes you've made to the theme files).</p>
<p>If you didn't make any changes to the theme files, you are free to overwrite them with the new ones without the risk of losing theme settings, pages, posts, etc, and backwards compatibility is guaranteed.</p>
</div>
        
<div class="clear"></div>
	    
<h3 class="title">Changelog</h3>
<?php echo $xml->changelog; ?>

</div>
    
<?php } 
function get_latest_theme_version($interval) {

$notifier_file_url = 'http://192.168.10.4/abc/notifier.xml';
	
$db_cache_field = 'theme-notifier-cache';
$db_cache_field_last_updated = 'theme-notifier-last-updated';
$last = get_option( $db_cache_field_last_updated );
$now = time();

if ( !$last || (( $now - $last ) > $interval) ) {

if( function_exists('curl_init') ) { 
$ch = curl_init($notifier_file_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$cache = curl_exec($ch);
curl_close($ch);
} else {
$cache = file_get_contents($notifier_file_url);
}
		
if ($cache) {			
update_option( $db_cache_field, $cache );
update_option( $db_cache_field_last_updated, time() );			
}

$notifier_data = get_option( $db_cache_field );
}else {
$notifier_data = get_option( $db_cache_field );
}
	
$xml = simplexml_load_string($notifier_data); 
return $xml;
}

?>