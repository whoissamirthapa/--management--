<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "phpTraining";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "error while database connect" .mysqli_connect_error();
}









?>