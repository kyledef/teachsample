<?php
	echo "Inside PHP<br />"; //Only works in browsers !! This is a comment by the way
	print "With a Print Statement <br />";
	
	$v = "Hello World (v3)";
	echo $v . "<br />"; // the . is the concatenator operator (similar to the + in Java) 
	echo gettype($v). "<br />";
	$v = 0;
	echo $v . "<br />";
	echo gettype($v). "<br />";
	
	//$arr = array();//Created an empty array
	//$arr = array(1,2,3,4,5,6,7,8);
	$arr = array(1,2,3,4,5,6,7,8,'a','b','c','d',true);
	echo count($arr). "<br />";
	echo $arr[7]. "<br />";
	echo $arr[count($arr)-1]. "<br />";
	echo gettype($arr[count($arr)-1]). "<br />";
	
	$asso_arr = array("key"=>"value", "number"=>0);
	echo count($asso_arr). "<br />";
	//echo $asso_arr[0];
	echo $asso_arr['key']. "<br />";
	$asso_arr['kyle'] = array("fullname"=>"kyledef");
	echo $asso_arr['kyle']['fullname']. "<br />";
	echo count($asso_arr). "<br />";
	
	//print_r($asso_arr);
	//var_dump($asso_arr);
	
	$arr[] = 'dynamic';
	echo $arr[count($arr)-1]. "<br />";
	
	//Traversing Indexed Arrays
	for($i = 0; $i < count($arr); $i++){
		echo $arr[$i]. "<br />";
	}
	//Traversing Associative Arrays
	foreach($asso_arr as $key => $value){
		if(is_array($value)){
			echo "Key: " . $key."=>";
			foreach($value as $k => $va){
				echo "Key: " . $k . " Value: ".$va. "<br />";
			}
		}
		else{
			echo "Key: " . $key . " Value: ".$value. "<br />";
		}
	}
	
	//$asso_arr['kyle'] = array("fullname"=>"kyledef");
	
	
	
	
	
	
	
	
?>
