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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'home_design' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '|DW/P%nz0Rz&P2krpaFt~K/G3h8S3eOZI,X%q2+S<|nyuBNwWtm#Cj{ZUZ+(Xrk4' );
define( 'SECURE_AUTH_KEY',  'MNi x)t;)QG_V*k<pSX?JC_F_< #fhD_e_4~qO 71gTjPhHv)X3,XoD.3ird<SWu' );
define( 'LOGGED_IN_KEY',    'R&~4mtS(rhTzYy(Pg98U^L8o$W<ehV=S<N4vqYwvzWh=.axzTM[ *TcS1r;f70:>' );
define( 'NONCE_KEY',        'nMzL!OV~J{n@|-c7%aIKY&^K]moeD*^c/=Hy%-Q,-m@ HW1:P0^6^t:.W]`hhRhh' );
define( 'AUTH_SALT',        'e#bFJ!n.N@Fe*V*t1~+VXLm&rEx!rNjl4A9?ZBmJMs4>^%o(R4Yi,9Q6a@qM)>0)' );
define( 'SECURE_AUTH_SALT', '}z}k5Nc{Fh<3JB/L.<?S^bue5^^-D.O;bNChK4O9S%15pgy43bAJU?jDlY%jYcF6' );
define( 'LOGGED_IN_SALT',   ')mvtYi$DA;)p=dI%]#a0}G.Eldky(tK<JP=Xe/*i/JS,n#sqlmu@M^e:v/hB#.hM' );
define( 'NONCE_SALT',       '.m:cSZufC)fe$?6|AWiwI(o`<$Rg<^jwlQ=S5SG2H4s9 3bAUG|NH34U51K ehd2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_home_design_';

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
