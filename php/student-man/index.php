<?php 
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
			<?php if (isset($_SESSION) && isset($_SESSION['username'])){ ?>
			<!-- HTML Code displayed if User Logged In -->
				<div class="row">
					<a href="#myModal" role="button" class="btn" data-toggle="modal">Add Grade</a>
				</div>
				

			<?php }else { ?>
			<!-- HTML Code displayed if User Not Logged In -->


			<?php } ?>	
		</div>
	</div>
	
</div>

<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">Add New Grade </h3>
	</div>
	<form class=""method="POST" action="lib/save_grade.php">	
		<div class="modal-body">			
			<fieldset>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="studentid">Student ID</label>
			  <div class="controls">
				<input id="studentid" name="studentid" type="text" placeholder="Student ID" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="coursecode">Course Code</label>
			  <div class="controls">
				<input id="coursecode" name="coursecode" type="text" placeholder="Course Code" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="year">Year</label>
			  <div class="controls">
				<input id="year" name="year" type="text" placeholder="Year" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="coursework">Course Work Mark</label>
			  <div class="controls">
				<input id="coursework" name="coursework" type="text" placeholder="Coursework" class="input-large">
				
			  </div>
			</div>

			<!-- Text input-->
			<div class="control-group">
			  <label class="control-label" for="finalexam">Final Exam Mark</label>
			  <div class="controls">
				<input id="finalexam" name="finalexam" type="text" placeholder="Final Exam" class="input-large">
				
			  </div>
			</div>

			</fieldset>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<input type="submit" class="btn btn-primary" value="Save changes" />
		</div>
	</form>
</div>

<?php include "./pg_parts/footer.php"; ?>
