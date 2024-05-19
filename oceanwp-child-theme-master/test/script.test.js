const { JSDOM } = require('jsdom');
const { initPopupClose } = require('../test/script');

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

    // Nettoyez le DOM après le test
    dom.window.close();
  });
});

