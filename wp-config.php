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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('AUTH_KEY',         'gemxRrOT/kn4R1tBH5s6svnkDYt+sPuQ3QVGkqvA3DlJarHRz6u9Nm3D0QW26ZQnvtdadH+UTucko5ILXguOuw==');
define('SECURE_AUTH_KEY',  'jm+UnBWU/7fKI/TsQgC3FaC6jiDPfPi4EQB7PsOjjkJ0ILd0XvNCL8yYXNpENz/cy0wVbGIEgT7tJek4zsvSXA==');
define('LOGGED_IN_KEY',    'YTnSU0bef4aueI7UZoMBRcuK9B5If2FRcSttosCxYcREk4UqNDtsN40kwY2DuUgDLHRzvDk+odXu6DQlBOeTPQ==');
define('NONCE_KEY',        '766ZulftsVo1EGQlWKCv3TCSjqq6NWEqLMdQrp2W95fDZxFyNQ+qLn7rkC2ixFLIekEB2RstNABL1+eh5Es7QQ==');
define('AUTH_SALT',        'nIhoOnEKHOu1avH8yHBjdW0h5m/QOJNRJhCE7v0n3rySMPqT6+hmirSuO8oJGM8RAKUjMRPpLAdSg4A8WDSy/A==');
define('SECURE_AUTH_SALT', 'XH+BZPlg9+bCpvF1H4tWkiLJcV6lT1qIR7sWsU+2/diBTAMrObIWAmk2cIoz77sDc1VwqdYYSAj8et4ot5RNJg==');
define('LOGGED_IN_SALT',   'kahLyfypEEhopVzUP+DwOD9O9/AoRyjAGzCxj6XojDEygc3b2Bd9nD8TVwnnMM+2J0JnDwoN9CagnM+sqfb6Bw==');
define('NONCE_SALT',       'Uv1aqkrTMfP91X1TVeJIO11bjv+yx/SQEAxtis88xd3vGuOznxVL53CuUSIlnIMvExbS/0zeT1n4stMPcD8KPg==');