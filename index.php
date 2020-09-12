<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Organisation Tool</title>
	<link rel="stylesheet" href="styles/main.css">
</head>
<body>

	<?php
	if(isset($_SESSION['userID'])){
		echo 'You are logged in';
		header("Location: home.php");
	}else{
		echo'your not';
	}
	?>


<form action="login.php" method="POST">
<label>Enter Username:</label><input type="text" name="username" placeholder="Username"><br>
<label>Enter Password:</label><input type="text" name="password" placeholder="Password"><br>

<input type="submit">

</form>

</body>
</html>
