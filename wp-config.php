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
define( 'DB_NAME', 'iasbe' );

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
define( 'AUTH_KEY',         '9<xwt/G`$V!jiy7L%[{#gTe;^cp@}|?N/&EYk!%fZO}m.G`ET}Y~;-VT=kFl6a;I' );
define( 'SECURE_AUTH_KEY',  'T#}]%Fj&%bl$e4EUN_dzooq7Hs/?~(m=1{+y;y5[}i^g@p*  eHj%X-W(^]Fayh$' );
define( 'LOGGED_IN_KEY',    '%w!/3qwZ7r![(JI>sHDdC7K3DJM?uVM&ePW]G$[hI=1T8*r?o^`=}r#2Z+iA3Q04' );
define( 'NONCE_KEY',        'N8u$mhBT2sIA^^MC@.FVJZ[v8>`OXm?%]-n4:2mL.K2&xxqmW%r#@J*n+VE=syzR' );
define( 'AUTH_SALT',        'U6.3>5Ob%~OT dXxeOJ//n r;QXqKk-a!i+H=Sen??}p5,xUM>K14B9*vhLK][0y' );
define( 'SECURE_AUTH_SALT', 'nxkbTD0L<R.-%p!Q$)}&ST=tON;uZF=f? M`&;:pA5r/eD?K,hPTQ?$f-{8 ;Noj' );
define( 'LOGGED_IN_SALT',   ':Py>$``z~QM9@_aIm03ZBp[(uVhKHGbT.6][vMIaM=2}tCa #7^Nd*46$$EMqd<J' );
define( 'NONCE_SALT',       '0*&]F ]F ?S ]E_!`DpH=ToJJ)3[2XE6MRKpN&CmVwZ%pfeN_^^yF4%HsYZ~M}h?' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
