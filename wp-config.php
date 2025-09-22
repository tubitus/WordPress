<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?P^;u3e7.051,ShNUt5[/Biv_g>?e_*)~bGjfN;+f+PDXi1o|Z1&Cp7jQBU3sIAl' );
define( 'SECURE_AUTH_KEY',  '_y6]3;PtFKH]EZL?h^D$H^liImQF^Bc>EXN4_?mZpa=]-de,v{&lie*YU571m%8!' );
define( 'LOGGED_IN_KEY',    'wsO^wMW)3NtGwvZqJrHLQb,Rgv~2w@-M;7.D0THM7t e=FB =(H$NEnTnJ@`/5IA' );
define( 'NONCE_KEY',        'mgrXf0@y*xT3Yjg/*{K=nKC(;`nRm{OW@P0V%e+l2* 4pJZw_RNZl@3 6aV.cY8(' );
define( 'AUTH_SALT',        '[r_V)FQ6=M*j$cuVW:L=H3B)8-9{oJE,Iq|MSPd@g::o2jbw8ki_n/#zGy(#Tvp7' );
define( 'SECURE_AUTH_SALT', 'Ljb[O:<pFwCkh q_EN_uROA+E]ftTd2N{P);E]]yto~ttQY(ny3_5hVRU8u;U$$9' );
define( 'LOGGED_IN_SALT',   '&X4,p]%H9)2#3S4#DNwC`1Bu(OmN_}?$|._f2|G]b.*ekk,s>zZZL2Na6KYBwlbt' );
define( 'NONCE_SALT',       'A9_W?/3oC|KW;Wmd|*wukk&=!<sf~lKOT;ZM2c!23jsG([JgJ)~{d{w4Y[2:M2sp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
