<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'battlesushi@gmail.com';
    $mail->Password = '0939795377';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    $mail->setFrom('battlesushi@gmail.com', 'Admin');
//    $mail->addAddress('recipient1@example.net', 'Recipient1');
    $mail->addAddress('battlesushi2@gmail.com');  //收件者

    $mail->addReplyTo('noreply@example.com', 'noreply');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/backup/myfile.tar.gz');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Mail Subject!';
    $mail->Body    = 'This is SMTP Email Test';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}