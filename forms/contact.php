<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "https://script.google.com/macros/s/AKfycbzxXa0zsJUNgHJb4E98LN2-tXdyz20CugQdKcJUrS1waVN_ZArPw52LS-xqqJ0WjyxNzQ/exec"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $email = $_POST["email"];
    $message = $_POST["message"];
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);
}
?>
