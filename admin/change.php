<?php
require("common.php"); 
     
    if(empty($_SESSION['user'])) 
    { 
        header("Location: login.php"); 
         
        die("Redirecting to login.php"); 
    } 
    if(!empty($_POST)) 
    { 
        if($_POST['newpassword'] != $_POST['newpassword2']){
            echo "<span style='color:red'>The two passwords did not match please try again!</span><br>"; 
        }elseif(strlen($_POST['newpassword'])<8){
            echo "<span style='color:red'>Sorry but for security reasons the password must be at least 8 characters long</span><br>"; 
        }else{
            $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
            $password = hash('sha256', $_POST['newpassword'] . $salt); 

            for($round = 0; $round < 65536; $round++) 
            { 
                $password = hash('sha256', $password . $salt); 
            } 
            $username = htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8');
            $query = "UPDATE users SET password='$password', salt='$salt' WHERE username='$username'"; 
            try 
            { 
                $stmt = $db->prepare($query); 
                $result = $stmt->execute(); 
                echo "<span style='color:red'>Password changed successfully for security reasons you will be required to log back in<br></span>";
                session_destroy();
                echo "<meta HTTP-EQUIV='REFRESH' content='3; url=login.php'>Now redirecting to the login page, if you are not redirected<a href=\"login.php\">click here</a>";
                die(); 
            } 
            catch(PDOException $ex) 
            {  
                die("Failed to run query: " . $ex->getMessage()); 
            } 
        }
    }
?>
<form action="change.php" method="post"> 
    New Password:<br /> 
    <input type="password" name="newpassword" value="" /> 
    <br /><br /> 
    Confirm New Password:<br /> 
    <input type="password" name="newpassword2" value="" /> 
    <br /><br /> 
    <input type="submit" value="Submit" /> 
</form> 