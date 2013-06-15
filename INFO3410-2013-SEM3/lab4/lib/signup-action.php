<?php

if (isset($_POST['username']) && $_POST['username'] != ""
		&& isset($_POST['password']) && $_POST['password'] != ""
			&& isset($_POST['email']) && $_POST['email'] != "")
			{
			
				if (isset($_POST['country'])){
					$country = $_POST['country'];
				}else $country = null;
				
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				
			
				create_user($_POST['username'], $_POST['password'], $_POST['email'], $country, $firstname, $lastname);
			
			}else
			{
				echo "all fields must be entered";
				
			}
	
	
	function create_user($username, $password, $email, $country, $firstname, $lastname)
	{
		$encrypt_pass = sha1($password);
		
		$sql = "INSERT INTO  `dev_user`.`users` (`id` ,`username` ,`password` ,`email` ,`country`, `firstname`, `lastname`)";
		$sql .= "VALUES (NULL ,  '$username',  '$encrypt_pass',  '$email',  '$country', '$firstname','$lastname')";
	
		echo $sql;
		
		$link = mysqli_connect("localhost","dev_user","d3vUser","dev_user");
		if (mysqli_connect_errno()){			
			echo "unable to create user";
			return false;
		}
		
		if (mysqli_query($link, $sql) == true)
		{
			echo "successfully created user";
			return true;
		}
		else
		{
			echo "unable to create user";
			return false;
		}
		
	}
	
