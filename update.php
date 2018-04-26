<?php
	ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit your profile</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
	ini_set("display_errors", 1);
	
	// check what is received through POST
	// var_dump($_POST); die();
	include('db/database.php');
	$database = new Database;
	$database->connect();


	//- - - Edit profile - - - 

	
	$sql = "UPDATE profiles SET supername = '" . $_POST['supername'] . "', civilname = '" . $_POST['civilname'] . "', gender = '" . $_POST['gender'] . "', description ='" . $_POST['description'] . " ' WHERE id = '1'"; 

	// Call prepared function to execute the above
	$database->queryWithoutFetchAll($sql);

?>
<p>are you done adding information to your profile?
	<button>
	<a href="index.php">Back to profiles</a></button>
</p>
</body>
</html>