<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'testingwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oap}y|]DmM$; BWvV#*+:OrZ]SWK_0H($hmXUhyH!+j#O-#4nMgVc%*%bxfjP+V&');
define('SECURE_AUTH_KEY',  'KhhUg+-l][pSM%Ap3ZvrgW Aq]6^-BGE;:_.+HHq_t|w4`Pb5Fs-hC8fJ_yu[KMU');
define('LOGGED_IN_KEY',    '1|R/0TfkB!B&_Tx.XG{Etrcf.A|N,+.}->2v2@wLzU9G*PpJM!m4-B|Gv>7;i_ui');
define('NONCE_KEY',        'ZNU-0z-VrlZ1.8r#k+c2wRyUS:@T&LxNWOmL|MztJ8]F%toSLRgkw[-2Zg;|:mm+');
define('AUTH_SALT',        'ZQpp#4cn~s,j78|>rC9h4Qc`q6+ttL1WJBQLo2J+wd]9=]ZZS] $k@y-k/T=n|L=');
define('SECURE_AUTH_SALT', '[15Md7c/#hM3W=`u2f(^vvktZhNr4v+4X?GkPwGP?LXX1?Ng+$r%9H$wI&jl*n0G');
define('LOGGED_IN_SALT',   'E-Lr2gUjm&?p5<2NA6^w;&s(|K}E)`LfjsH;gI!-<eo8&aPAu-+)_J=ou!41]-sa');
define('NONCE_SALT',       'k]NZFr)M{0p mL[%Ul#^USa*V-:+G|tA!N~kzwRnVXaB4$7e#jlhOvp3sLW8ORs*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_DEBUG', true);
define('WP_DEBUG', false);