<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title> GSTI | Update</title>
    <link rel="icon" type="image/gif" href="R.gif" >
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/up/dropdown-menu.css" type="text/css">
      <link rel="stylesheet" href="css/experiment.css" />
    <link rel="stylesheet" href="css/experiment-styles.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript"> 
      $(document).ready(function(){   
      $("#f1").hide();
      $("#f2").hide();
      $("#f3").hide();
      $("#f4").hide();
      $("#f5").hide();
       $('#b1').click(function () {
       $("#f2").hide();
        $('#f1').fadeTo("slow",0.85);
         });
       
       });
    </script>
    <script type="text/javascript"> 
    $(document).ready(function(){
      $("#f1").hide();
      $("#f2").hide();
      $("#f3").hide();
      $("#f4").hide();
      $("#f5").hide();
    $('#b2').click(function () {
    $("#f1").hide();
         $('#f2').fadeTo("slow",0.85);
      });
    }); 


    $(document).ready(function(){   
      $("#f1").hide();
      $("#f2").hide();
      $("#f3").hide();
      $("#f4").hide();
      $("#f5").hide();
         
       $('#b3').click(function () {
       $("#f2").hide();
       $("#f1").hide();
      $("#f5").hide();
      $("#f4").hide();
        $('#f3').fadeTo("slow",0.85);
         });
       
       });

    $(document).ready(function(){   
      $("#f1").hide();
      $("#f2").hide();
      $("#f3").hide();
      $("#f4").hide();
      $("#f5").hide();
         
       $('#b4').click(function () {
       $("#f2").hide();
       $("#f1").hide();
      $("#f3").hide();
      $("#f4").hide();
        $('#f4').fadeTo("slow",0.85);
         });
       
       });

      $(document).ready(function(){   
      $("#f1").hide();
      $("#f2").hide();
      $("#f3").hide();
      $("#f4").hide();
      $("#f5").hide();
         
       $('#b5').click(function () {
       $("#f2").hide();
       $("#f1").hide();
       $("#f3").hide();
       $("#f4").hide();
       $('#f5').fadeTo("slow",0.85);
         });
       
       });



    </script>
  </head>
  <body>
    <div class="Wrapper">
      <ul id="navigation" class="nav-main">
        <li ><a href="1.html#slogan1">Home</a></li>
        <li ><a href="1.html#slogan2">About</a></li>
        <li><a href="1.html#slogan3">Design</a></li>
        <li ><a href="1.html#slogan4">Working</a></li>
        <li ><a href="12.php">admin</a></li>
      </ul>
      <div class="background">
        <div id="l">
          <ul>
            <li id="b1"><a id="b1" href="#">Profile</a></li>            
            <li id="b2"><a href="#">Project</a></li>
            <li id="b3"><a id="b1" href="#">Material</a></li>            
            <li id="b4"><a href="#">Partner</a></li>
            <li id="b5"><a href="12.php">Home</a></li>
          </ul>
        </div>
           
          


          <form id="f1" class="f1" method="post" action="updform.php" style="color:#fff;">
            <h1 style="text-align:center;color:#000;">Profile</h1>
            <span id="cln" >Name</span>
            <input class="inputu" type="text" name="name" /><br/>
            <span id="cln">Address</span>
            <input class="inputu" type="text" name="address" /><br/>
            <span id="cln">Project</span>
            <input class="inputu" type="text" name="project" /><br/>
            <input class="inbt"  type="submit" value="Update" /><br/>
         
        </form>

        <form id="f2" class="f1" method="post" action="updform1.php" style="color:#fff;">
            <h1 style="text-align:center;color:#000;">Project</h1>
            <span id="cln" >Name</span>
            <input class="inputu" type="text" name="name" /><br/>
            <span id="cln">Duration</span>
            <input class="inputu" type="text" name="duration" /><br/>
            <span id="cln">investment</span>
            <input class="inputu" type="text" name="inv" /><br/>
            <span id="cln" >About</span>
            <input class="inputu" type="text" name="about" /><br/>
            <input class="inbt"  type="submit" value="Update" /><br/>
         
        </form><form id="f3" class="f1" method="post" action="updform2.php" style="color:#fff;">
            <h1 style="text-align:center;color:#000;">Estimation</h1>
            <span id="cln" >1.</span>
            <input class="inputu" type="text" name="name1" /><br/>
            <span id="cln" >Cost</span>
            <input class="inputu" type="text" name="name11" /><br/>
            <span id="cln">2.</span>
            <input class="inputu" type="text" name="name2" /><br/>
            <span id="cln" >Cost</span>
            <input class="inputu" type="text" name="name12" /><br/>
            <span id="cln">3.</span>
            <input class="inputu" type="text" name="name3" /><br/>
            <span id="cln" >Cost</span>
            <input class="inputu" type="text" name="name13" /><br/>
            <input class="inbt"  type="submit" value="Update" /><br/>
         
        </form><form id="f4" class="f1" method="post" action="updform2.php" style="color:#fff;">
            <h1 style="text-align:center;color:#000;">Partner</h1>
            <span id="cln" >Transport</span>
            <input class="inputu" type="text" name="transport" /><br/>
            <span id="cln">Contructor</span>
            <input class="inputu" type="text" name="cont" /><br/>
            <span id="cln">Designer</span>
            <input class="inputu" type="text" name="dis" /><br/>
            <input class="inbt"  type="submit" value="Update" /><br/>
         
        </form>
         
      </div>
    </div>
  </body>
</html>
