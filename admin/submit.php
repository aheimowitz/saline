<?php

require("common.php"); 
     
    if(empty($_SESSION['user'])) 
    { 
        header("Location: login.php"); 
         
        die("Redirecting to login.php"); 
    } 

$id = 0;
$position = "";
$message = "";
foreach ($_POST as $k=>$v) { 
    $parts = explode("_",$k);
    if($parts[0]=="message"){
    	$message = str_replace("<img alt=\"\" src=\"/admin/ckeditor/kcfinder/upload/images/", "<img alt=\"\" src=\"http://saline.binghamtonsa.org/admin/ckeditor/kcfinder/upload/images/", $v);
	    $query = "UPDATE updates SET position='$position', message='$message' WHERE id=$id"; 
	    try 
	    { 
	        $stmt = $db->prepare($query); 
	        $result = $stmt->execute(); 
	    } 
	    catch(PDOException $ex) 
	    { 
	        die("Failed to run query: " . $ex->getMessage()); 
	    } 
	}elseif($parts[0]=="id"){
		$id = $v;
	}elseif($parts[0]=="position"){
		$position = $v;
	}else{
		echo "We encountered an error, try again, if the error continues to occur, contact the webmaster";
	}
}  
echo "<meta HTTP-EQUIV='REFRESH' content='1; url=private.php'> All changes to $position were saved successfully, redirecting you back!";