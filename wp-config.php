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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Fp`~.2iv(:DVVsUg%f@|lz:UQ d|$X^2SJ_Q,OBNn 8Sn;nT9V.rIe@hj%/@qw4E' );
define( 'SECURE_AUTH_KEY',  'e$YS%&m;^3#`.?%Q$!Ea-K2x^{Bs#x|v?s6(ha(g pKy-CW1g%vH1!aO{hrQv#(S' );
define( 'LOGGED_IN_KEY',    '5mF1uj&D_.&DxpFN0n68p.6lhfHuGV5bYS@g;9^<uDHpd1XpvJ }DlS3Fj+8hTGs' );
define( 'NONCE_KEY',        '5NQ7M!ZV_EM`{r0L b|bQyuo%i/e1 7mhefK}pmUt5U 9cCNWyc|sSOuTf]j3ju4' );
define( 'AUTH_SALT',        '(h6U$IHH>u;/(XDI#+Bu.*OVNyY XC;F2!.)p%6l)PoafyxZQ #?Z4v=TdQ/zj,f' );
define( 'SECURE_AUTH_SALT', 'o*rn0,^_QK^wxiN<6hw52#&7kGWf5|>L]:S`f)-?C4V)7psHhg$bfY]D~5_v**@T' );
define( 'LOGGED_IN_SALT',   ')ev_n9BBt&^Evlwo7jY]$Fo.3d~V`fYqL;Dy2^i06BXag_P0d]Cc}3&H}|o3389}' );
define( 'NONCE_SALT',       '#_qV# T^W%$tgesV{5Lm/$&M.Z&Q#Ke:+*?^vx4mYc>3+:jEYMGBEj6SFsOih.70' );

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
