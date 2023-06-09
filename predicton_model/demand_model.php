<?php
	require_once('../../inc/config/constants.php');
	require_once('../../inc/config/db.php');
// Datebase credentials 

$conn = new mysql_connect(localhost, admin, admin, shop_inventory);
	
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	
// training data
	$x = [1, 2, 3, 4, 5];
	$y = [2, 4, 6, 8, 10];

// Calculate the mean of x and y 
	$meanX = array_sum($x) / count($x);
	$meanY = array_sum($y) / count($y);

// Calculate the sum of (x - meanX) * ( y - meanY) and ( x - meanX) * ( x - meanX)
	$sumXY = 0;
	$sumXX = 0;

	for ($i =0; $i < count($x); $i++) {
		$sumXY += ($x[$i] - $meanX) * ($y[$i] - $meanY);
		$sumXX += ($x[$i] - $meanX) * ($x[$i] - $meanX);
	}

// calculate the slope (beta1) and intercept (beta0) of the regression line
	$slope = $sumXY / $sumXX;
	$intercept = $meanY - $slope * $meanX;

// Input data for prediction
	$input1 = [6, 7]; //Example of arrayof input values from existing data

// Perform the forcast for each input value
	foreach ($input1 as $input) {
		// code...
		$forecast = $intercept + $slope * $input;
		echo "Forecast for input $input: " . $forecast . "\n";

	}

?>