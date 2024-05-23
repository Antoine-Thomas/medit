<?php

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
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




