<?php

include "SMTP.php";
include "PHPMailer.php";
include "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$receiver = $_POST['r'];
$subject = $_POST['s'];
$content = $_POST['c'];

//email code
$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = '**';
$mail->Password = '*';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('**', 'Test Email');
$mail->addReplyTo('**', 'Reset Password');
$mail->addAddress($receiver);
$mail->isHTML(true);
$mail->Subject = $subject;
$bodyContent = $content;
$mail->Body = $bodyContent;

if (!$mail->send()) {
    echo ("failed");
} else {
    echo ("success");
}
