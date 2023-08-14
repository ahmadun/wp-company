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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '7LDkNiwzAIdjedrTjTNmx8U0tQIvnNFZIlWyu9dItSEQFNPe9/rjngZBgPF3vamIu3uGVhj0rq4okDtE9Rg/2w==');
define('SECURE_AUTH_KEY',  'kvljtUbovdKP/TjfwPhzeuMmVd8CDudvbkmci0mmqkpvm7Cv4KDI6pX3rptBGMGosytaJwBRG4Sr9PcCaMEZGQ==');
define('LOGGED_IN_KEY',    '8bG4tvr3QPWKc6zhYXhDGOvauytzhRoIxwjY9ZyH0QPNBGY5wBsXTbfOWPssJD1VZJe6/es5nQyhWAsii02Dxw==');
define('NONCE_KEY',        '4EIeCmVD3JO4pleQ6FWw6CQiOgpiWa8JP4uQrQjDxjIbNvwSwrDCYATwmTCOVP7LmngC5kK+X2U2wdcfbA5+PQ==');
define('AUTH_SALT',        'DNAEjMY2zjObjva82amKi9yLo3mDVdZCQ4UEh5dqt4ub5BQp/1ynQBW5iygGgptngLaIyRzlmhsZoe9RQF/S5Q==');
define('SECURE_AUTH_SALT', 'NtNHyq1Szvcrw19ntqAxLgJNa9miI9Lbu2l6uUJJ62FKejbLTtNZAKrdkccs9fXrJIuvZEj1U7Qjn7zvUi81ZA==');
define('LOGGED_IN_SALT',   'YF6b671k0lROzunDaK9zFOhFZsJJaJKuE1Bm+jSHBi223jHNLsFkpz1QlY4LelccIG0AEdvLPRzQwIHHzCOXZA==');
define('NONCE_SALT',       'X2eqQ65bQ9IqGmzXAezsgGhyvkiVz5mhG3lIyrbMl//Meuez2+cTq48poCmscL1YkH05hK+gPIMrnndsYLYF5A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
