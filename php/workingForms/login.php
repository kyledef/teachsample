<?php 
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */

	include "./pg_parts/head.php";
	include "./pg_parts/header.php"; 
?>
<div class="container">
	
	<form class="form-horizontal" method="POST" action="login-action.php">
		<fieldset>

			<!-- Form Name -->
			<legend>Form Name</legend>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="username">User Name</label>
			  <div class="controls">
				<input id="username" name="username" type="text" placeholder="User Name" class="input-xlarge" required="">
				
			  </div>
			</div>

			<!-- Password input-->
			<div class="control-group">
			  <label class="control-label" for="password">Password</label>
			  <div class="controls">
				<input id="password" name="password" type="password" placeholder="Password" class="input-xlarge">
				
			  </div>
			</div>

			<!-- Button -->
			<div class="control-group">
			  <label class="control-label" for="loginSubmit"></label>
			  <div class="controls">
				<button id="loginSubmit" name="loginSubmit" class="btn btn-primary">Login</button>
			  </div>
			</div>

		</fieldset>
	</form>

	
</div>
<?php include "./pg_parts/footer.php"; ?>
