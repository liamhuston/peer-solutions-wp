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
define('DB_NAME', 'db1088174_sa43901_main');

/** MySQL database username */
define('DB_USER', 'u1088174_sa43901');

/** MySQL database password */
define('DB_PASSWORD', '4uS709EZdAWAEnFh');

/** MySQL hostname */
define('DB_HOST', '10.78.104.65:');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8@PcL0l^*49KpHtbo5HKZ%%UBgW9u&jyfO)E#6TU48#OiRoUDnGC!vpuCfwfolSu');
define('SECURE_AUTH_KEY',  'c*s1*ZTMGy5P4)9ZPzEwL7#0yl#%N065hsM4mgqdjTyOb7rSn7t)c#!bTF7wLIr@');
define('LOGGED_IN_KEY',    'Vpo3L5IPUTC*An0&EFl@IGH&bsJrqUJYr8T(dDjE45GFGeISdi76v32RCD&YZj5L');
define('NONCE_KEY',        'Q66v^T1)#7nq!QEM0HNxiNHXJfrm2kk&CIbLN7yY%MQyu^KAC9DrdVCmZ*0Sa&mJ');
define('AUTH_SALT',        'Yk3q#%Tx83DO!6did^W&&)Fhpq5keRXdw1%!o&7YQ@y)Whu1yA!Jzhsd!2xpV#Hx');
define('SECURE_AUTH_SALT', '0h^a^DMs6xd1GPZCPBE4kyjGLCaaMOb%14BO(28I@@gEW&)2xU*)5v*4aMq@BIny');
define('LOGGED_IN_SALT',   'swZ1ib@&aBWn^VkNWBCKT*fJKBWG^(!Cl4Hft2skTX1U*aVq#kBAUubPD4Ujx%2k');
define('NONCE_SALT',       'yU1TlNVy3o9Bko24e(236!QKyK0Pl(%@QcQFF5I6BlBbJIiNkx3TQVLnfnj8v0cV');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
