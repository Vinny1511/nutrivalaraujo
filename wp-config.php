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
define( 'DB_NAME', 'nutrivalaraujo_db' );

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
define( 'AUTH_KEY',         '`LgeAEXXZ zmIF+@[Q+XaNv(:kJGIr1`323m~k%/9~Mmhmn(i{E$ls[GHl*2*rxW' );
define( 'SECURE_AUTH_KEY',  'VqiyJvySGI7E<|+wf,PP{x*CZb>2A~UAK 99)&X,E8!**o@H5j/l^z@rN3;l%cK4' );
define( 'LOGGED_IN_KEY',    '~y,PPViDz7|b7{(^zc!@>8.NrlK5i?<^%c01!ba$j&>GRD=A|d=wvL`Gc]7LW72W' );
define( 'NONCE_KEY',        '[_7_c_m=k~mC/Hp^JQnsg]:U#1x&C;>Ih)8& jw{FJ!~1>&Qu-L?R]()qcY@XH=b' );
define( 'AUTH_SALT',        'G|,eb#BQl8cDLEX.eV Gv5mC<CeW!Cnh@MgO?8cLoap/HPy=;bp{w.[sX|re7?)v' );
define( 'SECURE_AUTH_SALT', 'E %z(x^~AH3LB|9o?6ZDA)?K_;C(xNfE1fNL}=&3P<;LXdRxm5X.0ydn^k5.Vz 6' );
define( 'LOGGED_IN_SALT',   'XM)d^=:Ea2xeRY sa5D&G<=Cy#$g~nmD?OBa^aH+P|8%eIUaUv880<q4=%mTsDbP' );
define( 'NONCE_SALT',       ']-09R_a)@ympy!S J[9&QtG%R]jcU5/QenXq+fLLo{q1H4TZW%i|V!Fh7*6]t$r*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
