<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'mubweb');

/** MySQL database username */
define('DB_USER', 'mubasher_web');

/** MySQL database password */
define('DB_PASSWORD', '1$vf02ka^)adL');

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
define('AUTH_KEY',         'zCN7y#Eyp=N/GY#?5%gBGip~rp>c5b &9K=>V@D|J$iMcM;%uYAo)ar9i@Xn!EZz');
define('SECURE_AUTH_KEY',  're8<U;2~gp|kr$T^c^oBEaUF;?Mk_*us2,[j}99}/ s{N~E!S4)w#a[pVPGcmx@R');
define('LOGGED_IN_KEY',    '.c=ztpE7!l7tyHzH_,xs~S&0q@FHdsf:y#qakrY}Bu7pGQe?i3Dj@u2|~t*by]jr');
define('NONCE_KEY',        ',.^o8;mM..SK>hc4!>X60QeH^h-0fTqkh+uKqh.boBOxxsf7EKTs24+]y5P(PHS4');
define('AUTH_SALT',        'f7sRU0nCX+WqgNH9th?Ui:U!kUX}hIDE9$516,O0~;/jX)6UP6%7F5W0.>2fkw^S');
define('SECURE_AUTH_SALT', 'l [0CVZ2rO|J1<!b[:C?p;1DFKgpY787_X9lIqzrDZUDaT0gJxFdq)W]SBJ<E_es');
define('LOGGED_IN_SALT',   'hj]C.L@1@g=G7d&+i.37CJ5)&EITp7pZoLGi5h>LuH|LEBbMc[qw}En_g}Q3f3<o');
define('NONCE_SALT',       'ylK+^e&q]P-t`yL2folZy5mo86E,*p7*g)Eni%u:ZYZ?TL{*dR GgW3A R(b0mji');

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
