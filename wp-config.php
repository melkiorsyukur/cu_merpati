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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cu_merpati' );

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
define( 'AUTH_KEY',         '`@&~onpUyUZZK]MJ&w^8A-iCQpY.J86rKtSEa</2W$])$HR]<FMM%gT>,cqFB xR' );
define( 'SECURE_AUTH_KEY',  'hK]X@a.M%>tG6q9NR ;%3B,3I72r=F]6<sI9l/hEf Di;Jr+rQIo%>]2!NU?,X^!' );
define( 'LOGGED_IN_KEY',    'DDk$>/sg8[>b9rlR,hngIP4w|nXd0 dr|jj]pP/PmYM+`$BbqkL9+@WRo5e~&-JL' );
define( 'NONCE_KEY',        'f]mH%2p+.sD::IDURf%zyf8v0x8D=rc(PKm0J=7N$pjfqe1~<%f(bL::gVn]WU;^' );
define( 'AUTH_SALT',        '}iB>EAH.cNDzMsB2{88m*<{sweiSll.rUqcv40w36,cuNi2+6CZ>}YuXKus!22qu' );
define( 'SECURE_AUTH_SALT', 'che#VbuE*;Rl8nC}JnC[WKU r7K;oGhFA401=Uos|Rq]4^_yTs6I{ZeZl,)=s+m@' );
define( 'LOGGED_IN_SALT',   '_gcHM}C3pzNFf7dH)dY:<>x{W${c 8z2v$RlXA0Wt{)nAQ>O J)3c#=MGC6t!5Z-' );
define( 'NONCE_SALT',       'ljWu?Qb;LXNe/|/?OPzng;8FwUhR|gj+~kc(9tBL4TATqo[:~FftR7ywt_:a/`tr' );

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
