<?php
if(isset($_POST['submit'])) {
    // Set the recipient email address here
    $to = "vedantivedanti1005@gmail.com";

    // Extract form fields data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose the email message
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if(mail($to, $subject, $body, $headers)) {
        echo "<p>Your message has been sent successfully.</p>";
    } else {
        echo "<p>Sorry, an error occurred while sending your message.</p>";
    }
}
?>
