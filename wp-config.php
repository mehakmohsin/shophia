<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shophia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|m~{zSUM#)`1iq:c32`(7zo8ICfq^(R64Npf?0/CEb*IS9-0p{c{UyNZi]+oYO@:' );
define( 'SECURE_AUTH_KEY',  '%5mI|]mcF4M{g;J4|DaMhHih}UbHaJ~|i`Fh(mQS>$+mDOsUJC,N5{n;-QnpPI=Y' );
define( 'LOGGED_IN_KEY',    'u3@b>};}/QSj4=sp[`;1M#9N_Z2_m#-kd[f9yK-M|_fX_4b%MkLI5T*;JC?s hCo' );
define( 'NONCE_KEY',        'oxhFOH72RkA%%iv|8AR.I@k1bVR/.;(`Dx8{vi.?f=k:UGjq[l$QoV1V$t[LS7|`' );
define( 'AUTH_SALT',        'yLfeiVAeYt?q<=+7tfsjR<bioZyR*yhUrT_dDZg.tK# >U|b^{3S*qn*$yU]kWMp' );
define( 'SECURE_AUTH_SALT', 'Vi5f/ThY(B/t5MK(L>`ULri,B-uUb$VkT7]W9C2]iY1cP)o|yKI}J7!IcTTfYHuM' );
define( 'LOGGED_IN_SALT',   'e`oAJ5K3.3/T< ^p~uq&:O-;F0+Vo0WYyWwJZ;}9k#d}*W~7|F@I=L%GjloJI!^#' );
define( 'NONCE_SALT',       'z:Yb7n;I{O2^kM-n$3S=X0CkSnPB<EN!Tlyw2>S9fiYsV1X{pb$|4sSjiiwd0Dk:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
