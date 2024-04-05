<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
        // Sanitize input data to prevent SQL injection
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $message = htmlspecialchars($_POST['message']);
        
        // Set recipient email address
        $to = "recipient@example.com"; // Change this to your email address
        
        // Construct email headers
        $headers = "From: $email" . "\r\n" .
                    "Reply-To: $email" . "\r\n" .
                    "X-Mailer: PHP/" . phpversion();
        
        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "Your message has been sent successfully.";
        } else {
            echo "There was a problem sending your message. Please try again later.";
        }
    } else {
        echo "Please fill in all required fields.";
    }
}
?>
