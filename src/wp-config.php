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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress_Password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '2HKnK|Liy}S7`$x84uTgg$|Ln4Rc/?t:.f8jA,ZG*oN9+0&>zj0/I#O/2:pX&:g:' );
define( 'SECURE_AUTH_KEY',  '8I$P6u2KddA-ywm_U,~4!RLRsPh}[<T`{@n#grr-`OE:Pr~ARhooKGS[j/=}T(4D' );
define( 'LOGGED_IN_KEY',    'M(zX)t[Pgn)2p) hm7N1*jsZ(SE!%-7_Z1E]$c~C#nr+f~Y#0$Q%w,[s1Tz],Eb>' );
define( 'NONCE_KEY',        '} DQyGzO>Dfu`FUZ~v+yl*kUJXP,+|kY(q&=*=cTw:=_@YGN$u3h 7+N@<^wU`Y%' );
define( 'AUTH_SALT',        ')kl_W!~R!8{E/ =hOV~av55aE)%&}iy[eLX3kj.MxvL~oyRFS|SJ5l+3V]!63GpC' );
define( 'SECURE_AUTH_SALT', '${p$H4B#dF{{KjAtOPGY97rQkOf`gt,Tnu1~u=Huv/+EM~E8gC@;?{|?3*lyN~tq' );
define( 'LOGGED_IN_SALT',   'wq -Hoj_}zcA3Y10!SfS[2+9)66Ks16^ Ywxz*]ck/Ej)?P`E#D;@fB4`@gic3FL' );
define( 'NONCE_SALT',       '-&M4/(mM@ry^rX!Bo-Y/#C0`X^y_7KITx5<IJ{|Us]9!uyCYIN|)MpyC`FUk,6I[' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
