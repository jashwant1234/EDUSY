<?php
require 'phpmailer/PHPMailerAutoload.php';
require 'config.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $mail_password;
$mail->setFrom($email, 'EDUSY');
$mail->addAddress($_SESSION["user_name"]);
$mail->addReplyTo($email);
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $body;
if (!$mail->send()) {
    echo 'massage not send';
} else {
    echo "massage is sent";
}
?>