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
define( 'DB_NAME', 'csdesigns' );

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
define( 'AUTH_KEY',         'm;wkjvD=lEu*dVuw#-ZzJ^,1.v@sP8M8DI7LO5S[VB*VyU=aU=)>S^4_@ o hJKI' );
define( 'SECURE_AUTH_KEY',  '5{w++(AO4u}}[iSH7{#:/1nV</Zx=_U}=M/Z^8j.U9o3RQKDYB=@E+;KHap+>N7N' );
define( 'LOGGED_IN_KEY',    'W-OJr`BMTmm,3&_Wp/jItON?k~uGHkd#nz>0&$5(0*J7$c?<.ay9;(>|h_*Bs4}[' );
define( 'NONCE_KEY',        '8:w^6-PA:|hjvueM8ZaAzI6:Nz& |!5`p8Y1,aoLqfH%g&|5LwPMWM{s~hg632Bg' );
define( 'AUTH_SALT',        'i,vt7jMR&3F?-_HMs<t16lHO@_E nNW:6-Tr.zQ/brf{jQCL^uhAV[BXucPxPt~w' );
define( 'SECURE_AUTH_SALT', 'Ke]hej&}Z4J)DoJ /dfWL^vC7#;Ql^qiEERX:q=82+=IN:yMou^1t0=lf]gBs-kx' );
define( 'LOGGED_IN_SALT',   'J#HkUl3WFJ_h?#gr43iVH)|?zlR2Ty1_w5El%^[_TfzUFb?MQ*5];`ck!61?C:sg' );
define( 'NONCE_SALT',       '2~i~fBk7@wM/?dm+zB5Zr=PJM4LR;V~[8zGFI6$1=Qk4aF9@Crt|0EZRurnegnY~' );

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
