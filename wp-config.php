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
define('DB_NAME', 'appLandingPage');

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
define('AUTH_KEY',         'NNZ!,e.?Z,{ i+,Vb&uHp.HL94ZG`%nl*6?s?7R4[ O?3R;ck_HW+_G#d]/nI@8r');
define('SECURE_AUTH_KEY',  '.{@o$jdP!1HtD+J+8vFPFfJh|.R7wr]hHJr(sJ|#D$.r<@~~aCV7xzr@+8c$s/yu');
define('LOGGED_IN_KEY',    'J_sJ|vz<%MfSAF0K=qVPn~1]SueTqr;r`JBH8#Y80y%UWpo)6i,Z`Obo2<wT5j{*');
define('NONCE_KEY',        'SqVYB}dNYc=1r]wxPH+4-gZx(=XP|Gb}O<7nar.%wk`szOw=-4[PB[OZ{9C>u,d:');
define('AUTH_SALT',        '%X]p|R0CS1(@r53S:vb6k+%mI5}II:g>zme|@EBC%+=-Idd2%oY??P`ahI0NU7<-');
define('SECURE_AUTH_SALT', 'L8 )5Y%p2WL_ED){uw#ILB_2Efy9em&n8ZH2qDyOT(k&aOLT|X}ZP$BKQeQaK2b4');
define('LOGGED_IN_SALT',   ' yMDsZ/Eavc@bW`+m{!D#IQk,A&]7W{mE;Hxa}N]Cy~KA06#ZrhY1_aV$rK(Zz+c');
define('NONCE_SALT',       'h>XHX@e&9|*D&~PvI2BZ+O$q-TvJM7Ut=tw7seh m&aLK)J;0)<HbK|t+6L[sd{9');

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
