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
define('AUTH_KEY',         'YaoUaFNBsZXxRyjHlwALga3bnzq7gQFScXo/fYsfREpQGapmM4l60uy8+lnKB2xyo5Zs6KmEXAgGUfufMkkFlw==');
define('SECURE_AUTH_KEY',  'NRitbfdHp9zK0m3NQrzQHbI0ND2RBmlUrt3d6yGPFQy5T28iWHNugBGWx1FUjWf8rHQIOgfkocUxyeGekpyClw==');
define('LOGGED_IN_KEY',    'Nktnp7CTuLKLnNxGMjW/DH94y2bDf3pEQ0reuCBpw+HtFJ1okJaJw1PyXA1clabxkTgBQUBP6/zzBkE1FhZhsQ==');
define('NONCE_KEY',        'kyS9Rdw2FphLq/kWnL2Nr2K94DJXmRJyrx3ehv0cF1k1NLzy1IsOe9vP3YQA4cofg3SU7/MwToQ8PgtOywOHcA==');
define('AUTH_SALT',        'PyLaW7rTWI2QTNKlWdSL4G6JvJoIKYfxe6HBnw8hzpK62bl0xKEuVUPAkFplkLW8Fpzz1k4OzTasUngRzn8rsg==');
define('SECURE_AUTH_SALT', 'EwOrsCQr4SEj7JbwjLBLen2o89ddCZOoKaMEKZogES7CUCzI7J9KroFl0VHW9FtMjBdTklfw8omwYzR90vEocA==');
define('LOGGED_IN_SALT',   '3TJdiQwkhYP3yhzDGk1yXd4NNf/OS+RpsmA0a0t+bkqXehktMBNWqHUv0ZQdB+bRzjO9z34DUllC/A2mB059Jw==');
define('NONCE_SALT',       'RRArXW/pam4j+16arplHP0nUCClD9FBkSf7yNCHxsnpD0Dzl/IMLCenEWQo7m8407EEYkUcoDccrQK1uAZKCaw==');

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
