<?php 
include("session.php");
include("dbconnection.php");
//if (isset($_POST['sub'])) {
  $name =$_POST['name'];
  $size = $_POST['size'];
  $price =$_POST['price'];

  $imagetmp=addslashes (file_get_contents($_FILES['image']['tmp_name']));

  $insert_image="INSERT INTO cloth(name, price, size, type, image) VALUES ('$name', '$price', '$size', 1, '$imagetmp')";

  mysqli_query($conn,$insert_image);

//}


?>