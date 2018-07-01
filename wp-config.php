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
define('DB_NAME', 'fer_dibufolio');

/** MySQL database username */
define('DB_USER', 'fermotousan_folio');

/** MySQL database password */
define('DB_PASSWORD', 't4ll4rin3s');

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
define('AUTH_KEY',         'j*%Tz94gG99Y6Ruz:5PVe+mEV2 +~EMDoA>Oa+oyx[Ei#o^U.O(6gyMS[Fv?%8W)');
define('SECURE_AUTH_KEY',  'Jt(.R_7g9eP^:aUw0/}EH239kG`W~tSJjEFfXuy%>,*]>+auc$]EIL?4)=l,3At)');
define('LOGGED_IN_KEY',    'eI0Pr=O(<St~duX,}jd)(-PO5j;Z3,Ta`3mUnyp0JQ$cV}q^Xk2Zk:U^LpD(zPXo');
define('NONCE_KEY',        'zmNb#3v:N3cTT>#iA<!2-GZ,J<;ZU ea}z^DAgimi]wju0Q<CvVwi1H 4XN6Jy*!');
define('AUTH_SALT',        'tw!;ozv~|qerMni1o_eQN%6K5Xk}gw7~#-P1%tt 55fhtG^S2#l@j]Lm`zRT||3a');
define('SECURE_AUTH_SALT', '%<SV%&CIg{_S.+>@ rVo!#Kq<?,FC=eG(8Bf&t)D9{?IfAv8~Ai2JBk~aqWF=x26');
define('LOGGED_IN_SALT',   'r9ae;lq8vXuT@kww0_EQPY+yw])RxwOv4*D.s$[)&]zatg%6md$#tq+Dz_UV[8*l');
define('NONCE_SALT',       '14s7j1?_&b(r]AD:;n2t&>p<!iu|+G_YN0klCY8MH~=Pf.3)_~[p5@,Wv+|6}pz{');

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
