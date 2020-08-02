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
define('DB_NAME', 'ft_server_database');

/** MySQL database username */
define('DB_USER', 'ttamesha');

/** MySQL database password */
define('DB_PASSWORD', 'strongpassword');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Filesystem operation method. */
define( 'FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' -D~h+RLPR:osFdM`*;fyza+#>Z?p>&z?rMDiYa2ZW8Xcg7|74%c9|M<eW@tY? M');
define('SECURE_AUTH_KEY',  'Qe0xynJZD+oSu)P,Xf#aN-8<R6-(}h MDX*+.BG<*>vw?94_%jhGf|d+<co(:c(*');
define('LOGGED_IN_KEY',    'G1Gor]izf6E1;2uAf}k:tKL9Jm~c*TQ8x:?Qr*# h+wuFhM>[iX-AkN>T[ya)U%y');
define('NONCE_KEY',        '83Q-5lF~31k`]s,l>wYm#K1Yy2y]k2w!M_7X,%&WmOX)kSBkxW`pDc9!0NNVEu63');
define('AUTH_SALT',        'p|z+wuT^H~vhJm_bwZPVXw<oEqP_b9g z_[uqqwo&)]14yb?c/=Y0P^tWzTW`$jI');
define('SECURE_AUTH_SALT', 'Slnh5{|OciIalDm&k/AZ_[*b4+Zbb~VPOu/CSF.5bdx-H.}ry4Tv]v*wgnnu+_3J');
define('LOGGED_IN_SALT',   'bMp.Ua#fjj[IuIdUy:pfB}%t-N@uq!>Y+Hoqm--pna^,(PKiE[c7dm~Diz|*34X$');
define('NONCE_SALT',       '0)RZ|E)#C];/Ek02 +V}=FP}~6[-h]ZgQ)u_dC3uI-2^o?s;(+$-898K^+wdtecG');

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