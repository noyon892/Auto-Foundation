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
define( 'DB_NAME', 'sql12383325' );

/** MySQL database username */
define( 'DB_USER', 'sql12383325' );

/** MySQL database password */
define( 'DB_PASSWORD', 'N5RxT96lTt' );

/** MySQL hostname */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'JyN+ssZ1(Tos<@?%4<EPv;klBPOk^%%{u$cy{|AfrB@Ew(y)mLVNBX,M+UVRc1I{' );
define( 'SECURE_AUTH_KEY',  '6PJWU$I3:^2:4zu=Fwf{f.xPZixn^#A4OqH2c`1+Te+M$SY)t4(xNDIPT?G7RKl`' );
define( 'LOGGED_IN_KEY',    'J_I@F#Y&lF>v6E5~2,p:VJ[(yK)oYPIV)%r7Wxsf`N$1J~+911kN)=Gcosl1bsMT' );
define( 'NONCE_KEY',        'cV=y70mU).:TE$>tyC+#Ew[mc`1b{X{BK]l-a+[axzY;7x&}paYj?{m*pt( wqw$' );
define( 'AUTH_SALT',        'Zo4)JGzWR9-^G6-ke f3.Q0MT)o6d849k~{AU4%@<a8:o^QtOw +8GIZ~r/h$~0?' );
define( 'SECURE_AUTH_SALT', '$V1RtQ:Q 9`O4{l_Ap|&-2sac>,f]5Tk2lj<ox` YsKw8VY%%Z.aJ0B5eWae_FT(' );
define( 'LOGGED_IN_SALT',   'aIYh?6vb6//]/!=.M#Im7Qh:/I}rtge+g!.TWr>>xi%aO<rl[K8>99V.Gvk6Vl`v' );
define( 'NONCE_SALT',       '5Esu6@)M_I8?Xl]B^j]akR=p>9R  |lmA]9`4x3c:@SCOADPCrO[mI;LnGj=Cz3E' );

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
