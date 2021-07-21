<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mott_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
?>