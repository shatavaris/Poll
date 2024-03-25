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
define( 'AUTH_KEY',          'IaciOhgtt$a.mv9uL]4Ma;s!Z/sJ-inWY+N?0@@7{cL2a9U(,o+#X4+K#2_`&|6W' );
define( 'SECURE_AUTH_KEY',   '66cJw= ;@[O;4w!Cq~d+O|S>qjUV|(Y2G8uIoG^(5)qE&sc^=*yRl.8$/H:[sqi_' );
define( 'LOGGED_IN_KEY',     '+6>Wv<!N?5yruL2)b^y3 1%o ?0Nl{oGfi5HoxXve4gP5urJUvnTpdnkIq@Uu5O^' );
define( 'NONCE_KEY',         'x3.IcXpD7Ys&>k8kr1<Wh&M)ZCE0=Sfcyz#,XYcX`>Y/Zr@):k*bsgh(jb]7c.$>' );
define( 'AUTH_SALT',         '3+,78;-|g]K46$nRVb]3j~!A1EpANmKd2Uyb2{PWy,wYA.)(1FE-txN~=n<$8MZ;' );
define( 'SECURE_AUTH_SALT',  '}ZPpXVS2zCAhgM,a8mTIlr]^WqOgQGpNpC;(g:s{So`g3qfpq<WYQR{e[v ;}jNh' );
define( 'LOGGED_IN_SALT',    'N[AS]P}X|C#&e}wxA]j>q+-K9]J!hde|{jBkB#Lm&K59kh,_W($0`7o* #qv{#XL' );
define( 'NONCE_SALT',        'iVjI.pCDAK+LlcQZcmpTE#na{i:2cn~$DATFO;y#IrHF,QA4}ycVL-^Iu8p?:!kv' );
define( 'WP_CACHE_KEY_SALT', 'QLGOdNWM;c,zasB^54SeKpPx=Qiayek_pctu2L6O?&5+zamS([H{W|gC3~APGTlK' );


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
