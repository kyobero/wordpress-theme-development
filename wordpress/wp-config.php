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
define( 'DB_NAME', 'fakeuni' );

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
define( 'AUTH_KEY',         '@!$`*FOouK9v]OLo l($DqWoM!:M#+ikoN|2kS*QSQlq 8XA!~AP?}SB Z5wU)XK' );
define( 'SECURE_AUTH_KEY',  'b;ZO;yK+t%[^ihldC:hU`HtMwfScdk8!|K^aMz b_h%c?Wqsgd&01)>$5QtexX54' );
define( 'LOGGED_IN_KEY',    'GezI~e$JgC00/:HZLi62@v<bi0]`c8wRL wTL:iskz!BaKi{HZCE)qT-3Q_;zS?B' );
define( 'NONCE_KEY',        '|R{J}d7U1/X](J,M^X&TePd.K?Y<<YPQhx%.`6pkjwp3l^6n* wMmo--1AH@hTs^' );
define( 'AUTH_SALT',        'y6kQn$WuCGv5%_^noew,*5PL4<a(Anfc*IRaVGh6-f,#cg@CkmoI8he5/OXZuEhn' );
define( 'SECURE_AUTH_SALT', 'N(0~J])+/ b{.:46pC{iDZOM{@dRo:j=X.jC]bmT2!@hd3(oSLN7p%tR#`0+A>@l' );
define( 'LOGGED_IN_SALT',   '_&Hm@3/-[>ssB{(a^Q3cc#/aNsYX6#8Fp7%XMNP:Zy+Iu&vQ#gA2QwU:,//E1?4r' );
define( 'NONCE_SALT',       'iO@Mz3+NY{o,{ #U88qb-WjPZtLAM;kJd;{*,LCqp:!TGrYJ5CMi.20`Nz]]`2}k' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
