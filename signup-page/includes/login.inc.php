<?php
session_start();
include '../dbh.php';



$usr = $_POST['usr'];
$pwd = $_POST['pwd'];

$sql = ("SELECT * FROM users WHERE usr='$usr' AND pwd='$pwd'");
//send the query to database
$results = $conn->query($sql);

if (!$row = $results->fetch_assoc()) {
    echo 'you are not logged in';
} else {
    $_SESSION['id'] = $row['id'];
}

//redirect to home page
header('Location: ../index.php');

