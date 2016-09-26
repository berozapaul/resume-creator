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
define('DB_NAME', 'sherpa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'go');

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
define('AUTH_KEY',         'GA&0j[[9rw2 ^VnX4:G+o8/=eNi6TFlWB31g.2eO!B9.)eMt j>#e$p=V{Y [pcl');
define('SECURE_AUTH_KEY',  'mu|x?/Wu<$SbNSay2wA%Um;Z#8DH7J2foR7fD-cUJ3&yn:JWDgsl<6t:t`*gG;oZ');
define('LOGGED_IN_KEY',    'S.-Dy}1a_Wa%Zrm~8Rq:X&I:E;Y{Zf2_)G2.9P#bbbzol B D/!mJKI5yF>SsS4c');
define('NONCE_KEY',        'bVB=BI}TX(2-3S.Cf^<s`WJII#DY:m#bFN[7E NH8Qn=?G_7!+v<CMt$`aAUba_J');
define('AUTH_SALT',        'SYfIXdT.WZQ>Iz8iu/qr0&B{dECE3DlnG:I[8EO*%iGkZNIi}!9RU?s:at8o Il6');
define('SECURE_AUTH_SALT', 'wM>ejzd|Cw/mqXfme!w2hddk}9W)}?={fo8uu-v^|_]<)d9HQ2~3%&lQ:fUF-j*j');
define('LOGGED_IN_SALT',   'y]D.b6+k]lAX-qrWh?3n]t? yr,D?TZlcE}~E@FE5D;.J2#<mwD05L%HbN!|b v;');
define('NONCE_SALT',       'oHl4UJs<cg!%qn1anH?=$wr?6C,k+L&}mD<]kZ7j67]=~@<[,YGxa{Y1Aq&pNF|`');

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

define('FS_METHOD','direct');