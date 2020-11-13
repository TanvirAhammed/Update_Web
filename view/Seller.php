<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<body>
<center>
<h2>Seller</h2>
</center>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>

<br/><h5>Welcome to Seller.</h5>






<br/>
 <h5>Do you want to <a href="control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   


