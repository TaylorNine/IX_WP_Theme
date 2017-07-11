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
define('DB_NAME', 'db_nine_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' _AD`h:O+G7yVCoKWTf^8ORZ7X:?M$|h|*qrJ6_/GN+4!@%9I])+X0f5s`0YJr5j');
define('SECURE_AUTH_KEY',  'M%eHnHP4Wv+0ej+_W~rX7?tdO?}UT:>zl%s8aQIyDxM+fJLD!7w-fu4-|1g6;|<W');
define('LOGGED_IN_KEY',    ',7,2e/4Ih%.Ee4wou%)JLIv?QKPi#K#ZhK[vB*}ab~ug{5fbmF*@QC80PI8Lb_gC');
define('NONCE_KEY',        '7$/Fn$/cju gX@#:6&%~KxiD:-bV:|(|@RCo{{i~<MR>UB!S!3z[W{mQQZIR0!+R');
define('AUTH_SALT',        'f2I;|/->kO$1Tk08hOho] Za|h}VoX(V<nEr~sBD|1c-QgAbv9xO+OP:-Y|0Dq6:');
define('SECURE_AUTH_SALT', ' Kx}c6N*+<StzJA|t@gf/o||:d}1GK+TNFvr>mzy l^?L_y[qy@-N?V:>%RiVBmM');
define('LOGGED_IN_SALT',   'Qti e5DG(@&cAao}kULR~c79{(796|iO^&@-MHb[)fq](8_JP-Vf]{9N38-F/utZ');
define('NONCE_SALT',       'WfS6WGF>3[bv3ZQLLDF+T2oz;moa6#d,,M02)>Yc@~IC h,6JsxLnvcf3%-EA:z{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
