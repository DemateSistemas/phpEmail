<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->SMTPDebug = 4;
    $mail->setLanguage('br');
    $mail->CharSet='UTF-8'; 
    $mail->Host = 'smtplw.com.br';
    //$mail->Host = '';
    //$mail->Host = '';
    $mail->SMTPAuth = true;
    $mail->Username = '';   
    $mail->Password = '';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('', '');
    $mail->addAddress('joaodematejr@gmail.com', 'João');

    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email!';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
}
