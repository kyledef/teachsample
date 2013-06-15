<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div id="nav_sec">
			<div id="username"  class="pull-right">
				<?php if (isset($_SESSION) && isset($_SESSION['username'])) echo "Welcome:". $_SESSION['username'];  ?>
			</div>
			
			<ul class="nav nav-tabs">
			  <li <?php if (!isset($pagename) || $pagename == "home")echo "class='active'";?> >
				<a href="index.php">Home</a>
			  </li>
			  <?php if (isset($_SESSION) && isset($_SESSION['username'])){ ?>
				<li <?php if (isset($pagename) && $pagename == "grades")echo "class='active'";?> >
					<a href="grades.php">Grades</a>					
				</li>
				<li <?php if (isset($pagename) && $pagename == "logout")echo "class='active'";?> >
					<a href="logout.php">Logout</a>
				</li>
			  <?php }else { ?>
				<li <?php if (isset($pagename) && $pagename == "login")echo "class='active'";?> >
					<a href="login.php">Login</a>
				</li>
				<li <?php if (isset($pagename) && $pagename == "signup")echo "class='active'";?> >
					<a href="signup.php">Sign Up</a>
				</li>
			  <?php } ?>
			</ul>
			
		</div><!-- End #nav_sec-->
        </div>
		<div class="container">
