<?php 
/**
 * Author: Kyle E. DeFreitas
 * License: GNU GPLv3
 * 
 */
include "./pg_parts/head.php";
include "./pg_parts/header.php"; 

//We will keep a function that will load the information to be displayed in the table
//It will take a parameter that will identify where the content should be local or database

function load_data($type = "local")
{
	
	$arr = array();
	if ($type == "local")
	{
		$arr['goal'] = "learn";
		$arr['attempt'] = "pass";
		$arr['grade'] = "A";		
	}
	
	return $arr;
}

?>
	<div class="container">		
		<table class="span12 table table-striped">
			<thead>
				<td class="span6">Key</td><td class="span6">Value</td>
			</thead>
			<tbody>
				<?php
					$arr = load_data();
					foreach($arr as $k => $v)
					{
						echo "<tr>";
						echo "<td>".$k."</td>";
						echo "<td>".$v."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
<?php include "./pg_parts/footer.php"; ?>
