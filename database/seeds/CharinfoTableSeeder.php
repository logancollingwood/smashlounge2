<?php

use Illuminate\Database\Seeder;

class CharinfoTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('charinfo')->delete();
        
		\DB::table('charinfo')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Bowser',
				'tierdata' => '24',
				'weight' => '1st',
				'fallspeed' => '12th-14th',
				'walljump' => '0',
				'guide' => 'Bowser is the heaviest character in the game, making him very tanky and hard to kill at low percents. His body is enormous though, making him prone to extended combos that usually would not work on any other character. Bowser has trouble dealing with any character with more range than him, or characters that can out-maneuver him.
',
				'game' => '0',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Captain Falcon',
				'tierdata' => '7',
				'weight' => '6th-7th',
				'fallspeed' => '2nd',
				'walljump' => '1',
			'guide' => 'Falcon is the fastest character in the game in terms of run speed. His speed allows him to be many places at once, and though most of his moves are slow on startup, he makes up for it with his unmatched speed. Falcon\'s main combo finisher is the infamous knee (forward air) as it combos from many of his moves and kills at low percents.
',
				'game' => '0',
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'Donkey Kong',
				'tierdata' => '17',
				'weight' => '2nd',
				'fallspeed' => '4th-5th',
				'walljump' => '0',
				'guide' => 'Donkey Kong is a character that lacks reliable attacks with hit boxes in front of him. Instead his back air, which hits very far behind him, is his greatest asset in the spacing game. DK\'s best strategy is to abuse his grab combos, as he can set up for multi-hit juggles against the majority of the cast. Additionally he has a very good horizontal recovery, but not a good vertical.
',
				'game' => '0',
			),
			3 => 
			array (
				'id' => '4',
				'name' => 'Dr. Mario',
				'tierdata' => '9',
				'weight' => '8th-10th',
				'fallspeed' => '16th-18th',
				'walljump' => '0',
			'guide' => 'Dr. Mario is a compact powerhouse, packed with quick aerials and a solid ground game. Overall his range and recovery are weak, but they are made up with his powerful kill moves and ability to get quick kills using his back air and forward b (the cape).',
				'game' => '0',
			),
			4 => 
			array (
				'id' => '5',
				'name' => 'Falco',
				'tierdata' => '2',
				'weight' => '20th-21st',
				'fallspeed' => '1st',
				'walljump' => '1',
				'guide' => 'Falco is an aggressive character whose primary strategy is to pressure the opponent. Falco\'s vertical mobility is possibly the best in the game. Additionally by using his \'short hop laser\', he can control space horizontally, opening up his opponents for high pressure combos.',
				'game' => '0',
			),
			5 => 
			array (
				'id' => '6',
				'name' => 'Fox',
				'tierdata' => '1',
				'weight' => '22nd',
				'fallspeed' => '3rd',
				'walljump' => '1',
			'guide' => 'Fox is easily the most agile character in the game. His speed and combo setups are optimized when paired with SHFFLing and proper use of the shine (down B). Fox is ranked #1 for a good reason, having one of the strongest up-smashes, unmatched speed and close range fighting, as well as the infamous shine. 
',
				'game' => '0',
			),
			6 => 
			array (
				'id' => '7',
				'name' => 'Ganondorf',
				'tierdata' => '12',
				'weight' => '4th',
				'fallspeed' => '10th',
				'walljump' => '0',
				'guide' => 'Ganondorf is a bulky and heavy powerhouse. Ganon often gets dominated because of his slow moves and giant body-- but his moves pack a punch. Ganondorf\'s attacks kill most characters at low percents and is one of the hardest punishing mid-tiers in the game. Although he spends much of his time simply working for his openings, when he gets them they count.
',
				'game' => '0',
			),
			7 => 
			array (
				'id' => '8',
				'name' => 'Ice Climbers',
				'tierdata' => '8',
				'weight' => '15th',
				'fallspeed' => '19th-21st',
				'walljump' => '0',
			'guide' => 'The Ice Climbers is a character in which the player controls Popo (blue IC depending on costume color), while Nana follows and mimics Popo\'s inputs with a slight delay. The main strategy with Ice Climbers is abusing their grab combos, as they can kill off of most grabs. Strategies change constantly with IC\'s based on if your Nana is present or not. 
',
				'game' => '0',
			),
			8 => 
			array (
				'id' => '9',
				'name' => 'Jigglypuff',
				'tierdata' => '5',
				'weight' => '24th-25th',
				'fallspeed' => '26th',
				'walljump' => '0',
				'guide' => 'Being the 2nd lightest character in the game, Jigglypuff is prone to dying at low percents. Although this is a disadvantage, her elusiveness in the air paired with some of the best aerial attacks in the game makes her a powerful character. Jigglypuff has 5 jumps and is able to float back on to the stage with ease, making recovery very simple. 
',
				'game' => '0',
			),
			9 => 
			array (
				'id' => '10',
				'name' => 'Kirby',
				'tierdata' => '26',
				'weight' => '23rd',
				'fallspeed' => '19th-21st',
				'walljump' => '0',
				'guide' => 'A shell of its former self in Smash 64, Kirby has almost no good qualities as a character. Besides the fact that Kirby has 5 jumps, his ground and aerial mobility are terrible.
',
				'game' => '0',
			),
			10 => 
			array (
				'id' => '11',
				'name' => 'Link',
				'tierdata' => '16',
				'weight' => '6th-7th',
				'fallspeed' => '7th-9th',
				'walljump' => '0',
				'guide' => 'Link is a slower but more powerful version of Young Link. He does not have the speed, maneuverability, or projectile game that Young Link offers, but he makes up for it with his strong sword. Additionally, Link has one of the farthest reaching grapple recoveries, making him a unique character to edge-guard.
',
				'game' => '0',
			),
			11 => 
			array (
				'id' => '12',
				'name' => 'Luigi',
				'tierdata' => '13',
				'weight' => '8th-10th',
				'fallspeed' => '19th-21st',
				'walljump' => '0',
				'guide' => 'Luigi has the longest wavedash range in the game because of his low traction. Luigi\'s slow run and aerial speeds are made up for with his obscenely long wavedash. Luigi has one of the most unique recoveries in the game, as his up b only sends him vertically, and his forward b sends him horizontally. When using the two in combination, he has a very adequate recovery. 
',
				'game' => '0',
			),
			12 => 
			array (
				'id' => '13',
				'name' => 'Mario',
				'tierdata' => '14',
				'weight' => '8th-10th',
				'fallspeed' => '16th-18th',
				'walljump' => '1',
				'guide' => 'Mario is one of the most basic characters in the game. His strengths are similar to Dr. Mario\'s in that he has a powerful ground game and is able to set up for edge-guard situations with most of his attacks. Mario\'s recovery and range are also weak, but he makes up for it with his powerful ground game.
',
				'game' => '0',
			),
			13 => 
			array (
				'id' => '14',
				'name' => 'Marth',
				'tierdata' => '4',
				'weight' => '16th',
				'fallspeed' => '6th',
				'walljump' => '0',
			'guide' => 'Marth has the most range of anyone in the game. Being one of the few characters that wields a sword, his hitboxes extend very far out, making his defense game great. Marth is a unique character in that his attacks have different hitboxes based on where you hit with the sword (hilt = weak hit, middle = regular hit, tip = strong hit). 
',
				'game' => '0',
			),
			14 => 
			array (
				'id' => '15',
				'name' => 'Mewtwo',
				'tierdata' => '21',
				'weight' => '17th-19th',
				'fallspeed' => '22nd-23rd',
				'walljump' => '0',
				'guide' => 'Mewtwo is a poorly designed character, having almost no kill moves and no neutral game. Mewtwo only has a few redeeming qualities, such as his amazing recovery and powerful grabs. It is very hard to combo with/against Mewtwo because of his lack of speed and floatiness.
',
				'game' => '0',
			),
			15 => 
			array (
				'id' => '16',
				'name' => 'Mr. Game And Watch',
				'tierdata' => '22',
				'weight' => '24th-25th',
				'fallspeed' => '16th-18th',
				'walljump' => '0',
				'guide' => 'Although GaW is the last character to unlock, he lacks many of the core qualities that make a character good. A few of GaW\'s aerials are non-L-cancellable, making him a pretty slow character. GaW\'s ground game is generally bad, and has trouble killing when the opponent is not in combo percentage.',
				'game' => '0',
			),
			16 => 
			array (
				'id' => '17',
				'name' => 'Ness',
				'tierdata' => '23',
				'weight' => '11th',
				'fallspeed' => '15th',
				'walljump' => '0',
				'guide' => 'Ness is a character that has a few good pokes, but no reliable kill moves. Ness is a very limiting character on-stage and off-stage, as his ground game has short range and his combos often lack a finisher. As well as his bad on-stage, his recovery takes the longest to start up out of any character, and he is vulnerable for all of it. 
',
				'game' => '0',
			),
			17 => 
			array (
				'id' => '18',
				'name' => 'Peach',
				'tierdata' => '6',
				'weight' => '12th-14th',
				'fallspeed' => '22nd-23rd',
				'walljump' => '0',
				'guide' => 'Peach is one of the most unique floaty characters in the game because of her float mechanics. By using a technique called \'float cancelling\' Peach is able to suspend herself in mid air and move horizontally, using any aerial attack. Landing lag after float cancelling is reduced, making her have one of the fastest recovery times on attacks
',
				'game' => '0',
			),
			18 => 
			array (
				'id' => '19',
				'name' => 'Pichu',
				'tierdata' => '25',
				'weight' => '26th',
				'fallspeed' => '12th-14th',
				'walljump' => '1',
				'guide' => 'Obviously Nintendo\'s joke character in the cast. All electric attacks used by Pichu deal 1-3% to himself. Pichu is also the lightest character in the game, making him prone to dying at extremely low percents, sometimes even earlier than Jigglypuff. 
',
				'game' => '0',
			),
			19 => 
			array (
				'id' => '20',
				'name' => 'Pikachu',
				'tierdata' => '10',
				'weight' => '20th-21st',
				'fallspeed' => '12th-14th',
				'walljump' => '0',
				'guide' => 'Pikachu is pretty much the mid-tier Fox. They share many qualities such as quick combo game, ability to run around on the stage, powerful up smash, and linear recovery. Also like Fox, Pikachu is capable of getting kills at high percent with up smash, as well as low percent kills with up-air. Pikachu is a character that thrives in using quick and weak moves to rack up percent or set up for edge guard situations. 
',
				'game' => '0',
			),
			20 => 
			array (
				'id' => '21',
				'name' => 'Roy',
				'tierdata' => '20',
				'weight' => '17th-19th',
				'fallspeed' => '4th-5th',
				'walljump' => '0',
			'guide' => 'Roy is the weak version of Marth. Like Marth, his sword contains different hitboxes depending on where your opponent is hit (hilt = strong hit, middle = regular hit, tip = weak hit). Roy is EXTREMELY hard to hit during his up-b animation, but because of his fast falling speed and bad aerial mobility, his recovery is generally very bad.
',
				'game' => '0',
			),
			21 => 
			array (
				'id' => '22',
				'name' => 'Samus',
				'tierdata' => '11',
				'weight' => '3rd',
				'fallspeed' => '24th-25th',
				'walljump' => '1',
				'guide' => 'Samus is a very linear character, as many of her hitboxes only extend out in straight lines. Although Samus is one of the slowest characters in the game, her defense and control of the pace in the match allow her to be a viable defensive character. Samus can control wide ranges of space by using missile cancelling-- and can control close range with her up-b and tilts.
',
				'game' => '0',
			),
			22 => 
			array (
				'id' => '23',
				'name' => 'Sheik',
				'tierdata' => '3',
				'weight' => '12th-14th',
				'fallspeed' => '7th-9th',
				'walljump' => '1',
				'guide' => 'Sheik is one of the deadliest characters in the game. Although she does not have a ton of offensive options, she makes up for it with her defense and simple, yet highly effective combo game. Sheik\'s main assets are her tilts, grab combos, and infamous forward-air
',
				'game' => '0',
			),
			23 => 
			array (
				'id' => '24',
				'name' => 'Yoshi',
				'tierdata' => '18',
				'weight' => '5th',
				'fallspeed' => '11th',
				'walljump' => '0',
				'guide' => ' The most unique quality of Yoshi is his shield, which holds many properties that are unique to Yoshi-- such as its hitstun reduction, inability to jump out of shield, and parrying. Additionally, Yoshi does not have an up-b that helps his recovery. Instead this is balanced by his double jump reaching very high, as well as containing \'super armor\', which means that attacks will damage Yoshi, but the hitstun and knockback are lessened VERY greatly depending on percentage.',
				'game' => '0',
			),
			24 => 
			array (
				'id' => '25',
				'name' => 'Young Link',
				'tierdata' => '15',
				'weight' => '17th-19th',
				'fallspeed' => '7th-9th',
				'walljump' => '1',
				'guide' => 'Young Link is a fast character with three different projectiles. Typically his playstyle is very hit-and-run as his run and aerial speeds are both very fast. Young Link generally has weak attacks, but the fact that he can maintain such a high speed while throwing projectiles at your opponent makes him an interesting defensive character.
',
				'game' => '0',
			),
			25 => 
			array (
				'id' => '26',
				'name' => 'Zelda',
				'tierdata' => '19',
				'weight' => '12th-14th',
				'fallspeed' => '24th-25th',
				'walljump' => '0',
				'guide' => 'Zelda is a very floaty character who generally does not have many reliable attacks, besides her back-air and forward-air. Both aerials require precision, as only the tip of the hitbox sends opponents flying far. Zelda has the farthest reaching up-b in the game easily, making it relatively difficult to edge guard her.
',
				'game' => '0',
			),
		));
	}

}
