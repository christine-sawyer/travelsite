<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get data from form
  $destination = $_POST["destination"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

// Send an e-mail to me with form info
  $to = "christinesawyerdance@gmail.com";
  $subject = "New Booking Inquiry";
  $email_body = "Destination: " . $destination . "\n"
                . "Name: " . $name . "\n"
                . "Email: " . $email . "\n"
                . "Message: " . $message;
  $headers = "From: " . $email;

  if (mail($to, $subject, $email_body, $headers)) {
    echo "Thank you for getting started! We will respond with further details.";
  } else {
    echo "There was an error sending the email. Please try again later.";
  }
}
?>
