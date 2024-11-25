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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\wamp\www\GeneracionKpop\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'bd_proyect_one_v2' );

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
define( 'AUTH_KEY',         '`?biALrCVuNV(7t2w3o&y*g-m.H_{de?Iedbcgt}BuTlj=_I[3~.j[{Rlf^=,H>B' );
define( 'SECURE_AUTH_KEY',  'zA$~[x-~]N[}EMh-Fz;ir&DG|qU+]`&5xHLQeD4%EtY[P2n3c#iFC:o+^p(VY2_l' );
define( 'LOGGED_IN_KEY',    'v|>$Psg K9c}M18n2ZDD/Kd gZ2_LY.AP8ZN!%>jK8#Ld?Ne,KiCWv#Ig97z<`L#' );
define( 'NONCE_KEY',        'y? 7/)?Zd8+-6_&;jx^)Y,IAVUN6d=cEg^o!o*]t,`sK7@.y!#l=YV3/!R/FpPkK' );
define( 'AUTH_SALT',        't/YB;Cv`?7W 8&tumR7Ihx^Gu.3 8uU/ikiI.P.yBD16I}5j!M:$,Dsgt4A6/A<Q' );
define( 'SECURE_AUTH_SALT', ')W!TJd]e,M FU8+J~aggaZ:_lH=Ou|[?kp##Q&Qp/?2ebD^9/!&HQg1xrgCK8&p7' );
define( 'LOGGED_IN_SALT',   'hRxxNQ6QQy8MLv9Vutq&F6lBAwt1=vv==2mR%1 E/A@a ?.sbp/S7(wqS=d+,>Id' );
define( 'NONCE_SALT',       '*=-Cu<wB~WrTAn[<4HZNb3drGYv&u] hf1:uI@oD@d*H+2hw>:pE}SBqXU0#D5fk' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
