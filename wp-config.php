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
define('DB_NAME', 'wp_practica');

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
define('AUTH_KEY',         '49K;QhPwcvE!7mopeU!DxPv$?6p*c{PrCAc=P&E%O($0Udz^osC&(2}|MZPXfr<1');
define('SECURE_AUTH_KEY',  '_oWX@<yN{[=()+I)>Wjp?A:>R GdicCOofC*LuuS}LVtcZa5LGC3E_BpK@2s51mW');
define('LOGGED_IN_KEY',    'Li*+{7_4ir:X1n6dAFx:6?EG>C][9s3l1=c9!Q@-[aT7 N>H3GL&r9aVL~W. Oh~');
define('NONCE_KEY',        '-?^UXpJ0m2&[FmSGXGvFWqW?PGCPSyR+W%y{+H/@6u5%^B`.f=wr0%L)$Cj5~o6C');
define('AUTH_SALT',        'Hje|~^MFYCYA`&9MUX>i^mi1;#X7TM@LmMPLP7;%LKTlkpEI+!<f&R`Gk4Y~BNXi');
define('SECURE_AUTH_SALT', 'Mh#L/FH!LsjhlR*.2$8V?.,!R-{q3x)Ei!!,Ep/wQ]DlAitz59&;LONK>a=thV-h');
define('LOGGED_IN_SALT',   'UP9&jjeDe{B6eMaLNg!^1(^j^u6M!C-GV</38Bp)&7|dFC*21wf)8>O-`VtcM+#m');
define('NONCE_SALT',       '?}t4aS)zVMzJ7%6^4c}Y@KLPyN{0eB//X5 !E%Ei(EKVT@YNF(NjS_28;kbHb6-@');

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
