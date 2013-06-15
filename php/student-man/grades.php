<?php 
$pagename = "grades";
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */

	include "./pg_parts/head.php";
	include "./pg_parts/header.php"; 
?>
<?php if (isset($_SESSION) && isset($_SESSION['username'])){ ?>
<table class="table">
	<thead>
		<tr>
			<th>Student ID</th>
			<th>Course Code</th>
			<th>Year</th>
			<th>Course Work</th>
			<th>Final Exam</th>
			<th>Controls</th>
		</tr>
	</thead>
	<tbody>
	<?php
		foreach(getGrades() as $key => $rec){
			echo "<tr>";
			echo "<td>".$rec['studentid']."</td>";
			echo "<td>".$rec['coursecode']."</td>";
			echo "<td>".$rec['year']."</td>";
			echo "<td>".$rec['coursework']."</td>";
			echo "<td>".$rec['finalexam']."</td>";
			echo "<td><button class='btn'>Edit</button><button class='btn'>Delete</button></td>";
			echo "</tr>";
		}	
	?>
	</tbody>
</table>

<?php }else { ?>
	Must Login First <a href="login.php">Login</a>
<?php } ?>	

<?php include "./pg_parts/footer.php"; ?>

<?php
	function getGrades(){
		$sql = "SELECT * FROM grade";
		$link = mysqli_connect("localhost", "dev_user", "d3vUser", "dev_user");
		if (mysqli_connect_errno())return false;
		$r_arr = array();
		if($result = mysqli_query($link, $sql)){
			while ($row = mysqli_fetch_assoc($result)){
				array_push($r_arr,$row);
			}
		}
		return $r_arr;
	}
?>
