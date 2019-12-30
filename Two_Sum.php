<?php
/*	
	mmghunaim - Mohammed Ghunaim
	Given an array of integers, return indices of the two numbers such that they add up to a specific target.

	You may assume that each input would have exactly one solution, and you may not use the same element twice
*/
function getTwoSum($elements, $target){
	// $elements= $array;

	sort($elements);
	$arrSize= count($elements);

	for($i= 0; $i< $arrSize-2; $i++){
		if (($elements[$i]+$elements[$i+1]) == $target) {
			return $result = [$i,$i+1];
		}
	}
}

$result = getTwoSum([2,7,11,15],9);
echo $result[0].'<br>';
echo $result[1].'<br>';