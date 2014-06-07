<?php
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */
require_once dirname(__FILE__) .'./mysql.php';

function add_score_simple($user, $score)
{
	$sql = "INSERT INTO `dev_user`.`scores` (`userid`,`score`) VALUES (";
	if (is_object($user))$sql .= $user->id;
	if (is_numeric($user))$sql .= $user;
		
	$sql .= ", $score)";	
	$mysql_obj = connect_to_db_obj(); // Connect to database
	if (is_array($mysql_obj))return $mysql_obj; // if array then an error occurred. return the error message
	if ($mysql_obj->query($sql)) // If successfully
		return  $mysql_obj->insert_id; 
	return array("error"=>$mysql_obj->error); // Failed to insert therefore return the error
}

var_dump(add_score_simple(5,6));