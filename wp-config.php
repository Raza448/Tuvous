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
define('DB_NAME', 'tuvous');

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
define('AUTH_KEY',         'T6|;^6T]@F|l|n]Q@k}l&EwoA%[li$iJsvqj)m`Cx:=0_h9]Go8!$Qfb# i!mn$!');
define('SECURE_AUTH_KEY',  'YSo1%U57;>Ha!}54>~:+`2Q]:zd4u1c~!O_Gz1AyO~-E=g(.Ql/^V%W*U.42!&+_');
define('LOGGED_IN_KEY',    '=qyClkL-qp6/q3thn|OvE&[bNes43g=D+||iLdqZx>lu@eoL6.YE|VnX=^ENVgm~');
define('NONCE_KEY',        'cdi<xZs:g)Dn/Q9||HU[v;Y(3Dp{pT@<]9bcrff*yghH/59+dABn8j2 ((BOAmij');
define('AUTH_SALT',        'X7b>i&g+7X|4Tt5tQ=z|J]o:L!$x%mgcZG0=a+|jeKq9;m!cIij1=!OFut(O,n&L');
define('SECURE_AUTH_SALT', '#>0B55NTf;6(be[ a<nnDDaJ]80/sqmqB3L] S?+-) (N, jd]tTzc<5XSwzYYbA');
define('LOGGED_IN_SALT',   '`^ hc/$r0pw?dKdkTX0+f5{E|;Mw: ,jr~-vRrNM*B2MUCLx(<M3XY(aV;kSmTdx');
define('NONCE_SALT',       'Ln1>&_n_EzQiS)UXp.vqCEM{-]BpCH Fvs%D@#^b)$0uAYZPyc^e+=}uu~pU=zIt');

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
