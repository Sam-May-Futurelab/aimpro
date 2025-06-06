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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '4OvZoP_~.qag7+[Pi6fz<)u[csaT;_=29g%mQo0iMT4GLFAV1&+=A(TIHT#rSE&u' );
define( 'SECURE_AUTH_KEY',   'YT5kAdHfdL^IOq#BR$)$L|u`&fPy=3<!dyxhjfEnd57zS4^{D$uV&Qoz*5O&^X2,' );
define( 'LOGGED_IN_KEY',     'pd?xfxs8F?4+FQLI$<>AC0)Wv!``APu3_he37Noo}>{`Q(lLNR9bXdU6)1|lGj@_' );
define( 'NONCE_KEY',         '-)UM-jm|.BJ7ul~hf~AIP6bIYHT2hA[a/<MFQg!`X|+zv9i0!5Wp8791bne!Gb8_' );
define( 'AUTH_SALT',         'd1jlhwV?)*e#~Nol]=T3X@|J[Q*/D*r8_JKC[hLB9r%KL}}EX?h]&7Ql_*O52N3~' );
define( 'SECURE_AUTH_SALT',  '3g#8E_`Gl(&AR{T0mTp[cv6 ML4&v-Y=,=1#0SY[bkVThpC7p!r5yI8t9Y6EM(0s' );
define( 'LOGGED_IN_SALT',    '+`3&q)L7/3b>L*i9:&0I:DI(?D#U;Vt9{Aoz:TP7 6Yn$Cpr]-^?f]!,1GJ$M5se' );
define( 'NONCE_SALT',        '}y2WMQ!.u.1~/Gy12Z%LI#I7P!Fq5c`fT7:`;Z0]2,s>.nIVOi+a*VkRbGe3i3=v' );
define( 'WP_CACHE_KEY_SALT', 'g4Jm~ixx*X$Me0t1zH9U.;qiNSG9{$LedNnpSryITDo,S`7=XWt-5_%,a(rDJ.g4' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
