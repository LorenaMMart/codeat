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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'codeat' );

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
define( 'AUTH_KEY',         '8~7c(IS0Qy[9k:G)lmi$-%h@WMT#)oI/M<_C6/ldF6XI3QsaU:!/[cU6T?7^la[O' );
define( 'SECURE_AUTH_KEY',  'Is<s;BT%Y|=+$i<s@;|pQT);5,Apm_Z:hpJ!BgwW&nAz(*7a@]H]=-G0C 81Ld+{' );
define( 'LOGGED_IN_KEY',    '+/GJ@;%>bx{$F@aN5]-u6(R`y-1gmb]Oq9kR:m)}}@n(vPjJ*Yed7vTrHUTqj}t`' );
define( 'NONCE_KEY',        '@JpnN.DG,Hb1[f[bm{gMnj^N(-5Ye<)*@&@u:@[|ii35/Gp>DuS>b1.0_Yw~|(e ' );
define( 'AUTH_SALT',        '$J0!0f4z+S,9x&kSCr6P55}G1~|rH|1DK$BO:=?*F}m|ZvE}Nj.k6iI/aS(.6|HZ' );
define( 'SECURE_AUTH_SALT', 'a[O8)v3iC`R3JHf5$Cwi8*LqXZr4WD,31cqAcS;9z#m_h=A3JC8zi;tBDY|qFh`M' );
define( 'LOGGED_IN_SALT',   'vO/;xT)mHdx_Gu7+W@JI!A}{SUw)ZW1bJP@Sg>7ZZpBs@T;bo1EWFJDW9_OLc`o8' );
define( 'NONCE_SALT',       'YmNzpW$+$Vk$Vbrz:@5hFl)~B$M*YXFx,+aPgR@H%Kx?`n#`I|=;f369i*ZvU_H;' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
