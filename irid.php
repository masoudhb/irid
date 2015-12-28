<?php

function checkCode($code) {
	if (is_numeric($code) && strlen($code) === 10) {
		$code = str_split($code);
		$ten = $code[9];
		$sum = 0;
		$j = 10;
		for ($i=0; $i<9; $i++) {
			$sum += $code[$i]*$j;
			$j--;
		}
		$mod = $sum%11;
		if ($mod >= 2) {
			$control = 11-$mod;
		} else {
			$control = $mod;
		}
		if ($ten == $control) {
			return 'ok';
		} else {
			return 'no';
		}
	} else {
		return 'no';
	}
}

?>
