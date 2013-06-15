<?php 
$pagename = "login";
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
				<legend>Sign in to WebApp</legend>
				<form method="POST" action="lib/login-action.php" accept-charset="UTF-8">					     
					<input class="span3" placeholder="Username" type="text" name="username">
					<input class="span3" placeholder="Password" type="password" name="password"> 
					<label class="checkbox">
						<input type="checkbox" name="remember" value="1"> Remember Me
					</label>
					<button class="btn-info btn" type="submit">Login</button>      
				</form>    
			  </div>
			</div>
		</div>
</div>
<?php include "./pg_parts/footer.php"; ?>
