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
define('DB_NAME', 'bristars_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '-x0giqohFMY3BxJq[JbQ2%N[fF3<M7QL-S1#,t{p%V]Uxba:UWR1qk:| jfc1INL');
define('SECURE_AUTH_KEY',  ' WY`{v0TqbE&kxld(A@T&#hBXclQ>}Jx%^mQwo?M9*[{,lz+7=BVXcv.h=15nBaY');
define('LOGGED_IN_KEY',    'j~09]jGm({_3a1b7RwHF50=+%u#SDwvs}V|dxZHPF6hgNtZjpFXDAUk#W:$}SjlC');
define('NONCE_KEY',        '2}[Bxq&R!vI>nPJ8C8{r_zAL`SdymB9wlAt*(_a|o?qoY3^nPedw.U~2FTp8hm]:');
define('AUTH_SALT',        'W:F%P_7^hxla`@rKO8d(sHaX:*MZuiVt#4Z&EC}c*df{935Uhc7Ow9UPM1XlC@pG');
define('SECURE_AUTH_SALT', 'zKaV&,%TM51k[PXm~D9q.Y*l_c+/f^@%2&U1IQd/D/c/)FS$+fnqniYYU(K2cX=v');
define('LOGGED_IN_SALT',   'YUs5Hv&nZ01?<`fpAmy&JO9=<1pu(400nl]<8N>+I5x[R%1cM0E1!}XV>1m zM{T');
define('NONCE_SALT',       'zG[y-GQ0h[`~k4]d$ 8Y$OvqwK]JmANa:((UfM0PR;ikodp0tu*fu7X7x!pAv0jf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'br_';



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
