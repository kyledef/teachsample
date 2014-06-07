<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div id="nav_sec">            
            
            <ul class="nav nav-tabs">
              <li <?php if (isset($pagename) && $pagename == "home")echo "class='active'";?> >
                    <a href="index.php">Home</a>                 
                </li>
                 <li <?php if (isset($pagename) && $pagename == "graphs")echo "class='active'";?> >
                    <a href="graphs.php">Graphs</a>                 
                </li>
                <li <?php if (isset($pagename) && $pagename == "tables")echo "class='active'";?> >
                    <a href="tables.php">Tables</a>                 
                </li>
            </ul>
            
        </div><!-- End #nav_sec-->
        </div>
        <div class="container">