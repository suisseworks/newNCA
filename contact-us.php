<?php include 'inc/header.php'; ?>
<body>
 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MHG7P3C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<style>
        .form-container {
            background: #e5720a; /* Fondo naranja */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 999px; /* Reducir ancho máximo */
            width: 100%;
            display: flex;
            align-items: stretch;
            height: 800px; /* Aumentar alto */
        }
        .form-content {
            width: 40%; /* Ajustar ancho */
            padding: 45px;
        }
        .form-content h2 {
            margin-bottom: 15px;
            color: white; /* Título en blanco */
            font-size: 20px; /* Reducir tamaño del título */
        }
        .form-group {
            margin-bottom: 8px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: white; /* Etiquetas en blanco */
            font-weight: bold;
            font-size: 14px; /* Reducir tamaño de fuente */
        }
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 102%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 24px; /* Bordes más circulares */
            box-sizing: border-box;
            font-size: 12px; /* Reducir tamaño de fuente */
        }
        .form-group textarea {
            height: 60px; /* Reducir altura de textarea */
        }
        .form-group input[type="checkbox"] {
            width: auto;
        }
        .form-group label[for="terms"] {
            display: inline;
        }
        .form-group .terms {
            display: inline-block;
            margin-left: 10px;
            color: #000; /* Texto de términos en blanco */
            font-size: 12px; /* Reducir tamaño de fuente */
        }
        .form-group .terms a {
            color: #000;
            text-decoration: none;
        }
        .form-group .terms a:hover {
            text-decoration: underline;
        }
        .form-group button {
            font-weight: normal;
            background-color: #e5720a;
            color: white;
            padding: 6px 15px; /* Hacer el botón más pequeño */
            border-width: 4px;
            border-color: #ffffff;
            border-style: solid;
            border-radius: 24px;
            cursor: pointer;
            font-size: 14px; /* Reducir tamaño de fuente */
        }
        .form-group button:hover {
            background: #e5720a;
        }
        .form-image {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: stretch;
        }
        .form-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

<div class="form-container">
        <div class="form-content">
            <h2>Get in Touch</h2>
            <form action="/submit-form" method="POST">
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
                </div><br />
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div><br />
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" required>
                </div><br />
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" required>
                </div><br />
                <div class="form-group">
                    <label for="company-name">Company Name</label>
                    <input type="text" id="company-name" name="company-name">
                </div><br />
                <div class="form-group">
                    <label for="reason">Reason for contact</label>
                    <textarea id="reason" name="reason" required></textarea>
                </div><br />
                <div class="form-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms" class="terms">Terms and Conditions</label>
                </div><br />
                <div class="form-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms" class="terms">I agree to the <a href="/privacy-policy" target="_blank">Privacy Policy</a></label>
                </div>
                <div class="form-group">
                    <button type="submit">SEND NOW</button>
                </div>
            </form>
        </div>
        <div class="form-image">
            <img src="img/get-in-touch.jpeg" alt="Contact Image">
        </div>
    </div>

</body>

<?php include 'inc/footer.php' ?>