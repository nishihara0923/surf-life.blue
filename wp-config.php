<?php
/**
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

//if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {$_SERVER['HTTPS'] = 'on';}
 
//define('FORCE_SSL_LOGIN', true);
//define('FORCE_SSL_ADMIN', true);

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'surf-life.blue');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'nishihara4215');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'jdf12eyj6k-5yeFQf54t');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/*FTPを出さない設定 */
define('FS_METHOD','direct');



/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ms~Zrd5PyR)SxX_F.v.jSg`q;=sJ!jgG4AoTe?i)v~%M?kCx@{3P3$2I!]A;hbk@');
define('SECURE_AUTH_KEY',  's)>gh2_uoP[2$(rJ~{;$%r-DEk.BHmw;z;H-2G:dI?dUK&w;(7Kl6Ri}RTC^{z9 ');
define('LOGGED_IN_KEY',    ';u#)a&%eS7-hO7FCpj$l-(C`7B_}I^7 QqLIGn1#&<*ZV,Ce/bGCs7%[-[hBfne4');
define('NONCE_KEY',        'bjL&<dZQbz/Oy9.90kf4IhhXDfe7<Sa#V)-MU`!yIB!{[3.l//JiBAaMtK5n)7; ');
define('AUTH_SALT',        'EV]iSZ|XW_y{__k!q[ bwN0@k]&CFb:<*=EHny f;>!+6H,-hl|p_#azr*oL(>0+');
define('SECURE_AUTH_SALT', '5mG3[(t0uvXVIXsRH(:~pqHk0|xHgUk9(tnrMCqWRe7eaocXm<7PM)G#WV(CVqhN');
define('LOGGED_IN_SALT',   ',7j2U-*pG>q38RKD 3f<0W7CC]H<3:a2C[$/;C]J2(uZ):Inp,J9>/%Au{0%:|Bl');
define('NONCE_SALT',       '!8lGWGJGew3J,>&e5M1Eb??:4&.2Z 6r<Ar~pKO(Aur;l2eR%i8jb?kPHBxc zgo');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/*リビジョン機能停止*/
define('WP_POST_REVISIONS', false);


/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
