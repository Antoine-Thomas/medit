<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier durant l'installation.
 * Vous n'avez pas à utiliser le site web, vous pouvez copier ce fichier
 * à "wp-config.php" et remplir les valeurs.
 *
 * Ce fichier contient les configurations suivantes :
 *
 * * Paramètres MySQL
 * * Clés secrètes
 * * Préfixe de table de base de données
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Vous pouvez obtenir ces informations auprès de votre hébergeur ** //
/** Le nom de la base de données pour WordPress */
define( 'DB_NAME', 'med' );

/** Utilisateur de la base de données MySQL */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL */
define( 'DB_PASSWORD', '' );

/** Adresse de l'hébergement MySQL */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser lors de la création des tables de la base de données. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données. Ne modifiez pas cette valeur si vous n'êtes pas sûr. */
define( 'DB_COLLATE', '' );

/** Désactiver l'éditeur de fichiers intégré de WordPress */
define( 'DISALLOW_FILE_EDIT', true );

/** Définir le COOKIEHASH pour la sécurité */
define( 'COOKIEHASH', md5('root' . 'secure cookies' . 'root') ); // Renforcement des cookies

/** Définir la limite de mémoire pour WordPress */
define( 'WP_MEMORY_LIMIT', '256M' );

/** Désactiver la fonctionnalité OP Cache du mu-plugin */
define('HIDE_CACHE_CLEAR', false);

/** Désactiver la fonctionnalité SSO du mu-plugin */
define('HIDE_SSO_LINK', false);

/**#@+
 * Clés uniques d'authentification et salage.
 *
 * Changez ces valeurs pour des phrases uniques ! Vous pouvez générer ces phrases
 * à l'aide du {@link https://api.wordpress.org/secret-key/1.1/salt/ service de clés secrètes de WordPress}.
 *
 * Vous pouvez modifier ces valeurs à tout moment afin d'invalider tous les cookies existants.
 * Cela forcera tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~G}X]G] q[5Qk=^icv$@Ndic%I/OUu4AC1IpKG71,F2[c1NjG8#Ur8_0/~q265!/' );
define( 'SECURE_AUTH_KEY',  'bgz p84%~yd8s&{U$Czs]|DIr1l5ue&oUJ6@NG^=!G=/_lkLe3f*|kaA:VCgn<F#' );
define( 'LOGGED_IN_KEY',    'xRr+Q#4#rjqWULs%S=o+QwCPG3+%yv?jlW~re5}pG12/WgJq-rj,M_PAVxF037;r' );
define( 'NONCE_KEY',        'VEP0G+iiE:B=O$ch<Aln=<b2m4:8yG.(j?<BFe|jWmo,!Kv0XiGjh}J&_|8C1Gz:' );
define( 'AUTH_SALT',        '3csN`Yl|rh_AD$%-lY${@7PlXOI7Tv59a$0fI 25bu34V=`YZz|$mbh5@#d|QZN3' );
define( 'SECURE_AUTH_SALT', '{q8DEK.NL>/ B=Nt,*_BO85j`^<RX?:!hOIIxR/t~s6q%M>p2<Gw!<~&Mq)p?LX]' );
define( 'LOGGED_IN_SALT',   'dZr2,>pCjlS -p[M]Ok[nY|x1+e6j}Mi]&X,_dzRH#5deL*vEPAvd-s?[Muu+#G.' );
define( 'NONCE_SALT',       'q2nhSJT?I=Y@W-gEZ]=MDo7clZ^S=m;9$q/5)]p4BZcjm/U0l(#z_<3^EOY{Ic_{' );

/**#@-*/

/**
 * Préfixe de table pour la base de données WordPress.
 *
 * Vous pouvez avoir plusieurs installations dans une seule base de données
 * si vous donnez à chacune un préfixe unique. Utilisez uniquement des chiffres,
 * des lettres et des underscores !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : mode de débogage de WordPress.
 *
 * Passez cette valeur à true pour activer l'affichage des notifications
 * pendant le développement. Il est fortement recommandé que les développeurs
 * de plugins et de thèmes utilisent WP_DEBUG dans leurs environnements de
 * développement.
 *
 * Pour plus d'informations sur les autres constantes à utiliser pour le
 * débogage, visitez la documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);
$sapi_type = php_sapi_name();
if ($sapi_type == 'cli') {
    define('WP_DEBUG', false);
    error_reporting(0);
    @ini_set('display_errors', 0);
}
// @ini_set('log_errors', 'On');

/** Définir le répertoire des plugins mu (Must-Use) */
define('WPMU_PLUGIN_DIR', '/mu-plugin');

/** Définir le chemin du cache de Docket */
define('DOCKET_CACHE_CONTENT_PATH', '/tmp/docket_cache');

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging. */

/** Chemin absolu vers le répertoire de WordPress. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configure les variables et fichiers WordPress. */
require_once(ABSPATH . 'wp-settings.php');

/** Changer les permissions pour l'installation des plugins */
define("FS_METHOD", "direct");

