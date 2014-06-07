<?PHP
if (isset($_POST)){
	if (isset($_POST['studentid']) && $_POST['studentid'] != "" &&
			isset($_POST['coursecode']) && $_POST['coursecode'] != "" &&
				isset($_POST['year']) && $_POST['year'] != "" &&
					isset($_POST['coursework']) && $_POST['coursework'] != "" &&
						isset($_POST['finalexam']) && $_POST['finalexam'] != ""){
								
								$studentid = $_POST['studentid'];
								$courscode = $_POST['coursecode'];
								$year = $_POST['year'];
								$coursework = $_POST['coursework'];
								$finalexam = $_POST['finalexam'];
								
								if (save_grade($studentid, $courscode, $year, $coursework, $finalexam)){
									header("location: ../grades.php");
									exit();
								}
								echo "Unable to create User";
						}
}

function save_grade($studentid, $courscode, $year, $coursework, $finalexam){
	
	$sql = "INSERT INTO  `dev_user`.`grade` (`id` ,`coursecode` ,`year` ,`coursework` ,`finalexam` ,`studentid`)VALUES";
	$sql .="(NULL ,  '$courscode',  '$year',  '$coursework',  '$finalexam',  '$studentid')";

	$link = mysqli_connect("localhost","dev_user","d3vUser","dev_user");
	if (mysqli_connect_errno())return false;
	
	return mysqli_query($link, $sql);
}

