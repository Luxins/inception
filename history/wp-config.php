<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'ljahn' );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASS') );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$Abx~ fS2N9H~F#oE 7%AE7)*uxh+^qr~[!9#hO1RN^zZ0:smXfoLclglgQ{XvrS' );
define( 'SECURE_AUTH_KEY',  'NoVzoysS4}T)ov-(J$~QT(dvpp]N-b.)#y%>Q$=|<W&Yc.e!]AizUQulprAz5 qt' );
define( 'LOGGED_IN_KEY',    '@&FMpo1:_2fr<zd,wsoA#m6ax]6SV[x?Z;8zjs,Wy~QVkiPl@^-4V#K1ayjWm17d' );
define( 'NONCE_KEY',        '5M$N.w4<9+Bo)d{L;6]JM/ tF]DIApCd!.Hi[<s1^xiazq83.;/T])CE iD^{([,' );
define( 'AUTH_SALT',        '%** UvS+:~Y_Q>Z,fDbB5/4^Nd|66<tIlK>m1+MSQL+NV~GAfFP=LF5<`?b7lETt' );
define( 'SECURE_AUTH_SALT', '+X4SRTQ%!pX;DWq}*8HzV68ou_pQ]v>1co]j}Dce`1/w^PW:a;x5/S@V~L**HZ/*' );
define( 'LOGGED_IN_SALT',   'ovYoJ!S+ 6sD^n_wUdPL71>)26[#wXEPVtEr)vPL+2&$mT}Jpf_/ELWwolm3`RxS' );
define( 'NONCE_SALT',       'x!*R{?jQz/?5e[3PD^!D}]sv5I#fEx5Ji?NddhomG/tIBs4v@imk1MxZ{=$qQcs_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
