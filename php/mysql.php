<?php
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */
require_once dirname(__FILE__) .'/config.php';

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
// var_dump(connect_to_db_obj());


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
//var_dump(connect_to_db_proc());


/**
 * 
 * @param $conn The connection for the MYSQL database. It will either be a mysqli object or an error (if an error in connection has occurred)
 * @param $type The type of basis to use. By default we will use a procedural 
 */

function create_table_example($conn, $type = "proc")
{
	//To create a table programmatically, we need to generate the SQL code that will generate the table
	//The SQL Code is covered in Enterprise Database System. SQL can be revised at: http://www.w3schools.com/sql/
	$create_table = 'CREATE TABLE IF NOT EXISTS user(
						id INT NOT NULL AUTO_INCREMENT,
						name VARCHAR(200) NOT NULL,
						age INT NOT NULL,
						PRIMARY KEY(id)
					)';
	//We using the mysqli query function to run the SQL code created.
	//The mysqli_query function will return true if table was created successfully
	$created = mysqli_query($conn, $create_table);
	//echo $created;
	if ($created)echo "Table created successfully";	
	else echo "error occurred when created table";
}

function insert_into_table($conn)
{
	//
}
