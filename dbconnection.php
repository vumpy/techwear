<?php
$user = 'root';
$password = 'root';
$db = 'techwear';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$conn = mysqli_connect(
//   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>