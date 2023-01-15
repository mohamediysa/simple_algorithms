<?php

function min_array($arr = []){
	$highest = $arr[0];
	for ($i=0; $i < count($arr); $i++) { 
		if (isset($arr[$i+1])) {
			if ($highest >= $arr[$i+1]) {
				$highest = $arr[$i+1]; 
			}
		}
	}
	return $highest;
}

$nums = [4,2,77,5,3,63,99,01,82,3,83,93,9999,876,99,1,888888,717167,72726272];
echo min_array($nums);