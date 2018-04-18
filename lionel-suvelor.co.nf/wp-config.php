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
define('DB_NAME', '2617977_wordpress');

/** MySQL database username */
define('DB_USER', '2617977_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'MIGHTYDUCKS29');

/** MySQL hostname */
define('DB_HOST', 'fdb18.biz.nf');

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
define('AUTH_KEY',         'b aR/z.]|=)Pw!_D8T%^_]VT*!=YE}`acC%Jy$#8y,UQ#qwkqj$qY|+C$,ctmvY ');
define('SECURE_AUTH_KEY',  'm#JWW9,/@Od-[h_rI%!zs:Cik>aE%Xhr!(fR`ZGKnkV6T+ICkz#E^,3qx4Yc8/ny');
define('LOGGED_IN_KEY',    'sn((|,3.*#z<-Wn[+xHGCz E`s[:uw< vYJ4+7m*0dO4Zt&_1`[dtWT>NAEAxh}k');
define('NONCE_KEY',        '.!p=.F_xm&%y;OIQ0vin}Q2>HXbp?aq8$tv.ugqAXmB9TqX4@=qe!=*9&RYyqb_,');
define('AUTH_SALT',        'U/lId1P 9RN_*kztovd]mb2a;QIyiH Zf#OYUW%nHn0Ob;, <*kAJ,a<d2MnhPE,');
define('SECURE_AUTH_SALT', 'Z0t}%m8<LmhmGVkDFdx,Z{.[%A n0UZ>8i7scZmx)C{Y=xDze4MYnQosj8zW1U17');
define('LOGGED_IN_SALT',   ']]! N!9?XVSMe0{kwET{V#G$mkr2cWW-Osf&[Py%!j`z>Nmv|o7D=)^`1T>vmD0D');
define('NONCE_SALT',       '`2m=k cCx};AA7^ON:7kR;)=aeW0%Hy/kQ{@Vy]*zxvAm:wSu{s>Vu6z&A|a]X_H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
