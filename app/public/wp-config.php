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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'Q(ltR84ok4HK7;,tn+L/Hz}yVEXcVGo)4Gnu<[?*mP(H04%__q{+2nn]{xKq~Qf%' );
define( 'SECURE_AUTH_KEY',   'o oVWIe~d?&#D9O)Fb86txj;*pB[E6@Dj9DBQp4KeyJVBc5Q17?%}r`5aTN4Joga' );
define( 'LOGGED_IN_KEY',     ' VoeWVsT}5_5;l7F3m*=1|ksg4W#_aQyh]xG]*e#t+}r* BTuh@)ax}v}p<8DIG?' );
define( 'NONCE_KEY',         'gnV)%^HUu7+Qh0I(NpT=CS/7!bv7m&&BYOPqi4Y4X^#j])f#(ft%KlUX=H91Bj4F' );
define( 'AUTH_SALT',         '4Ne^9RV9$Wi[zg<eVFVQk+0 tmc,_PolaxxGiGV]c__Ga~=G|vF<t:>z$>X2zr4K' );
define( 'SECURE_AUTH_SALT',  'W:+~9|Ep|Q*O(>3Zt8i^Z?OGJ*%5y.I{zH2x/*|;Z5nt.y{=Of(ox.v[n1QXbNFO' );
define( 'LOGGED_IN_SALT',    ';#Ap|8Wg]1/7.iCMKrPFz_8_<2L.k6d~b^w,Vyy=0T.HEtE[yI)JNxH1g~58.K&G' );
define( 'NONCE_SALT',        ' 5<8T]vTzW|bR]8dA+Dmoy2p-S/5%7Dn[u7%?X#vge`HmS $)7@(2{OEw6w>?r2q' );
define( 'WP_CACHE_KEY_SALT', '4SLSGt8zUIDQ UG@~1Kn/,8bo__@FbO$W[MhcM3J:I8]],cz)321mFoWg./J,*`L' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
