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
define( 'DB_NAME', 'web_qonita' );

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
define( 'AUTH_KEY',         'T]f^^{}Qx/<%~()KftWf{D~Jt L$+Gib%wlHsOxI+-1L-;$/G:R?UAU(EC89A@Tg' );
define( 'SECURE_AUTH_KEY',  'lp?[4:ZV`]D~NTU@79W LknLG|+/. `m[%-3CTNSr=h}~#FzV$EL&6JCBR%a,|bF' );
define( 'LOGGED_IN_KEY',    '6[2Cp<]s{zN&U|B!/A2O;p`(`Pf:(pR+gQ:B1ys<*=vL}#u+$-wzir)aK*Efg}.M' );
define( 'NONCE_KEY',        '5nJ|*o>m)k4[rMG.:Z_PkyZ])keJ5E;q)([2r ?{+l>I%dAFNgAx$S<Uswvc~84P' );
define( 'AUTH_SALT',        'ou*~}ydNQv:2{Su<hE~^)xS1m7cF7rh]ZnSrV(u#s~/P6$cn$p[`+bdmX1vVg!YP' );
define( 'SECURE_AUTH_SALT', 'iY^0c(| VoU04>e/I z?9sMlR<81/Dim[IcOc]Disv>pY=R:2sv%-`k>P{?1g=R ' );
define( 'LOGGED_IN_SALT',   '6zCN4M^mT14BCPxdXJ[E+ENY);h;=_ERCeVjkn1fWIYfHU^}K4U=_{ P?*f*j,rG' );
define( 'NONCE_SALT',       'oV03ibeXQN&VeSzL&%z@*q=[wkAdoR?|Cc54}_x${Sc5Q*),u_`U[0&d&{P!TW;=' );

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
