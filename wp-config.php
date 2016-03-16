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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '8+:S8fDY86BdmrFfFJf;m-Ogw-+bT99HN(.X.:2t:iK3@|;>r9,EGf|1rd#`%>z&');
define('SECURE_AUTH_KEY',  '1 q(m*{(+A]SR0WGq~s/2;:l/ZXT*ntxsky^,--IYn*^09KP8q2s9A]YU0qVyez[');
define('LOGGED_IN_KEY',    'YRJBe+aa-B,@||Cig^-Zgw-?/FqtCvS1EMbb+p{#X_w^10OqWx5UkqU{aw=N^4P#');
define('NONCE_KEY',        'b-/*JoT2&+=aR7SVhs.Fz;<vjX2Helov<8SD,<$j-|M|tzK9bjmoYnSe5TCsi]S^');
define('AUTH_SALT',        'ZI ]6KD%GC2y-q>zp0s8<T<-`NdCK]n?DbF+++:HK2N7L|0@vj/EEz>`Ox?zT$>q');
define('SECURE_AUTH_SALT', 'y:_KGTpt({f[6Zl)Vk`+4`,`-$FvDzd4G`zynnJtz5vQBF-Qlt7>:Icrv]Ik%x)s');
define('LOGGED_IN_SALT',   '%ocE*]z7.|Iu|83nwd3_>5jGmDO}m5GD{<>Zk>hVB^XtvA6ay|^HJN@_TfKd&;?B');
define('NONCE_SALT',       'V52Jpbw+br)kfJ rrl<-07.c(zYq*X2)omCBe.:?4clJ>ILB];sAkGXd@BO_fsPQ');

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
