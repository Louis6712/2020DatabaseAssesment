<?php
require "header.php";
?>
<!doctype html>
<html>
<head>
	<title>Organisation Tool</title>
	<link rel="stylesheet" href="styles/main.css">
</head>
<body>

<br><br>

<form name="insertEventForm" action="insert.php" method="post">
<label>Your User ID number: </label>
<input type="text" placeholder=<?php echo $_SESSION['userID'] ?> readonly><br>

<label>Organiser Name</label>
<label>: Not You? Re-Login to Change</label>
<input type="text" placeholder=<?php echo $_SESSION['userUID'] ?> readonly><br>


<label>Location</label>
<input type="text" name="location" placeholder="Location of Event" required><br>


<div class="radioButtons">
<input type="radio" id="tramp" name="eventType" value="tramp">
<label>Tramp</label><br>

<input type="radio" id="camp" name="eventType" value="camp">
<label>Camp</label><br>

<input type="radio" id="other" name="eventType" value="other">
<label>Other</label><br>
</div>

<label>Number Attending</label>
<input type="number" class="plan" name="noAttending" placeholder="Number Attending" required><br><br>


<label>Start Date</label>
<input type="date" class="plan" name="dateStart" placeholder="Start Date" required>

<label>Starting Time</label>
<input type="time" name="startTime"  min="00:00" max="23:59" required><br>


<label>Finish Date</label>
<input type="date" class="plan" name="dateEnd" placeholder="Finish Date" required>

<label>Finishing Time</label>
<input type="time" name="endTime" min="00:00" max="23:59" required><br><br>


<label>Who's Attending</label>
<textarea name="whoAttending" class="plan" rows="3" cols="28" rows="5" placeholder="Separate names with commas ','"></textarea><br>


<label>Resources Required</label>
<textarea name="resources" class="plan" rows="3" cols="28" rows="5" placeholder="Separate items with commas ','"></textarea><br>

<label>Comments</label>
<textarea name="comments" class="plan" rows="3" cols="28" rows="5" placeholder="Comments"></textarea><br>


<input type="submit"/>
</div>

</body>
</html>
