<?php

/**
 * The base configurations of the WordPress.
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - こちらの情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'lkcodetest_0806test');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'lkcodetest');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'wplumikojo240715');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql57.lkcodetest.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースのキャラクターセット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')AhvmO+3z^Xnu[K[DdD9/_lS5HZZTil@<mmpw(X^z*Na%BbO<q@[pus{ipDOmmFy');
define('SECURE_AUTH_KEY',  '_Wf0$<eX(CT| ,kq$/#-y#KX6YjVNx=%ShK1Aq|,M)2`FWpP&y0[+`jsFS0t5jm/');
define('LOGGED_IN_KEY',    'kE`|VkA F-/@zmR0~zktPel+?>VG!?%w >]Bs;]RBF0nL!EN@bx+}3{6AoW=01X8');
define('NONCE_KEY',        '*{_@Akh%_fY*IdmZO#D/%( (H?tQ<^t@C@,TI6}/$KA+9!yE/+GhLDLXhoE#Y,:f');
define('AUTH_SALT',        '%?$Suke_Sy55N#5YN]P3ByKH3OA+_#WFQT[J_d ]=Rc[d cORi%`p)k62&Nk0drc');
define('SECURE_AUTH_SALT', 'v/Ki|YPM:PHhQzCsnV$VjF#I3)cEl{hF`x:.a1hk0wZQ*R**ZF[=U,rX? 4v8gZn');
define('LOGGED_IN_SALT',   'PV C>XT#O<{Q^N!PwWC28qo7.*O!,q2I~| HqIIECG:%i@b$,5EXw+pF?wIrT8}%');
define('NONCE_SALT',       'eIV_-TRApgr=8ZM8`kDVPj`@aah/3m8vtBFlok$Y*2-@9lj?)IQ.YIJz11}tPmn.');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp4b737a';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。例えば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定することでドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');
/** コンタクトフォームのPタグ不要 */
define('WPCF7_AUTOP', false);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
