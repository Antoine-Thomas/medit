

function initPopupClose() {
    document.addEventListener('DOMContentLoaded', function() {
        const closeButton = document.querySelector('.popup-close');
        if (closeButton) {
            closeButton.addEventListener('click', function() {
                const popupOverlay = this.closest('.popup-overlay');
                if (popupOverlay) {
                    popupOverlay.style.display = 'none';
                }
            });
        }
    });
}

module.exports = { initPopupClose };
