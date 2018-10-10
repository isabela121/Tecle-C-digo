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
define('DB_NAME', 'techcodigo');

/** MySQL database username */
define('DB_USER', 'techcodigo');

/** MySQL database password */
define('DB_PASSWORD', 'RIt4rmS8uDUE6800');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-C,q;X~=Y8->}lTZ+1*N3JcO=i(q2GPdT<a,Cjb}g^Mgd6p?3}fC[onS6[1 ~8ph');
define('SECURE_AUTH_KEY',  'POxRdV:KY[4j.5[$;.Pn7W.^Dg`RJ0Bm>B&Z_7,Kx/s0].pMQ}71$qh]Kg;4.))9');
define('LOGGED_IN_KEY',    'SU!5WyHJPQN`0E5K*UddA.gy-3--_AY_JS>sy.2:!wS2W0P8b->>Vf5.Lp($m7TS');
define('NONCE_KEY',        'Rg.dvz#BCoM1*ebeGU!GNv-E5w}XvvJy=AdEesRbMsV{C&sKt*(x)5)NqB=aeqUj');
define('AUTH_SALT',        '+(U;%1?VG-zm9,$RoH%j_hOB^LbD(ad*5@2Ms%f<-/:z8qoiNgd*NI&NAg9=uutS');
define('SECURE_AUTH_SALT', 'NH7Q:3-mW*6%YIT]PO)!u,FD8k}mD<@_j rs^#_b>w_?P_P4vEjb#~lqkToIgTaW');
define('LOGGED_IN_SALT',   '.pC?YZPdLvLbvO5#JpMSL[90 h,OJ-};Z!v6_8^16Ewy~/<#$UQVj~cB<u]:q.3d');
define('NONCE_SALT',       'Yhrbz~*|e| Y!:Lkynj#oka</BQ5Nbj^)[2$NT ^`b;X@NwC>>(w)|dT_gkCz9&r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
