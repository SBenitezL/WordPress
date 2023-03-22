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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',ek57o}bF|nw28MB~{< AfJ2Rwe*.}E#w~<Z%5_$F1m?hit<D}xvT)N:Am431D85' );
define( 'SECURE_AUTH_KEY',  '?=qBz7:C<5U.[^ek^6U?*$dYV{<d;r+3O{}y=CE;4VsA>lO[8p!tvy-}&,VqvAw ' );
define( 'LOGGED_IN_KEY',    '`h90?189XT3Xj{|gCbjTkf?u8(9p1Sr{IZS;00q0ESoj*@H|R-6v!8+8Y{;<n J ' );
define( 'NONCE_KEY',        'Mj?yl%WT DV[2qlta.lg),.ESFuDTxK([)N~v6%Ke^eKn>^}wXuOeLG?=l3ZQ,ct' );
define( 'AUTH_SALT',        'bL4CkiyJ/7/^;P`?<3Pr.rn}oxf^$gzI=ITZw-}FDx08d4k4)%DkBHD>,a2Z5? y' );
define( 'SECURE_AUTH_SALT', 'yS^-`{SE++$||WZA#sL->htp(3EqmN}~a/tgk9FldqaCj(vGa6V(vm:~c[G;CKu7' );
define( 'LOGGED_IN_SALT',   '9#!cJxI%y`N$<6QodHZ_u!cXl8/|*)q0K{>8i[yJHc$mRtGtFvu&Ck0|)i97ptp0' );
define( 'NONCE_SALT',       'RCtsv*XCh2%w9uvm?=k}Aut*y=6eixYYXvLc1h5X(>@)pR9-$D!O2*8yt8AmT0:V' );

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
