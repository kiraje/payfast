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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onepagetwo' );

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
define( 'AUTH_KEY',         'w>P/Upb.=>i|dU1b:LQwFW8{oVsF$-t@3^u&:PvdYNm0di62^:Q=+DkFQC*K~4-z' );
define( 'SECURE_AUTH_KEY',  'fuIn+>O|=y.^xrHh[ZY/,@S^sd{wGd#+YVqNI}NxaY(Ir;`:*k0K 0S|Y!u7*Vm(' );
define( 'LOGGED_IN_KEY',    '%[A(G{zNq8OGjCVtb/lE$35KI1c?Md2M:`r6yKd#/SXmqfI_#/`Er!>IW|)OHPl5' );
define( 'NONCE_KEY',        'qpH)GH]~B*!N`Sk4|MAE)[(zdPhwfC_[&~cM`lsw?LHD|Lv{nMl6B3of<hTM*%Ok' );
define( 'AUTH_SALT',        '>R{ihF#e4HR;tgT;OpKpRY5t.62m-TU1ec75`a$%R$xvVO+5nNh[mZ]9nelWixx4' );
define( 'SECURE_AUTH_SALT', '<rftt)D)|CdwkI%,q$leP/ZG$xy54elRB4^FtYtf?OLB54w)Lf1dZIXSbEg1<s6v' );
define( 'LOGGED_IN_SALT',   'OQzIN|5RO5$[wQXFer{>nIki8V5G3723`^^flRc.|:I8TQWWQj@$jvE=L~wN2_4u' );
define( 'NONCE_SALT',       '$Ep.|(]+&.eaS4Lgvn~~^j,lk47}4, kQHE(jW9rfuj7%[<L}/dRo{1n^dE?~&cj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wos_';

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
