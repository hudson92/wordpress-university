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
define('AUTH_KEY',         '6GiMO/0vSXXzZwZ0plXQQYubBw62IIqgzP5bFlyWelfe2PgGVedIT1u2ckuhwHZuWPkrmqJS1M0+TVSF3TaUUw==');
define('SECURE_AUTH_KEY',  'gWK9n6oMAE/NntdNt8r6/eh2MH4bGsqmV2pGTmTkzxR7xJyiEwXPDOoPouQr/qUiSujHZzd4UNYmQmZwt+frZw==');
define('LOGGED_IN_KEY',    'oef7LdafBGJSFZY92AdKTPzDM17aK5uiSp3kaDRXc36QrdFmh9DNXWxpg4HzeC3HtTAD83LaVJJeXZPyvmo6wQ==');
define('NONCE_KEY',        'ruSSr/YqKO76OIxHkIXb1fw5qC6nLKyhJOofYCC5ZWlzwCzGWV+liRYbN5ZB1mauWdTw8qYeg0pIKpGiPIxzSA==');
define('AUTH_SALT',        'o5+/g/QvaVxnSN+RxecYtx6t6mvoOqKZVZNkeL0T+oY9rXhIHuui+58oSDrtIceJwPmdYhEtNnRtRvPiW4/HPQ==');
define('SECURE_AUTH_SALT', '7tuqyzQyPmXfGtfKvVwXb+rqdPkDDp6ebEI/5uQj5y2HX+95K8ruF7cLgI2mXC9RcEXFQ/eWsP1h7VAyphS0qg==');
define('LOGGED_IN_SALT',   '+G6YhYVfovYBaKponfi+/AOmHOjhE8xozONb2dfN7tm/XkPkyTyeydyYLsmE5UTsiyHQvYoQ0uTDVeMHz95HXQ==');
define('NONCE_SALT',       'q9Xt8DY9yMJrPIvIIDnF42SEcbtOHtRhwhSaUICLqbLVWdCiy/WRwxN9GtNHqWdBxWM9qZlYi5rzeqiA4nRhmA==');

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
