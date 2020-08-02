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
define('AUTH_KEY',         '2jMO75yFwFwAY4m/10p0flBed565xrD+V2JC5AOUtm2iDmYmH4wKMgG1kZC+EMruTn+5+HOEek7ClsW+Wx3P8A==');
define('SECURE_AUTH_KEY',  'yjgqFf21iYif6o78yKgy6sEKQYBS0dF1+7XhHso8moF8QvVocizN3f72Pqnbppl9RWZB7+d8OTiZYyrT2kiMGQ==');
define('LOGGED_IN_KEY',    'nFRlzWG7yrCXNYKhGK9WIiEDylnRW9STU0afgc9uzPpHueKf0gaIy0C2WtUEq9xqrc2QOAZk/iqF+msqwRDDdg==');
define('NONCE_KEY',        '9waeKiZhy9Op/T2pli0cSpql8h0UDThmdi610HuIOGww0wYL9WwCTY26TKxjvTKHso/O3JcfW/Pb6liMaX6uCw==');
define('AUTH_SALT',        '77X5Z/PpkhergvhBghFSLKRKvcvTpzLcousTzsy2fMvu8mdafCBlsUdOCzLV8qmn9w498Img39+VNas10ciytg==');
define('SECURE_AUTH_SALT', 'vc905uQDtyQoEz6segw02XgFu038XewX44/mvJ+JQyCi5Psow8N0so04ETaeUovCcl9HHqRfRHeKu9QsLfU0CA==');
define('LOGGED_IN_SALT',   'NXIjxKzI0f+ssucd8B53taJK1q1Fn0OzbPrrtJcd2f6qX/m7NRFxfJj9Da6KjJDrDsHINiE35sVd4hgb1TmEJg==');
define('NONCE_SALT',       '6reVmMF5EdVjt6q8GXVs0BkT4HHc3rjkV3tISqdfQ6jhedPexXzvLOzMGYrOC+45aUh1aowRHF1+sotRjNgtlA==');

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
