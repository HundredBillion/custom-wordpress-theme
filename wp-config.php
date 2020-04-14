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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'd_hs|wI*Mcc;v*$s:v:(X~)jlF7e_gEYGlfh0dPyn:N$op[4_9$eJB>c]N{;n5*x' );
define( 'SECURE_AUTH_KEY',  '^&U#oP(SF.v996(`Wvh6cJx6[]7Rpi+becRszo1_CMvE}E[q|26wd5Q~7*la:5~r' );
define( 'LOGGED_IN_KEY',    'A`x##%3D>eh1y7Y$V)> nm|I,,qM<W(Bv2c_3uR!!zt{k+B.|+mWGW=Fr]~bXOMI' );
define( 'NONCE_KEY',        'I17=LT-Ln/yJNb+$MVnG,gZAZ=-RQ_kF]ZJVg&l~UQQ*Xq*[n7FVDK_(0(n}q_>9' );
define( 'AUTH_SALT',        'L}I9J{<cV<n&/(7-7g, YV_+qnpqZRoodO_)NW]x3>R!:19N~yT]EF$Bh>Jmx=t7' );
define( 'SECURE_AUTH_SALT', '%Lru},QAU;wY1.`nsOULc?W,[/HZpEAPlWh:h#r67uiNt{0P9.B^B=aN.[5F_`:!' );
define( 'LOGGED_IN_SALT',   '!1;BKU6V`W1@5{+QP(T =gzHIQhzQIGOQ94k$m,ST^LIYJV~> %(,pH ^p{u]mVZ' );
define( 'NONCE_SALT',       'F?WrI_MA%:LRBw5#q^`l)erH$f0[RLR/~.Nw-gUuG8l-,Q5^pcl5gq1&AoX~fMJs' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
