<?php
@session_start();
require 'vendor/autoload.php'; // Adjust the path if needed

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database connection credentials
$servername = "localhost";
$username = "uptimemng123";
$password = "uptimemng123";
$dbname = "webdatabase";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $web_url = $_POST['monitor_url'] ?? '';

    if (!empty($email) && !empty($web_url)) {
        // Prepare and bind SQL statement
        $stmt = $conn->prepare("INSERT INTO alerts (email, web_url) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $web_url);

        if ($stmt->execute()) {
            // On successful insertion, return success message
            echo json_encode('success');
        } else {
            echo json_encode('Error: ' . $conn->error);
        }

        $stmt->close();

        // Check the website status immediately and send an alert
        checkWebsiteStatus($web_url, $email);
    } else {
        echo json_encode('Error: Please fill in all fields.');
    }
} else {
    echo json_encode('Invalid request method.');
}

$conn->close();

/**
 * Check the website status using cURL and send an email alert if the site is down.
 */
function checkWebsiteStatus($url, $recipientEmail)
{
    // Initialize cURL
    $curlHandler = curl_init();
    curl_setopt($curlHandler, CURLOPT_URL, $url);
    curl_setopt($curlHandler, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlHandler, CURLOPT_TIMEOUT, 10);  // Timeout after 10 seconds
    curl_setopt($curlHandler, CURLOPT_NOBODY, true); // Don't download the body, just the header

    curl_exec($curlHandler);
    $http_status_code = curl_getinfo($curlHandler, CURLINFO_HTTP_CODE);
    curl_close($curlHandler);

    // Check if the website is up (HTTP status 200-399)
    if ($http_status_code >= 200 && $http_status_code < 400) {
        echo "Website is up, no email will be sent."; // Optional output for debugging
    } else {
        // Website is down, send an alert email
        sendEmailAlert($url, $recipientEmail);
    }
}

/**
 * Send an email alert using PHPMailer when the website is down.
 */
function sendEmailAlert($web_url, $recipientEmail)
{
    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sahu92083@gmail.com'; // Your email
        $mail->Password = 'ouqk zoyn xhqv bzio'; // Use an App password for Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipient settings
        $mail->setFrom('sahu92083@gmail.com', 'Website Monitor');
        $mail->addAddress($recipientEmail);

        // Email content
        $mail->isHTML(true);
        $mail->Subject = 'Website Status Alert';
        $mail->Body = "We have detected that your website, <b>$web_url</b>, is currently <b>Down</b>. This issue may lead to potential disruptions in your services and affect your users' experience.

We strongly recommend you check and resolve the issue as soon as possible to avoid any further complications.

Thank you for your prompt attention to this matter. ";

        // Send the email
        $mail->send();
        echo "Alert email sent to $recipientEmail";
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }
}

?>
