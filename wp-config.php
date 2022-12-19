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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', '987abx2' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'TSFwi!lD#_?`-I_f!2MS,D<8t|%b(wTn`UZ)O I|P=!s$ERCQzT=e$qZ>AT7rNdy' );
define( 'SECURE_AUTH_KEY',   'E*g~.}:,WNPW5UIBRS~w|Ys,@G)@%fb;SP[<d?J93q5.H.O)RH!tlMd-t?Y+c#.O' );
define( 'LOGGED_IN_KEY',     'X*_|.0%<yi,bb_#M0``|7#%1<mo29egN Oil>iGO+D$J!B=K{NHFuxFZd@8n/L^*' );
define( 'NONCE_KEY',         '30xuN{m ~fFN~{@RfMXUsHq0NY}$ALd?s5(,D&ztjd](f@~ZAC}lT&X%V#)bdz#R' );
define( 'AUTH_SALT',         '1W:!RgQ]2AI:#t5a*RU]Ud|=%V@v]Irih1h%3c!]8<?,.x+KR*eSl~l,mg9kscfd' );
define( 'SECURE_AUTH_SALT',  '_;J#=/d?trR`=U)96!!`b9eq)O/F)_SC`6Lxf)oy:n$t~!TMwYozE!p&R%uyFB_k' );
define( 'LOGGED_IN_SALT',    '#=5N0HO`|2vO;$_@T@4ZZ6_luY17p?`GB(a*}e#Jq[%n a@D)W3^9exmSJt@VsC0' );
define( 'NONCE_SALT',        'e&d]><%#?G#s).XV#tDAmb@t4vvjsNgAUW{w0NUP@eC:_rImrX~t[60_6/&7pFUF' );
define( 'WP_CACHE_KEY_SALT', '7dMV-,jK8Ji]5>4)t}ekcU0Ai_oIP#BW;Ii%m_ri9miu0Ht0*?o=USIjb>T>NjUf' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
