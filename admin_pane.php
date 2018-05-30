<?php
include("dbconnection.php");
include("session.php");

$username = $_SESSION['username'];

$ap = "SELECT admin FROM user WHERE username = '$username' AND admin = 1";
$result = $conn->query($ap);

if($result->num_rows > 0) {
	echo "autisti shesulia";
}

?>