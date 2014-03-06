<?php 

    require("common.php"); 
     
    if(empty($_SESSION['user'])) 
    { 
        header("Location: login.php"); 
         
        die("Redirecting to login.php"); 
    } 
     
?> 
<script src="ckeditor/ckeditor.js"></script>
Hello <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?>, Welcome to the SA-Line administrator panel!<br />
<input type="button" onclick="jumpto()" value="Change Password" />
<script language="javascript" type="text/javascript" >
function jumpto(){
    var confirmLeave = confirm('You are about to be redirected to a secure page to change your account password, please make sure you have saved any changes as any unsaved changes will be lost!');
    if (confirmLeave==true)
    {
        document.location.href = "change.php"
    }
    else
    {
        return false;
    }
}
</script>

<?php
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 

        $password = hash('sha256', $_POST['password'] . $salt); 

        for($round = 0; $round < 65536; $round++) 
        { 
            $password = hash('sha256', $password . $salt); 
        } 
?>
<input type=button onClick="location.href='logout.php'" value='Logout'>
<?php
$query = "SELECT COUNT(*) AS count FROM updates"; 
try 
{ 
    // Execute the query against the database 
    $stmt = $db->prepare($query); 
    $result = $stmt->execute(); 
} 
catch(PDOException $ex) 
{  
    die("Failed to run query: " . $ex->getMessage()); 
} 
$row = $stmt->fetch(); 
$count = $row['count'];
for($i=1;$i<=$count;$i++){
    $query = "SELECT id, position, message FROM updates WHERE id=$i"; 
    try 
    { 
        // Execute the query against the database 
        $stmt = $db->prepare($query); 
        $result = $stmt->execute(); 
    } 
    catch(PDOException $ex) 
    {  
        die("Failed to run query: " . $ex->getMessage()); 
    } 
    $row = $stmt->fetch(); 
    $position = $row['position'];
    $message = $row['message'];
    $id = $row['id'];
    echo "
        <br>
            <form action='submit.php' method='post'>
            <input type='hidden' name='id_$position' value='$id' /><br>
            Position: <input type='text' name='position_$position' id='position_$position' size='100' value='$position'><br>
            <textarea name='message_$position' id='message_$position'>$message</textarea>
            <script>CKEDITOR.replace( 'message_$position' );
                </script>
            <input value='Save $position' tabindex='4'   type='submit' />
            </form>
        ";
}

?>