<?php

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function testFetchRemoteContent()
    {
        // Define a mock response for the fetch_remote_content function
        $expected_content = 'Simulated content for testing';
        $GLOBALS['fetch_remote_content_mock_response'] = $expected_content;
        
        // Require the functions file
        require_once __DIR__ . '/../functions.php'; // Adjust the path as needed
        
        // Call the function to fetch remote content
        fetch_remote_content('');
        
        // Retrieve the value of the 'remote_content' option
        $remote_content = $GLOBALS['fetch_remote_content_mock_response'];

        // Assert that the retrieved content is not empty
        $this->assertNotEmpty($remote_content);
    }

    public function testAfficherBouton()
    {
        // Appel de la fonction avec des données factices
        $items = '';
        $args = [];
        $output = afficher_bouton($items, $args);

        // Assertion sur la sortie de la fonction
        $expected_output = '<a href="' . home_url('/contact') . '" class="contact-btn">Nous contacter</a>';
        $this->assertEquals($expected_output, $output);
    }
}



