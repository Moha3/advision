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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o}UzhZcNC&fO_{r=`N]:6uNgHG4::msnl-}LFJP?N*[AmLyTi(ZK<lA~:=}Sad~X' );
define( 'SECURE_AUTH_KEY',  'OU,-Q)/S;KU]!qP!!{.SYHG7%XJ)p~/3!ZSf|zm4wfX[fG+j@FPx50`btTiB!,EQ' );
define( 'LOGGED_IN_KEY',    'rL@iiw:W9F:1Wvi%>Y#--nr_&L^mAPc4*nvY{|kD^iJm.`^ge:AK~6#5[3ZU|r4~' );
define( 'NONCE_KEY',        'l^&rAm.cp.8s,tIK*I4YY**q5)E2eTV%,M-3Cv)@Ai=w0K|CoHAUO`=bdn=*&Y[&' );
define( 'AUTH_SALT',        'm(]Wj=-*%~{CjF$2jCu3B*&/%<1Y;Cq%A:l+6a2P)89IpAI1anyxA1=QmBQ$DPEL' );
define( 'SECURE_AUTH_SALT', 'xoga`|2RJvm(Qv0B1c#7+<C?DO[3OtG{CWJ.%5zJ]/?5M-DH_$iQoF4/IlF yw;g' );
define( 'LOGGED_IN_SALT',   'J}}RcfOdfc]_Utb^P>*ZAU.PfYr^{;2GW>ocoH2o+K/a6CF;Qh6(}VV^9nL](w:+' );
define( 'NONCE_SALT',       'JlXb]!q}*DfhXYE)+UToaa5^L7,v(jTU`G,+X^mHK]0%vLzi^-jtOa1=T9oD+ZX_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_advision';

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
