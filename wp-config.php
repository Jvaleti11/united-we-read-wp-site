<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'united-we-read-wp-site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'La7%Oy~^mUDPqyjHg3]Uy+(!vjS~t^n,M(|CFf$T5Cz>s*/N4|5e;@nUul,K,qqx');
define('SECURE_AUTH_KEY',  '>T:ix@3}pi2TWsNm#K]~6r-iD]PrS|KM(lKdVTC^i%JhN?g:|/8CFs1h(:!e)Fh2');
define('LOGGED_IN_KEY',    'wNyk07+0 ,$)wd64>-E!PBK?)l?Q?jWEM7q:#d*G?1d:B9ksctCb1|.`H>[xHa_a');
define('NONCE_KEY',        'a|tMgA&yz ,]L(xK#lVKyc,)Os|_2p2FK#%:8ra gwl[s{1J$rt0~8DCU=#0}8{~');
define('AUTH_SALT',        'bTW2+tnLC19K ka>03z6>RdPyz:l6jpiby$[&SEaI?nC+%?B&K4fyRpAr3-LD=yc');
define('SECURE_AUTH_SALT', 'nr~vd_p{pZwwa(l9WC>/ovz}y=eQ[S9(MspH9 aIm#M&o?x[7N_bY1jg~rluD{=H');
define('LOGGED_IN_SALT',   '%g7JFOFL_D@d)q<5Fl2CVK762sfAe*{k]=l%2+.mAeZj@0g@Y} +<#hKqp);i*YV');
define('NONCE_SALT',       ')0shn&|TCYE[YMh0Z|5e.z]$Llr@TY+W/ y{(%AvK1y1GU6e)dWp~%N||6)$r+n_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uwrwps';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
