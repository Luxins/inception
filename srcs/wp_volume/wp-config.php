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
 * * Localized language
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
define( 'DB_PASSWORD', 'ljahn' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'DxxEL5~7aEt_]b[^_wnyK|6ay%z-_D$(Lg1x3xhP*?.kot4lq3{Lygg_r>}E~Hk.' );
define( 'SECURE_AUTH_KEY',   'sJ$UmU!IW?b+(&qnASe{2B_(TN`73I$/a9Gs<RWzp!lSxQ/^#P|GQ|W-&0=f E<:' );
define( 'LOGGED_IN_KEY',     'V8exZK]ut(5l{!Fyi$TlwuIpYbG^AU@=f(%4I`m%x]LgVRgdIPhxylQIQ52V&TN@' );
define( 'NONCE_KEY',         'M+o|?p.}drcbVy|OVn-6.eBovv!]*qXnk+LbPpZ2lg49O0+FKja1L?V#fjow*@;_' );
define( 'AUTH_SALT',         'saV1fkd@fhU=(<k1YbmA_*3d/r4}lAg)H{i--2L{!Qut..N S}](=[n_Mtid 5z=' );
define( 'SECURE_AUTH_SALT',  ']X77it4n%GUr=sQNJ5R1Q1*in4Wfw=/0Qrur36~c6=6/^D>{X[pE;&Lwm8sND}B-' );
define( 'LOGGED_IN_SALT',    'xXZY$6gG}jr)@fg0]nc+){F`m no,eR<FtuoK]W7<W}N!eR@jr<w:Se~!(:Ye6^~' );
define( 'NONCE_SALT',        'e~]r[j8}p(t6RnA9>o[IOa|Jfq1h&YgUoZgv,5-6yAAb2QnS#d[Mo)D.38z,K#*R' );
define( 'WP_CACHE_KEY_SALT', 'Z-E^M5M{[m!t =C=Gf/^?e#b:Fa6e1m_9(R|^k[{zK>mH[ /(?oazj?B?6@}QEl^' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
