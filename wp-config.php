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
define('DB_NAME', 'deb10549_wp2');

/** MySQL database username */
define('DB_USER', 'deb10549_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'iUTLjCj2G0');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '93TPHUwnEJauY5yJ3sp0fEv9YviRXyJOsnDVpLkOuJZITBNt9tak4bjWEwHwbtKh');
define('SECURE_AUTH_KEY',  'VVUMij0Y85dRUqKjUkaA81ViNYzidY4IpApQAsQNYqaogitzaFyaFl8TOLx6EwDs');
define('LOGGED_IN_KEY',    'jqusPGM6J28Tj3r991PH5wuAp4ejCBBywyvqBMLgxpRk5Ezgx8JVFCE1Rizuw6jn');
define('NONCE_KEY',        'i1WTq3IFtq7RPxTpZ4LJcZ8StddMzzs9KoNNOs9YJniiBO5UHWxaRfXDCtOKvbUs');
define('AUTH_SALT',        'OzgEIvUMp1eOwaVWEdOjXvHkH83ZbN4i8cJtojayQL7jKlW3xN8upT2SRuSJAoqS');
define('SECURE_AUTH_SALT', '1uSeVxGK5qShOWfPu1ucLZcQEkHUPZswsRyzOXbsQLLMka3Q68lITjRRNhbYWQEb');
define('LOGGED_IN_SALT',   'EmzVcTSHm8ovK7DkAfig6xe1MGEHFh0zV9pMDZRK72GYXoBzUg0PgeAIvWSu60vz');
define('NONCE_SALT',       'ZHuXDV9QVJcyYJIu2utfuaRtn3I1YECVRHUZhT8ff46XBgfO1sp2YIJhDWEZrIKg');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0777);define('FS_CHMOD_FILE',0666);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);

/**
 * Multi-site
 *
 */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'test.waterpolopilaictus.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('WP_ALLOW_MULTISITE', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp4_';

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
