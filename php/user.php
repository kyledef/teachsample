<?php
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 */

require_once dirname(__FILE__) .'./mysql.php';

/**
 * @param An Associative array {The array will contain the key=>value where the key relates to the column name of user table}
 * We use an array as the input as it allows us to increase the number of parameters of function 
 */

function insert_user($param)
{
	if (!isset($param['username'])) return array("error"=>"Must specify username");
	if (!isset($param['password'])) return array('error' =>"Must specify password");
	$user_level = (!isset($param['user_level'])) ? 3 : $param['user_level']; // Variation of the if statement {http://www.lizjamieson.co.uk/9/short-if-statement-in-php/}

	$key = '!secret_random_key!'; // Secret key should be unique for each application used
	$salt = substr(hash('sha512',uniqid(rand(), true).$key.microtime()), 0, 15); // Generates random secret salt for each user
	$password = hash('sha512',$salt . $param['password']);
	$sql = "INSERT INTO `dev_user`.`user` (`id` ,`username` ,`password` ,`salt` ,`user_level`)VALUES (NULL ,'". $param['username'] ."', '$password', '$salt', $user_level)";
	//echo $sql; // We echo the SQL statement to ensure the result makes sesne
	$mysql_obj = connect_to_db_obj(); // Connect to database
	if (is_array($mysql_obj))return $mysql_obj; // if array then an error occurred. return the error message

	if ($mysql_obj->query($sql)) // If successfully
		return  $mysql_obj->insert_id; // return the id number of the newly inserted row
	
	return array("error"=>$mysql_obj->error); // Failed to insert therefore return the error
}

function check_user_pass($username, $password)
{
	if ($username != null || $password != null)
	{
		$mysql_obj = connect_to_db_obj(); // Connect to database
		if (is_array($mysql_obj))return $mysql_obj; // if array then an error occurred. return the error message
		
		$sql = "SELECT * FROM `user` WHERE `username` = '$username'";
		// echo $sql; // We echo the SQL statement to ensure the result makes sesne
		$result = $mysql_obj->query($sql);
		if ($result)
		{
			$user = $result->fetch_object();
			$p = hash('sha512',$user->salt . $password);
			if ($user->password == $p) return $user;
		}
	}
	return array("error"=>"incorrect username and/or password");
}


function get_user($username)
{
	if ($username != null)
	{
		$sql = "SELECT * FROM `user` WHERE `username` = '$username'";
		$mysql_obj = connect_to_db_obj(); // Connect to database
		if (is_array($mysql_obj))return $mysql_obj; // if array then an error occurred. return the error message
		$result = $mysql_obj->query($sql);
		if ($result)
			return $result->fetch_object();
		return array("error"=>"Could not find user");
	}
}

function create_session($user)
{
	if ($user != null)
	{
		if (!check_loaded_session())session_start();
		$_SESSION['username'] = $user->username;
		$_SESSION['user_level'] = $user->user_level;		
		return TRUE;
	}
	return FALSE;
}


function check_loaded_session()
{
    if (session_id() != '' && isset($_SESSION))return TRUE;
    return FALSE;
}
// var_dump(insert_user(array("username"=>"admin", "password"=>"adminadmin", "user_level"=>0)));
//var_dump(check_user_pass("admin", "adminadmin"));