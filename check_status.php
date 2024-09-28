<?php
// Function to check if the website is up or down
function checkWebsiteStatus($url) {
    // Initialize cURL
    $curlHandler = curl_init();

    // Set cURL options
    curl_setopt($curlHandler, CURLOPT_URL, $url);
    curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);  // Return the result instead of outputting it
    curl_setopt($curlHandler, CURLOPT_TIMEOUT, 10);           // Timeout after 10 seconds
    curl_setopt($curlHandler, CURLOPT_FOLLOWLOCATION, true);   // Follow redirects
    curl_setopt($curlHandler, CURLOPT_NOBODY, true);           // Only get the headers, not the body

    // Execute the request
    $data = curl_exec($curlHandler);

    // Check for cURL execution errors
    if (curl_errno($curlHandler)) {
        curl_close($curlHandler);
        return "down";  // The site is down if a cURL error occurred
    }

    // Get the HTTP status code
    $http_status_code = curl_getinfo($curlHandler, CURLINFO_HTTP_CODE);
    curl_close($curlHandler);

    // Check if the website is up (HTTP status 200-399)
    if ($http_status_code >= 200 && $http_status_code < 400) {
        return "up";
    } else {
        return "down";
    }
}

// Check if URL is passed
if (isset($_POST['url'])) {
    $url = $_POST['url'];
    $status = checkWebsiteStatus($url);

    // Return the status as a JSON response
    echo json_encode([
        "status" => $status,
        "url" => $url
    ]);
} else {
    echo json_encode([
        "error" => "No URL provided"
    ]);
}
?>
