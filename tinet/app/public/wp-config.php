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
define('AUTH_KEY',         'RWUmq3xA5QdRxOXuH6hAofwG6t0HmptTWr9Wm3A0Gmo49zBzwJUs6Ltc6L9iZcr5Y6B5bGMgphIYrNJ15Ql/4A==');
define('SECURE_AUTH_KEY',  'exwHCZKB7Z/9S2Mnw0y79t9K+S34iQF0dJ/5CJ0gmhAu35dOUcSZ2kGRnVLCboboSobo2GIQq3pe5sdN2rn+1w==');
define('LOGGED_IN_KEY',    'F4PUYT3Yb5GTkqG6AN9fm63jlbNyZfJ6AQ3KL5jQE9OFF8nJZ58tBySMwiBwD09v1Rhcs4+F9cDilsSnOn1jOw==');
define('NONCE_KEY',        'GAdOgAdLJQ22/W09zbdWoAiCV0Ugom4XMI2klKJJ8DBZsEq1kyEWRaAmt8gabumi4HpHhpdFCwdlu0Iu1NQttQ==');
define('AUTH_SALT',        '8bWAUc5EVuQaghcjIhXbazlJu4rMKV7gXf2VADYzqdjai2gGFQ2lnx/PtG4gTDnoWAFisaGjUaJSUwcvDcjJsQ==');
define('SECURE_AUTH_SALT', 'bjmjPoieK35fRHkmUAwOBH7PGjlF+2Hmlo0vHu8BQIcas8R0tZAjV/2tdNK1vEMGjKd94kx5oS125yEZHpBBrg==');
define('LOGGED_IN_SALT',   'xAWekjA+JAZcouOPPs3MHdrsefqg8xXliZ0KlPx2nbNYEPWeuCXFJ+qOpRRUNs1aXBJVMI/TW2StqUIkvowIEg==');
define('NONCE_SALT',       'cgR13df3MybNl6gNFoBvYJ9HpQpH9VijQ0QMLT4DNFWyh1ozp14OU2+hj+rdZ6r+hK126i468Lk8KwqN2cSBCA==');

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
