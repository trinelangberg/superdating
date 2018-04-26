<!DOCTYPE html>
<html>
<head>
	<title>Superdating! The site for lonely heroes!</title>
	
	<link rel="stylesheet" type="text/css" href="css/main.css">	
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
</head>

	

	
<body>
	
<header>
	<h1>Are you a Superhero?</h1>
	<h2>Are you looking for a new super-mate to spend your time with?<br> Then join us now!</h2>
</header>

<article class="profile article">
	<h2>Hello there Batgirl</h2>
	<p>Have a nice day!</p>
	<h3><a href="edit_profile.php">Update profile</a></h3>
</article>	
	
<?php

// ensure that php errors are displayed
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	// Include and initiate the database class (you only have to do this once)
	include('db/database.php');
	$database = new Database;
	$database->connect();



	// Get all profiles from the database
	$profiles = $database->query('SELECT * FROM profiles');
	// var_dump($profiles);

	// Loop through all profiles
	foreach ($profiles as $profile) {
		$comments = $database->query("SELECT * FROM comments LEFT JOIN profiles ON comments.profile_from = profiles.id WHERE profile_to = " . $profile['id']);
		?>
		<article class="profile">
			<h2><?php echo $profile['supername'];?></h2>
			<img src="<?php echo $profile['image'];?>">
			<h3>(<?php echo $profile['civilname'];?>)</h3>
			<h3><?php echo $profile['gender'];?></h3>
			<p><?php echo $profile['description'];?></p>
			
			<dl>
				<?php
				foreach ($comments as $comment) {
					?>
				<dt><b><p> By: <?php echo $comment['civilname']; ?></p></b></dt>
				<dd> <p>Comment: <?php echo $comment['text']; ?></p> </dd>	
				
				<?php
				}
		
	?>
				
			</dl>
			<form method="post" action="">
				<textarea name="message" placeholder="Comment"></textarea> <br> 
				<input type="submit" name="submit" value="Comment">
			</form>
		</article>
		<?php
	}
?>
</body>
</html>