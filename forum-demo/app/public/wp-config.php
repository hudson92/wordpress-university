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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'UFFRNfX5m5FyBV6jOyTZd+Kio+d1V+e8j3wD6IexqJpx761zNMwQTkIojUxnN7Z76LTehy0yRDgb5d15rLrl/A==');
define('SECURE_AUTH_KEY',  'PuuT3GG5ASy4HA7iAwnIVQqdJSAzvgLlBxEGttCQxZxq+pCaadhDAMfWBek4dHuWJmPPr4zDkVk8p6c3EtfsOw==');
define('LOGGED_IN_KEY',    'SdM77mnp6p0d9diYItnWgXz0Mmhf3VUrWBKisvyolMHb6gt/Ky4l/pmUthrMpYbT+djUT0d/rt+dQ0lu2GsXMA==');
define('NONCE_KEY',        'nYhFiSqG4PM8gp8vYfNwIFomaknXhYL+XtsNpGlfVc8kRFa/QtopfJ/sdzv1hV5LO12L/vWeI4PzvNu94nlN3Q==');
define('AUTH_SALT',        '84GG7lFjNbyqqc3FHHMDYUggAe0vgEIwo+ugJxEG5A4eSi4KLwYZQEebLQGQOf04XCOLMlog4U1s2jR482BAAA==');
define('SECURE_AUTH_SALT', 'pvBmgLJbbGrjQC1SJR/yS49BNboxI0tolb1CYkfg330OO6flR+R5NNPS+9KvKToHKt40hl2VwIRrPHCr2rrWbQ==');
define('LOGGED_IN_SALT',   'TEB5TBIHK/PlWyyTT6sqLhT6MmXEKG5Jjt14f8WMvhi+9FXOPBIohGVmKbB3aHwiCFJ0E9DxIWkfkKFJ160UxQ==');
define('NONCE_SALT',       '/o1j+JcM1BQpZbghlWLeG26Ywfz169w+KKLP3K+IBXLVeML/lai4cwWNM+zdQmunmLl5+0JMa1o7w/peKmxLZg==');

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
