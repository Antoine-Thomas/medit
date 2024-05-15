<?php
/**
 * Child theme functions
 *
 * @link http://codex.wordpress.org/Plugin_API
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
    // Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
    $theme = wp_get_theme('OceanWP');
    $version = $theme->get('Version');
    // Load the stylesheet
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('oceanwp-style'), $version);
}
add_action('wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style');

/**
 * Enqueue scripts
 */
function oceanwp_child_enqueue_scripts() {
    // Enqueue jQuery
    wp_enqueue_script('jquery');
    
    // Enqueue the custom script
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0', true );

    // Localize the script with new data
    wp_localize_script('custom-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'oceanwp_child_enqueue_scripts');

/**

 * Fonction pour définir les cookies avec les attributs SameSite=None et Secure et des valeurs spécifiques
 */
function set_secure_cookie($name, $value = '', $expiration = 0, $samesite = 'None') {
    // Définit les options du cookie
    $cookie_options = array(
        'expires' => $expiration,
        'path' => '/',
        'domain' => 'localhost', // Domaine pour le développement en local
        'secure' => false, // Assure-toi de mettre à true si tu utilises HTTPS en local
        'httponly' => true, // Empêche l'accès au cookie via JavaScript
        'samesite' => $samesite, // Définit l'attribut SameSite
    );

    // Vérifie si le protocole est HTTPS et définis Secure sur true si c'est le cas
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $cookie_options['secure'] = true;
    }

    // Définit le cookie avec les options spécifiées
    setcookie($name, $value, $cookie_options);
}

// Exemple d'utilisation de la fonction pour définir les cookies avec des valeurs spécifiques
set_secure_cookie('__Secure-3PSID', 'valeur_cookie_1', 0, 'Strict');
set_secure_cookie('__Secure-3PAPISID', 'valeur_cookie_2', 0, 'Strict');
set_secure_cookie('__Secure-3PSIDTS', 'valeur_cookie_3', 0, 'Strict');
set_secure_cookie('NID', 'valeur_cookie_4', 0, 'Strict'); // Modification de SameSite à Strict
set_secure_cookie('__Secure-3PSIDCC', 'valeur_cookie_5', 0, 'Strict');






add_filter('wp_nav_menu_items', 'contact_btn', 10, 2);
?>



