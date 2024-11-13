<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "alitaleb696@gmail.com";
    $subject = "Subject";
    $name = $_POST['name'];
    $email = $_POST['Email'];
    $message = $_POST['Enquiry'];

    $fullMessage = "Name: $name\n";
    $fullMessage .= "Email: $email\n\n";
    $fullMessage .= "Message:\n$message\n";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message. Please try again later.";
    }
}
?>
