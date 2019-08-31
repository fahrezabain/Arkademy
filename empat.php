<?php

$input = '5956560159466056';

$bils = explode('0', $input);

echo "<pre>";
echo $input.'<br>';
print_r($bils);

$sorted_bils = [];
foreach ($bils as $bil) {
	$bil_arr = str_split($bil);
	sort($bil_arr);
	$sorted_bils[] = implode("", $bil_arr);
	print_r(implode("", $bil_arr));
}

print_r(implode("", $sorted_bils));