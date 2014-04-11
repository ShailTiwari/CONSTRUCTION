<?php
session_start();
$connect = mysql_connect("localhost", "root", "") or die ("Error , check your server connection.");
mysql_select_db("csys");
 $status=$_SESSION['loggedIn'];
  $user=$_SESSION['user'];
//$last_ids = $_SESSION['ids'];
if($status!="true"){
  header("Location: 6.php");

}

?>
<!DOCTYPE html>
<html>
<head>
  <title>7</title>
  <link href="bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
   <link href="1.css" rel="stylesheet">
  <link href="2.css" rel="stylesheet">
</head>


<body style="background-color: #7C1D47;">

<?php 
  $sql = "SELECT * FROM `signup`  WHERE display_name = '$user' ";
              $result=mysql_query("$sql")or die (" a into DB: " . mysql_error());
              while ($un = mysql_fetch_assoc($result))
                {?>
<header>
  <nav>
    <a href="1.html#slogan1">Home</a>
    <a href="1.html#slogan2">About</a>
    <a href="1.html#slogan3">Design</a>
    <a href="1.html#slogan4">Working</a>
    <a href="6.html">Member</a>
    <a href="1.html#slogan4"><?php echo $un['display_name'];   ?></a>
    <a href=6.php>Logout</a>
  </nav>
</header>
<section class="twitter" style="margin-top:0px;!imporatant">
  <div class="overlay" style="margin-top:75px;">
  <div class="inner">
       <img class="dp" src="img/s.jpg" alt="Luis Aburto" />
    </a>
    <h1 class="fn">GSTI Construction</h1>
    
<h4><a href="#"><i><s>@</s> <?php echo $un['display_name'];   ?>
</i>
</a>
    </h4>
    <p class="bio" lang="es">Welcome In Construction System</p>
    <p class="location-and-url">
      <span class="location"><?php echo $un['Address'];   ?></span>
  <span class="divider">·</span>
      <span class="url">
        <a target="_blank" rel="me nofollow" href="http://sgsits.ac.in" title="http://gsti.in">
          <?php echo $un['email']; }  ?>
        </a>
      </span>
    </p>
  </div></div>
</section>
</body>
</html>
