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

        <div class="container">

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
                    <p><a class="btn" href="about.php">More &raquo;</a></p>
               </div>
                <div class="span4">
                    <h2>Section 3 - Contact</h2>
                    <p>This is a contact page. The contact page will give information about </p>
                    <p><a class="btn" href="contact.php">More &raquo;</a></p>
                </div>
            </div>   
            <hr>
            <div class="row">
				<div class="span6">
					<p class="text-center">The span6 splits the page in a half</p>
				</div>
				<div class="span6">
					<p class="text-center">These two sections should be the same size</p>
				</div>
            </div>        

        </div> <!-- /container -->
<?php include "./pg_parts/footer.php"; ?>
