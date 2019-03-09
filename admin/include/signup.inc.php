<?php

include 'db.php';

		use PHPMailer\PHPMailer\PHPMailer; 
		use PHPMailer\PHPMailer\Exception; 

		require 'PHPMailer/src/Exception.php';
		require 'PHPMailer/src/PHPMailer.php'; 
		require 'PHPMailer/src/SMTP.php'; 


		

if (isset($_POST['submit'])) {
			

		$name = $_POST['name'];
		$country = $_POST['country'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$work = $_POST['work'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$groups = $_POST['groups'];


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
		    $sql = ("INSERT INTO signup (name, country, email ,phone, gender,work,address, city, groups)
			 VALUES ('$name', '$country','$email','$phone', '$gender','$work', '$address', '$city', '$groups')");
		    //send the data to database
		    $results = $db->query($sql);
		// }
		


		

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
		//$mail->Body = '<p>hello</p>';
		$mail->MsgHTML($body);
		$mail->AddAddress("$email");

		$mail->Send();
		if (!$mail ->send()) {
			$_SESSION['msg-err'] = "Error sending message try again later";
		//redirect to index.php
		header('Location: ../signup.php');
		}else{
			$_SESSION['msg'] = "Member Registered";
		//redirect to index.php
		header('Location: ../signup.php');
		}

		

		
}else{
	$_SESSION['msg-err'] = "Failed, please try again later..";
	header('Location: ../signup.php');
}

