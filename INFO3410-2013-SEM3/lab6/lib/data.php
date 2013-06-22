<?php
require_once "lib.php";

function getDBConnection(){
	global $CFG;
	$link = mysqli_connect($CFG->dbhost, $CFG->username, $CFG->password, $CFG->database);
	return $link;
}


function getCrimeData($param = null)
{
	$link = getDBConnection();
	if ($link){
		$sql = "SELECT * FROM  `crime` ";
		$r_arr = array();
		if($result = mysqli_query($link, $sql)){
			while ($row = mysqli_fetch_assoc($result)){
				array_push($r_arr,$row);
			}
		}
		return $r_arr;
	}
	else{
		return array("error"=>"Unable to connected to database");
	}
}

function display_data()
{
	$data = getCrimeData();
	echo json_encode($data);
}

display_data();