document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour fermer la popup
    document.querySelector('.popup-close').addEventListener('click', function() {
        this.closest('.popup-overlay').style.display = 'none';
    });

})