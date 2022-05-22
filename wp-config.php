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
define( 'AUTH_KEY',         ']jLxtF1UJ_ym+T&Z#h^7FL{2[DAGCYe#Jqw$+wynJ>3f]fEoP(eixYMa9]sa{81h' );
define( 'SECURE_AUTH_KEY',  'aK`Ebl$]y7c?)8ign0&)aEP|ef#M %j|OEAOVaGAJ7.YO;yC??Cj~p,,*uSR~~Yz' );
define( 'LOGGED_IN_KEY',    ' 30lb0MCrH/p]h<lKHX$1WE,8w*mV?%BEEEtpn~o4QJpOkIR37J!8uZ!#l(!2C9K' );
define( 'NONCE_KEY',        'g!A$y6LAEeIYVYZr y,>@PW5,P1O-g-0M2q._kaw<}qI9W.1&^ )Re]$j_Keo`*%' );
define( 'AUTH_SALT',        'B>X*m|CR*0*_5i+$0&>!`,t0B mcf|VVF_KleDdLXa3NmudvEFX_d]Yh1{&?,yY=' );
define( 'SECURE_AUTH_SALT', '4%?9;1~QG57*vYTM9+2FJ}iX9e5zu7DgyLsRm#P{+9Zi({/YP!4[qp[jXx_*NJ%+' );
define( 'LOGGED_IN_SALT',   'sfF^@)qS.MjoT,[|:v%qBm3L8mB@G,?(jrMP?osZwc~:D,_[j=rx_5o4YadZwyVj' );
define( 'NONCE_SALT',       '=F.?#&Q?&#,-9J+&uLV+SRZ0!|P%2/FS}j;$MGOi=CouxlD78N)*HVLFq`%P+ShH' );

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
