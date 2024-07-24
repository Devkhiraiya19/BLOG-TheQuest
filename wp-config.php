<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'BLOG' );

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
define( 'AUTH_KEY',         'N!aj]C&2S_}_?#y=a7=j#5]NJqPJT2<>pUvT[[No<Gm,5ya4%{z:x>C9EgY]Kh{;' );
define( 'SECURE_AUTH_KEY',  ')C{RpAE,ylt[SNQs{qV>pk/9I57~-(;(d3ma8S1UHs_2X!=&Mpq6Ly_cO#q06%sb' );
define( 'LOGGED_IN_KEY',    '@X./563kA=&:lt_E1s]jfO}t8/V#cW!o|mo|Go1wpgjml lC6i+fyd`m:;+#cd01' );
define( 'NONCE_KEY',        'f[8pXp)79:Q:#l*aT-41}PUlQ]_M@^W3+,ZkaU>jXI@p0fle?EM<afY^LD[(/UF&' );
define( 'AUTH_SALT',        'yhIWP3E:zqA|ZG=8:6mYGctJlOs0YXcIX[6KelE-ql_jh+OZ9JZRd~g&o3AWD.[U' );
define( 'SECURE_AUTH_SALT', '/[L=vjQ`v=*)!q-A<[U)NI}asMem]N}5j0.84zM5Ttx(c *O)-jC3t2sZRy;k:u&' );
define( 'LOGGED_IN_SALT',   'Ewha<,JLkn}Y!,qkdw`]8nv$vg|Zvky!p#R13p0W]x[D7Ab&&w8Y?#O,.d?GBD{/' );
define( 'NONCE_SALT',       'f%=QYuN7>dB;x&=OHV:W<*Z84<u/J99Ve+#|RmdK]h0vl(z$)<NY$nxf4/ny6V76' );

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
