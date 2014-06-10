<?php

error_reporting(E_ALL);

function get_connection()
{
	$mysqli = NULL;
	try{
		$mysqli = mysqli("localhost", "medb","ZMEFw8mFvUvAKNj", "medb");
	}catch (Exception $e){ }
	
	return $mysqli;
}

function save_organization($name, $address, $type, $country, $description)
{

	$mysqli = get_connection();
	if (!is_null($mysqli))
	{
		if ($stmt = $mysqli->prepare("INSERT INTO organizations ('name', 'address','type', 'country', 'description') values ('?','?','?','?','?')"));
		{
			$stmt->bind_param("ssssb",$name, $address, $type, $country, $description);
			$stmt->execute();
			$result = NULL;
			$stmt->bind_result($result);
			$stmt->fetch();
			$stmt->close();

			var_dump($result);
			echo "inserted";
		}
	}
}


function get_organization($query)
{
	
	$results = array();

	$mysqli = get_connection();
	if (!is_null($mysqli))
	{
		$stmt = $mysqli->prepare("selet * from organizations limit=? offset=?");
		if ($stmt)
		{
			$stmt->bind("ii", 10,10);
			$stmt->execute();
			$res = $stmt->get_result();
			while($row = $res->fetch_array(MYSQLI_ASSOC)) 
			{
  				array_push($results, $row);
			}
		}
	}
	return $results;
}


//if the form is submitted then perform POST operations
if (isset($_POST['name']) 
	&& isset($_POST['address']) 
		&& isset($_POST['orgType'])
			isset($_POST['country'])
				isset($_POST['description'])){

	save_organization($_POST['name'], $_POST['address'], $_POST['orgType'], $_POST['country'],$_POST['description'] );
	

}else{
	//else perform the GET operations
	echo json_encode(get_organization());
}

