<?php
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("Error , check your server connection.");
mysql_select_db("csys");?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="6.css" rel="stylesheet">
</head>
<body>
<div class="login">
<?php 
if (isset($_SESSION['error']))
				{
				
					echo "<span id=\"error\"><p style='border:solid 1px;background:white;font-weight:bold; color:red;'>" . $_SESSION['error'] . "</p></span>";
					unset($_SESSION['error']);
				}
	?>
  <h1>Login</h1>
    <form method="post" action="login.php">
      <input type="text" name="email" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Sign in.</button>
        <button  class="btn btn-primary btn-block btn-large"> <a href="5.php" >Sign up </a> </button> 
    </form>
</div>
</body>
</html>
