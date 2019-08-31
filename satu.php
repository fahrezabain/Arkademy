<?php

function getBiodata(){
	return json_encode([
		'name' => 'Fahreza Bagus Indramulyana',
		'age' => 24,
		'address' => 'Perum Durenan Indah Semarang',
		'hobbies' => ['badminton'],
		'is_married' => false,
		'list_school' => [
			[
				'name' => 'UNTAG Semarang',
				'year_in' => 2013,
				'year_out' => 2018,
				'major' => 'Manajemen Pemasaran'
			],
			[
				'name' => 'SMKN 11 Semarang',
				'year_in' => 2000,
				'year_out' => 2013,
				'major' => 'Multimedia'
			],
		],
		'skills' => [
			[
				'skill_name' => 'badminton',
				'level' => 'expert',
			],
			[
				'skill_name' => 'Bernafas',
				'level' => 'beginner',
			],
		],
		'interest_in_coding' => true,
	]);
}


echo getBiodata();