<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=L%:BH:_z)sTvG7zA<v;Cya#0&)DS/6G,^g@n*~JqG0)6d;P3Y]xX](+ob!RBu$-' );
define( 'SECURE_AUTH_KEY',  '!sBdZk/]a;^]Co8#|#]CoQ4t>{caF4~#%E($kTjDN0^hogn4},mt}b@%_Gw?gR*s' );
define( 'LOGGED_IN_KEY',    '8y]TNT{P+oE@~CLv 1mjaoz2{p6glX+Nu{;6QpH-t$P%9yGur_1_=}+kOPQ|a2/>' );
define( 'NONCE_KEY',        's_t]t[J3E6H7;g#EXd&R@gFa;beu^Pu?n,<^o^<@+#kvOYK(8{*/Q)shV`9!:5}|' );
define( 'AUTH_SALT',        '|o -D$3`745&0>N>gS66nw}ymi[UJ@fYd-W~9Hc:Z?:p[EP4+~U_uyf%tO]K`>s^' );
define( 'SECURE_AUTH_SALT', 'QdTi%W+J&2t1X&q<YAmQz7[|{4>`Fdzb(2B%,?loVPi-=X5^|st&4<KkvF$[<8Ib' );
define( 'LOGGED_IN_SALT',   'ABET2j[!C3e@~~FG]UAtr<;DeUV(O<$QM*v)=<ui#KuELEw:I}6w,V%<EZXd/h<c' );
define( 'NONCE_SALT',       ':$fC!dRBK&OamG+HA,9eC!oV<7Fd:1q [>3Y9!To5&BXb+H@N.T&>}h%+-OHP*hA' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
