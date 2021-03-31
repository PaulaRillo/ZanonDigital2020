<?php
/** Enable W3 Total Cache */
define( 'WP_CACHE', true ); // Added by W3 Total Cache


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
define( 'DB_NAME', "zanondigital2020" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',          '-(!)Y_,SWc<11eFd[Qr9bC1LJpK9N7L1Zq^0)-^2-km/n/:4l;{~3ohTB>m/(Pi|' );
define( 'SECURE_AUTH_KEY',   'F sxh7:&!x-[KfMO (n{u+/_uP8KJ@D+`#yX{#ltC ~l6K}2+qg4>3<w>w-sO1ZG' );
define( 'LOGGED_IN_KEY',     '?@~C|2)Q*J|7HGT^a&]6B91Fd?HK3zkmz]&#Y>Kk~v`QwI*!=0F%KU+oy!h@-xQh' );
define( 'NONCE_KEY',         '}E;JBW{W~N9fw;A*(78lcw}}E5>ed =ECUZ/*S+5|&Tst-o,G:JNx{/pTv-st!o;' );
define( 'AUTH_SALT',         '@r|y>=Vs,%3+wWZqJ1*jz2IiD,4U:k{{$B[XTu;orz+qxx38V}1.>~|Zw*6TsW<v' );
define( 'SECURE_AUTH_SALT',  'uJGK]&;VvmA s m%o%h:Fz G`qL OuA*!lxYXw[z}JD&MUCR%f t0x0VhZ`pO46b' );
define( 'LOGGED_IN_SALT',    'D=jq$8f?Ve:gv[*n/B^nh/3tw1kHS|hfeG.}4i$%<2w710.ldSf9M`F?Oz-HkUkv' );
define( 'NONCE_SALT',        'o|hNhvAkr[>:@XVk+ehNFRg~!AU<}UH)NF?)|`r,7n@]_[1P/Yq<4IKZ[%<ucyq$' );
define( 'WP_CACHE_KEY_SALT', '/oQ%-`(Xzd{uLj=AX;G4SLzeRGuuueE8SilU_x6t(y;&GK2a8k+M<$OrCN*x8Ap-' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
