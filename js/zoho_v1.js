setTimeout(() => {
    document.getElementById("contact-form").addEventListener('submit', function(e) {
        e.preventDefault();
        submitZoho();
    });
}, 500);

function submitZoho() {
    const newsletter = document.getElementById('agreeNewsletterCheck').checked ? 'true' : 'false';
    const agree = document.getElementById('agreeTermsCheck').checked ? 'true' : 'false';

    const titleSelect = document.querySelector('select[name="title"]');
    console.log('Title ', titleSelect);

    const json = {
        title: titleSelect ? titleSelect.value : '', 
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
            showMessage('Form submitted successfully!', 'success');
            //document.querySelector(".brk-theme-options__panel.panel-open").click();
         
        } else {
            showMessage('Error submitting the form. Please try again.', 'error');
        }
    })
    .catch(error => {
        console.error('Error al enviar el formulario.', error);
        showMessage('Error submitting the form. Please try again.', 'error');
    });
}

function showMessage(message, type) {
    const messageElement = document.createElement('div');
    messageElement.textContent = message;
    messageElement.style.padding = '10px';
    messageElement.style.marginTop = '10px';
    messageElement.style.borderRadius = '5px';
    messageElement.style.textAlign = 'center';
    
    if (type === 'success') {
        messageElement.style.backgroundColor = '#4CAF50';
        messageElement.style.color = 'white';
    } else if (type === 'error') {
        messageElement.style.backgroundColor = '#f44336';
        messageElement.style.color = 'white';
    }
    
    const form = document.getElementById('contact-form');
    form.parentNode.insertBefore(messageElement, form.nextSibling);
    
    setTimeout(() => {
        messageElement.remove();
        document.querySelector(".brk-theme-options__panel.panel-open").click();
    }, 3000);
}