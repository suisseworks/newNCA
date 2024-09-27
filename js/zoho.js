$(document).ready(function () {
    $("#zcWebOptin").on('click', function (e) {
        e.preventDefault();
        submitZoho();
    });
});


function submitZoho() {

    const newsletter = document.getElementById('zcWebOptin').checked ? 'true' : 'false';
    const agree = document.getElementById('zcWebOptin').checked ? 'true' : 'false';

    const json = {
        selectprofile: document.getElementById('dt_CONTACT_CF1').value,
        email: document.getElementById('dt_CONTACT_EMAIL').value,
        first_name: document.getElementById('dt_FIRSTNAME').value,
        last_name: document.getElementById('dt_LASTNAME').value,
        company: document.getElementById('dt_COMPANYNAME').value,
        reason: document.getElementById('dt_REASON').value,
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