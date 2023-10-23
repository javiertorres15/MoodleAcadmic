<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'parquesoftsucre_05' );

/** Database username */
define( 'DB_USER', 'parquesoftsucre_05' );

/** Database password */
define( 'DB_PASSWORD', '8zS[!jpP66' );

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
define( 'AUTH_KEY',         'a4crmfibiqpvcnuyren9xwx3twvpc3uatkzygnaywx1abuvvtel54vvheexrjfb2' );
define( 'SECURE_AUTH_KEY',  't4z72d1whdryncskj9zpc2wyynzewbhq05twqggwb9rjueoruxwwwkanvt2ej5p9' );
define( 'LOGGED_IN_KEY',    'crgz4dpvtfwfri3tlxjcemwdf5dv0fbelkrlfwuw3radnlxdw5s2f91kbkrsnohk' );
define( 'NONCE_KEY',        'pfz5n3dlrvi0aa6lwofygecxbxnysnecuqqqngjirk9vyusgzoft3oatseunmgas' );
define( 'AUTH_SALT',        'ksmi3xcgakeepknpmyds6e4mevjv74idbk9zvv2taswzchdliccp2v8zsoaa35t3' );
define( 'SECURE_AUTH_SALT', 'rssuxnxxfh8kjghv7jk53xjgvwexs5g7kv77bxa9ckbqehncpsffu4suhj0ebk5g' );
define( 'LOGGED_IN_SALT',   'w3v3ugcywrjg7ltsihtta9jywqbbaypopxlnef6ki1emvaa9lel1pagvlnjmqfg9' );
define( 'NONCE_SALT',       'dkk7tq6dvqw3fh6widtbtg5gljm8azi4ceznpqou05tyctxjqn3eobb4ydklqz4x' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp34_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
