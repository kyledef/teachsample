<?php

function generateEven($n){
	$arr = array();
	for ($i=2; $i <=$n; $i+=2) { 
		array_push($arr, $i);
	}
	return $arr;
}

function getSize($arr)
{
	//Calculate the range of numbers between the 0 and length of array
	$num_index = range(0, count($arr));
	print("Number of elements are: ".count($arr));


	//if the numerical indexes of the array and the range generated equal then index array
	if ($num_index == array_keys($arr))
	{
		for ($i=0; $i < count($arr); $i++){
			print($arr[$i]);
		}
	}
	else
	{
		foreach ($arr as $key => $value) {
			print("$value is stored at the index $key");
		}
	}
}

function addTo($arr, $el, $pos){

	if (strcasecmp($pos, "front"))
	{
		array_unshift($arr, $el);
	}
	elseif (strcasecmp($pos, "back"))
	{
		array_push($arr, $el);
	}
}

function enqueue($arr, $val){
	array_push($arr, $val);
}
function dequeue($arr){
	return array_shift($arr);
}
function addToObj($obj, $index, $val)
{
	$obj->$index = $val;
}


generateEven(10);
getSize(array(432,234,1231,2312,45));
getSize(array("val"=>"main"));

$testObj = new stdClass();
$testObj->name ="test object";
$testObj->purpose = "help to understand objects";
print("Before Function \n");
var_dump($testObj);
addToObj($testObj, "after","inserted");
var_dump($testObj);
