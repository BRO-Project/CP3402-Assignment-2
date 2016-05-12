<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'i)spgCB:|u9$i>7]=eV1mm1{>R`P3.0(|a|~OsKgo2!-|B?D}IaZt>ubM:fzky}}');
define('SECURE_AUTH_KEY',  ':*GYZ(,+>PpeXmH55K XB_zxGlwWo?E5)p|y|bm;t2N!WU&mL 9eI*m:p~~qsx76');
define('LOGGED_IN_KEY',    'K;QV^+!-;u19}UK26OI5-s~)l6PL)Zav9.x88k-#[NP^quu3u|Ugn+nh?X:1xD:~');
define('NONCE_KEY',        '*1cUAMz[KbXw,>3sVx?bCe&jILC^g/oXt8>-ZKznN6d?_|UADRdv&y=:O-eo2={g');
define('AUTH_SALT',        'Eh_gc0+->+|nMi[WwO&fsr.C$n[$;5?dlvNxmnCwJ<WMVk]Bkh>Zg^p3;#)$^>ih');
define('SECURE_AUTH_SALT', ']5tk<{/xZgDECIMM*J!A<]`*Ioq$MK>3SmTZZ_y+Uu>A3~n9/}g|-c5&Wjee> Dh');
define('LOGGED_IN_SALT',   'I|TQ1f0pE&:Y$|DU+WP`Tb3I+9$Y(;|hzC%.F/6orb4tkH5p^(^Gnp=Rt]+Sojm+');
define('NONCE_SALT',       '+)M}[X(N@z $JBLU8Y+tEj/](9Ex CGQfFhoUzcu>*p^+P9.c=D0k4-(#-2?61[m');

$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
