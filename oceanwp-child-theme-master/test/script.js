const { JSDOM } = require('jsdom');
const { initPopupClose } = require('../vendor/bin/script');

describe('initPopupClose', () => {
  test('Ajoute un gestionnaire d\'événements pour fermer la popup', () => {
    // Créez un DOM virtuel avec JSDOM
    const dom = new JSDOM('<body><div class="popup-overlay"><button class="popup-close"></button></div></body>');
    global.document = dom.window.document;

    // Créez un spy pour la méthode addEventListener
    const addEventListenerSpy = jest.spyOn(document, 'addEventListener');

    // Exécutez la fonction à tester
    initPopupClose();

    // Vérifiez si la fonction addEventListener a été appelée avec les bons paramètres
    expect(addEventListenerSpy).toHaveBeenCalledWith('DOMContentLoaded', expect.any(Function));

    // Vérifiez si la fonction addEventListener a été appelée pour le bouton de fermeture
    const closeButton = document.querySelector('.popup-close');
    expect(closeButton).toBeTruthy();
    expect(closeButton.onclick).toBeTruthy();

    // Simulez un clic sur le bouton de fermeturevendor\bin\phpunit testvendor\bin\phpunit test
    closeButton.click();

    // Vérifiez si la popup est cachée après le clic
    const popupOverlay = document.querySelector('.popup-overlay');
    expect(popupOverlay.style.display).toBe('none');

    // Nettoyez le DOM après le test
    dom.window.close();
  });
});


