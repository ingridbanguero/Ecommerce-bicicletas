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
define( 'DB_NAME', 'prueba' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'h)UVH_SM-O+||=]o{nw%RVW1|w$]ikggYq+l=6U^)3W3%a!+?kbQg=+{R:5}x&$5');
define('SECURE_AUTH_KEY',  'U.[~:?>Q[&c78)hWFsj{K@o-% ~r*~{u7`+^&Xb7-GLEUKA!7V-h.RymBWxjW7+g');
define('LOGGED_IN_KEY',    '7Jz+7RTr=S>MYtiw;?)3Ca(s8W7Q{8VLTUSXyD[1,hV2-NbW!1{+E=uuV`1RVzm_');
define('NONCE_KEY',        '[,Z>H/s|7F+k0SMCcM04cX(_R{|nLl/P1,Y^XnzrZ8L8$-,l;|EiiMH(ZQW@]4Tk');
define('AUTH_SALT',        '8D~D?wn/U.<,vX-,2xokj|;NWnf}0l4h>t<W&<,T[-wf;L%D<5@6<VknEB;mye+<');
define('SECURE_AUTH_SALT', '^sR9:T66}ICEZP&B%!Jw!yDx&vc%2G2Hl,a?M|+V)[+8l7X/Yp+Ot{pZzfYgjx.a');
define('LOGGED_IN_SALT',   'y;0Qga^=e|G#9%a^;Vf<=<&vb.h|:I+F{oMv|Pit-TMT_aTp+TM~%|d(RbOkg/C|');
define('NONCE_SALT',       'kuP-.ky:ESV-:s|Y<ogdP:abb:wNz}c_E$~ln;VOfc+pZf,&4iEYU:pBf1!7.mqr');

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
