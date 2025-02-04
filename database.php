<?php
$servername = "localhost";
$username = "root";
$password ="";
$database = "gapi_756";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn ->connect_error){
    die("Connected Failed!: " . $conn->connect_error);
}
?>