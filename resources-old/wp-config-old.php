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
define( 'DB_NAME', 'mohon_wp757' );

/** MySQL database username */
define( 'DB_USER', 'mohon_wp757' );

/** MySQL database password */
define( 'DB_PASSWORD', ']ptZ2S43(Y' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kl5jovevicdyai3numog0mbqehi9jrtcghqlhrkqgo0whseocfa5pvomk3dzms1q' );
define( 'SECURE_AUTH_KEY',  'temlfo75xdlwnbfqjgkym68i0qndc1qbve95hs6rkizizk4lcpoyputiuudyee8b' );
define( 'LOGGED_IN_KEY',    '3zfvrx94kl4bdgtzvnlkr3oakxb0jyqptvdahbcbwrjwa78llasuqduxpzlol50z' );
define( 'NONCE_KEY',        'ftbb2wkwhc5dyxa9b5xwxywbqfvndtxxl9dl2szn0u3oepnnlk4nuw6ka7ziemdh' );
define( 'AUTH_SALT',        'j0kjxyqclxxcay7hnj5v6rd1rkxc4ma9guwfjuy99z16cwx0elmwrkxaapaiujz7' );
define( 'SECURE_AUTH_SALT', 'yqxkrdtudpn03v47zeohtzyosbkze6t3aw605u58txjvbfwdt0tinnqsm8kjoeqi' );
define( 'LOGGED_IN_SALT',   'vfcs5znrqhu1mxkydws2f1dmqxbqoeeuwqs7b9fmxkfjl2laljtjkqg3b7lmwvzq' );
define( 'NONCE_SALT',       'tbphwrfnnbjhogdtv1woscqspoiysbzx2xwfxxmi7jcqozipcwtab2vfwrc3ztry' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpoi_';

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
