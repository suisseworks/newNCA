<?php include 'inc/header.php'; ?>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHG7P3C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        flex-direction: column;
        padding-top: 20px;
    }

    .form-container {
        background: #e5720a;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 900px;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        align-items: stretch;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 20px;
    }

    .form-content {
        flex: 1 1 50%;
        padding: 45px;
        box-sizing: border-box;
        color: white;
    }

    .form-group select {
        width: 100%;
        padding: 12px 20px;
        border: 1px solid #ddd;
        border-radius: 24px;
        background-color: #e7ebec;
        font-size: 16px;
        color: #666;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .form-group select:focus {
        border-color: #bfbfbf;
        outline: none;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: black;
        font-weight: bold;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 24px;
        box-sizing: border-box;
        background-color: #e7ebec;
        color: black;
        outline: none;
    }

    .form-group textarea {
        resize: none;
    }

    .form-group button {
        background-color: white;
        color: #e5720a;
        padding: 12px;
        border: none;
        border-radius: 24px;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .form-image {
        flex: 1 1 50%;
        background-color: #fff;
    }

    .form-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    footer {
        width: 100%;
        background-color: #333;
        color: white;
        padding: 10px 0;
        text-align: center;
        position: fixed;
        bottom: 0;
        left: 0;
    }


    .form-group input[type="checkbox"] {
    width: auto; /* You can specify auto or a specific width */
}


/* Specific styles for aligning the checkbox and label */
    .form-group.checkbox-group {
        display: flex;
        align-items: center; /* Aligns the checkbox and label vertically */
        gap: 10px; /* Adds space between the checkbox and the label */
    }

    .form-group.checkbox-group input[type="checkbox"] {
        margin: 0; /* Removes any margin around the checkbox */
    }

    .form-group.checkbox-group label {
        margin: 0; /* Removes default margin */
        font-weight: normal; /* Optional: Adjust label text style */
    }



    @media (max-width: 768px) {
        .form-container {
            flex-direction: column;
            max-width: 100%;
            height: auto;
        }

        .form-content {
            padding: 20px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            font-size: 14px;
        }

        .form-group button {
            font-size: 16px;
        }
    }

    /* Specific styles for aligning the checkbox and label */
    .form-group .checkbox-group {
        display: flex;
        align-items: center;
    }

    .form-group .checkbox-group input[type="checkbox"] {
        margin-right: 10px; /* Add space between checkbox and label */
        width: auto; /* Ensure checkbox doesn't take full width */
    }

</style>

<div class="form-container">
    <div class="form-content">
        <h2>Get in Touch</h2>
        <form id="contact-form">
            <div class="form-group">
                <label for="profile">Select your profile</label>
                <select id="profile" name="profile" required>
                    <option value="">Select...</option>
                    <option value="candidate">Candidate</option>
                    <option value="co-investor">Co-Investor</option>
                    <option value="business-owner">Business Owner</option>
                    <option value="intermediary">Intermediary</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" name="first-name" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" name="last-name" required>
            </div>
            <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" id="company-name" name="company-name">
            </div>
            <div class="form-group">
                <label for="reason">Reason for contact</label>
                <textarea id="reason" name="reason" required></textarea>
            </div>
            <div class="form-group checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms" class="terms">I agree to the <a href="/privacy-policy" target="_blank">Privacy Policy</a></label>
            </div>
            <div class="form-group checkbox-group">
                    <input type="checkbox" id="newsletter" name="terms" required>
                    <label for="newsletter" class="terms">Subscribe to our Newsletter</label>
            </div>

            <div class="form-group mt-40">
                <button type="submit">SEND NOW</button>
            </div>
        </form>
    </div>
    <div class="form-image">
        <img src="img/get-in-touch.jpeg" alt="Contact Image">
    </div>
</div>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Gather form data
        const data = {
            profile: document.getElementById('profile').value,
            email: document.getElementById('email').value,
            firstName: document.getElementById('first-name').value,
            lastName: document.getElementById('last-name').value,
            companyName: document.getElementById('company-name').value,
            reason: document.getElementById('reason').value,
            terms: document.getElementById('terms').checked
        };
/*
header := w.Header()
header.Add("Access-Control-Allow-Origin", "*")
header.Add("Access-Control-Allow-Methods", "DELETE, POST, GET, OPTIONS")
header.Add("Access-Control-Allow-Headers", "Content-Type, Authorization, X-Requ

*/
        // Send the data to Zoho webhook using fetch
        fetch('https://flow.zoho.eu/20078329175/flow/webhook/incoming?zapikey=1001.0f9d09ece68536a4ac31457bf70fa66e.649b557e7b489c3e9f42cb5a2e7909b3&isdebug=false', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Access-Control-Allow-Origin': '*',
                'Access-Control-Allow-Methods': 'DELETE, POST, GET, OPTIONS',
                'Access-Control-Allow-Headers': 'Content-Type, Authorization, X-Requested-With'
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(result => {
            alert('Form submitted successfully.');
            console.log(result);
        })
        .catch(error => {
            alert('Error submitting the form.');
            console.error('Error:', error);
        });
    });
</script>

</body>
<?php include 'inc/footer.php'; ?>
