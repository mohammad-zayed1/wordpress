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
define( 'DB_NAME', 'mysite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ']1Z=6EG*F$ZaMGx >DM}=aQ7**uWT^, ,9x#LZjhlFmx ?{}{H6-+h@X0a}X2xJH' );
define( 'SECURE_AUTH_KEY',  ']E]mb!4b1M}a+n??B<o;YeNn6Qc;:C|LRE`Zdqs7mjSqNY7B]|X+d>hB{ax?F;B7' );
define( 'LOGGED_IN_KEY',    '3z(C+&UH3pJo#_+z&K`0~t<]*Ym@C)0@L{aXMD]{68KPKM@1g-h#}dachuA{LrKZ' );
define( 'NONCE_KEY',        'Sbj3MGP#6v}XaxS7*#raJ2lSF-SJ:J;i4:k1{`FOa#7fGM%bwte ]v4q*3n_f=UJ' );
define( 'AUTH_SALT',        'k{WMoYI~-FJ*tL<pA>hw&8QEhA?pf$pI=Q5_!2.ZB xK0O15lX)< kC@+lM2KAqa' );
define( 'SECURE_AUTH_SALT', '&~:K>zL.L%tuwyGLhWO]3[s~j~9j`US=>:3HfNIx{fFP5]F4^}30R_{3ST:sT9st' );
define( 'LOGGED_IN_SALT',   'Il7GdAseawy?wN/}nWb=>O@=JyyV/d:%kCGbh*xDZGvcM,KD[$]S_:%`k|0z.)V+' );
define( 'NONCE_SALT',       'Y7[^OSen<0Wrv||}EI42kN:,C9{@G?5<C2=wh5xq<Pp09!OPezx O:jIEJfycpXj' );

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
