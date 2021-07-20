<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'sotakuji2_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'sotakuji2' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'u2fk_hsbz' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql706.db.sakura.ne.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gJ|A>X^H#^20t$`w)KWke;l2dDEveK?UJSOaYL8v.ogN.aasJl{K: eYPTvz`6qF' );
define( 'SECURE_AUTH_KEY',  '(jcS7=%8Ke5a%hMW~SgjSUK=d%EGBi1l}Icv}XR-o]B 4teI=/nsrj<9h!wn1)a}' );
define( 'LOGGED_IN_KEY',    'l);#YH+4+#gzGl9$s_f:`*1mff|++O}_)SY;h Je}nn*FM=>i(1x4f.-yEx%vHN1' );
define( 'NONCE_KEY',        '=Q,J,1jsD)7AnvxnN7[CPL(ZURr|,OsZ5K$&v93JLl&;7s`NciA&2]++yAh0NO,$' );
define( 'AUTH_SALT',        ' )|1i~RO.;yozW^,Y&r7bEd H;z<!9eqo:I$asi:,MV^2FTW_Tr)EJ3mbyVsMo*)' );
define( 'SECURE_AUTH_SALT', '{OGF=8HM%Enmnv9|@]1(d5Oy:VnA#]0n{X0>^xc9ORj#~_JrlR[>G};Dk<gP0zt6' );
define( 'LOGGED_IN_SALT',   'F8$cf_G#6e40lf-MEwVPc`]h5vNQhNEY*M8?f3r0=(:<}Y)q$L. )f#1iu*N}{-{' );
define( 'NONCE_SALT',       'F?*hM^6>s<pHr;J71X f& rNBOo0Z(ofVy|[*U?OQmc;e}6NBlB>2rA>W%1>;%Wt' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** contact form7の自動改行を削除する */
define( 'WPCF7_AUTOP', false );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


