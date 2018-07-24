<?php

$conn = mysqli_connect("localhost", "root", "","blakk");

if(!$conn){
    die("No connection: ".mysqli_connect_error());
}