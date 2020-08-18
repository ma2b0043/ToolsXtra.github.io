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
define( 'DB_NAME', 'toolxtra' );

/** MySQL database username */
define( 'DB_USER', 'toolxtra_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mLq)p/nn6Pm3W,#' );

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
define( 'AUTH_KEY',         '#_.%1MtyDNg|h,9&-k1^:_ab3mf,W%]}2*eMul<9~l#wWNCO`gY$t2i>3Qo64&|!' );
define( 'SECURE_AUTH_KEY',  'J2wSImdo?`cBa3crM{$/}85|VF@vi:^$3l){Y7)AG;~e2GQEh%nwDhf^l9[!u}=v' );
define( 'LOGGED_IN_KEY',    'N>X]Y[<Eml G4L_-jK$1ERw@LM$M$Bq]j4jBYQ&k[yXscnvFa`G@R,89_TVm?kL6' );
define( 'NONCE_KEY',        '{Fr}[J$OA=1/A1[(OM+Apzhr0jo=sb`bW7=iyHq1_@4[N6NO]dByG1nyzKpC:@(S' );
define( 'AUTH_SALT',        'SS>Dh9F}mMq#d|&&NH7r]BwD~`x?_K0)>x@4y([R)4].;<3m}~nrTJ6r/a$bVAAL' );
define( 'SECURE_AUTH_SALT', '@=K6 1e~@/Z$Y7kznlDRlU+}<]5mlEs _ub!t^Z5FU}+v.tbAkb?0)!Ui%=PY-[z' );
define( 'LOGGED_IN_SALT',   'rw+$uHIskkWDZSi`SX1M^i<7*/#!BDzB.c!xL`s#0An0KLhArV>!|+Yx4[R^%%p)' );
define( 'NONCE_SALT',       'XH!yhnT?/KA4`HGH(#Wc#t(XFe~M|v<iP}K|C3i2*pDtx:jltpaipKJci9@TE8n{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptoolxtra_';

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
