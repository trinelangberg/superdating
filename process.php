<!DOCTYPE html>
<html>
<head>
	<title>edit your profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	
	// check what is received through POST
	// var_dump($_POST); die();
	include('db/database.php');
	$database = new Database;
	$database->connect();


	//- - - Edit profile - - - 

	
	$sql = "UPDATE profiles
SET profiles (
							supername, 
							civilname, 
							gender, 
							description
						) 
			VALUES (?,?,?,?)";


	
	// Secondly, add values
	$values = array(
		$_POST['supername'],
		$_POST['civilname'],
		$_POST['gender'],
		$_POST['description']
	);

	// Call prepared function to execute the above
	$database->prepared($sql,$values);

?>
<p>are you done adding information to your profile?
	<button>
	<a href="index.php">Back to profiles</a></button>
</p>
</body>
</html>