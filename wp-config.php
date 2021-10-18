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
define( 'DB_NAME', 'airtopfly' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UZUsLkhK7wiEiKSIBPVI7hh5LL5o9OhVyMl6GaWm41sjGLQg9ZEfoQp2yV5hjhIt' );
define( 'SECURE_AUTH_KEY',  'LXdidN37aC4FwsKGGwWZqHhsOgcGZZup1GNCc5mqJLlpcrW4xwxcv6BVLQM8S0GE' );
define( 'LOGGED_IN_KEY',    'ygQZRY729o3ucK9oRqRwrm79xuMOVLnsDBP8U6peqObmSBgB5m8dOCp9tVfn6ASz' );
define( 'NONCE_KEY',        'sTQY7JxMjMAGXUtBPWZw3wheWgufGkVoUtGGcRew8i7BeO7DmAi9KBYLaIcM2UC1' );
define( 'AUTH_SALT',        'GOfEkXpE2K5Qqf04jwDe8qlTZpZtXW9Akczps2Y3QlfyKFHR2jXOOcpWkQk7QsdI' );
define( 'SECURE_AUTH_SALT', '1eGxK8OaTGIMcgwn0kX4CWb8yWQsB0mXYo5GT1iTzsWdvPVsuAzTBTVadfkNIaZk' );
define( 'LOGGED_IN_SALT',   'B7c5L8OyfwU6UeZk3Ngcrkj4CJIDkbARlWpASrmQjNk22R38ou2gBRDAjzUALoez' );
define( 'NONCE_SALT',       'm9pWLl11RE5ntiDnbjkb16ngwbuIkfanLUL6RAop5UjGCIwo1EI1aDNMD3AleeoY' );

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
