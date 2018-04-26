<!DOCTYPE html>
<html>
<head>
	<title>Add profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// Get all types from the database
	include('db/database.php');
	$database = new Database;
	$database->connect();

	// Select all types
	$sql = "SELECT * FROM profiles";
	$profiles = $database->query($sql);
?>

  <form action="process.php" method="post">
  	<label for="supername">supername</label>
  	<input type="text" name="supername" placeholder="Deadpool..">
  	
  	<label for="civilname">civilname</label>
  	<input type="text" name="civilname" placeholder="Wade Wilson..">
  	  	
  	<label for="gender">gender</label>
  	<input type="text" name="gender">

	  
  	<label for="description">description</label>
  	<textarea name="description"></textarea>

  	<input type="submit" name="submit" value="Add">
  </form>
</body>
</html>