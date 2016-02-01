<?php

use Illuminate\Database\Seeder;

class LocalsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('locals')->delete();
        
		\DB::table('locals')->insert(array (
			0 => 
			array (
				'id' => '2',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/269052529786948',
				'name' => 'East Coast',
				'latitude' => '37.9500000',
				'longitude' => '-84.0000000',
				'game' => '2',
			),
			1 => 
			array (
				'id' => '3',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/134497873392355',
				'name' => 'East Coast',
				'latitude' => '37.9470848',
				'longitude' => '-83.7225060',
				'game' => '1',
			),
			2 => 
			array (
				'id' => '4',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/430811007000487',
				'name' => 'Delaware',
				'latitude' => '39.1564159',
				'longitude' => '-75.5134199',
				'game' => '0',
			),
			3 => 
			array (
				'id' => '5',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/DMVSSBM',
				'name' => 'Maryland / Virginia / DC',
				'latitude' => '37.0000000',
				'longitude' => '-79.0145760',
				'game' => '2',
			),
			4 => 
			array (
				'id' => '6',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/mdvasmash',
				'name' => 'Maryland / Virginia / DC',
				'latitude' => '37.5000000',
				'longitude' => '-77.0000000',
				'game' => '3',
			),
			5 => 
			array (
				'id' => '7',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/projectmdva',
				'name' => 'Maryland / Virginia / DC',
				'latitude' => '38.0000000',
				'longitude' => '-76.5000000',
				'game' => '4',
			),
			6 => 
			array (
				'id' => '8',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/395469233833958',
				'name' => 'Maryland - College Park',
				'latitude' => '38.9875571',
				'longitude' => '-76.9361836',
				'game' => '0',
			),
			7 => 
			array (
				'id' => '9',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/489536424485533',
				'name' => 'Massachusetts - Fall River',
				'latitude' => '41.6855955',
				'longitude' => '-71.1019620',
				'game' => '4',
			),
			8 => 
			array (
				'id' => '10',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/167824956563375',
				'name' => 'New England',
				'latitude' => '42.2499739',
				'longitude' => '-71.2378280',
				'game' => '2',
			),
			9 => 
			array (
				'id' => '11',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/356948471051413',
				'name' => 'New England',
				'latitude' => '42.2499739',
				'longitude' => '-71.0000000',
				'game' => '3',
			),
			10 => 
			array (
				'id' => '12',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/262747973827544',
				'name' => 'New Jersey - Rutgers University',
				'latitude' => '40.4786710',
				'longitude' => '-74.4317890',
				'game' => '2',
			),
			11 => 
			array (
				'id' => '13',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/156948507708078',
				'name' => 'New Jersey - South',
				'latitude' => '40.0583240',
				'longitude' => '-74.4056610',
				'game' => '0',
			),
			12 => 
			array (
				'id' => '14',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/408295942538051',
				'name' => 'New Jersey - Central',
				'latitude' => '39.8297280',
				'longitude' => '-74.9789590',
				'game' => '0',
			),
			13 => 
			array (
				'id' => '15',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/211900915585963',
				'name' => 'New Jersey / New York',
				'latitude' => '40.4636660',
				'longitude' => '-74.4406130',
				'game' => '3',
			),
			14 => 
			array (
				'id' => '16',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/350071671730817',
				'name' => 'New Jersey / New York',
				'latitude' => '40.5305020',
				'longitude' => '-74.3389890',
				'game' => '4',
			),
			15 => 
			array (
				'id' => '17',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/1386041018274455',
				'name' => 'New Jersey / New York',
				'latitude' => '40.6056120',
				'longitude' => '-74.2236330',
				'game' => '5',
			),
			16 => 
			array (
				'id' => '18',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/2200028280',
				'name' => 'New York - Ithaca / Cornell',
				'latitude' => '42.4534490',
				'longitude' => '-76.4735030',
				'game' => '0',
			),
			17 => 
			array (
				'id' => '19',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/224824577625283',
				'name' => 'New York - Long Island',
				'latitude' => '40.7891420',
				'longitude' => '-73.1349600',
				'game' => '2',
			),
			18 => 
			array (
				'id' => '20',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/364349146941224',
				'name' => 'New York - Long Island',
				'latitude' => '40.7763820',
				'longitude' => '-73.2843020',
				'game' => '3',
			),
			19 => 
			array (
				'id' => '21',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/smashingatempire',
				'name' => 'New York - Long Island',
				'latitude' => '40.7139560',
				'longitude' => '-73.6358640',
				'game' => '0',
			),
			20 => 
			array (
				'id' => '22',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/279511975480441',
				'name' => 'New York - NYC',
				'latitude' => '40.7127840',
				'longitude' => '-74.0059410',
				'game' => '2',
			),
			21 => 
			array (
				'id' => '23',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/310533642332998',
				'name' => 'New York - NYU',
				'latitude' => '40.7272480',
				'longitude' => '-73.9954510',
				'game' => '0',
			),
			22 => 
			array (
				'id' => '24',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/385718644870094',
				'name' => 'New York - Schenectady',
				'latitude' => '42.8142430',
				'longitude' => '-73.9395690',
				'game' => '0',
			),
			23 => 
			array (
				'id' => '25',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/639367622752544',
				'name' => 'New York - Syracuse',
				'latitude' => '43.0481220',
				'longitude' => '-76.1474240',
				'game' => '0',
			),
			24 => 
			array (
				'id' => '26',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/46230006858',
				'name' => 'New York - Upstate / RIT',
				'latitude' => '40.7127840',
				'longitude' => '-74.0059410',
				'game' => '0',
			),
			25 => 
			array (
				'id' => '27',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/centralPennSSB',
				'name' => 'Pennsylvania - Central',
				'latitude' => '41.2967480',
				'longitude' => '-76.3729960',
				'game' => '0',
			),
			26 => 
			array (
				'id' => '28',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/108078502591099',
				'name' => 'Pennsylvania - Philadelphia',
				'latitude' => '39.9523350',
				'longitude' => '-75.1637890',
				'game' => '2',
			),
			27 => 
			array (
				'id' => '29',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/NEOHBURGH',
				'name' => 'Pennsylvania - Pittsburgh / Northeast Ohio',
				'latitude' => '40.3565090',
				'longitude' => '-79.9192700',
				'game' => '2',
			),
			28 => 
			array (
				'id' => '30',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/182267851790715',
				'name' => 'Southern Virginia',
				'latitude' => '37.0592750',
				'longitude' => '-81.5377010',
				'game' => '2',
			),
			29 => 
			array (
				'id' => '31',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/452275474823750',
				'name' => 'Charlottesville, Virginia',
				'latitude' => '38.0293060',
				'longitude' => '-78.4766780',
				'game' => '2',
			),
			30 => 
			array (
				'id' => '32',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/596361677123724',
				'name' => 'Charlottesville, Virginia',
				'latitude' => '38.0283520',
				'longitude' => '-78.4880450',
				'game' => '4',
			),
			31 => 
			array (
				'id' => '33',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/182267851790715',
				'name' => 'Norfolk/Virginia Beach',
				'latitude' => '36.8823350',
				'longitude' => '-76.2999060',
				'game' => '0',
			),
			32 => 
			array (
				'id' => '34',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/1386540904893386',
				'name' => 'Southwest Virginia',
				'latitude' => '37.4315730',
				'longitude' => '-78.6568940',
				'game' => '0',
			),
			33 => 
			array (
				'id' => '35',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/204825246197520',
				'name' => 'Virginia - VCU',
				'latitude' => '37.5446450',
				'longitude' => '-77.4479900',
				'game' => '0',
			),
			34 => 
			array (
				'id' => '36',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/408805205918060',
				'name' => 'West Virginia',
				'latitude' => '38.5976260',
				'longitude' => '-80.4549030',
				'game' => '0',
			),
			35 => 
			array (
				'id' => '37',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/269052529786948/',
				'name' => 'East Coast',
				'latitude' => '36.0313320',
				'longitude' => '-72.6855470',
				'game' => '2',
			),
			36 => 
			array (
				'id' => '38',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/134497873392355/',
				'name' => 'East Coast',
				'latitude' => '34.4522180',
				'longitude' => '-73.0371090',
				'game' => '1',
			),
			37 => 
			array (
				'id' => '39',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/336726723087447/',
				'name' => 'Atlantic South General',
				'latitude' => '41.4016300',
				'longitude' => '-94.9908060',
				'game' => '4',
			),
			38 => 
			array (
				'id' => '40',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/AlabamaSmashLeague',
				'name' => 'Alabama',
				'latitude' => '32.3182310',
				'longitude' => '-86.9022980',
				'game' => '0',
			),
			39 => 
			array (
				'id' => '41',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/285926091523241/',
				'name' => 'Arkansas',
				'latitude' => '35.2010500',
				'longitude' => '-91.8318330',
				'game' => '0',
			),
			40 => 
			array (
				'id' => '42',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/304489126305123/',
				'name' => 'Florida',
				'latitude' => '27.6648270',
				'longitude' => '-81.5157540',
				'game' => '0',
			),
			41 => 
			array (
				'id' => '43',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/138478079554384/',
				'name' => 'Florida - Central Florida',
				'latitude' => '27.7127100',
				'longitude' => '-81.5405270',
				'game' => '2',
			),
			42 => 
			array (
				'id' => '44',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/456656917699611/',
				'name' => 'Florida - Gainesville',
				'latitude' => '29.6516340',
				'longitude' => '-82.3248260',
				'game' => '3',
			),
			43 => 
			array (
				'id' => '45',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/247383341960804/',
				'name' => 'Florida - Jacksonville',
				'latitude' => '30.3321840',
				'longitude' => '-81.6556510',
				'game' => '0',
			),
			44 => 
			array (
				'id' => '46',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/134182206752487/',
				'name' => 'Florida - Pensacola',
				'latitude' => '30.4213090',
				'longitude' => '-87.2169150',
				'game' => '0',
			),
			45 => 
			array (
				'id' => '47',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/1440737036160195/',
				'name' => 'Florida - South Florida 1',
				'latitude' => '27.4602270',
				'longitude' => '-82.6676730',
				'game' => '0',
			),
			46 => 
			array (
				'id' => '48',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/pages/Smash-In-Progress/706760066011314',
				'name' => 'Florida - South Florida 2',
				'latitude' => '27.4504470',
				'longitude' => '-82.5773760',
				'game' => '0',
			),
			47 => 
			array (
				'id' => '49',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/VersusGamingCenter',
				'name' => 'Florida - South Florida 3',
				'latitude' => '27.9064690',
				'longitude' => '-81.5740650',
				'game' => '0',
			),
			48 => 
			array (
				'id' => '50',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/159234920826366/',
				'name' => 'Florida - South Florida',
				'latitude' => '27.6648270',
				'longitude' => '-81.5157540',
				'game' => '2',
			),
			49 => 
			array (
				'id' => '51',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/193697467326040/',
				'name' => 'Florida - South West Florida',
				'latitude' => '27.6656460',
				'longitude' => '-81.5116450',
				'game' => '0',
			),
			50 => 
			array (
				'id' => '52',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/357576900984630/',
				'name' => 'Florida - Tallahassee',
				'latitude' => '30.4382560',
				'longitude' => '-84.2807330',
				'game' => '0',
			),
			51 => 
			array (
				'id' => '53',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/483669795064224/',
				'name' => 'Florida - Tampa Bay',
				'latitude' => '27.7028710',
				'longitude' => '-82.5834950',
				'game' => '2',
			),
			52 => 
			array (
				'id' => '54',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/TampaSmash/',
				'name' => 'Florida - Tampa Bay',
				'latitude' => '27.8366470',
				'longitude' => '-82.5032040',
				'game' => '3',
			),
			53 => 
			array (
				'id' => '55',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/125733910821001/',
				'name' => 'Florida - University of Florida 2',
				'latitude' => '25.7885490',
				'longitude' => '-80.3796260',
				'game' => '0',
			),
			54 => 
			array (
				'id' => '56',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/209198555783942/',
				'name' => 'Georgia',
				'latitude' => '32.1656220',
				'longitude' => '-82.9000750',
				'game' => '2',
			),
			55 => 
			array (
				'id' => '57',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/179381782079932/',
				'name' => 'Georgia',
				'latitude' => '30.3229140',
				'longitude' => '-93.1854220',
				'game' => '3',
			),
			56 => 
			array (
				'id' => '58',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/1392554534335836/',
				'name' => 'Georgia',
				'latitude' => '33.1947030',
				'longitude' => '-84.2845670',
				'game' => '4',
			),
			57 => 
			array (
				'id' => '59',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/133034603414177/',
				'name' => 'Louisiana',
				'latitude' => '30.9842980',
				'longitude' => '-91.9623330',
				'game' => '0',
			),
			58 => 
			array (
				'id' => '60',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/352469348160468/',
				'name' => 'Louisiana',
				'latitude' => '30.0827880',
				'longitude' => '-92.6747630',
				'game' => '2',
			),
			59 => 
			array (
				'id' => '61',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/LSUSmash',
				'name' => 'Louisiana - LSU',
				'latitude' => '30.4132580',
				'longitude' => '-91.1800020',
				'game' => '0',
			),
			60 => 
			array (
				'id' => '62',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/512742878766152/',
				'name' => 'Louisiana - New Orleans',
				'latitude' => '29.9510660',
				'longitude' => '-90.0715320',
				'game' => '2',
			),
			61 => 
			array (
				'id' => '63',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/276445842390059/',
				'name' => 'North Carolina',
				'latitude' => '35.7595730',
				'longitude' => '-79.0193000',
				'game' => '2',
			),
			62 => 
			array (
				'id' => '64',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/164944006930835/',
				'name' => 'North Carolina',
				'latitude' => '35.1934210',
				'longitude' => '-77.0334180',
				'game' => '3',
			),
			63 => 
			array (
				'id' => '65',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/290202017736245/',
				'name' => 'South Carolina',
				'latitude' => '33.8360810',
				'longitude' => '-81.1637250',
				'game' => '2',
			),
			64 => 
			array (
				'id' => '66',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/MiddleTNProjectM/',
				'name' => 'Tennessee',
				'latitude' => '35.5174910',
				'longitude' => '-86.5804470',
				'game' => '2',
			),
			65 => 
			array (
				'id' => '67',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/mwsmash/',
				'name' => 'Midwest General 1',
				'latitude' => '39.9097360',
				'longitude' => '-93.5156250',
				'game' => '0',
			),
			66 => 
			array (
				'id' => '68',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/257285400975347/',
				'name' => 'Midwest General 2',
				'latitude' => '39.9013090',
				'longitude' => '-92.5872800',
				'game' => '0',
			),
			67 => 
			array (
				'id' => '69',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/380188912048431/',
				'name' => 'Illinois - Champaign',
				'latitude' => '40.1164200',
				'longitude' => '-88.2433830',
				'game' => '0',
			),
			68 => 
			array (
				'id' => '70',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/126804630735563/',
				'name' => 'Illinois - Chicago',
				'latitude' => '41.8781140',
				'longitude' => '-87.6297980',
				'game' => '2',
			),
			69 => 
			array (
				'id' => '71',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/1399023747004983/',
				'name' => 'Illinois- Springfield',
				'latitude' => '39.7817210',
				'longitude' => '-89.6501480',
				'game' => '0',
			),
			70 => 
			array (
				'id' => '72',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/129015017194089/',
				'name' => 'Illinois South, Kentucky West, Missouri East',
				'latitude' => '37.5097260',
				'longitude' => '-88.7695310',
				'game' => '0',
			),
			71 => 
			array (
				'id' => '73',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/171453176258373/',
				'name' => 'Indiana - Carmel',
				'latitude' => '39.9783710',
				'longitude' => '-86.1180430',
				'game' => '2',
			),
			72 => 
			array (
				'id' => '74',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/611364705589048/',
				'name' => 'Indiana - Indianapolis',
				'latitude' => '39.7684030',
				'longitude' => '-86.1580680',
				'game' => '0',
			),
			73 => 
			array (
				'id' => '75',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/247658661961971/',
				'name' => 'Indiana - Fort Wayne',
				'latitude' => '41.0792730',
				'longitude' => '-85.1393510',
				'game' => '0',
			),
			74 => 
			array (
				'id' => '76',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/PurdueSSBO/',
				'name' => 'Indiana - Purdue',
				'latitude' => '40.4237050',
				'longitude' => '-86.9211950',
				'game' => '0',
			),
			75 => 
			array (
				'id' => '77',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/382901415171283',
				'name' => 'Indiana - IU Bloomington',
				'latitude' => '39.1691360',
				'longitude' => '-86.5149050',
				'game' => '0',
			),
			76 => 
			array (
				'id' => '78',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/1421302704757453/',
				'name' => 'Iowa',
				'latitude' => '41.8780030',
				'longitude' => '-93.0977020',
				'game' => '0',
			),
			77 => 
			array (
				'id' => '79',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/ksssb',
				'name' => 'Kansas',
				'latitude' => '39.0119020',
				'longitude' => '-98.4842460',
				'game' => '0',
			),
			78 => 
			array (
				'id' => '80',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/734815379867767/',
				'name' => 'Kansas City',
				'latitude' => '39.0997270',
				'longitude' => '-94.5785670',
				'game' => '4',
			),
			79 => 
			array (
				'id' => '81',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/271575972914386/',
				'name' => 'Kentucky-Ohio-Indiana',
				'latitude' => '38.7883450',
				'longitude' => '-84.5507810',
				'game' => '0',
			),
			80 => 
			array (
				'id' => '82',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/umsmash/',
				'name' => 'Michigan',
				'latitude' => '42.2808260',
				'longitude' => '-83.7430380',
				'game' => '2',
			),
			81 => 
			array (
				'id' => '83',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/406757282795167/',
				'name' => 'Michigan',
				'latitude' => '42.3443350',
				'longitude' => '-83.8201900',
				'game' => '3',
			),
			82 => 
			array (
				'id' => '84',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/WestMISmash/',
				'name' => 'Michigan - West',
				'latitude' => '43.8028190',
				'longitude' => '-86.0449220',
				'game' => '0',
			),
			83 => 
			array (
				'id' => '85',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/258765404305007/',
				'name' => 'Michigan',
				'latitude' => '42.3849230',
				'longitude' => '-83.5702510',
				'game' => '4',
			),
			84 => 
			array (
				'id' => '86',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/540421182680998/',
				'name' => 'Minnesota',
				'latitude' => '46.7295530',
				'longitude' => '-94.6859000',
				'game' => '0',
			),
			85 => 
			array (
				'id' => '87',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/176623759034371/',
				'name' => 'Minnesota - UMM',
				'latitude' => '45.5892070',
				'longitude' => '-95.9033780',
				'game' => '0',
			),
			86 => 
			array (
				'id' => '88',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/323513011041633/',
				'name' => 'Missouri - St. Louis',
				'latitude' => '38.6270030',
				'longitude' => '-90.1994040',
				'game' => '2',
			),
			87 => 
			array (
				'id' => '89',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/414566191955018/',
				'name' => 'Missouri - St. Louis',
				'latitude' => '38.6218030',
				'longitude' => '-90.2365320',
				'game' => '3',
			),
			88 => 
			array (
				'id' => '90',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/338517279512871/',
				'name' => 'Missouri - Springfield',
				'latitude' => '37.2089570',
				'longitude' => '-93.2922990',
				'game' => '0',
			),
			89 => 
			array (
				'id' => '91',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/199063406858260/',
				'name' => 'Nebraska',
				'latitude' => '41.4925370',
				'longitude' => '-99.9018130',
				'game' => '2',
			),
			90 => 
			array (
				'id' => '92',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/105843859488387/',
				'name' => 'Ohio',
				'latitude' => '40.4172870',
				'longitude' => '-82.9071230',
				'game' => '0',
			),
			91 => 
			array (
				'id' => '93',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/677137102305269/',
				'name' => 'Ohio - Cincinnati',
				'latitude' => '39.1031180',
				'longitude' => '-84.5120200',
				'game' => '0',
			),
			92 => 
			array (
				'id' => '94',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/133757653398073/',
				'name' => 'Ohio - Columbus',
				'latitude' => '39.9611760',
				'longitude' => '-82.9987940',
				'game' => '2',
			),
			93 => 
			array (
				'id' => '95',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/302630169803625/',
				'name' => 'Ohio - Columbus',
				'latitude' => '39.9596880',
				'longitude' => '-83.0074600',
				'game' => '3',
			),
			94 => 
			array (
				'id' => '96',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/1396649643918505/',
				'name' => 'Ohio - Northwest',
				'latitude' => '40.8138090',
				'longitude' => '-83.8256840',
				'game' => '2',
			),
			95 => 
			array (
				'id' => '97',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/470817746279509/',
				'name' => 'Western PA / Northeast OH',
				'latitude' => '41.2447720',
				'longitude' => '-80.4858400',
				'game' => '0',
			),
			96 => 
			array (
				'id' => '98',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/466886533331712/',
				'name' => 'South Dakota',
				'latitude' => '43.9695150',
				'longitude' => '-99.9018130',
				'game' => '0',
			),
			97 => 
			array (
				'id' => '99',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/411431608918302/',
				'name' => 'Wisconsin',
				'latitude' => '43.0327610',
				'longitude' => '-87.9071040',
				'game' => '0',
			),
			98 => 
			array (
				'id' => '100',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/190510254334113/',
				'name' => 'Arizona',
				'latitude' => '33.4406090',
				'longitude' => '-112.0935060',
				'game' => '2',
			),
			99 => 
			array (
				'id' => '101',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/252928971439205/',
				'name' => 'Arizona',
				'latitude' => '32.1384090',
				'longitude' => '-110.9179690',
				'game' => '3',
			),
			100 => 
			array (
				'id' => '102',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/248367238515394/',
				'name' => 'Colorado',
				'latitude' => '39.7325380',
				'longitude' => '-104.9688720',
				'game' => '0',
			),
			101 => 
			array (
				'id' => '103',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/541859482565869/',
				'name' => 'Oklahoma',
				'latitude' => '35.4675600',
				'longitude' => '-97.5164280',
				'game' => '0',
			),
			102 => 
			array (
				'id' => '104',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/326887317543/',
				'name' => 'Texas - Amarillo',
				'latitude' => '35.2219970',
				'longitude' => '-101.8312970',
				'game' => '0',
			),
			103 => 
			array (
				'id' => '105',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/476448669077840/',
				'name' => 'Texas - Austin',
				'latitude' => '30.2671530',
				'longitude' => '-97.7430610',
				'game' => '1',
			),
			104 => 
			array (
				'id' => '106',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/Austin.Melee/',
				'name' => 'Texas - Austin',
				'latitude' => '30.2680370',
				'longitude' => '-97.7365640',
				'game' => '2',
			),
			105 => 
			array (
				'id' => '107',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/426773497467785/',
				'name' => 'Texas - Austin',
				'latitude' => '30.2604020',
				'longitude' => '-97.7520560',
				'game' => '4',
			),
			106 => 
			array (
				'id' => '108',
				'region' => '4',
				'profileid' => 'http://www.facebook.com/groups/bcsmelee',
				'name' => 'Texas - Bryan-College Station',
				'latitude' => '30.6275730',
				'longitude' => '-96.3348200',
				'game' => '0',
			),
			107 => 
			array (
				'id' => '109',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/205428649667016/',
				'name' => 'Texas - College Station',
				'latitude' => '30.6224020',
				'longitude' => '-96.3410000',
				'game' => '0',
			),
			108 => 
			array (
				'id' => '110',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/350398944989752/',
				'name' => 'Texas - Dallas-Fort Worth',
				'latitude' => '32.7554880',
				'longitude' => '-97.3307660',
				'game' => '2',
			),
			109 => 
			array (
				'id' => '111',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/673233716043745/',
				'name' => 'Texas - El Paso',
				'latitude' => '31.7699560',
				'longitude' => '-106.4968050',
				'game' => '0',
			),
			110 => 
			array (
				'id' => '112',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/554204308010763/',
				'name' => 'Texas - Fort Worth',
				'latitude' => '32.7554880',
				'longitude' => '-97.3307660',
				'game' => '0',
			),
			111 => 
			array (
				'id' => '113',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/223986011009934/',
				'name' => 'Texas - Houston',
				'latitude' => '29.7601930',
				'longitude' => '-95.3693900',
				'game' => '2',
			),
			112 => 
			array (
				'id' => '114',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/197481713674782',
				'name' => 'Texas - San Antonio',
				'latitude' => '29.4241220',
				'longitude' => '-98.4936280',
				'game' => '2',
			),
			113 => 
			array (
				'id' => '115',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/122102801187160/',
				'name' => 'Texas - Rio Grande Valley',
				'latitude' => '26.1502960',
				'longitude' => '-97.9767720',
				'game' => '0',
			),
			114 => 
			array (
				'id' => '116',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/UtahSmash',
				'name' => 'Utah',
				'latitude' => '40.7472570',
				'longitude' => '-111.8627930',
				'game' => '0',
			),
			115 => 
			array (
				'id' => '117',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/35208405538/',
				'name' => 'Utah - Provo/Orem',
				'latitude' => '40.2617130',
				'longitude' => '-111.6773990',
				'game' => '0',
			),
			116 => 
			array (
				'id' => '118',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/507726149334644/',
				'name' => 'New Mexico',
				'latitude' => '35.0659730',
				'longitude' => '-106.6223140',
				'game' => '0',
			),
			117 => 
			array (
				'id' => '119',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/CentralCaliSmash/',
				'name' => 'CA - Central Cali',
				'latitude' => '36.6331620',
				'longitude' => '-119.7290040',
				'game' => '0',
			),
			118 => 
			array (
				'id' => '120',
				'region' => '5',
				'profileid' => 'http://www.facebook.com/groups/276813632366412/',
				'name' => 'CA - NorCal',
				'latitude' => '37.7446570',
				'longitude' => '-122.4371340',
				'game' => '2',
			),
			119 => 
			array (
				'id' => '121',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/NorcalBrawl/',
				'name' => 'CA - NorCal',
				'latitude' => '37.3133830',
				'longitude' => '-121.8988040',
				'game' => '3',
			),
			120 => 
			array (
				'id' => '122',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/700200659991734/',
				'name' => 'CA - NorCal',
				'latitude' => '37.3308570',
				'longitude' => '-121.8905640',
				'game' => '4',
			),
			121 => 
			array (
				'id' => '123',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/SantaCruzMelee/',
				'name' => 'CA - Santa Cruz',
				'latitude' => '36.9696440',
				'longitude' => '-122.0224000',
				'game' => '2',
			),
			122 => 
			array (
				'id' => '124',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/124711994367202/',
				'name' => 'CA - Berkeley',
				'latitude' => '37.8715930',
				'longitude' => '-122.2727470',
				'game' => '2',
			),
			123 => 
			array (
				'id' => '125',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/251905601637936/',
				'name' => 'CA - Humboldt',
				'latitude' => '40.7450050',
				'longitude' => '-123.8695090',
				'game' => '0',
			),
			124 => 
			array (
				'id' => '126',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/479162355483578',
				'name' => 'CA - Orange County',
				'latitude' => '33.7174710',
				'longitude' => '-117.8311430',
				'game' => '2',
			),
			125 => 
			array (
				'id' => '127',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/78151322382/',
				'name' => 'CA - San Diego',
				'latitude' => '32.7157380',
				'longitude' => '-117.1610840',
				'game' => '2',
			),
			126 => 
			array (
				'id' => '128',
				'region' => '5',
				'profileid' => 'http://www.facebook.com/groups/358902214188040/',
				'name' => 'CA - Santa Barbara',
				'latitude' => '34.4208310',
				'longitude' => '-119.6981900',
				'game' => '2',
			),
			127 => 
			array (
				'id' => '129',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/593635670694883/',
				'name' => 'CA - SoCal',
				'latitude' => '34.0344530',
				'longitude' => '-118.4710690',
				'game' => '1',
			),
			128 => 
			array (
				'id' => '130',
				'region' => '5',
				'profileid' => 'http://www.facebook.com/groups/368704663144095/',
				'name' => 'CA - SoCal',
				'latitude' => '34.0299000',
				'longitude' => '-118.2568360',
				'game' => '2',
			),
			129 => 
			array (
				'id' => '131',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/SSBBsocal/',
				'name' => 'CA - SoCal',
				'latitude' => '34.2027160',
				'longitude' => '-118.5699460',
				'game' => '3',
			),
			130 => 
			array (
				'id' => '132',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/SSBPMsocal/',
				'name' => 'CA - SoCal',
				'latitude' => '33.9205720',
				'longitude' => '-117.4108890',
				'game' => '4',
			),
			131 => 
			array (
				'id' => '133',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/611100575632206/',
				'name' => 'CA - South Bay',
				'latitude' => '37.3395920',
				'longitude' => '-121.9235230',
				'game' => '2',
			),
			132 => 
			array (
				'id' => '134',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/480597648717885/',
				'name' => 'CA - Thousand Oaks',
				'latitude' => '34.1705610',
				'longitude' => '-118.8375940',
				'game' => '0',
			),
			133 => 
			array (
				'id' => '135',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/MELEE702/',
				'name' => 'Nevada - Las Vegas',
				'latitude' => '36.1699410',
				'longitude' => '-115.1398300',
				'game' => '2',
			),
			134 => 
			array (
				'id' => '136',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/BRAWL702/',
				'name' => 'Nevada - Las Vegas',
				'latitude' => '36.1728030',
				'longitude' => '-115.2095030',
				'game' => '3',
			),
			135 => 
			array (
				'id' => '137',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/702PROJECTM/',
				'name' => 'Nevada - Las Vegas',
				'latitude' => '36.1683680',
				'longitude' => '-115.0968930',
				'game' => '4',
			),
			136 => 
			array (
				'id' => '138',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/619057094778540/',
				'name' => 'Nevada - Reno',
				'latitude' => '39.5296330',
				'longitude' => '-119.8138030',
				'game' => '0',
			),
			137 => 
			array (
				'id' => '139',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/641344915919224/',
				'name' => 'Sacramento Smash',
				'latitude' => '38.5815720',
				'longitude' => '-121.4944000',
				'game' => '0',
			),
			138 => 
			array (
				'id' => '140',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/245900615456533/',
				'name' => 'Official Washington Melee',
				'latitude' => '47.6000000',
				'longitude' => '-122.3320000',
				'game' => '0',
			),
			139 => 
			array (
				'id' => '141',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/642114992487346/',
				'name' => 'Irvine',
				'latitude' => '33.6839470',
				'longitude' => '-117.7946940',
				'game' => '0',
			),
			140 => 
			array (
				'id' => '142',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/340535089298820/',
				'name' => 'Portland',
				'latitude' => '45.5234520',
				'longitude' => '-122.6762070',
				'game' => '0',
			),
			141 => 
			array (
				'id' => '143',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/283358348346303/',
				'name' => 'Eugene',
				'latitude' => '44.0520690',
				'longitude' => '-123.0867540',
				'game' => '0',
			),
			142 => 
			array (
				'id' => '144',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/224872027544762/',
				'name' => 'Corvallis',
				'latitude' => '44.5645660',
				'longitude' => '-123.2620440',
				'game' => '0',
			),
			143 => 
			array (
				'id' => '145',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/SCVSSBM/ ',
				'name' => 'Santa Clarita Valley',
				'latitude' => '34.3796510',
				'longitude' => '-118.5305980',
				'game' => '2',
			),
			144 => 
			array (
				'id' => '146',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/WorcesterSmashBros/',
				'name' => 'Worcester',
				'latitude' => '42.2625930',
				'longitude' => '-71.8022930',
				'game' => '0',
			),
			145 => 
			array (
				'id' => '147',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/350398944989752/',
				'name' => 'DFW',
				'latitude' => '32.7554880',
				'longitude' => '-97.0000000',
				'game' => '0',
			),
			146 => 
			array (
				'id' => '148',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/731966200177831/',
				'name' => 'Asheville',
				'latitude' => '35.5950580',
				'longitude' => '-82.5514870',
				'game' => '0',
			),
			147 => 
			array (
				'id' => '149',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/46230006858/',
				'name' => 'Rochester ',
				'latitude' => '43.1610300',
				'longitude' => '-77.6109220',
				'game' => '0',
			),
			148 => 
			array (
				'id' => '150',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/790683467608502/',
				'name' => 'Fremont',
				'latitude' => '37.5482700',
				'longitude' => '-121.9885720',
				'game' => '2',
			),
			149 => 
			array (
				'id' => '151',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/251629451659962/',
				'name' => 'San Luis Obispo',
				'latitude' => '35.2827520',
				'longitude' => '-120.6596160',
				'game' => '0',
			),
			150 => 
			array (
				'id' => '152',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/124366774346574/',
				'name' => 'Wichita',
				'latitude' => '37.6888890',
				'longitude' => '-97.3361110',
				'game' => '2',
			),
			151 => 
			array (
				'id' => '153',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/everythingsmash/',
				'name' => 'CA - VENTURA COUNTY',
				'latitude' => '34.2685660',
				'longitude' => '-119.2284390',
				'game' => '0',
			),
			152 => 
			array (
				'id' => '154',
				'region' => '4',
				'profileid' => 'https://www.facebook.com/groups/GAMelee/',
				'name' => 'Atlanta',
				'latitude' => '33.7489950',
				'longitude' => '-84.3879820',
				'game' => '2',
			),
			153 => 
			array (
				'id' => '155',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/1419390711611336/',
				'name' => 'High Desert',
				'latitude' => '35.1440470',
				'longitude' => '-106.4869710',
				'game' => '2',
			),
			154 => 
			array (
				'id' => '156',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/619057094778540/',
				'name' => 'Reno',
				'latitude' => '39.5296330',
				'longitude' => '-119.8138030',
				'game' => '0',
			),
			155 => 
			array (
				'id' => '157',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/707melee/',
				'name' => '707',
				'latitude' => '38.2918590',
				'longitude' => '-122.4580360',
				'game' => '2',
			),
			156 => 
			array (
				'id' => '158',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/KyOhWVa.Smash/',
				'name' => 'Ironton, Ohio',
				'latitude' => '38.5367470',
				'longitude' => '-82.6829410',
				'game' => '2',
			),
			157 => 
			array (
				'id' => '159',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/235912859946393',
				'name' => 'Buford',
				'latitude' => '34.1206560',
				'longitude' => '-84.0043510',
				'game' => '2',
			),
			158 => 
			array (
				'id' => '160',
				'region' => '3',
				'profileid' => 'https://www.facebook.com/groups/230511403809562/',
				'name' => 'Third Lake',
				'latitude' => '42.3739110',
				'longitude' => '-88.0109120',
				'game' => '0',
			),
			159 => 
			array (
				'id' => '161',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/279945308796732/',
				'name' => 'Long Beach',
				'latitude' => '33.7700500',
				'longitude' => '-118.1937390',
				'game' => '0',
			),
			160 => 
			array (
				'id' => '162',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/417873421648323/',
				'name' => 'Bedford, MA',
				'latitude' => '42.4906230',
				'longitude' => '-71.2760090',
				'game' => '2',
			),
			161 => 
			array (
				'id' => '163',
				'region' => '2',
				'profileid' => 'https://www.facebook.com/groups/159610307409216/',
				'name' => 'Dothan',
				'latitude' => '31.2232310',
				'longitude' => '-85.3904890',
				'game' => '4',
			),
			162 => 
			array (
				'id' => '164',
				'region' => '5',
				'profileid' => 'https://www.facebook.com/groups/EWASmashBros/',
				'name' => 'Eastern Washington',
				'latitude' => '47.6520000',
				'longitude' => '-117.4330000',
				'game' => '0',
			),
			163 => 
			array (
				'id' => '165',
				'region' => '6',
				'profileid' => 'https://www.facebook.com/groups/calgarysmash/',
				'name' => 'Calgary Smash Brothers Community',
				'latitude' => '51.0780000',
				'longitude' => '-114.1340000',
				'game' => '0',
			),
			164 => 
			array (
				'id' => '166',
				'region' => '6',
				'profileid' => 'https://www.facebook.com/groups/edmontonsmash/',
				'name' => 'Edmonton Smash Bros Community',
				'latitude' => '53.5320000',
				'longitude' => '-113.4900000',
				'game' => '0',
			),
			165 => 
			array (
				'id' => '167',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/212152128989881/',
				'name' => 'Smash Bros. at William & Mary',
				'latitude' => '37.2730000',
				'longitude' => '-76.7140000',
				'game' => '0',
			),
			166 => 
			array (
				'id' => '168',
				'region' => '6',
				'profileid' => 'https://www.facebook.com/groups/SmashUK/',
				'name' => 'Smash UK',
				'latitude' => '51.4540000',
				'longitude' => '-0.0680000',
				'game' => '0',
			),
			167 => 
			array (
				'id' => '169',
				'region' => '6',
				'profileid' => 'https://www.facebook.com/groups/614361821964340/',
				'name' => 'Solent Smash',
				'latitude' => '50.9030000',
				'longitude' => '-1.3980000',
				'game' => '0',
			),
			168 => 
			array (
				'id' => '170',
				'region' => '6',
				'profileid' => 'https://www.facebook.com/groups/674542725954277/',
				'name' => 'Asker/BÃ¦rum Smash',
				'latitude' => '59.8630000',
				'longitude' => '10.4860000',
				'game' => '0',
			),
			169 => 
			array (
				'id' => '171',
				'region' => '5',
				'profileid' => 'http://smashboards.com/threads/osc-oregon-players-events-all-the-info-you-need.66978/',
				'name' => 'Oregon Smash Community',
				'latitude' => '44.0390000',
				'longitude' => '-123.0760000',
				'game' => '0',
			),
			170 => 
			array (
				'id' => '172',
				'region' => '6',
				'profileid' => 'https://www.facebook.com/groups/194535274054492/?fref=ts',
				'name' => 'Smash Scotland',
				'latitude' => '55.8740000',
				'longitude' => '-4.2340000',
				'game' => '0',
			),
			171 => 
			array (
				'id' => '173',
				'region' => '6',
				'profileid' => 'https://www.facebook.com/groups/SmashMeleeOntario/',
			'name' => 'GTA (Greater Toronto Area) Smash',
				'latitude' => '43.6450000',
				'longitude' => '-79.3940000',
				'game' => '2',
			),
			172 => 
			array (
				'id' => '174',
				'region' => '1',
				'profileid' => 'https://www.facebook.com/groups/TheBCSmashCommunity/',
				'name' => 'Vancouver Smash Group',
				'latitude' => '49.2700000',
				'longitude' => '-123.1170000',
				'game' => '0',
			),
			173 => 
			array (
				'id' => '175',
				'region' => '5',
				'profileid' => 'https:/www.facebook.com/groups/TemeculaSSBM/',
				'name' => 'Temecula Melee',
				'latitude' => '33.5460000',
				'longitude' => '-117.1390000',
				'game' => '2',
			),
			174 => 
			array (
				'id' => '176',
				'region' => '1',
				'profileid' => 'https:/www.facebook.com/groups/630453227015754/',
				'name' => 'Midlands Smash',
				'latitude' => '52.6270000',
				'longitude' => '-1.1220000',
				'game' => '0',
			),
			175 => 
			array (
				'id' => '177',
				'region' => '6',
				'profileid' => 'https:/www.facebook.com/groups/ssbmtl/',
				'name' => 'Montreal Melee',
				'latitude' => '45.4990000',
				'longitude' => '-73.5660000',
				'game' => '2',
			),
			176 => 
			array (
				'id' => '178',
				'region' => '5',
				'profileid' => 'https:/www.facebook.com/groups/160709990614463/',
				'name' => 'Melee players in Davis who actually still pl',
				'latitude' => '38.5430000',
				'longitude' => '-121.7540000',
				'game' => '2',
			),
			177 => 
			array (
				'id' => '179',
				'region' => '3',
				'profileid' => 'www.facebook.com/groups/310359889094549/',
				'name' => 'Montana Smash',
				'latitude' => '46.5840000',
				'longitude' => '-112.8500000',
				'game' => '2',
			),
			178 => 
			array (
				'id' => '180',
				'region' => '1',
				'profileid' => 'www.facebook.com/groups/1480028002218278/',
				'name' => 'Cortland Smash Bros',
				'latitude' => '42.6020000',
				'longitude' => '-76.1860000',
				'game' => '2',
			),
			179 => 
			array (
				'id' => '181',
				'region' => '1',
				'profileid' => 'www.facebook.com/groups/CornellSmash/',
				'name' => 'Cornell Smash [the old Facebook listing for ',
				'latitude' => '42.4470000',
				'longitude' => '-76.4900000',
				'game' => '0',
			),
			180 => 
			array (
				'id' => '182',
				'region' => '6',
				'profileid' => 'www.facebook.com/groups/108829072557656/',
				'name' => 'Smash BR',
				'latitude' => '-15.8150000',
				'longitude' => '-47.8560000',
				'game' => '0',
			),
			181 => 
			array (
				'id' => '183',
				'region' => '1',
				'profileid' => 'www.facebook.com/groups/VermontMelee',
				'name' => 'Vermont Melee',
				'latitude' => '44.4750000',
				'longitude' => '-73.2060000',
				'game' => '2',
			),
			182 => 
			array (
				'id' => '184',
				'region' => '6',
				'profileid' => 'www.facebook.com/groups/315598801891025/',
				'name' => 'Ottawa Melee',
				'latitude' => '45.3970000',
				'longitude' => '-75.6660000',
				'game' => '2',
			),
			183 => 
			array (
				'id' => '185',
				'region' => '3',
				'profileid' => 'www.facebook.com/groups/PlattevilleSmashBros/',
				'name' => 'Platteville Smash Bros.',
				'latitude' => '42.7330000',
				'longitude' => '-90.4870000',
				'game' => '0',
			),
			184 => 
			array (
				'id' => '186',
				'region' => '5',
				'profileid' => 'www.facebook.com/groups/centralwashingtonsmash/',
				'name' => 'Central Washington Super Smash Bros',
				'latitude' => '47.4310000',
				'longitude' => '-120.3370000',
				'game' => '1',
			),
			185 => 
			array (
				'id' => '187',
				'region' => '5',
				'profileid' => 'www.facebook.com/groups/centralwashingtonsmash/',
				'name' => 'Central Washington Smash',
				'latitude' => '47.4160000',
				'longitude' => '-120.2960000',
				'game' => '4',
			),
			186 => 
			array (
				'id' => '188',
				'region' => '1',
				'profileid' => 'www.facebook.com/groups/SCPASmash',
				'name' => 'South Central PA Smash',
				'latitude' => '40.1520000',
				'longitude' => '-76.5920000',
				'game' => '0',
			),
			187 => 
			array (
				'id' => '189',
				'region' => '1',
				'profileid' => 'm.facebook.com/groups/500077296805692/?refsrc=http%3A%2F%2Fwww.reddit.com%2Fr%2Fsmashbros%2Fwiki%2Ffacebook&refid=9&_rdr#_=_',
				'name' => 'Northeast PA Competitive Smash ',
				'latitude' => '40.8720000',
				'longitude' => '-75.3440000',
				'game' => '0',
			),
			188 => 
			array (
				'id' => '190',
				'region' => '1',
				'profileid' => 'www.facebook.com/groups/SmashWichita/',
				'name' => 'Super Smash Bros. 4 Wichita',
				'latitude' => '37.6889',
				'longitude' => '-97.3361',
				'game' => '5',
			),
			189 => 
			array (
				'id' => '191',
				'region' => '1',
				'profileid' => 'www.facebook.com/groups/NEPAsmash/',
				'name' => 'Northeast PA Competitive Smash',
				'latitude' => '41.2750000',
				'longitude' => '-75.7890000',
				'game' => '0',
			),
			190 => 
			array (
				'id' => '192',
				'region' => '2',
				'profileid' => 'www.facebook.com/groups/604473126274663/',
				'name' => 'Memphis Area Smash',
				'latitude' => '35.1380000',
				'longitude' => '-90.0710000',
				'game' => '2',
			),
			191 => 
			array (
				'id' => '193',
				'region' => '2',
				'profileid' => 'www.facebook.com/groups/604473126274663/805739082814732/?notif_t=group_activity',
				'name' => 'Memphis Area Smash',
				'latitude' => '35.1430000',
				'longitude' => '-90.0530000',
				'game' => '0',
			),
		));
	}

}
