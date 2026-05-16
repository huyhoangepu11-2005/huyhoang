<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sharecsn_wp502' );

/** Database username */
define( 'DB_USER', 'sharecsn_wp502' );

/** Database password */
define( 'DB_PASSWORD', 'SF!2[8b]S(70)[p]oG5k' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vmpourx6ti3wpfyjjrcbzcaadzrft6j0nlf1x2ake9kymlbo7bnsmmwcb3ynbzh0' );
define( 'SECURE_AUTH_KEY',  'oghdolafyfnzcclzzyp8a8erzgsbyci2g36rg6v2dtbleepj3fbklsfbovl7v8wx' );
define( 'LOGGED_IN_KEY',    'pwumqfv9aklw9i4l2g9stsdl8giltkdqp1pstbvwyktbqfigfjvov1fnn3td4wdd' );
define( 'NONCE_KEY',        'eujeonysutiqoghxtdmr1suk0eykmyskwpq2bdzirroou4lpxnvbuebouwogospa' );
define( 'AUTH_SALT',        'hvcisp1tmdbfmkbo0pvmmfzj12aalyjwf4jsqrlado6wdyien3niywyxgkz377e7' );
define( 'SECURE_AUTH_SALT', 'qmgjowfne61zz4jp9qzqton0i3txbitjqywyk2laqbn8ixx13240xw8tgualrpoj' );
define( 'LOGGED_IN_SALT',   'gzsrpn1scsic1dqnpx5xvif2cnpgsyjtonjkjanaqpqnwwxu0aepu4jnpq93axbb' );
define( 'NONCE_SALT',       'wz8uyor4brku83dl6f6jppdvvqzodc4mzbjjbfzcfdo7ftxcefhlgcvcfeyw3xqu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpuf_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
