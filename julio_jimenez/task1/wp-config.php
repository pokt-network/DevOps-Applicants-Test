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

define( 'DB_NAME', 'wordpress' );

define( 'DB_USER', 'wordpress_user');

define( 'DB_PASSWORD', 'password' );

define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'RGqa21|~Bn @k@P/,N{{p>?!%3d?E4)*h<)$`gMPxB3]8lZgJz3lQ|Gu}q]xM9LT');
define('SECURE_AUTH_KEY',  '-~cZFGKYO^;>t[Z^@;h~Lm+hx cbLHZ2HSW#iKS;&rqVUxlmH++Uv,RnM?`62P,+');
define('LOGGED_IN_KEY',    'j].M}KIs./X;vWdOl}Jx_G^ougOX,TsEK?|(@P4 .k%&tDOE2c1mR+XE-x{`3t,A');
define('NONCE_KEY',        'M|/c@eLa)_~MDn0I!UHBnUI$+-~=Jy72>ka:zSf|^va0[_ry2|R<_/MH?6+|.SaW');
define('AUTH_SALT',        '1y3o+3dl<^l(4(?=,P,Z(n0w2yBJR@b|V|sY*f+wgO]tjTas]1LQYPhCHo}[XVGx');
define('SECURE_AUTH_SALT', 'u<LMk{~p`U$Zn1&0g4t/gqc=E&dc8yb D1Th?h|4TnZ_Fr?q_UdD?kc%#2hJV*3C');
define('LOGGED_IN_SALT',   'x][n4X*&+Ii2rTi[EUBAenW[|-;|$G?+*}#|w@+/a]U;E@wwaKcfsfJz?WGEv4#8');
define('NONCE_SALT',       '|Hg+7_|gS|^%~*j|a JI/SR?WqY+7U*j;k<1xY g:+rf`^iQ9@1(^*):|3EJp,_,');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );