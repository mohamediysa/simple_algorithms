<?php

function max_array($arr = []){
	$highest = $arr[0];
	for ($i=0; $i < count($arr); $i++) { 
		if (isset($arr[$i+1])) {
			if ($highest <= $arr[$i+1]) {
				$highest = $arr[$i+1]; 
			}
		}
	}
	return $highest;
}

