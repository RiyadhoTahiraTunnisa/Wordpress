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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'polkam_mart' );

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
define( 'AUTH_KEY',         '0hm9T;H sz81P-w~c4`M&>h/.5X~:I*B5oN]WST!iKX;JT3BiGxEPWyB$<^3{.$X' );
define( 'SECURE_AUTH_KEY',  '8Bcr682Q+$UHL0yx%Ovq`)0&&|HYei;W]6>Gy?K9P~,G(2$/C*ggdH6qHA/134Mg' );
define( 'LOGGED_IN_KEY',    'ikj*pCVkjcHT$Q?{V$@|6}FM~F6l70JYmQ1g^3@@af/g6hE=Yj{`Q?D`p/vqq%R>' );
define( 'NONCE_KEY',        'n+*E_UkK,,zn]l=6Nb(^?SG{,2.g$ik|*IgnQe0t3,{8;PjP=Hw-@<P2tCJM65`:' );
define( 'AUTH_SALT',        'o}nTuby57oF<i!|Sq`TKI>a-o_mFz Eh,drT3r1GO%RM9 ,JV:)`nG3Xv$#k*.v#' );
define( 'SECURE_AUTH_SALT', '}F1PlPCQVUSkhm/+ygIiKUh_+>Pd|]&8mze/q8P,C(1ev80+$z)RL)UBP0<F?!HM' );
define( 'LOGGED_IN_SALT',   '@0%<W6mT(lJ>O?,r~l9;[r wWSG(!U6k`MBAA$t;1]{E7ZfZ|bQVEZ;QS[d(#m@U' );
define( 'NONCE_SALT',       'V/<<$Dqa]kR:<lI^viF)1q]ro9T!K=a?cD%y?Z]1bQR`BJWl8Fkdb&w6o=3eL:X*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
