$(document).ready(function () {
    $("#btnSubmitZoho").on('click', function (e) {
        e.preventDefault();
        alert('Formulario enviado exitosamente.');
        // submitZoho();
    });
});


function submitZoho() {

    const newsletter = document.getElementById('agreeNewsletterCheck').checked ? 'true' : 'false';
    const agree = document.getElementById('agreeTermsCheck').checked ? 'true' : 'false';

    const json = {
        selectprofile: document.getElementById('profile').value,
        email: document.getElementById('contact-email').value,
        first_name: document.getElementById('first-name').value,
        last_name: document.getElementById('last-name').value,
        company: document.getElementById('company-name').value,
        reason: document.getElementById('reason').value,
        newsletter: newsletter,
        agree_policy: agree
    };

    $.ajax({
        url: "https://nca-api.whagons.com/api/webHookZoho",
        type: 'POST',
        datatype: 'json',
        data: JSON.stringify(json),
        contentType: 'application/json',
        processData: false,
        success: function (result) {

            if (result.status === 'success') {
                console.log('Formulario enviado exitosamente.');
            }
        },
        error: function (data) {
            // alert('Error al enviar el formulario.');
        }
    });
}