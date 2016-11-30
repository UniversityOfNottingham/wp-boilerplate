<?php

// Register the composer auto loader.
require __DIR__.'/vendor/autoload.php';

// Detect the environment.
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();


// The name of the database for WordPress.
define('DB_NAME', getenv('DB_NAME'));

// MySQL database username.
define('DB_USER', getenv('DB_USER'));

// MySQL database password.
define('DB_PASSWORD', getenv('DB_PASSWORD'));

// MySQL hostname.
define('DB_HOST', getenv('DB_HOST'));

// Database Charset to use in creating database tables.
define('DB_CHARSET', 'utf8');

// The Database Collate type.
define('DB_COLLATE', '');

// Keys and Salts.
define('AUTH_KEY', getenv('DB_NAME'));
define('SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('NONCE_KEY'));
define('AUTH_SALT', getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT', getenv('LOGGED_IN_SALT'));
define('NONCE_SALT', getenv('NONCE_SALT'));

// WordPress Database Table prefix.
$table_prefix  = getenv('DB_PREFIX');

// Debug mode.
define('WP_DEBUG', true);

/** Add some new constants so we can keep WordPress in a new folder */
define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
