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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tushar portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ma!<HaFE>p;xhbyds$J^!i(/6w{$i`aH3?kWK|xMg?jmjlS!#hkSUGe.{/4 ;~!z' );
define( 'SECURE_AUTH_KEY',  'LWdV@V,Y}~<!x /%%}@,S2yjh/=]wAbvx_[43YtG%v 53i4tRuPH,59o<4I={5b!' );
define( 'LOGGED_IN_KEY',    'ls2.)govcq_%4y{;VM.VviH|!SBvH7UF=NnWZn3bF.]8)+_X-X$>]!0 }`6BitaQ' );
define( 'NONCE_KEY',        '-tumT[Gx6Yt?;<%;CSPh)e_yC2<7`+>wT-EEMex]g^[l)ThCyF2/EdLed--s,%io' );
define( 'AUTH_SALT',        'Sg7d!VMR?ONS>wlb?o:]qsqzjw8VK^>#xT?yVLk4,h?i<MHIireYSa}8*gH(~a#b' );
define( 'SECURE_AUTH_SALT', '8+Yw:V)jb(m1`*Wf=t4M=Wa<>fe{eql{u?W7SM3agIP8/7Nt ;WT#9Q[in{X2bc=' );
define( 'LOGGED_IN_SALT',   '0hlcS0D cA+W<).H JQlg@KdCV/.]Qks%a1g5vEcTdR2<l%?u+IX92-WbHWQL,HC' );
define( 'NONCE_SALT',       'II1viVzh=ap$NJ~/Z&<^+TjpO*B67q034q/]i 0Zntry;ZI]:9!fYZuX|wAQDu3g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
