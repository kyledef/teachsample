<?php
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */
require_once dirname(__FILE__) .'./config.php';

/**
 * This function will demonstrate the ability to connect to the MYSQL database
 * Using an object based strategy
 * @return mysqli connect if successful and array with error message
 */
function connect_to_db_obj()
{
    global $CFG; //We include the global config object into the function
    $conn =  new mysqli($CFG->dbhost, $CFG->username, $CFG->password, $CFG->database);
    if ($conn->connect_errno)    
    	return array("error"=>$conn->connect_error);
    return $conn;
}


/**
 * This function will demonstrate the ability to connect to the MYSQL database
 * Using a procedural based strategy
 * @return mysqli connect if successful and array with error message
 */
function connect_to_db_proc()
{
	global $CFG; //We include the global config object into the function
	$conn = mysqli_connect($CFG->dbhost, $CFG->username, $CFG->password, $CFG->database);
	if (mysqli_connect_errno($conn)) 
		return array("error"=>mysqli_connect_error());
    return $conn;
}

// var_dump(connect_to_db_obj());
//var_dump(connect_to_db_proc());

