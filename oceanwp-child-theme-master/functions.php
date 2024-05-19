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
function oceanwp_child_enqueue_parent_style()
{
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
function oceanwp_child_enqueue_scripts()
{
    // Enqueue jQuery
    wp_enqueue_script('jquery');

    // Enqueue the custom script
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'oceanwp_child_enqueue_scripts');


function fetch_remote_content()
{
    $url = '';
    if (empty($url)) {
        return;
    }
    $response = wp_remote_get($url, array('sslverify' => true));
    if (is_wp_error($response)) {
        error_log('Error fetching remote content: ' . $response->get_error_message());
        return;
    }
    $body = wp_remote_retrieve_body($response);
    if (!empty($body)) {

        update_option('remote_content', $body);
    }
}


/**
 * Fonction pour afficher le lien "Nous contacter" dans le menu
 */
function afficher_bouton($items, $args)
{
    // Ajoute le lien vers la page de contact
    $items .= '<a href="' . home_url('/contact') . '" class="contact-btn">Nous contacter</a>';
    return $items;
}

// Ajouter le hook pour afficher le lien dans le menu de navigation
add_filter('wp_nav_menu_items', 'afficher_bouton', 10, 2);
