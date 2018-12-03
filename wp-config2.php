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
define('DB_NAME', 'multisite');

/** MySQL database username */
define('DB_USER', 'multisite_user');

/** MySQL database password */
define('DB_PASSWORD', 'mariberinovasi2015');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'multisite.itb.ac.id');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B+H&zjf97nImm3FW_Pp8T]R|#[i~_ct;V=avq13xAyOZ,d(+^;tj;5nC4n-^>PZ<');
define('SECURE_AUTH_KEY',  '!r_5]$|?J-@1hJtbk}M9(!t|IfbOr!r+6AEL/z@C<`(iS{r3kTs-=o5f&O|IOC,c');
define('LOGGED_IN_KEY',    '7&t<FJCMyBbJ639 2Rfwc>|WZXUWYuw75}!qU%<kY+[^IpFAR)3.ckolz)LS.A[n');
define('NONCE_KEY',        '?0tC/.[yE=8XQO@u~7eOK0v-p/U Q5<#])i%*]dk6c/ME0e29T>$PPMk/W<zWS. ');
define('AUTH_SALT',        '.P6b>X~| pA@Ce-J1-SA|=:cgdmQ6*|^;KgDlGQkImF]Sf!}*>{mT0XN{4#{z:;2');
define('SECURE_AUTH_SALT', 'c]-l3^3|)1&3ZT!lNXP2Bm?Mr5wAYKq4/FxBCj;rm~G],!mrv-hP7VREsVD^:oSb');
define('LOGGED_IN_SALT',   '+U%^<1]Y;%~|b]c35G70)fXR_u4URw+Q>q$?D3@5wo[ae4K&:PZ yP7{MVmW<jCS');
define('NONCE_SALT',       'Z3c5DdmC$,vx}_h>(=lfGSz Z&iaL|tkp#_Ss}%|m+,-LK-c<QvkObcnfR!E6.{7');

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
