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
define( 'DB_NAME', 'tienda' );

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
define( 'AUTH_KEY',         '`2R(H.Qv!G)3oc2rQG>~.#A}#!i s,0a:v0r/0#k~Bsp-NY[<H7`raAUcY@a7V!-' );
define( 'SECURE_AUTH_KEY',  'x.rv_*@dK3?dovDk=6A2)3Qf;#$^ZYbO#zF;8OM_AM-)8NOnvjf0Y*-sphZsI<8?' );
define( 'LOGGED_IN_KEY',    'c>Yr@j0O%ZK5O7N?+}8IdHcsS3,DjG|r,i5QoM]gG9jT^<eh2$6x QOcIDJ9{DU_' );
define( 'NONCE_KEY',        ',}h97?k!cEGQL^<DgG$*<+oid,sO??2.Ot25Sq8= x@rg&)X%*txO%TAOtuQ|7&}' );
define( 'AUTH_SALT',        'T{(AU$aQETRd>{_YBd[v@,H`VJTFDKbbOb0OD4&0`?xFI3n08!6ize]D^3YlZ:bi' );
define( 'SECURE_AUTH_SALT', 'YUW+F]xF~T&[S4t^D-g{`<lJNq*$C@*bF>Ic)&P)K1bXie`S]OnV9(caFc5?]mvW' );
define( 'LOGGED_IN_SALT',   'vAG[PN&amjBLWOCo?_*P|5 Un$Mziq;|=%,M+T[pH,R+T$w],f.`Z=}wp,i`Rxnf' );
define( 'NONCE_SALT',       '9uip/z98ve0kfIyfe^(?g%jUs)L_hfnqR&0D-@X,&FtF4@oM#n/6X:Zq&BMq3esQ' );

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

@ini_set ('upload_max_filesize', '128M');
@ini_set ('post_max_size', '128M');
@ini_set ('memory_limit', '256M');
@ini_set ('max_execution_time', '300');
@ini_set ('max_input_time', '300');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
