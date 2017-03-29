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
define('DB_NAME', 'artplit');

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
define('AUTH_KEY',         'IqUjo3H8J/T9$D9PYF@A!^hDBW3ztI]_I;#IDBoG|99d9,l|O{%(q]XbMD$6xnAY');
define('SECURE_AUTH_KEY',  'Ak%!#.~|XCq3bcobY{)PBR33{@]7B$Xt$$ut(nO7Ss03%6LaW~H<I]U^_?LPLUP7');
define('LOGGED_IN_KEY',    '?<fe0piwyj`$wEPy7X`, 3?sI}^g0Da$8H]nRi=_FzY(HN$b^gwG@}El;]BfD/gl');
define('NONCE_KEY',        '[21TJxQMObO*NLo%2p|_eGEt7^ORma|D/S4_C w6K}xNm$YvS/g7>?Njb60@t !F');
define('AUTH_SALT',        '7i=(F(a5mo3S2F^cr*W2X`DO~zqR^};|)<X?St#%1[.OVLqTJ[YWnH r,lv3~54>');
define('SECURE_AUTH_SALT', '+mz;Z9PXO86=u47Hwqg~LqY`d#F]FBD^C/v]&b+z8>o[9gB}FKiYwq:4&*]} Cvh');
define('LOGGED_IN_SALT',   '%q9N0W.Yj~841mvVq$A&95!^EXmy<?qG_kouag<hT?#r8_;(GQ=b2<.+_dmEgVMg');
define('NONCE_SALT',       'h8YnN#.ccsxEEg5>@]PV`i4*<GXq[dE%af^fpk`tEuV}twpW8jZqeVpUTG5#;_M&');

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
