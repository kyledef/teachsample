<?php
if (!session_id()){//Session not stated
	session_start();
}
	
	//Only perform functionality if POST Request is made
	if (isset($_POST)){
		
		if (isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if (authenticate($username, $password)){
				$_SESSION['username'] = $username;
				header("location: ../index.php");
				exit();
			}			
		}
	}
	
	function authenticate($username, $password)
	{
		//echo "in authenticate $username and $password passed";
		$sql = "SELECT username, password FROM users where username='$username'";
		$hashpasswd = sha1($password);
		
		//Validate Against Database
		$link = mysqli_connect("localhost", "dev_user", "d3vUser", "dev_user");
		
		/* check connection */
		if (mysqli_connect_errno()) {
			echo "Connect failed to database";
			return false;
		}
		
		if ($result = mysqli_query($link, $sql)) {			
			$row = mysqli_fetch_assoc($result);
			if ($row['password'] == $hashpasswd)return true;
		}
		return false;
		
		mysqli_free_result($result);
		mysqli_close($link);
		
	}
