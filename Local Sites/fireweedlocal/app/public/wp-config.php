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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'qUwuQsvb51z33AWL00Uo22isi5NWWIOfL/l5vuUiK6Sl5AH253fMawKz0uV6WDbHHjW75+j4EUe1drQxTLxULw==');
define('SECURE_AUTH_KEY',  'brvuIDUPmXABeN10PPvcwH9hPJ/haKQlrR1/jE2rJlE61pt4FRsc1aq079v35AQza5HZh55X7Vs+TqDrkNAeww==');
define('LOGGED_IN_KEY',    'DNo7gg6Qa+ggesE5cBd70Kzxz92vt2FtJTxINX9WnBOVGcdfJxgdYYuEHxWyeP45Y7lxHi0LAcWs8BKc/DAQSw==');
define('NONCE_KEY',        'vWZA7HqrmvUSSKqnjMWCqBq7lgHUH7VYkE7du8zIXfbCzn/Low5ZN3ydW7z0PPX6tuSw3PrIigYHAulxrSqStg==');
define('AUTH_SALT',        'lBFOAtYwZmlgit2wK7y6awPqkEPG6LwZZdjsQGPubVGMP/+On0GMzqrL9gnJun711+LaeEMRfB1aMHs1NV+zYQ==');
define('SECURE_AUTH_SALT', 'v4skHLrs71v+9gfam402Qr9L4sqPig8DmyAWtkwg+JEMk4mDkn0Y5SEmYQba0l8U4OxoR49/8kHneLtyzmQq1Q==');
define('LOGGED_IN_SALT',   'E3a6roCIVQRb3Y6iGrQ8Vt3V0Re5wyFy35nE6sWn2AKlf2M6/U4b1ZYyfuGOA36RY71ZGPXbCMiyqoJu+IMREQ==');
define('NONCE_SALT',       'vQs6EWLo9cweOzoQQfGVzsDGKpMWpFxmAXoqJJg3+VjsPDE+tm0CPUoxYQlHOY8VXWSgVxLfjEWAHQEjcVc5mA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
