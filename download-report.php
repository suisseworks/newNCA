<?php
session_start();

// Assuming the JWT is saved in the localStorage as 'download_token'
$jwt = isset($_COOKIE['download_token']) ? $_COOKIE['download_token'] : null;

// Decode JWT to check expiration (simple decode for demo purposes)
if ($jwt) {
    list($header, $payload, $signature) = explode('.', $jwt);
    $decoded_payload = json_decode(base64_decode($payload), true);

    // Check if the token has expired
    if (isset($decoded_payload['exp']) && $decoded_payload['exp'] > time()) {
        // Valid token
        $_SESSION["lan"] = "English"; // Set language preference
    } else {
        // Token expired
        header('Location: 404page.php');
        exit;
    }
} else {
    // No token present
    header('Location: 404page.php');
    exit;
}
?>

<?php include 'inc/header.php'; ?>
<body>
    <section class="download_report_section bg-white pt-100 pb-100">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-12 strike_heading_2 mt-3">
                    <h2 class="stroke_text text-uppercase text-center text-lg-left text-sm-left text-xs-left mb-10 mb-lg-0 wow fadeInLeft">
                        Your Report
                    </h2>
                </div>
                <div class="col-lg-7">
                    <div class="position-relative z-index-1">
                        <div class="headline">
                            <h4 class="mb-5 mt-3 subtitle wow fadeInUp">
                                Please download your report here to access exclusive insights and analysis from Nova Stone Capital Advisors.
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="download_image mb-4">
                        <img src="img/snow-mountain.png" alt="Report Cover">
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="download_action text-center text-lg-left">
                        <h5 class="font__size-24 font__family-efb mb-4">Ready to explore our insights?</h5>
                        <style>
                            .download-btn {
                                transition: all 0.3s ease;
                            }
                            .download-btn:hover {
                                transform: translateY(-3px);
                                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
                            }
                        </style>
                        <a href="docs/Search Fund Report 2025.pdf" download class="btn btn-prime bg-primary text-capitalize border-radius-25 px-5 py-3 mt-3 font__family-open-sans font__weight-bold text-white download-btn">
                            Download Report
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Additional content removed as requested -->
        </div>
    </section>
</body>
<?php include 'inc/footer.php'; ?>

