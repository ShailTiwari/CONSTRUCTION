<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1, maximum-scale=1, width=device-width" name="viewport">
    <title> GSTI | Progress Bar</title>
		<link rel="icon" type="image/gif" href="R.gif" >
    <link href="css/application.css?1325743336" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/ui-progress-bar.css?1325742643" media="screen" rel="stylesheet" type="text/css" />
    <script src="js/application.js" type="text/javascript"></script>
    
  </head>
  <body class="index">
    <div id="container">
      <header>
        <h1 style="text-align:center;font:size:32px;">
           CONSTRUCTION SYSTEM  
      
        </h1>
      </header>
      <div id="stage">
        <section class="work">
          <div class="ui-progress-bar ui-container" id="progress_bar">
            <div class="ui-progress" style="width: 7%;">
              <span class="ui-label" style="display:none;">
                Sending......
                <b class="value">7%</b>
              </span>
            </div>
          </div>
        </section>
        <section class="intro" style="display: none;">
          
         <h1>Thank You for submitting your Information.</h1>
        </section>
        <section class="compatibility" style="display: none;">
         <h1> Congratulation !!!  Submition Was Successful</h1>
	  <section class="wild" style="display: none;">
          <h2>Now You will Be Redirected To Next Step SOON...
          </h2>
        </section>
       </section>
      </div>
      <script>
        //<![CDATA[
          $(function() {
            App.init();  
          });
        //]]>
      </script>
      
    </div>
  </body>
</html>
<?php
header("Refresh:13;url=7.php");
?>
