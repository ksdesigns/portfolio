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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'bv2U.uOVV6?DXmq![?&R`FY/^8nd4$.|.yvK}|Vut#|0Ph,eA[Qci_.1A`<`4@*{');
define('SECURE_AUTH_KEY',  'iIg`F5Z_zNlh&LWY222m|M&4b+:(Qhd5/+N_aw)?f?OZCPY4`>-XYcZ11pP{&to^');
define('LOGGED_IN_KEY',    'tm=+!R2U5(BSd#MR/`sOK9U|k*`[Td9N#c4!H-L:3^CJ%Ac?PIyfr{9shJyBTH^N');
define('NONCE_KEY',        '+Q& {zk!g;79okflYeB/OHC@w_<WaEoUtHN~Zia^kJLA,f<6E?4pG4%[Nn7MS4i!');
define('AUTH_SALT',        'mOb4pg#VyA%fXhAoF%C(Wkrq)nY4)[U}K(i>eKGo[L`kCuX+ZaOs).#%ozrb%6/d');
define('SECURE_AUTH_SALT', '%`TjFyAMCZ<$XL+Cd<W s=/Mbz8WkUS1KRV,&FCq`eYZdf~ 1lJG{mXhNP_xIU!_');
define('LOGGED_IN_SALT',   'NL^&lzG57efsAcX[`)1mD>qV_c; ]V&BIg:+NZP~RCOPcW*C%Uc9(W>!0j^3Kgc4');
define('NONCE_SALT',       'B,T07GOWdO-z+T(.SF%$%;6Tdg$2^; Gj-Q(!trm$2q.78<39[%MMkvwOv4b,Q2U');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
