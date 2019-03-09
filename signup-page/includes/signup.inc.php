<?php
session_start();
include '../db.php';


$name = $_POST['name'];
$country = $_POST['country'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$work = $_POST['work'];
$address = $_POST['address'];
$city = $_POST['city'];


// if (!empty($first)) {
//     echo header('Location: ../index.php?error=blank');
//     exit();
// }
// if (!empty($last)) {
//     echo header('Location: ../index.php?error=blank');
//     exit();
// }
// if (!empty($usr)) {
//     echo header('Location: ../index.php?error=blank');
//     exit();
// }
// if (!empty($pwd)) {
//     echo header('Location: ../index.php?error=blank');
//     exit();
// }
// if (!empty($first) && (!empty($last)) && (!empty($usr)) && (!empty($pwd))) {
//     echo header('Location: ../index.php?error=blank');
//     exit();
// }
 // else {
    $sql = ("INSERT INTO signup (name, country, email ,phone, gender,work,address, city) VALUES ('$name', '$country','$email','$phone', '$gender','$work', '$address', '$city')");
    //send the data to database
    $results = $conn->query($sql);
// }



    use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 

$body = file_get_contents('mail/mail.html');
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'mail.blakkparadyse.org';
$mail->Port = '465';
$mail->isHTML(true);
$mail->Username = 'info@blakkparadyse.org';
$mail->Password = '6u#bcZ343]cNKA'; 
$mail->SetFrom('info@blakkparadyse.org');
$mail->Subject = 'BLAKK PARADYSE REGISTRATION';
// $mail->Body = '<p>hello</p>';
$mail->MsgHTML($body);
$mail->AddAddress("$email");

$mail->Send();


$_SESSION['msg'] = "We have succesfully received your details, We have sent an email to your account";



//redirect to index.php
header('Location: ../signup.php');