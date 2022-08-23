<?php

use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

$mail = new PHPMailer();


$mail->isSMTP();
$mail->Host = 'smtp.ethereal.email';
$mail->SMTPAuth = true;
$mail->Username = 'kamren.kuhic56@ethereal.email';
$mail->Password = 'kVhMTcsEWP6RdJaB5x';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('rarafat883@gmail.com','Arafat Rahman');
$mail->addReplyTo('rarafat15@yahoo.com', 'John Doe');
$mail->addAddress('rarafat15@yahoo.com', 'John Doe');

$mail->isHTML(true);

$mail->Subject = "PHPMailer SMTP test";
$mail->addEmbeddedImage('path/to/image_file.jpg', 'image_cid');
$mail->Body = '<img src="cid:image_cid"> Mail body in HTML';
$mail->AltBody = 'This is the plain text version of the email content';

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
	}
?>