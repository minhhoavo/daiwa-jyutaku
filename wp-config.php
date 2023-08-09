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
define( 'DB_NAME', 'daiwa-jyutaku' );

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
define( 'AUTH_KEY',         'xMaEk|sf:N|y jU2_eE8,SQsyq$RLiO%Ofr<p?~V}|oTbtUfo$u.H3P&nbu noN!' );
define( 'SECURE_AUTH_KEY',  'G;jPf$wtC:T*=(fPTDRT-;;~+lwJEx]y.=q[+P|LpHSA)4@Z+xBF{w8d-tk*2v3`' );
define( 'LOGGED_IN_KEY',    'GZ75Tt>2g-G#|6rxi1Q!)<B[7F|hk{jw}g!M*<xB~qEuk9=UrGYPBCsw;V*w7Ce4' );
define( 'NONCE_KEY',        'yEWl{6@tzn<U64;yO,_**OB2=Uv390V08<C4O#!.NazaLZ^;Ey5P)3]uJjY]`~tk' );
define( 'AUTH_SALT',        'R:Q0+BJC9s2^ i1]pW4H_jX!Ng6POG_:]6y~]}er[PlIHFDCdaOpqL$3nCRmrQk$' );
define( 'SECURE_AUTH_SALT', 'i,w.x$uJ.qqADjF,{`og{{Z*@`$&=.g~Pd4jZ*d|-JF,&B]Y:a*B/`Rfd9QlUmnG' );
define( 'LOGGED_IN_SALT',   'ZO7 ff3zCb`>$e~c[c|%W:1%-([dR_l%_VX_4*pqC*NrF4XdVd4^}2^IUh~2UV6u' );
define( 'NONCE_SALT',       '3~LN(`(-8W)*jZtnTU*Wk$*-0taWdt#UQ9$&$I4Pl3$|E}u[a%9aIN;N:A~=1G<%' );

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
