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


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'rbx103.truehost.cloud';
$mail->Port = '465';
$mail->isHTML(true);
$mail->Username = 'info@thumbi.co.ke';
$mail->Password = '232j120g0038k'; 
$mail->SetFrom('githumbi@gmail.com');
$mail->Subject = 'fello wolrld';
$mail->Body = '<p>hello</p>';
$mail->AddAddress("$email");

$mail->Send();


$_SESSION['msg'] = "The information has been Updated";



//redirect to index.php
header('Location: ../signup.php');