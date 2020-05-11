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
define( 'DB_NAME', 'quinton_db' );

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
define( 'AUTH_KEY',         '$XF<wp5LtH2 mS5R+!Vy[5m6Z:<_uu}~T;0~)< r*s{RvY_xFS($1E;yv$fV_16@' );
define( 'SECURE_AUTH_KEY',  'GH$;5/G#W@ncrLgRu?*D,OXjh2[MOih}Iw4M1I-8KoUmip7S<]r h&({0AV<b-iJ' );
define( 'LOGGED_IN_KEY',    'r ,-QG >iK6/6h8C^Y89a%PnoP+9f8:4,8Pj[WG?F>,sqYw!C`dl1tT!8%}3VIi[' );
define( 'NONCE_KEY',        'I#mac1!e28Il&MsG}-;]WUG^?m8dg9N~eZ, }]rbV[;!s*Rf3pA]B9x<35f(fHWG' );
define( 'AUTH_SALT',        '-k8|kUy:-x*yRrGPB&!]A|4($$eY+<OryVhZ,R_=eBH8?cp67b1r5`jU:;~0b7B>' );
define( 'SECURE_AUTH_SALT', 'zgH6{zV)Hx.yWd!WL.%E*=3#2>gr^fkDV)]VhftS/m&}[)=4=)iw&AdX95t@/Rp<' );
define( 'LOGGED_IN_SALT',   '~RIyBiO%=WcjPll$*=*lNl!Hw/mq+`EKY/d@_t4jbF]td_h@|%9A15)9z!3v*aiy' );
define( 'NONCE_SALT',       '?`}OnX%/9[zeo>j2:zVtk{gnw}i)[V4QGdA,45?xFk:GPg=b q^WE&sg572F*q$5' );

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
