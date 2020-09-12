<?php



$servername = "localhost";
$username = "SirLouiseII";
$password = "PHPServer";
$db = "sirlouise's_greatdb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


if(isset($_POST['username'])){
  $uname = $_POST['username'];
  $pword = $_POST['password'];

  $sql = "SELECT * FROM userinfotbl WHERE Name='".$uname."'AND Password='".$pword."'";


  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1){
    echo "you have logged in";

    session_start();
    $sqlID = "SELECT ID FROM userinfotbl WHERE Name='".$uname."'";

    $result = mysqli_query($conn, $sqlID);

    $resultID =  mysqli_fetch_assoc($result);

    echo $resultID['ID'];



    $_SESSION['userID'] = $resultID['ID'];
    $_SESSION['userUID'] = $uname;

    header("Location: home.php");

    exit();
  }else {
    echo" you're bad";
    exit();
  }

}




 ?>
