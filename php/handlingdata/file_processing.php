<?php

//Note that the filename is assigned null. This will act as a default value
function read_file_by_line($filename = null)
{	
	//We specify the filename. Note we are using relative addressing to locate the files
	$default = "./agri_price_2007.csv";
	
	//We check if information is inserted as default
	if ($filename == null)$filename = $default;
	
	//We use the file function rather than an fopen function because file is more convenient to process when stored in arrays
	$raw_data = file($filename); //The file function reads the content of file into an array => http://www.php.net/manual/en/function.file.php
	
	//Use an array to store the generated arrays which contain the values of each record
	$agriRecs = array(); 
	
	foreach($raw_data as $line_num => $line){
		//echo $line;
		//We can split the attributes of the file into their individual attributes
		$arr_att = explode(",",$line);//http://php.net/manual/en/function.explode.php
		//print_r($arr_att);
		//echo $arr_att[4];
		$agriRecs[] = $arr_att;
	}
	
	//Checking to Ensure that the information is loaded successfully into array
	//$count = count($agriRecs);
	//echo "Successfully Read $count records";
	//echo $agriRecs[0][4];
	
	return $agriRecs;
}

function convert_with_headings($aData)
{
	// In order to process information we need to have a good understanding of the data
	// Note the first now contains the headings of the information needed
	$headings = $aData[0];
	//print_r($headings);
	
	//Since we have the data stored we can remove the first row
	array_shift($aData); //http://www.php.net/manual/en/function.array-shift.php
	//print_r($aData[0]);
	
	//From example one we note that we can do the two task with one operation
	//$headings =array_shift($aData);
	$newArr = array();
	
	foreach($aData as $index => $record)
	{
		$tmpRec = array();		
		foreach($record as $col => $val)
		{			
			$column_name = $headings[$col]; //Because the data is consistent we know that the index will always relate to column name
			//echo $column_name . "will get a value of". $val;
			$tmpRec[$column_name] = $val; // Create an associative key for the needed value
		}
		array_push($newArr,$tmpRec);
	}
	return $newArr;
	
}

function process_data($aData)
{
	$aData = convert_with_headings($aData);
	//print_r( $aData[0]);
	
	foreach($aData as $index => $record)
	{
		
	}
}

//We write a function that will call the various functions that we use
function handle_tasks()
{
	$agriRecs = read_file_by_line();
	process_data($agriRecs);
}

// We call the function created.... this function will be the equivalent of our main in Java
handle_tasks();
