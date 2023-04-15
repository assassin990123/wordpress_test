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
define( 'DB_NAME', 'wordpress_test' );

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
define( 'AUTH_KEY',         'wfBn~a~kqn#n|e:D#}~f~o-s84y/QC]?QfNA+bI)t;6H;kIhe%Kin)4lN9SEp!h4' );
define( 'SECURE_AUTH_KEY',  '4T]YjH2<Fu;d*4Rz[8uHgn&Q#h7u9?4r(8G1X}#n2VPC,Wr*v_=L*{d|kD0C)j^C' );
define( 'LOGGED_IN_KEY',    'KEUnU!nOExwZ!ww`!utQ4DdIlrW6xMT*r#O*7EV 8<}xiY!zq:,M?fp|D236rm9B' );
define( 'NONCE_KEY',        'mgMgd%~CbVuYIDKmHpF;E{:1CWAHOdPavJr{;QIijqv@uEW?bM<3H;q4$]*O*zV-' );
define( 'AUTH_SALT',        '6rScp 5Sq7H,3M#lT):PDWz.;g}NRG5G-<:N_H]IZ6(|=g}0Cw<+KyS0lL.}xVBj' );
define( 'SECURE_AUTH_SALT', 'HsE#I,+rC|c>.Ci:/=#oy,Ip`G-_1Js0O7vMOHS*,.h*A)9Ax,k;8BG/SEWL=5L#' );
define( 'LOGGED_IN_SALT',   'Ca6ZOT)=MhX^rw-3oh=%xxZw8Ur}v8DZlF93=CNeGta,.Ci3/kA% Sy3&8d.2[V1' );
define( 'NONCE_SALT',       '1}c%}yssKIK%&&V||W}p/9iFw<u3woI(mZozMmrc$4{E:OZR$4MR:!C?I`Sr_I3c' );

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
