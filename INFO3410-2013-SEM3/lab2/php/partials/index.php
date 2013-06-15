<?php 
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 * 
 * This set of Files demonstrate the beginning for build templates
 * 
 * Basically we are using the included PHP function to include pieces of the html code that will be used and repeated multiple times
 * in a given website.
 * This allows us to change the structure of the website independent of the internal content that be utilized in various files that relate
 * to their corresponding web page.
 * 
 * Importantly this concept is an introduction to templating. This concept should not necessarily be used in full scale development 
 * environments, however is useful to introduce the concept of the DRY (Don't repeat yourself) Principle
 */

	include "./pg_parts/head.php";
	include "./pg_parts/header.php"; 
?>

        <div id="content" class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h2>INFO3410 2013</h2>
                <p>The Summer offering of the Course</p>
            </div>
			
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Section 1 - Products</h2>
                    <p>The products will give a listing of all products and services available and offered</p>
                    <p><a class="btn" href="#">Products &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Section 2 - About</h2>
                    <p>The about page will give more information about the site</p>
                    <p><a class="btn btn-primary" href="about.php">More &raquo;</a></p>
               </div>
                <div class="span4">
                    <h2>Section 3 - Contact</h2>
                    <p>This is a contact page. The contact page will give information about </p>
                    <p><a class="btn" href="contact.php">More &raquo;</a></p>
                </div>
            </div>   
            <hr>
            <div class="row">
				<table class="span6 table table-striped">
					<thead>
						<th>
							Name
						</th>
						<th>School</th><th>Purpose</th>
					</thead>
					<tbody>
						<tr>
							<td>John</td><td>UWI</td><td>To Pass</td>
						</tr>
						<tr>
							<td>Michel</td><td>UWI</td><td>To Be Great</td>
						</tr>
						<tr>
							<td>Monet</td><td>UWI</td><td>To Pass</td>
						</tr>
						<tr>
							<td>Junio</td><td>UWI</td><td>To Be Great</td>
						</tr>

					</tbody>
				</table>
            </div>
            <div class="row">
				
				<form class="form-horizontal">
					
				  <div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
					  <input type="text" id="inputEmail" placeholder="Email">
					</div>
				  </div>
				  
				  <div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
					  <input type="password" id="inputPassword" placeholder="Password">
					</div>
				  </div>
				  
				  <div class="control-group">
					<div class="controls">
					  <label class="checkbox">
						<input type="checkbox"> Remember me
					  </label>
					  <button type="submit" class="btn">Sign in</button>
					</div>
				  </div>
				</form>
            </div>
            
            <div class="row">
				<form class="form-horizontal">
					<fieldset>

					<!-- Form Name -->
					<legend>Form Name</legend>

					<!-- Text input-->
					<div class="control-group">
					  <label class="control-label" for="username">User Name</label>
					  <div class="controls">
						<input id="username" name="username" type="text" placeholder="Username" class="input-large" required="">
						<p class="help-block">Place name to uniquely identify user</p>
					  </div>
					</div>

					<!-- Password input-->
					<div class="control-group">
					  <label class="control-label" for="password">Password</label>
					  <div class="controls">
						<input id="password" name="password" type="password" placeholder="Password" class="input-large">
						<p class="help-block">Enter 8 - 10 character password</p>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="control-group">
					  <label class="control-label" for="userType">User Type</label>
					  <div class="controls">
						<select id="userType" name="userType" class="input-large">
						  <option>Choose Type</option>
						  <option>Student</option>
						  <option>Teacher</option>
						  <option>Administrator</option>
						  <option>Parent</option>
						</select>
					  </div>
					</div>

					<!-- Button -->
					<div class="control-group">
					  <label class="control-label" for="submit"></label>
					  <div class="controls">
						<button id="submit" name="submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>

					</fieldset>
					</form>

            </div>
              

        </div> <!-- /container -->
<?php include "./pg_parts/footer.php"; ?>
