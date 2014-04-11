<?php
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("Error , check your server connection.");
mysql_select_db("csys");

//Get data in local variable
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
	{
		$user  = $_POST['first_name'];
		$pass1 = $_POST['last_name'];
		$pass2 = $_POST['display_name'];
		$email = $_POST['Construction_name'];
		$dob   = $_POST['Address'];
		$add   = $_POST['email'];
		$city  = $_POST['password'];
		$sex   = $_POST['password_confirmation'];
		//query
	$sql = "insert into signup( `first_name`, `last_name`, `display_name`, `Construction_name`, `Address`, `email`, `password`, `password_confirmation`) 
		values('$user', '$pass1', '$pass2', '$email', '$dob', '$add', '$city', '$sex');";
	$result = mysql_query($sql) or die ("Could not insert data into DB: " . mysql_error());

//$last_id =$email;
$last_id = mysql_insert_id();
$_SESSION['ids'] =$last_id;
header("Location:progress.php");
}						//	$sql = "SELECT filename FROM `signup` WHERE id=$last_ids";
						//	$result=mysql_query("$sql")or die (" a into DB: " . mysql_error());
						//	while ($un = mysql_fetch_assoc($result))
						//	{?>
						<?php//<img border="1px;" src="uploads/<?php echo $un['filename'] ;?>
