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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apptak_db' );

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
define( 'AUTH_KEY',         'xeAOFCwMUqr~OyB6D6nR_=F/Atk3ACANM6<L!>#JKH49-}Lir)QrgsYU<FM5qC]y' );
define( 'SECURE_AUTH_KEY',  'hh#S ouYp*7z!% *L7V* :XqSB{(Smj:A;s/=.Dij.]$}hh$3>n`g{U$vLSorRRN' );
define( 'LOGGED_IN_KEY',    ':UgQ>K{Ci5)Z[YB/F+CA~Lhc%i1B=t?>3Xhr$D.MtTzoXq.&yM93&_lPacjeAGv5' );
define( 'NONCE_KEY',        '}~+m!BjFv0,zP9V,g3=0cZskadRni(?%x-)gm|}v_7?S&*~x(1f5yYFyS~=,w>#m' );
define( 'AUTH_SALT',        'UqJZ$@IRK00&FN~,yuLBjK[~ky`hknGOudvw(-eT0r-? TVPNgx+VNDF_+!YEqpw' );
define( 'SECURE_AUTH_SALT', '}7MLXVgGE_WNG]4D(y70nvm<LU{5l*C7)y(Gx7Etr^bVO l{d3r.cN7 :[sZFZ^*' );
define( 'LOGGED_IN_SALT',   'K/@k<|])e:xQMqT841W6UJ{bV3MX;iPrOp Y1s&aSBA,.gxzR30B(Qv>#=0E_kOl' );
define( 'NONCE_SALT',       '!B2xs]T;DtUyPJ UJ5-(6/&FE]u)Ks-&vIuP*AF~_*!nB`Y.]#`{ZMY(PLp* m(-' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
