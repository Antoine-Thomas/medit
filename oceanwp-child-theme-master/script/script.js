// C:\xampp\htdocs\medit\wp-content\themes\oceanwp-child-theme-master\js\script.js

function initPopupClose() {
    document.addEventListener('DOMContentLoaded', function() {
        // Fonction pour fermer la popup
        document.querySelector('.popup-close').addEventListener('click', function() {
            this.closest('.popup-overlay').style.display = 'none';
        });
    
    })
}

module.exports = { initPopupClose };
