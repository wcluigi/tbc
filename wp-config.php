<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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
define( 'DB_NAME', "djwillsoftly_main" );

/** MySQL database username */
define( 'DB_USER', "djwillsoftly_user" );

/** MySQL database password */
define( 'DB_PASSWORD', "escape-the-china-boss" );

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
define( 'AUTH_KEY',          '|0m&JeCJqRh*W^O-x<CPB9t9;fNCy!qeb3`7&$`1OBOz% c=PK7GDtR&1y{!&#&t' );
define( 'SECURE_AUTH_KEY',   'Q6V*i.id4v-:yi0R(Iv1$MzMe}D)Etlgor38w`UY*E2wuil{z@CQZb=a:2@LliUl' );
define( 'LOGGED_IN_KEY',     'mrxINtINSwm}e{SN>biF>3c1mJ|JP*FZi,UTov34}os|ce~ia]f0X.(r(pJiXLd/' );
define( 'NONCE_KEY',         'i`?C48=F #?+NLYb,&JWMr_*~C12g(KX`>xo<(8j}{!gsx0nSC2L9$zi3pD`Qv(+' );
define( 'AUTH_SALT',         '33S#k-=/QtpiC@08E/@JN6*%24$u3h@7:1-BO2$ Z^Ss,$mm^N=([Sma* ^ne_+_' );
define( 'SECURE_AUTH_SALT',  'rBS8Vr]O1V yoi<72VE|iWjuF4C>j?ro`4b$uh7ne$b$%I{FK3dtHOUjlJhfJga-' );
define( 'LOGGED_IN_SALT',    '?>h8#iCgj$KJ??<<9mslH&vpNdhu(z3;MrbFu.e]PIvhzQ}n*bxP]oy3@o0NO?rF' );
define( 'NONCE_SALT',        'N$Vp]Dt~u*oBf*l}?9X%mz~>0~DW.`u8d5hBtC!3YrZ%{gmsKw}H>hu]_;@c*0/i' );
define( 'WP_CACHE_KEY_SALT', 'O~ntPf`xD{jN(Nq;c!emxe!%0#Ws+;,G-5(3`tBxTloL}~hhIUXvdh1]+; T db>' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yka_';

define( 'WP_MEMORY_LIMIT', '1024M' );
/* That's all, stop editing! Happy publishing. */

define('WP_DEBUG_LOG', true);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
