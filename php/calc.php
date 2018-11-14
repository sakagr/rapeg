<?php
$price = 0;
$time = 0;
if(isset($_POST['submit'])){
	$weight = $_POST['weight'];
	$w_unit = $_POST['w_unit'];
	$distance = 10;
	if($w_unit === 'kg')
	{
		$weight *= 1000;
	}	
	$price = $weight/100 * $distance;
	$time = 1;

	
}
?>
