<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'fastr9ja_wp184' );

/** MySQL database username */
define( 'DB_USER', 'fastr9ja_wp184' );

/** MySQL database password */
define( 'DB_PASSWORD', '0S0]qF)H1p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '4emowc5wvjxrmqbm1qfoz96bcwqxpwods23zoojusjlv2mlyruxcys9qiykvvlog' );
define( 'SECURE_AUTH_KEY',  'jeodkcbr0v7b2agj4ek6xkc5lfvqdlud62fmkfcxzkaeabe6kugmtxxlzpzj8oo3' );
define( 'LOGGED_IN_KEY',    'ns8q7svpy7xs4alu7z8k9fouicfptylzjre8zinewzptpes2fuvwskaqoyqe0kab' );
define( 'NONCE_KEY',        'kvbz3w1tyrzedl5fq43swjb0gikneylmyneiswcqnxn4phqniiedrilcdszcusim' );
define( 'AUTH_SALT',        '41taannl3uexpiefqextdjlryhg0vr1stfpr21t6cps3rigtr1vdc0rwdgimprrb' );
define( 'SECURE_AUTH_SALT', 'zk6ji521wsknpksfiye0g61yriuixmdezamfetsotthl4dyxdsj7qxjb92prsuot' );
define( 'LOGGED_IN_SALT',   'ual2bz66wi2xftqwaby6lxhzdnt8cn2bk27i0nclflhrwng7xhvgfxarwoaogxit' );
define( 'NONCE_SALT',       '633sxdvlyblhiixwv5wnajbchlhjinshtghsxydgba16iothxvkl3cawrxivmkjy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpx0_';

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
