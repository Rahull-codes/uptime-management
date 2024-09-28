<?php
// Include PHPMailer library files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure PHPMailer is properly installed via Composer

// Database connection credentials
$servername = "localhost";
$username = "uptimemng123";
$password = "uptimemng123";
$dbname = "webdatabase";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if URL was received via POST
if (isset($_POST['monitor_url'])) {
    $monitor_url = $_POST['monitor_url'];

    // Fetch the user's email from the database using the URL
    $stmt = $conn->prepare("SELECT email FROM alerts WHERE monitor_url = ?");
    $stmt->bind_param('s', $monitor_url);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a matching email was found for the URL
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_email = $row['email'];

        // Initialize PHPMailer and configure it
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'sahu92083@gmail.com'; // Your email
            $mail->Password = 'ouqk zoyn xhqv bzio'; // Replace with actual password
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipient
            $mail->setFrom('sahu92083@gmail.com', 'Website Monitor');
            $mail->addAddress($user_email);  // Add the user's email

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Website Down Alert';
            $mail->Body = "<h1>Website Down Alert</h1>
                            <p>The website you are monitoring, <strong>$monitor_url</strong>, is currently down.</p>
                            <p>Please check your server or hosting provider to resolve the issue.</p>";

            // Send the email
            $mail->send();
            echo 'success';  // Notify that the email was sent successfully
        } catch (Exception $e) {
            // Catch any errors in sending the email
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    } else {
        echo 'No email found for this URL';  // No matching record found
    }
} else {
    echo 'Invalid request';  // No URL provided in the POST request
}

$conn->close();
?>