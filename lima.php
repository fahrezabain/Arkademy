<?php

$strings = ['pro', 'gram', 'merit', 'program', 'it', 'programmer'];

$input = 'programmerit';

foreach ($strings as $string) {
	$input_temp = $input;

	if (strpos($input, $string) === 0) {
		echo $string."-";
	}
}