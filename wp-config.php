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
define( 'DB_NAME', 'test-task_wp' );

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
define( 'AUTH_KEY',         ',C^]/h&a9hPu-`OOow^>GJvxu{F>=)eDVxripC65_+yo9.F5EPfoORnY=W$(7r}B' );
define( 'SECURE_AUTH_KEY',  '[By&SerBJS4rw5n9Ravvl5Tg>UCt3bc#SS%*1l)fCX+2_d0(:b~!1SwAX*`{M=qg' );
define( 'LOGGED_IN_KEY',    '&_DpI<?[}kfV9};mkk_Jc}qUGm*g$Hot|Xss<{8ssthDvBD7:iGILI|DwfXfSP_C' );
define( 'NONCE_KEY',        '56G%fwKouE`yojr%z5=14(|}M/)$G-~h @!fcwRqHHw40cNA,)5sJb~*8KFkl_AK' );
define( 'AUTH_SALT',        'c6uuVX70_x@2#]`9nAeg~7QojRVcw` EUHtvk9<gWF~LCVokkEq%d2.[1^u*Zu%g' );
define( 'SECURE_AUTH_SALT', 'VO)%L05kzm,7M-)91J)VqzAvc.2J7!X5Mq`/=zvW6BT`iwaK, U`W% Hhz$uP$kg' );
define( 'LOGGED_IN_SALT',   '@&,$/+92%7%UM!pVbJ<kk_i=/5Q<+]8Yi{g  &pI3(oCpi//:J0/+?9@kBWQbd4z' );
define( 'NONCE_SALT',       'gR>5B/`Q`D<GDOjk|bz<KFYOwQ9Hb9`]f4}9u:urua:Q!L<SV+.{f=9/(_7mjAVV' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
