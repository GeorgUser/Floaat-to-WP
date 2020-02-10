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
define( 'DB_NAME', 'floaat' );

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
define( 'AUTH_KEY',         ';8<Dl/([;;.^)N#h+$_D/htYb%%8 w&|5u.)]{{l~9lxbzqN,:[X0N&v{RUWv2V*' );
define( 'SECURE_AUTH_KEY',  'hzcLz6$P`m95}AdzBnDU3RHV!4tBB04Q~^Dj#s#P3!nwc_ 05T5EryS+)MRs*.3]' );
define( 'LOGGED_IN_KEY',    'stt}1:bNksv3TTZo3M2:2;@E,WMk|`62ZpngM4M `N@FfYHdW6{-4t6>pRa?XJq/' );
define( 'NONCE_KEY',        '{vi[j&jE,UQ-`e%V]DcT&0j<!2rhujhbk?U9.kVRHfB{=I|NBLh(R#p.Qy3W}[YQ' );
define( 'AUTH_SALT',        '2DoJkSm!NO8DrX6G4jn:4d]Hgb`LCtZ*Ry$PK%XG<dRdcF$yPs>5lCC6!],!gzm:' );
define( 'SECURE_AUTH_SALT', 'n=;C&7g-<KL=j.#WIs;gKD~#R2:>?l!M_`~IO8sf;C4F4>]=/mVJr_KXnH*z Mnk' );
define( 'LOGGED_IN_SALT',   'wOE:aw:{]td(M3-od`e~/W[g=1]s]=%*1eW[#0F+y -H}77P~06qJ#:>6t|7m#MC' );
define( 'NONCE_SALT',       'bX]y%=fDWiC#HUAA>2P.)8(B YU?oT:Ib<:gR7_bbTG7+(RO-2#B~/rIl57GuB;C' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
