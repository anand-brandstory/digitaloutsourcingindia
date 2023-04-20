<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digit3sw_db' );

/** Database username */
define( 'DB_USER', 'digit3sw_dbuser' );

/** Database password */
define( 'DB_PASSWORD', 'xBb@Ej*7F7b0' );

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
define( 'AUTH_KEY',         't}Tg-lAoTJR4a_i(Z9OXX5b.Fm?F7&Cn,HTeS}#_qMkL{$g,V[4:-/`Zq7-V;#63' );
define( 'SECURE_AUTH_KEY',  'K+X(S9]U@&_r};^PVkd$F0)[T?czkHxTGGw4%/qt@b ld2 QV7yNR4hS[Aw9q$y.' );
define( 'LOGGED_IN_KEY',    'WZ*|Ng7Q|>W=)tF0n@MreGom+s~CAo^F_)2PX_8$t9QFv2s Y;Pdc e@Dzpx%Hm:' );
define( 'NONCE_KEY',        '86-k$O}9l2S#K_~1g3nlE2xgT}b=,Mw8#LCdu;ZbNw#UU*I<BOl@nTw@as[B7Nr0' );
define( 'AUTH_SALT',        'sp7{vss-=Wqpt`<h2Cv%H$bky0)j+}hc~Hs_Lf0Bn^w#6_4}T#bJR~3[pOlfp_;N' );
define( 'SECURE_AUTH_SALT', '&AC:@vg`0--,t{3lVNinA))P|Pb9b.+11*[>m1PC:<D}_a/-?c=ZaGp8x_UtynYA' );
define( 'LOGGED_IN_SALT',   '3=zL+Vi)~S]t9lG ~~4nQ27:JQI$i>mv:@@>)G{}f^(Txj q7^&mf&C3uyf6}Th{' );
define( 'NONCE_SALT',       '0sS|XV yrW%~)?zf|Dsr7!rZNHoWQ~^BD`2<UY<shexz.TS2E(6@wdJ,<ngP%PRo' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
