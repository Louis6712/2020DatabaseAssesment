<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Organisation Tool</title>
	<link rel="stylesheet" href="header.css">
</head>
<header>
<nav>

<div class="nav">
  <a href="home.php">Home</a> <!--class="active"-->
  <a href="addevent.php">Add Event</a>
  <a href="#contact">Upcoming</a>
  <a href="#about">About</a>
	<?php
	if($_SESSION['userUID'] == 'louis.wilson'){
		echo '<a href="newuser.php">Register New User</a>';
	}
	?>

	<form action="logout.php" method="post">
		<button type="submit" name="logout">Logout</button>
	</form>
</div>


</nav>
</header>
</html>
