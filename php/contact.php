<?php
// contact.php - handles the portfolio contact form submission using PHPMailer + Gmail SMTP

require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    exit;
}

// Collect and sanitize input
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Basic validation
if (empty($name) || empty($email) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../index.php?status=error");
    exit;
}

$mail = new PHPMailer(true);

try {
    // ---- Gmail SMTP settings ----
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'snehamathai17@gmail.com';      // <-- your Gmail address
    $mail->Password   = 'ddjrqgdchbtnzowh';      // <-- Gmail App Password (NOT your normal password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // ---- Sender / recipient ----
    $mail->setFrom('snehamathai17@gmail.com', 'Portfolio Contact Form');
    $mail->addAddress('snehamathai4ever@gmail.com', 'Sneha Mathai'); // where you want to receive messages
    $mail->addReplyTo($email, $name); // so you can hit "Reply" and it goes to the visitor

    // ---- Content ----
    $mail->isHTML(false);
    $mail->Subject = "New portfolio message from $name";
    $mail->Body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    $mail->send();
    header("Location: ../index.php?status=success");
}  catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;

}
exit;
