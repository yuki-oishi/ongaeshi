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
define('AUTH_KEY',         '8EEoEY1raTpfOad1gdqr2zMSC0FfuC/4YcF7PQWQieX4tvk2XWbDSt6UOjfyUoPPZcZ8XZOQVBYBHQz1JtLfcw==');
define('SECURE_AUTH_KEY',  '2i9kz6TA74wqAC1MsNPep8PA2EeGGpOzyv1bykwTsqpeY5chjSFnxHvA/BFL0OSps/hOQgmbI2i60skYd8hNtA==');
define('LOGGED_IN_KEY',    'NlYMlODV9EPsegyOAcQeoInmxeKwBwCdRQa+U3Hkh7xDPtXjLQ2eG0IeGMa/XBbzu12Np+IkVDIOP7hyBWTcHQ==');
define('NONCE_KEY',        'zRpIUxhceeiY7jcaud2JPi38mzXag2xlLqNViA8kUk509StnD9YFJT0R1w9RwZadQ35viHEDv/vwmam5if39PA==');
define('AUTH_SALT',        'j/2P3FIoHN1Jn/GACr0KEWjYlFI4Kh/tKu6JeOs9PxakNZZRYbeZdsDv1ENemjOQh7OjV4Crp0Rbgj2XbX/Vkg==');
define('SECURE_AUTH_SALT', 'H71VcqupivqTZA7I/enITTHlhns6aAWyjUXrzSLf2BTyyKQ0i4m46t/0E+xV1q2cGR5OJ8lcbaVGEI942vLiVg==');
define('LOGGED_IN_SALT',   'YFK52pjp3w4mpHFmpjAi/wSpclzZKIEQZstdiqCmxbvB9ka65USOtfN8b1pieuZZMbAqmciiUnHzKif9XCXC6g==');
define('NONCE_SALT',       'Khysy1yKehT5vC2cOaVNP5VcjmewchXbgxabtw5/80d/vFWENLCD/9cXk/IrjO+W/EkdUoAMa6RW5eNUGtmgjg==');

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
