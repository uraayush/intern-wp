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
define('AUTH_KEY',         'pUKKJm4GoxeViGlm4k/NBPK2cFvCrEmZ1M+4qxVB4oYD3Ui+shqDRR061BceyKOAHNmTsQWcAFc5p7k3issqQQ==');
define('SECURE_AUTH_KEY',  'AzjKtmA9XS9LcBTJgS/ENcy2GvAshm8kDwKVkyUvsIuzWnb4I2fw/IixbEx+bi5toliwgqAxnc2WHMtKa3QO5Q==');
define('LOGGED_IN_KEY',    'cN4kf43bwrO6//YrdaBbk1xb99TVPES43yJ3Dd9gM2ADDyIgdKCA+hlizuCPoqZvgzU8K9KuXmnGI48MRLQaHg==');
define('NONCE_KEY',        '2rrW94tkAwLMIWFQnplQ2BBnsB3J8QuwoYPQQKIzsuesdxp5EOhAg/jyq7mvDxYc/jzoVHZiQcvoOOE0z/XSIA==');
define('AUTH_SALT',        'b2/2B7QR77xwkoSbYA4ducG5Wxde2x7hfDsnP1eMIrr5NixgOKFBWYLcyVLhv0QT3YFbd2HG9y4nwQ9TSMlf2A==');
define('SECURE_AUTH_SALT', 'e+ZyOlIX1uSeWIE4zv0Y4oQ/EwHZ+ZOb78T5C//o1MN6kmoWAUK6AU56y/t+/met7OB6GSAqM9wRA2bdAL5dxA==');
define('LOGGED_IN_SALT',   'OfrQFv9qPcKllIaW10Q047FkBj3SY7lpaXTdXu0wITzp/m9EGORiPdwcm6oDRkpjXmZZetjZmNNFolwKaX8TNg==');
define('NONCE_SALT',       'd8aTr1Mq7GIBVfQg27d+S+aUslF33D0kGzHraQR+CbqkMcHn3Eeo90ad8YkKalVNAeeVaw1L17c9GsBoUe2lCw==');

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
