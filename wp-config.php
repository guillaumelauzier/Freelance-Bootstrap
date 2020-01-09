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
define( 'DB_NAME', 'bootstrap-freelance' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'YaM~}`kd2a&ljPhB5ovMte!T5Osl+=duSD`Kytk|i8!{x(6*?/TY4JSsx|pyzlle' );
define( 'SECURE_AUTH_KEY',  ' P`e9Z;0kw!An5]I`)ic/[:}Z.28=T?+dXi_#=Z[HrD<KB}NH}B`W)>x^d~U7kIT' );
define( 'LOGGED_IN_KEY',    '.V!D U{G3fTnhPL`Ci8cdjiSor^Lsf:qX-V2/ss!^adR9J>|dUZ*>ZXKj:4JQ,UE' );
define( 'NONCE_KEY',        '?a@.B<1R=M^Q{o;P#r*?9[(&=_bT~uO~(@_B0n.J:+JSC=V^(aS5cgwc,!R`F)s-' );
define( 'AUTH_SALT',        '@N+Oo >ioEC`e<$XtimNH7.9j(]3$o(<wBv._X>G0YvLw>rE{#,cw=_|Gt_RhS;?' );
define( 'SECURE_AUTH_SALT', '=Qu9;PBFfG{XQ5qz?9X~[,[=?y)oJkRT!Cl yMzU2!/dUhO7m6lrr}*5^90ZS-sl' );
define( 'LOGGED_IN_SALT',   '<x})[cX&9|>|HFl5E`RJ3%D!=;tfz-}k-ws3f>[T8pDl<C_d16t6.x!-wnQb)kLn' );
define( 'NONCE_SALT',       'Ru@O& p.4w{<g08C5~d<e|`N8* FeR3,|)Xf%clS}xYNEMsz6If:?V[aL[ABQDK}' );

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
