<?php
define( 'WP_CACHE', true );
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baleeed5_wp709' );

/** Database username */
define( 'DB_USER', 'baleeed5_wp709' );

/** Database password */
define( 'DB_PASSWORD', 'pSD]38a5@0' );

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
define( 'AUTH_KEY',         'omyd5id16fzqilou6ssc482obxkyau3ufk3huq1yebyntvpmubnwvo2flfocfizd' );
define( 'SECURE_AUTH_KEY',  'uh47zt5jhvohcbw23issfpwjvsgp9nkzg9wwdpobywmfp5uxwpbi9hc8kn6v56rc' );
define( 'LOGGED_IN_KEY',    'hyancfzeus1crsuaobsuqzwof5pb1rldnystqh3ypprqen5m3viowl2hvnz4jlbd' );
define( 'NONCE_KEY',        'clxhimrqz25jewucn5ucrtiaq08x7wn1pmlo4fhlf77nso4bzzbpjsq0c0wojxuf' );
define( 'AUTH_SALT',        'o0blfqjdpwsa0lcs1kaus3gxhfz0g5gqdudtlszrihyeehqdthnflntaq48mnaev' );
define( 'SECURE_AUTH_SALT', 'aqelugpjrlne5gq8slp6wjbylgesudhdvdivi6kaakcaxhj7zyxtbnfgtbwohr4h' );
define( 'LOGGED_IN_SALT',   'y2sedii6iqun9xkl5r7sishqjeodlsb42yjl455gjxzybnjabhu67nsyp6nefbmf' );
define( 'NONCE_SALT',       'qj4uamuuvwuagztic4nepcenheeeaaxo4gsj3urfmuqg7kuzjjehdaeqxja6lazu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp5r_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
