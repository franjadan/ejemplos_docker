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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

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
define( 'AUTH_KEY',         'XD5gb6TU~F5ZZF1U=<Es{g?J%o-CkA2q*hj>?hf:fguG?*>HlWQ?!Z;{,=]SMo3|' );
define( 'SECURE_AUTH_KEY',  'g7;j(;d^nT$lS~j}@-1}77sjjtiI`v9q9$[#%o;Ty&?k^,5$So.<cBCK]29*qSJ_' );
define( 'LOGGED_IN_KEY',    'u)WR/i#YE`:fVgh3j7/BILN|Vd~BabZV9[5JL?:/@$Y9)1A}5?Y`h$5258=%C %c' );
define( 'NONCE_KEY',        ';BOpY3<[Rlf-V^N!A:?Qs?o27/E7Rc|ifV:{A*SI[i+bV)6+SXJ~b}]1Bx9dIcDs' );
define( 'AUTH_SALT',        'le+4baCX4e0uguamc}er=14T:le[dp_la*neS+OmE]Ox?Q90--h4jAdvqD3ZDt<R' );
define( 'SECURE_AUTH_SALT', '.13|IS$FLCmPTAtOiwW;.@O/?>JwxW~Q,y;u?0@{Z{&(T9*B*LBnpK^/k95&VAIa' );
define( 'LOGGED_IN_SALT',   '$wAFSycuWKzvRxvI}9WF3z@goY^;;NZvqNmJXP>b2gK:252bV3jwT3&jj7]*DDt.' );
define( 'NONCE_SALT',       '=ZX;$Uj=>ilJvrY|>3#(I]jdP^pmk fmTSQ_.2WL 9Dh:|18Eu:wXLYn.g*W~j /' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
