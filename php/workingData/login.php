<?php 
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */

	include "./pg_parts/head.php";
	include "./pg_parts/header.php"; 
?>
<div class="container">
	<form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Login</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
      </div>
    </div>
 
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Login</button>
      </div>
    </div>
  </fieldset>
</form>
</div> <!-- /container -->
<?php include "./pg_parts/footer.php"; ?>
