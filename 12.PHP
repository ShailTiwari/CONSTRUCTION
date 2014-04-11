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
   <title>Construction</title>
  <link href="bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
   <link href="1.css" rel="stylesheet">
  <link href="2.css" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link rel="icon" type="image/gif" href="R.gif" >
    <link href="1.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <script type="text/javascript" src="js/registerv.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/menubar.js"></script>
        <style type="text/css">
  
  
* { margin:0;
  padding:0;
}

html {height: 100%;}
body{position: relative;
  height: 100%;}
.backgrounds{height: 100%;  
  background: url(img/2.jpg);
  background: -webkit-gradient(linear, left top, left bottom, from(#ccc), to(#fff));

}

.navbox {
  padding-top: 179px;
padding-left: 14px;
  position: relative;
  float: left;
}

ul.nav {
  list-style: none;
  display: block;
  width: 200px;
  position: relative;
  top: 50px;
  left: 50px;
  padding: 60px 0 60px 0;
  background: url(css/image/shad2.png) no-repeat;
  -webkit-background-size: 50% 100%;
}

li {
  margin: 5px 0 0 0;
}

ul.nav li a {
  -webkit-transition: all 0.3s ease-out;
  background: #cbcbcb url(css/image/border.png) no-repeat;
  color: #174867;
  padding: 7px 15px 7px 15px;
  -webkit-border-top-right-radius: 10px;
  -webkit-border-bottom-right-radius: 10px;
  width: 100px;
  display: block;
  text-decoration: none;
  -webkit-box-shadow: 2px 2px 4px #888;
}

ul.nav li a:hover {
  background: #ebebeb url(css/image/border.png) no-repeat;
  color: #67a5cd;
  padding: 7px 15px 7px 30px;
}

</style>
    <script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){

$("#raj").hide();
$("#raj2").hide();
$("#raj3").hide();
$("#raj4").hide();
$("#raj5").hide();
  $('#rd').click(function () {
    $("#raj2").hide();
    $("#raj3").hide();
    $("#raj4").hide();
    $("#raj5").hide();
            $('#raj').toggle(500);
            });
  $('#rd2').click(function () {
    $("#raj").hide();
    $("#raj3").hide();
    $("#raj4").hide();
    $("#raj5").hide();      
      $('#raj2').toggle(500);
          });
  $('#rd3').click(function () {
    $("#raj2").hide();
    $("#raj").hide();
    $("#raj4").hide();
    $("#raj5").hide();        
      $('#raj3').toggle(500);
          });
  $('#rd4').click(function () {
    $("#raj2").hide();
    $("#raj3").hide();
    $("#raj").hide();
    $("#raj5").hide();        
      $('#raj4').toggle(500);
          });
    $('#rd5').click(function () {
    $("#raj2").hide();
    $("#raj3").hide();
    $("#raj4").hide();
    $("#raj").hide();       
      $('#raj5').toggle(500);
          });     
        });
</script>

    
    
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
       <a href="photo.php"><img class="dp" src="img/s.jpg" alt="Shail" />
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


<div class="Wrapper" style="padding-top: 120px;">
    
          <div class="navbox">
        <ul class="nav">
          <li><a id="rd" href="#">profile</a></li>
          <li><a id="rd2" href="#">project</a></li>
          <li><a id="rd3" href="#">MATERIAL Estmation</a></li>
          <li><a id="rd4" href="#">Design</a></li>
          <li><a id="rd5" href="#">Partner</a></li>
          <li><a id="rd" href="update.php#">Edit profile</a></li>
        </ul>
      </div>
      <div style="float:right;background:rgba(200, 200, 200, .60);border-radius:5px 5px;padding:5px;margin:12px; height:auto;margin-top: 167px;">
      <div id="raj">
         
        <h1 style="box-shadow:0px 10px 50px 10px rgba(15, 94, 114, 0.56) inset;color:rgba(48, 223, 238, 0.92);text-align:center;">Profile</h1>
                 

        <div style="padding-top:10px; font-size:18px;width:600PX;height:300PX;">
        <p><b>NAME :-</b> </p><p><?php echo $un['display_name'];   ?></p>
        <br/>
        
        <hr/>
        <p><B>ADDRESS:</b><?php echo $un['Address'];?></p>
        <hr/>
        <p><B>PROJECT:</b> Road </p><?php echo $un['Construction_name'];   ?>
        <hr/>
        <p><b>CONTACT</b></span> <br/> 
         
        <span style="font-size:22px;">Thanks GSTI Construction</span></p>
        </div>
      </div>
      <div id="raj2">
    
       
        <h1 style="box-shadow:0px 10px 50px 10px rgba(15, 94, 114, 0.56) inset;color:rgba(196, 45, 255, 0.97);text-align:center;">PROJECT</h1>
                 

        <div style="padding-top:10px; font-size:18px;width:600PX;height:300PX;"">
        <p> 
        </p>
        <br/>
        
        <hr/>
        <p><B>Name:</b>  My  home</p>
        <hr/>
        <p><B>Duration:</b> 6 month</p>
        <hr/>
        <p><B>Investment:</b> 5lac</p>
        <hr/>
        <p style="font-size:22px;"><span style="font-size:42px;">“</span>About project <br/>
        
        <span style="font-size:42px;">”</span></p>
        </div>
      </div>
      
      <div id="raj3">
         
        <h1 style="box-shadow:0px 10px 50px 10px rgba(15, 94, 114, 0.56) inset;color:#ccc;text-align:center;">COST ESTIMATION</h1>
                 

        <div style="padding-top:10px; font-size:18px;width:600PX;height:300PX;"">
        <p>LIST OF MATERIAL
        </p>
        <br/>
        
        <hr/>
        <p><B>1.</b> TMT :-</B> 20000</p>
        <hr/>
        <p><B>2.</b> SEND  :- </B>25000 </p>
        <hr/><p><B>3.</b>BRIKS :-</B> 20000</p>
        <hr/>
        <p><B>4.</b>STONE :-</B>25000 </p>
        <hr/><p><B>5.</b> OTHER :-</B> 20000</p>
        <hr/>
        <p><B>2.</b>TOTAL COST :-</B>25000 </p>
        <hr/>
        <p style="font-size:22px;"><span style="font-size:42px;">“</span>Thanks GSTI <br/>..</p> <br> 
        <span style="font-size:42px;">”</span></p>
        </div>
      </div><div id="raj4">
         
        <h1 style="box-shadow:0px 10px 50px 10px rgba(15, 94, 114, 0.56) inset;color:#ccc;text-align:center;">DESIGN</h1>
                 <img src="img/1.jpg" width="350px" height="300px" style="float:right;margin:2px;">

        <div style="padding-top:10px; font-size:18px;width:600PX;height:300PX;"">
        <p>OUR DESIGN
        </p>
        <br/>
        
        <hr/>
        <p><B>ABOUT:-</b>  AAAA.....</p>
        <hr/>
        <p><B>DESIGN -</b> MY DESIGN </p>
        <hr/>
        <p style="font-size:22px;">Thanks GSTI <br/>..</p> <br> 
        <span style="font-size:42px;">”</span></p>
        </div>
      </div>
      <div id="raj5">
         
        <h1 style="box-shadow:0px 10px 50px 10px rgba(15, 94, 114, 0.56) inset;color:#ccc;text-align:center;">MY PARTNER</h1>
                 

        <div style="padding-top:10px; font-size:18px;width:600PX;height:300PX;"">
        <p>LIST OF PARTNER
        </p>
        <br/>
        
        <hr/>
        <p><B>1.TRANSPORTING:- </B>JSSRL</p>
        <hr/>
        <p><B>2.CONTRECTOR :-</B>Mr.Rajdeep </p>
        <hr/>
        <p><B>3.4DESIGNER :-</B>AKOLA DESIGN</p>
        <hr/>
        <p><B>4.SUPLLIER :-</B>SAHARA STONE CRESAR</p>
        <hr/>
        <p><B>5. OTHER :- </B>ANURAJ CONSTRUCTION</p>
        <hr/>
        
        <p style="font-size:22px;"></span>Thanks GSTI <br/>..</p> <br> 
        <span style="font-size:42px;">”</span></p>
        </div>
      </div>
      
      </div>
      
    </div>
</body>
</html>
