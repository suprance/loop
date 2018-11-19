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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@8L(W>ts&Sw^:xt@v[|Mr;kDHz_XR?mrD#2,RQ4Hv(|-2@Ri+iz2:hdX2eqeyg8a' );
define( 'SECURE_AUTH_KEY',  'tUIw$u+P;IW1Fxx*9B-8fM~Kp$.YpsDzCu2ZGuMsBAPbxzpMv5tb{wWm^.r4MQ`e' );
define( 'LOGGED_IN_KEY',    'Z@O:yLq6)_;3iG*RU_a-<+i8xV>Wq<QTlITl?^/oq7g!}-1e1}jcFiGH;]=*-7Yi' );
define( 'NONCE_KEY',        'VhCKErwH3JjF}$i`7}Sn+pv40QM7/`Re9{veqximn&bzsh_@:Z+5%UOQIIf.SRvA' );
define( 'AUTH_SALT',        'N@?)rMigh%t>0l+hdpZJh%{$ls#Qhye#l?n@^9UBu>R0j$Y.pWq5+rgBRk<as35M' );
define( 'SECURE_AUTH_SALT', 'zMtwEw#.Y+N$JC[&p1J8)7-T-@Yd/zH?kuV01Y .%i+qKk_oxE0zU)4 |vm9s*F&' );
define( 'LOGGED_IN_SALT',   'JlSP5t>tp*?jFcP]nA5!}V6T#/hr4^((V4LHw5V{Nh{cm EdEQfrjH&%&<pAs*xG' );
define( 'NONCE_SALT',       'e2R?|:80p4k1OrUb`92odgyZ?vL]D2iKvo10Kx@<nLPvH@G@cHt$1y*4Sm$Ce~/i' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
