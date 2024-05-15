jQuery(document).ready(function($) {
    // Fonction pour fermer la popup
    $('.popup-close').click(function() {
        $(this).closest('.popup-overlay').hide();
    });
});
