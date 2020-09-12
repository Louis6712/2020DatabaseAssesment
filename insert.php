<?php
session_start();

$servername = "localhost";
$username = "SirLouiseII";
$password = "PHPServer";
$db = "sirlouise's_greatdb";


$name = $_SESSION['userUID'];
$place = $_POST['location'];
$type = $_POST['eventType'];
$noAttend = $_POST['noAttending'];
$attend = $_POST['whoAttending'];
$items = $_POST['resources'];
$start = $_POST['dateStart'];
$startTime = $_POST['startTime'];
$finish = $_POST['dateEnd'];
$endTime = $_POST['endTime'];
$notes = $_POST['comments'];
$startTimeHR = date("h:i", strtotime($startTime));
$endTimeHR = date("h:i", strtotime($endTime));


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";





$sql = "INSERT INTO maininfotbl (Organiser_Name, Location, EventType, Number_going, Who_Attending, Resources, DateStart , startTime , DateEnd , endTime , Comments)

VALUES ('$name','$place','$type','$noAttend','$attend','$items','$start','$startTimeHR:00','$finish','$endTimeHR:00','$notes')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


 ?>
