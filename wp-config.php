<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'pizzeria_wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '9 HWL-YDuTs3)BJj2wl>$E4 %!4w& jx?`X=vU2*pbh.oll1RT=0LS]lv/Awu,/K');
define('SECURE_AUTH_KEY', '?~zmt6<8tY(q8kO879gjQ%iHP~PaF1U7:j.e&_1H0l40+?7[|i)^2NJL5|Bu`5ex');
define('LOGGED_IN_KEY', 'V*K_`-Ics}YqGk<4iA!Fy))1;O1SlLOnR^V_(w=?V;ScU>?Y%2v#yqzFCFpGk2S$');
define('NONCE_KEY', 'U{Adr2>2t:#ko@Z-9$cJ<s;||Bmk77X6}p bly]D9[w#fyOMzF|)K=@vWTOhpx)k');
define('AUTH_SALT', '&_S`P|z#SV@Emp@):i/8Z[e-iN[$#->PW#Wp*t4c<[p|WHMlnkHL4b7hcMwg^LM4');
define('SECURE_AUTH_SALT', 'Y5}*j?M8vCPHoM7R[!JilG[5zvxd4=YcAK/:m/J)0ez^Tc^<[`bl/[HWvD RP>EG');
define('LOGGED_IN_SALT', 'K~yX vDU0<KAqJB>b?g5HC3m-:MP5b?%wA<EnqoNVAv:p|m8RK^1>NY/V x#I*H|');
define('NONCE_SALT', 'W*!yE?]&BVihNvQ2UG8/zXc]C_!2?;7Zw,O}]RK1 gWit^2pZ1 HSj6zs3QGkJZ^');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'pizza_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

