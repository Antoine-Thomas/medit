<?php
// Chemin vers le fichier wp-load.php
$wordpress_path = 'C:/xampp/htdocs/medit'; // Modifier le chemin selon votre configuration

// Charger WordPress
require_once $wordpress_path . '/wp-load.php';

// Vérifiez que WordPress est initialisé
if (!function_exists('wp_enqueue_scripts')) {
    die('WordPress n\'a pas été initialisé correctement.');
}

// Charger les fonctions du thème enfant
require_once $wordpress_path . '/wp-content/themes/oceanwp-child-theme-master/functions.php';

// Autoload pour les tests
require_once $wordpress_path . '/wp-content/themes/oceanwp-child-theme-master/vendor/autoload.php';


