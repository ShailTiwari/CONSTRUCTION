<?php

session_start();

    $link = mysql_connect('localhost', 'root', '') or die(mysql_error());
    mysql_select_db ('csys');

    $username = $_POST['email'];
    $userpassword = $_POST['password']; 
    
    $username = mysql_real_escape_string($_POST['email']);
    $userpassword = mysql_real_escape_string($_POST['password']);

    $query = "SELECT * FROM signup WHERE display_name = '$username' AND password = '$userpassword'";
    $result = mysql_query($query) or die ("Unable to verify user because " . mysql_error());
    
    $count = mysql_num_rows($result);
    
    if ($count == 1)
    {
        $_SESSION['loggedIn'] = "true";
        $_SESSION['user']= $username;
        header("Location: 12.php");
    }
    else
    {
        $_SESSION['loggedIn'] = "false";
        echo "<div style='background:red; color:#fff; text-align:center;'><span style='font-size:45px; text-align:center; font-family:Century Gothic'>Login failed, username : <i><u><a href='#' style='color: #fff;'> $username</a></u></i> or password incorrect.<br/><a href='6.php' style='color: #fff;'>Login Again</a></span>

        </div>";
    }
?>
