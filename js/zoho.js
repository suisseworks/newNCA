setTimeout(() => {

    document.getElementById("contact-form").addEventListener('submit', function(e) {
        e.preventDefault();
        submitZoho();
    });
}, 500);

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

    fetch("https://nca-api.whagons.com/api/webHookZoho", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(json)
    })
    .then(response => response.json())
    .then(result => {
        if (result.status === 'success') {
            console.log('Formulario enviado exitosamente.');
            document.getElementById('contact-form').reset();
        }
    })
    .catch(error => {
        console.error('Error al enviar el formulario.', error);
    });
    
}