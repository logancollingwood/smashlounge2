<?php

use Illuminate\Database\Seeder;

class FramedatamovesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('framedatamoves')->delete();
        
		\DB::table('framedatamoves')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Up Air',
				'description' => '',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Down Air',
				'description' => '',
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'Forward Air',
				'description' => '',
			),
			3 => 
			array (
				'id' => '4',
				'name' => 'Back Air',
				'description' => '',
			),
			4 => 
			array (
				'id' => '5',
				'name' => 'Neutral Air',
				'description' => '',
			),
			5 => 
			array (
				'id' => '6',
				'name' => 'Neutral B in Air',
				'description' => '',
			),
			6 => 
			array (
				'id' => '7',
				'name' => 'Jab 1',
				'description' => '',
			),
			7 => 
			array (
				'id' => '8',
				'name' => 'Jab 2',
				'description' => '',
			),
			8 => 
			array (
				'id' => '9',
				'name' => 'Jab 3',
				'description' => '',
			),
			9 => 
			array (
				'id' => '10',
				'name' => 'Jab Extended',
				'description' => '',
			),
			10 => 
			array (
				'id' => '11',
				'name' => 'Up B',
				'description' => 'Up Special',
			),
			11 => 
			array (
				'id' => '12',
				'name' => 'Neutral B',
				'description' => 'Special',
			),
			12 => 
			array (
				'id' => '13',
			'name' => 'Neutral B (charged)',
				'description' => 'Special',
			),
			13 => 
			array (
				'id' => '14',
			'name' => 'Neutral B (air)',
				'description' => 'Special',
			),
			14 => 
			array (
				'id' => '15',
				'name' => 'Down B',
				'description' => 'Down Special',
			),
			15 => 
			array (
				'id' => '16',
				'name' => 'Side B',
				'description' => 'Side Special',
			),
			16 => 
			array (
				'id' => '17',
				'name' => 'Forward B',
				'description' => '',
			),
			17 => 
			array (
				'id' => '18',
				'name' => 'Forward B 1',
				'description' => '',
			),
			18 => 
			array (
				'id' => '19',
				'name' => 'Forward B 2',
				'description' => '',
			),
			19 => 
			array (
				'id' => '20',
				'name' => 'Forward B 3 Down',
				'description' => '',
			),
			20 => 
			array (
				'id' => '21',
				'name' => 'Forward B 3 Neutral',
				'description' => '',
			),
			21 => 
			array (
				'id' => '22',
				'name' => 'Forward B 3 Up',
				'description' => '',
			),
			22 => 
			array (
				'id' => '23',
				'name' => 'Forward B 4',
				'description' => '',
			),
			23 => 
			array (
				'id' => '24',
				'name' => 'Forward B 4 Down',
				'description' => '',
			),
			24 => 
			array (
				'id' => '25',
				'name' => 'Forward B 4 Neutral',
				'description' => '',
			),
			25 => 
			array (
				'id' => '26',
				'name' => 'Forward B 4 Up',
				'description' => '',
			),
			26 => 
			array (
				'id' => '27',
				'name' => 'Up Tilt',
				'description' => '',
			),
			27 => 
			array (
				'id' => '28',
				'name' => 'Down Tilt',
				'description' => '',
			),
			28 => 
			array (
				'id' => '29',
				'name' => 'Forward Tilt',
				'description' => '',
			),
			29 => 
			array (
				'id' => '30',
				'name' => 'Forward Tilt Low',
				'description' => '',
			),
			30 => 
			array (
				'id' => '31',
				'name' => 'Forward Tilt High',
				'description' => '',
			),
			31 => 
			array (
				'id' => '32',
				'name' => 'Up Smash',
				'description' => '',
			),
			32 => 
			array (
				'id' => '33',
				'name' => 'Down Smash',
				'description' => '',
			),
			33 => 
			array (
				'id' => '34',
				'name' => 'Forward Smash',
				'description' => '',
			),
			34 => 
			array (
				'id' => '35',
				'name' => 'Air Dodge',
				'description' => '',
			),
			35 => 
			array (
				'id' => '36',
				'name' => 'Forward Roll',
				'description' => '',
			),
			36 => 
			array (
				'id' => '37',
				'name' => 'Backwards Roll',
				'description' => '',
			),
			37 => 
			array (
				'id' => '38',
				'name' => 'Dodge',
				'description' => '',
			),
			38 => 
			array (
				'id' => '39',
				'name' => 'Dash Attack',
				'description' => '',
			),
			39 => 
			array (
				'id' => '40',
				'name' => 'Running Grab',
				'description' => '',
			),
			40 => 
			array (
				'id' => '41',
				'name' => 'Standing Grab',
				'description' => '',
			),
			41 => 
			array (
				'id' => '42',
				'name' => 'Forward Smash High',
				'description' => '',
			),
			42 => 
			array (
				'id' => '43',
				'name' => 'Forward Smash Low',
				'description' => '',
			),
			43 => 
			array (
				'id' => '44',
			'name' => 'Forward B (air)',
				'description' => '',
			),
			44 => 
			array (
				'id' => '45',
				'name' => 'Z Air',
				'description' => '',
			),
			45 => 
			array (
				'id' => '46',
				'name' => 'Taunt',
				'description' => '',
			),
			46 => 
			array (
				'id' => '47',
				'name' => 'Get Up Attack',
				'description' => '',
			),
			47 => 
			array (
				'id' => '48',
				'name' => 'Forward Throw',
				'description' => '',
			),
			48 => 
			array (
				'id' => '49',
				'name' => 'Backwards Throw',
				'description' => '',
			),
			49 => 
			array (
				'id' => '50',
				'name' => 'Throw',
				'description' => '',
			),
		));
	}

}
