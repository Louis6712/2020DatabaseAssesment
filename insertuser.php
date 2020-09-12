<?php

session_start();

$servername = "localhost";
$username = "SirLouiseII";
$password = "PHPServer";
$db = "sirlouise's_greatdb";

$name = $_POST['username'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$pword = $_POST['password'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



$sql = "INSERT INTO userinfotbl (Name,Phone,Address,Password)

VALUES ('$name','$phone','$address','$pword')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: home.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


 ?>
