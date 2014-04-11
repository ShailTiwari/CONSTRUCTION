<?php
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("Error , check your server connection.");
mysql_select_db("csys");

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
	{
		$name  = $_POST['name'];
		$duration = $_POST['duration'];
		$inv = $_POST['inv'];
		$about = $_POST['about'];
		// Sanitize our inputs
		$name = mysql_real_escape_string($name);
		$duration = mysql_real_escape_string($duration);
		$inv = mysql_real_escape_string($inv);
		$about = mysql_real_escape_string($about);
		
		if ( $name == "" || $duration == "" || $inv == ""|| $about == "")
		{
			$_SESSION['msg'] = "All fields are required";
			header("Location: update.php");
			exit;
		}
		else{
		$sql = "INSERT INTO `project`( `name`, `duration`, `inv`, `about`)
		values('$name', '$duration', '$inv', '$about')";
		$result = mysql_query($sql) or die ("Could not insert data into DB: " . mysql_error());
			$_SESSION['msg'] = "updated successful";
			header("Location: update.php");
		}
	}
		?>
