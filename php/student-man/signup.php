<?php 
$pagename = "signup";
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */

	include "./pg_parts/head.php";
	include "./pg_parts/header.php"; 
?>
<div class="container">   
	<div class="row">
		<div class="span4 offset4">
			<div class="well">
				<h2>Sign Up</h2>
				<form method="POST" action="lib/signup-action.php">
				<label>First Name</label>
				<input type="text" name="firstname" class="span3">
				<label>Last Name</label>
				<input type="text" name="lastname" class="span3">
				<label>Email Address</label>
				<input type="email" name="email" class="span3">
				<label>Username</label>
				<input type="text" name="username" class="span3">
				<label>Password</label>
				<input type="password" name="password" class="span3">
				<label><input type="checkbox" name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
				<input type="submit" value="Sign up" class="btn btn-primary pull-right">
				<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include "./pg_parts/footer.php"; ?>
