<?php

/**
 * Les configurations de base de WordPress.
 *
 * Ce fichier contient les configurations suivantes : réglages MySQL, préfixe de table,
 * clés secrètes, langue de WordPress, et ABSPATH. Vous pouvez trouver plus d'informations
 * en visitant {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex. Vous pouvez obtenir les réglages MySQL de votre hébergeur web.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant l'installation.
 * Vous n'avez pas besoin d'utiliser le site web, vous pouvez juste copier ce fichier
 * dans "wp-config.php" et remplir les valeurs.
 *
 * @package WordPress
 */

/** Réglages MySQL - Vous pouvez obtenir ces informations de votre hébergeur web **/
/** Le nom de la base de données pour WordPress */
define('DB_NAME', 'med');

/** Nom d'utilisateur de la base de données MySQL */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL */
define('DB_PASSWORD', '');

/** Adresse de l'hôte MySQL */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser pour la création des tables de la base de données. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. Ne changez pas si vous n'êtes pas sûr. */
define('DB_COLLATE', '');



/** Désactiver WP-Cron et configurer une tâche cron réelle */
define('DISABLE_WP_CRON', true);

/** Désactiver l'éditeur de fichiers de WordPress */
define('DISALLOW_FILE_EDIT', true);

/** Paramètres de cookies sécurisés */
define('COOKIEHASH', md5('DOCUMENT_ROOT' . 'secure cookies' . 'DOCUMENT_ROOT'));

/** Augmenter la limite de mémoire PHP */
define('WP_MEMORY_LIMIT', '256M');

/** Désactiver la fonctionnalité OP cache */
define('HIDE_CACHE_CLEAR', false);

/** Désactiver la fonctionnalité SSO */
define('HIDE_SSO_LINK', false);

/**#@+
 * Clés uniques d'authentification et sels.
 *
 * Changez-les en phrases uniques ! Vous pouvez générer ces phrases en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clé secrète de WordPress}
 * Vous pouvez les changer à tout moment pour invalider tous les cookies existants. Cela forcera
 * tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UzSL1ba=T$z%>1L|}UIMNc|U.P0JRd8zwn}ie_`M+x2k}{v0~F|h(9#@Ng4QOu)h');
define('SECURE_AUTH_KEY',  's!iOlNwEdKOAEoWwkVsQKP^.[^wM]((-pZIbp-/B)/~*fUS7VpIiq_3?wuP.bQ$l');
define('LOGGED_IN_KEY',    '({TcOy<bV,fv/faw~OD~nzv.9)f<d*L1&D&Whql VPdn?W2;yDN[xmoMgRhu9J&X');
define('NONCE_KEY',        '@A9sJQpHiD_z2P W@.J@T:9f{jt/{YR6{?L~V$13Der#zpLj8RXXa>G/h3&5 A#2');
define('AUTH_SALT',        'E-5>kj$)VDC-9D9J-oSQaW5}q&-XTxI-oO|B2BPXdg%*#Y&2Om`^8^TFjfxc;|9R');
define('SECURE_AUTH_SALT', '~%UALv|dA6[~~UQUi)s#S`A;2#;kT_aREVrcW){=?_y4Ov<CrCmZtxTm)llfD3k');
define('LOGGED_IN_SALT',   'UnJ.ABd&M3^j>:6#fM1}U<ugcZCA~eDwi_f:Ehp&dof@pkTi=yC9&JhNG~Q8SQBF');
define('NONCE_SALT',       '`%KRwR~S~1ewcv^u4kakw}hukLV3PhU.`3OKNexK`^xlXecj)p|+T3(JHzX:Djn_');

/**#@-*/

/**
 * Préfixe de table pour la base de données WordPress.
 *
 * Vous pouvez installer plusieurs WordPress dans une même base de données
 * en leur donnant chacune un préfixe unique. Utilisez uniquement des chiffres, lettres et underscores !
 */
$table_prefix = 'wp_';

/**
 * Langue locale de WordPress, par défaut en anglais.
 *
 * Changez cette valeur pour localiser WordPress. Un fichier MO correspondant pour
 * la langue choisie doit être installé dans wp-content/languages. Par exemple, installez
 * de_DE.mo dans wp-content/languages et définissez WPLANG à 'de_DE' pour activer
 * le support de la langue allemande.
 */
define('WPLANG', '');

/**
 * Pour les développeurs : mode de débogage de WordPress.
 *
 * Changez cette valeur à true pour activer l'affichage des notifications pendant le développement.
 * Il est fortement recommandé que les développeurs de plugins et de thèmes utilisent WP_DEBUG
 * dans leurs environnements de développement.
 */
define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', true);
define('WP_DEBUG_LOG', true);

/** Définir les chemins des plugins et du contenu */
define('WPMU_PLUGIN_DIR', '/mu-plugin');
define('DOCKET_CACHE_CONTENT_PATH', '/tmp/docket_cache');

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging. */

/** Chemin absolu vers le répertoire de WordPress. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Configure les variables de WordPress et inclut les fichiers. */
require_once(ABSPATH . 'wp-settings.php');

/** Modifier les permissions pour l'installation de plugins */
define("FS_METHOD", "direct");
