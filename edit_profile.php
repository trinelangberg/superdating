<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
// Get all profiles from the database
	include('db/database.php');
	$database = new Database;
	$database->connect();

	// Select all profiles
	$sql = "SELECT * FROM profiles";
	$profiles = $database->query($sql);
?>

  <form action="update.php" method="post">
  	<h2><label for="supername">Supername</label></h2>
  	<input type="text" name="supername" placeholder="Deadpool..">
  	
  	<h2><label for="civilname">Civilname</label></h2>
  	<input type="text" name="civilname" placeholder="Wade Wilson..">
  	  	
  	<h2><label for="gender">Gender</label></h2>
  	<input type="text" name="gender">

	  
  	<h2><label for="description">Description</label></h2>
  	<textarea name="description"></textarea>

  	<input type="submit" name="submit" value="Update">
  </form>
</body>
</html>