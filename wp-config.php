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
define( 'DB_NAME', 'sunset_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'EL+#6!1$fQ;cL*uflmw@Bi+}t@S$aCPZM;+$]Ho_AR`.[A*C#mF`fKRJW+;G>xmW' );
define( 'SECURE_AUTH_KEY',  '`n;N3Hg7Tp>U<)kEM`sS?QUl)!K@L=u_7Ss/KB]7dLFgKjTCf|a)2[+Qhk/vdN+K' );
define( 'LOGGED_IN_KEY',    'AD(:_UmH;yjXk+rORPwBk}{9 )TL@C]}fpmna>z=0In@mtm:^dq9A|9B1F/!gIc@' );
define( 'NONCE_KEY',        '3rP@}$m!lim{U8pLVpTK2`yrvpr7vN%0/S[k0)V{o2S=8;Z;tW048(O|&Pz%@30X' );
define( 'AUTH_SALT',        '?ODg6CG2A$8EU_1Zxe1mjF-|+?6,to<m;}s229TO8j1rZMpzcP}j}jkkpr9V!fkv' );
define( 'SECURE_AUTH_SALT', '4Sa|tQcfM/J4Ok~hB:=@jD/xJpc{mF7$nmH-S8cC[Rse 4zKSOZx@v}yY3M~NjOU' );
define( 'LOGGED_IN_SALT',   'I7>XZpeMI@}xXkDhq~Q|#X@.Pl-03?2$0~<H<r8ef e>JE3ie8TMD,},i33jn|S|' );
define( 'NONCE_SALT',       'V!#K#Pcvpm]$B:8sKZveH1)~RI43%]=j<.GRpgJkF^ 07&@+E<6eB(MSY0Nu@ZT!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdv_';

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
