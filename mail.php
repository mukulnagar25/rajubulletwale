<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $service = $_POST['service'];
  $comments = $_POST['comments'];

  // Construct the email message
  $to = 'barskarmayur24@gmail.com'; // Replace with your own email address
  $subject = 'Appointment Booking';
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nDate: $date\nTime: $time\nService: $service\nComments: $comments";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for booking an appointment. We will contact you soon.';
  } else {
    echo 'There was an error sending the email. Please try again later.';
  }
}
?>
