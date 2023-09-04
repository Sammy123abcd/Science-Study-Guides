<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $to = "samhithabodangi@gmail.com";
    $subject = "Contact Form Submission";
    $message = "Name: $name\nEmail: $email";

    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Thank you for contacting us! We will get back to you soon.";
} else {
    echo "Error: Invalid request.";
}
?>