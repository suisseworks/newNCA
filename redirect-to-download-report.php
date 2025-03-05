<?php

// Create a JWT-like token (for simplicity, it's just a base64 payload - replace with actual JWT logic if needed)
$header = base64_encode(json_encode(["alg" => "HS256", "typ" => "JWT"]));
$payload = base64_encode(json_encode([
    "exp" => time() + (6 * 60 * 60), // 6 hours from now
    "user" => "example_user" // You can add user-specific data here if needed
]));
$signature = base64_encode(hash_hmac('sha256', "$header.$payload", 'your-secret-key', true)); // Use a real secret key

$token = "$header.$payload.$signature";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Set Token</title>
    <script>

	// Set the JWT as a cookie for the server to read
	document.cookie = "download_token=<?php echo $token; ?>; path=/; max-age=" + 60 * 60 * 6; // 6 hours
        // Redirect to download-report.php
        window.location.href = 'download-report.php';
    </script>
</head>
<body>
    <p>Redirecting...</p>
</body>
</html>

