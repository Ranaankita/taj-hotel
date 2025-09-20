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
define( 'DB_NAME', 'taj-hotel' );

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
define( 'AUTH_KEY',         'DNc}W*OduQ$U]7O?m=@i].wJ}m(Q=kkf{e5L^kjQVX^:B4-OE#=JMEB@kIwK]udi' );
define( 'SECURE_AUTH_KEY',  'K87b<)WKA~z_u]^7]<yUn>Kv^FAzIoXj4@-T.q5~EtupjuF;$tp}KtmxTabn~0`E' );
define( 'LOGGED_IN_KEY',    'b?_d mgfu>AoM^yUJjDphF&u3]i!?6}O6:Jyx*A<#]F~B|JoT)mv)3D`R8@$Ijmn' );
define( 'NONCE_KEY',        'M;O+70VtO/@]7XDJR@]_4ryDLpV9>RcyH[|De!dVyTv<7[njc(m8jM/Xp_NR#y=B' );
define( 'AUTH_SALT',        '7PHbROZie(@WVZZ`<,lhZSo%-uG;7HKP)5Fke2@-&iI[# +v]&RfjCP8*<dAy_tf' );
define( 'SECURE_AUTH_SALT', 'OF}f5J(XQOz= ]Wqo6Y|7`+)?oJn[4uu+Ra[o-2g%_Zw&]_nhkUS-QFy|FBlum%*' );
define( 'LOGGED_IN_SALT',   'p%o@avf#?#E#GIWm@^MAM[>b!|=K_za2p*|A4>N`5K{K,NEp~.?wF EPub-Q8j@Y' );
define( 'NONCE_SALT',       'q>1I#y@m<KX/E}o}zOTkaLZH.:b84lKb1vLB+jbe2r8Pas>yY0q7H{q`WF+.q^w*' );

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
$table_prefix = 'th_';

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
