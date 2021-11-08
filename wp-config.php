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
define('DB_NAME', "european_db");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "");

/** MySQL hostname */
define('DB_HOST', "localhost");

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
define('AUTH_KEY',         '&ixOq} n<97ZAeL)tNw?0~g?&qmiD Z?_yiY2O:ze-lJC:OUJVcg}xK!{+={,S_S');
define('SECURE_AUTH_KEY',  '4uUM?i/gg.CR0X](`VA*e+KcwHxpU)c.Yv&/`XC_]]I_(E]z-t,%zCS~we)S<zW.');
define('LOGGED_IN_KEY',    'n2FX*T<`%}H<g}Ls[soI]Q/]j/S=%BE7v(x{ra%,~@H4BYlh9e;0j G!ovmv3/Yp');
define('NONCE_KEY',        'i2n!D#E:]XshaM$bV.z1ie|o9_#4h+E.SM{?c8KIe]T:xQ1!=n~7 fL}H@:q)Jrv');
define('AUTH_SALT',        'Jc%}(Xl#qiX$-/.!_b0e}N!S~1SALzb?5Ga5JlJ^p]U,0 #`x!8cmQ{}%_p(*uNQ');
define('SECURE_AUTH_SALT', 'nA$4nI_m}+cQdW0_*%fduz^L7X.MMs mZ|)IuYt*E&>+%S^kB8Jg6CsaCGkt4r:^');
define('LOGGED_IN_SALT',   'hjN2LO+`niOFg`FWgw8=1d5H4Ut~.|#REn>yZ`E;1)tB1IwmbAo y?11mI1Ke-uv');
define('NONCE_SALT',       'gb9s/TBDT~=fm# s>;?v+jP4r;`m>ZC}>odj/w$!=~1p`S1=.:L~p,hLj.xdBRV9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'd7td68o_';

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
define('WP_MEMORY_LIMIT', '96M');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
