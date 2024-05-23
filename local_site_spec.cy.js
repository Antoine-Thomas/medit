/// <reference types="cypress" />

describe('Admin Login and Site Tests', () => {
    // Exécute la connexion avant tous les tests
    before(() => {
      cy.visit('http://localhost/medit/wp-login.php');
      cy.get('#user_login').clear().type('ArthurBerthault');
      cy.get('#user_pass').clear().type(')sH1wcVE%dO)ZgLk9yrJtcuo');
      cy.get('#wp-submit').click();
      cy.url().should('include', '/wp-admin/');
      cy.get('#wpadminbar').should('be.visible');
    });
  
    // Vérifie la modification de la page d’accueil avec Elementor
    it('Vérifie que la modification de la page d’accueil avec Elementor fonctionne', () => {
      cy.visit('http://localhost/medit/wp-admin/post.php?post=1&action=elementor');
      cy.get('.elementor-editor-loading').should('not.exist');
    });
  
    // Vérifie que le bouton de contact dans le menu est correctement positionné
    it('Vérifie que le bouton de contact dans le menu est correctement positionné', () => {
      cy.visit('http://localhost/medit');
      cy.get('.contact-btn').should('be.visible');
      cy.get('#site-navigation-wrap').within(() => {
        cy.get('.contact-btn').should('exist');
      });
    });
  
    it('Vérifie la présence du formulaire WPForms dans la popup', () => {
        cy.visit('http://localhost/medit');
        cy.log('Visite la page');
      
        // Cliquez sur le bouton de contact pour ouvrir la popup
        cy.get('.contact-btn').click({ multiple: true, force: true });
        cy.log('Clic sur le bouton de contact');
      
        // Attendre que la popup soit complètement ouverte
        cy.get('.popup-overlay').should('be.visible');
        cy.log('La popup est ouverte');
      
        // Vérifiez que le formulaire WPForms est présent dans la popup
        cy.get('.wpforms-container').should('be.visible');
        cy.log('Le formulaire WPForms est présent');
      
        // Remplir le formulaire WPForms
        cy.get('.wpforms-field').eq(0).type('John');
        cy.get('.wpforms-field').eq(1).type('john');
        cy.get('.wpforms-field').eq(2).type('john@example.com');
        cy.get('.wpforms-field').eq(3).type('0607123045');
        cy.get('.wpforms-field').eq(4).type('Life');
        cy.get('.wpforms-field').eq(5).type('Message to love');
        cy.log('Le formulaire est rempli');
      
        // Envoyer le formulaire
        cy.get('.wpforms-submit-container').find('button[type="submit"]').click();
        cy.log('Le formulaire est soumis');
      
        // Attendre que la soumission soit terminée
        cy.wait(5000); // Attendre 5 secondes
      
        // Vérifier la présence du message de confirmation
        cy.get('.wpforms-confirmation-container-full')
          .should('contain', 'Thanks for contacting us! We will be in touch with you shortly.')
          .and('be.visible');
        cy.log('Le message de confirmation est visible');
      });
    

    it('Vérifie que le lien Google Maps existe dans la popup', () => {
        cy.visit('http://localhost/medit');
        cy.get('.contact-btn'); // Sélectionne le bouton de contact sans le cliquer
      
        // Attendre que la popup soit complètement ouverte
        cy.get('.popup-overlay').should('be.visible');
      
        // Vérifier la présence du lien "Voir sur Google Maps" dans la popup
        cy.get('.popup-link').should('exist');
    });
    
// Fonction pour vérifier la fermeture de la popup
function verifierFermeturePopup() {
   

    // Cliquer sur le bouton de fermeture de la popup
    cy.get('.popup-close').click({ force: true });

    // Attendre un court délai pour la fermeture de la popup
    cy.wait(1000); // Vous pouvez ajuster le délai en fonction de la vitesse de fermeture de la popup

 
}

// Utilisation de la fonction de test
it('Vérifier la fermeture de la popup', () => {
    cy.visit('http://localhost/medit');

    // Appeler la fonction pour vérifier la fermeture de la popup
    verifierFermeturePopup();
});

  
            
    
    });
    
    
  


  