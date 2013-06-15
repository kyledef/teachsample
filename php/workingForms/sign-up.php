<?php 
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */

	include "./pg_parts/head.php";
	include "./pg_parts/header.php"; 
?>
<div class="container">
	<form class="form-horizontal" method="POST" action="sign-up-action.php">
		<fieldset>

			<!-- Form Name -->
			<legend>Sign Up</legend>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="username">User Name</label>
			  <div class="controls">
				<input id="username" name="username" type="text" placeholder="User Name" class="input-xlarge">
				
			  </div>
			</div>

			<!-- Password input-->
			<div class="control-group">
			  <label class="control-label" for="password">Password</label>
			  <div class="controls">
				<input id="password" name="password" type="password" placeholder="Password" class="input-xlarge">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="email">Email</label>
			  <div class="controls">
				<input id="email" name="email" type="text" placeholder="Email Address" class="input-xlarge">
				
			  </div>
			</div>

			<!-- Select Basic -->
			<div class="control-group">
			  <label class="control-label" for="country">Country</label>
			  <div class="controls">
				<select id="country" name="country" class="input-xlarge">
				  <option>Select Country</option>
				</select>
			  </div>
			</div>
			
			<!-- Button (Double) -->
			<div class="control-group">
			  <label class="control-label" for="saveBtn"></label>
			  <div class="controls">
				<button id="saveBtn" name="saveBtn" class="btn btn-primary">Save</button>
				<button id="cancelBtn" name="cancelBtn" class="btn btn-default">Cancel</button>
			  </div>
			</div>


		</fieldset>
	</form>

</div>
<?php include "./pg_parts/footer.php"; ?>
