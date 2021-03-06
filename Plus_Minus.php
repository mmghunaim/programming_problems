<?php

/*
	mmghunaim - Mohammed Ghunaim
	
	Given an array of integers, calculate the fractions of its elements that are positive, negative, and are zeros. Print the decimal value of each fraction on a new line.

	For example, given the array arr= [1,1,0,-1,-1] there are 5 elements, two positive, two negative and one zero. 
	Their ratios would be 2/5 = 0.400000, 2/5 = 0.400000 and 1/5 = 0.200000. It should be printed as
 */

function getFractions($numbers){
	$noOfZeros = 0;
	$noOfPositive= 0;
	$noOfNegative= 0;
	$result = [
		'zeroRatio' => 0,
		'positiveFraction' => 0,
		'negativeFraction' => 0
	];

	foreach ($numbers as $number) {
		if ($number < 0) {
			$noOfNegative++;
		}elseif ($number>0) {
			$noOfPositive++;
		}else{
			$noOfZeros++;
		}
	}


	$noOfEelements = sizeof($numbers);

	$result['zeroRatio']= $noOfZeros/$noOfEelements;
	$result['positiveFraction'] = $noOfPositive/$noOfEelements;
	$result['negativeFraction'] = $noOfNegative/$noOfEelements;

	return $result;
}

$numbers = [1,1,0,-1,-1];
$result = getFractions($numbers);
echo $result['positiveFraction'].'<br>';
echo $result['negativeFraction'].'<br>';
echo $result['zeroRatio'].'<br>';
