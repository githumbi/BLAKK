<?php 

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'rbx103.truehost.cloud';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'info@thumbi.co.ke';
$mail->Password = '232j120g0038k'; 
$mail->SetFrom('githumbi@gmail.com');
$mail->Subject = 'fello wolrld';
$mail->Body = 'A test email';
$mail->AddAddress('gathumbi74@gmail.com');

$mail->Send();

 ?>