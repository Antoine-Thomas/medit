document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour fermer la popup
    document.querySelector('.popup-close').addEventListener('click', function() {
        this.closest('.popup-overlay').style.display = 'none';
    });

    // Lien Google Maps
    var googleMapsLink = 'http://localhost/medit/contact/';
    document.querySelector('.popup-link').setAttribute('href', googleMapsLink);
});

jQuery(document).ready(function($) {
    $('#your-button-id').on('click', function(e) {
        e.preventDefault();

        $.ajax({
            url: ajax_object.ajax_url, // Using localized URL
            type: 'POST',
            data: {
                action: 'my_custom_action', // The action name defined in PHP
                // Additional data can be added here
                param1: 'value1',
                param2: 'value2'
            },
            success: function(response) {
                if (response.success) {
                    console.log('Success:', response.data);
                } else {
                    console.log('Error:', response.data);
                }
            },
            error: function(xhr, status, error) {
                console.log('AJAX Error:', error);
            }
        });
    });
});
