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
define( 'DB_NAME', 'atelieveg_db' );

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
define( 'AUTH_KEY',         'U.U0Wa=2}J_ldh.Q7<FDZkhtSXOtOe$2rM%[jnCdxo$]GA+2})V5a+`S[P*w*I1y' );
define( 'SECURE_AUTH_KEY',  'S(DvsyB{/fwKB}EuTeay.aS_@6A^KDTs0dO)c+7Wg`{Y!?O`s}1mdg2A6O%ne+xU' );
define( 'LOGGED_IN_KEY',    'Jk?p8J%x>7~Lt)6L-pLBpjA3(d~>u5?xE=>!!XGGpJAta_8RIwIdInw nSY)qB==' );
define( 'NONCE_KEY',        ')a[:/8P4#GTJ=GP8._DJvTz:iyAl87YiCr`+ih4&c`<Dwco6b3$/d5dWvTDrz)Ye' );
define( 'AUTH_SALT',        ';Wrz&iEUsbQM&ddmbaQ-);qw)L@<YuUbL[ ~Dq7Q.e}$UC@_iYpSQ5$-WDN2HV<=' );
define( 'SECURE_AUTH_SALT', '3j6w$tD;qcAc~4yqaGUO!<:kFV8BK~yQ/PF)&1v[pdMrGa.6OY*n__i!XkG8$|Jp' );
define( 'LOGGED_IN_SALT',   ' Kv:_7>^jzD$Ry-M}wjrZeCl=<-4SiI;A%QlNa3+ {S~SGxdEyTQ^;39@T/hnM8U' );
define( 'NONCE_SALT',       'f64L^~@$LOUQSLz^*6V{;C3E&N+b[dZU&MRbpCF!kK >L(IV/ZdLDBw]3{tcPcD_' );

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
