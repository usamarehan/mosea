<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u237676922_Z7Sia' );
/** Database username */
define( 'DB_USER', 'u237676922_juZQA' );
/** Database password */
define( 'DB_PASSWORD', '6UeZ4SYvae' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          'wt4I5|);M`+X]sA[)(Vr%Q9~Ri#+q~:>T^lS~4`^mN^cM9$8Hz+3p80-zf<eKyxE' );
define( 'SECURE_AUTH_KEY',   'y;C7u&=F:!@dA{}Po^mDwCUM^$}[l!b9E#CS`rfP{i<^teAKM`^_1w;2$yVfXHM>' );
define( 'LOGGED_IN_KEY',     'zp{04!N4wUL.W^3D%(%Et30F}zf_.uTt/3>eR,g= Cqm@99Dc#?s_sB8f1uZB8b ' );
define( 'NONCE_KEY',         '~X|R,g,/Kh[4 <6Z}L9m+@HP&?|_-6a15^!988A7ixW%.b3LuR@3=l%9Ln!&$2_R' );
define( 'AUTH_SALT',         '_NB7o-c!rfT+Rd9>{XYquP!gPt9*E8czD<8|$R%dL``QEjp5vK^fE9)lph}i5Jir' );
define( 'SECURE_AUTH_SALT',  'CDr7@mG7qIP/&7!i~=(_<bfVxnh@V`0@ew<B3`VeY,^V:v:M,8j`ey`ZNB=GyM!1' );
define( 'LOGGED_IN_SALT',    '9fZ^..E$/4-Xj7z:`8_=8s%x.3O`Eu;n02T7Cb(~8)a%M#kS)x>{]ZE6&,S%|X<_' );
define( 'NONCE_SALT',        '#QI: %R!Ty=`m8cUtoofLvN55[%IDg`!AS9eQ]UbP:RtmW^z9G)u9k:a_VsYrya~' );
define( 'WP_CACHE_KEY_SALT', 'U5jQ9W`JeCg#0(KU.v3[ZnY+qizR6Uz)KX<WC,$n8DpTr1?l~S1gkR8Cmn=o`?Jd' );
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
define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';