<?php

function largestword($str) 
{	
	$str = preg_replace("/(?![.=$'€%-])\p{P}/u", " ", $str);
	
	$arr_str = explode(" ", $str);
	
	for ($i=0; $i < sizeof($arr_str) ; $i++) { 
		for ($j=1; $j <sizeof($arr_str)-$i ; $j++) { 
			if(strlen($arr_str[$j]) > strlen($arr_str[$j-1])){
				$result = $arr_str[$j];
				break;
			}
		}
	}
	
	return $result;
}   
