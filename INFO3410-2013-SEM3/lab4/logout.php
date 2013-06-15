<?php 
$pagename = "logout";
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */

	include "./pg_parts/head.php";
	include "./pg_parts/header.php"; 
	
	//Removes all data stored about session
	session_destroy();
?>

<div class="alert alert-block text-center">
  <h4>Log out Successfull</h4>    
    <a href="index.php" >Continue</a>  
  <p>Thank you for using our Application</p>
</div>

<?php include "./pg_parts/footer.php"; ?>
