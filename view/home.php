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
<h2>Home</h2>
</center>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>

<br/><h5>Welcome to Home page .</h5>

<div class="sidenav">
  <a href="home.php">Admin</a><br>
  <a href="Buyer">Buyer</a><br>
  <a href="Seller">Seller</a><br>
  
</div>


<h5>Do you want to go to <a href="Buyer.php">nextpage</a></h5>

<br/>
 <h5>Do you want to <a href="control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>   


