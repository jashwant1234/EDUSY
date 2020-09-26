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
$mail->addAddress('jpradhan727@gmail.com');
$mail->addReplyTo($email);
$mail->isHTML(true);
$mail->Subject = 'Edusy';
$mail->Body = '<h1 align=center>subscribe my channel</h1>';
if (!$mail->send()) {
    echo 'massage not send';
} else {
    echo "massage is sent";
}
?>