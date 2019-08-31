<?php

$input = 5;

function is_prima($angka){
	$habis = 0;
	for ($i=2; $i < $angka ; $i++) { 
		if (($angka % $i) == 0) {
			$habis++;
		}
	}
	if ($habis != 0) {
		return false;
	}else{
		return true;
	}
}

function bilangan_prima_ke($urutan){
	$ke = 1;
	for ($bil=2; $bil < 3000 ; $bil++) { 
		if (is_prima($bil)) {
			if ($ke == $urutan) {
				return $bil;
			}else{
				$ke++;
			}
		}
	}
}

if ($input > 0 && $input <=10) {
	for ($t=1; $t <= $input; $t++) { 
		for ($l=1; $l <= $t ; $l++) { 
			echo bilangan_prima_ke($l);
			echo " ";
		}
		echo "<br>";
	}
}
