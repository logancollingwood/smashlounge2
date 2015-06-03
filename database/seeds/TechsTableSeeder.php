<?php

use Illuminate\Database\Seeder;

class TechsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('techs')->delete();
        
		\DB::table('techs')->insert(array (
			0 => 
			array (
				'id' => '1',
				'tech' => 'Wave Dash',
				'description' => 'A wavedash is a technique in Super Smash Bros. Melee that is performed by air dodging diagonally into the ground, causing the character to slide a short distance.',
				'smashwiki' => 'http://www.ssbwiki.com/wavedash',
			'inputs' => '(Jump)->immediate (Diagonal Air Dodge)',
			),
			1 => 
			array (
				'id' => '2',
				'tech' => 'Multi Shine',
			'description' => 'A double shine (or multi shine, triple shine, etc.) is the repeated use of Reflector as an attack by either Fox or Falco. It is performed by jump-cancelling a Reflector and using a second Reflector just after leaving the ground, timed so that Fox or Falco will quickly land and allow the pattern to be repeated.',
				'smashwiki' => 'http://www.ssbwiki.com/Double_shine',
			'inputs' => '(Down + B) , (Jump) , (Down + B)',
			),
			2 => 
			array (
				'id' => '20',
				'tech' => 'Directional Influence',
				'description' => 'Changing the angle of trajectory with the analog stick while being hit.',
				'smashwiki' => 'http://www.ssbwiki.com/Directional_influence',
			'inputs' => '(Direction)[hold] after being hit',
			),
			3 => 
			array (
				'id' => '4',
				'tech' => 'L Cancel',
				'description' => 'A technique that allows characters to act faster than usual when landing in the middle of an aerial attack.',
				'smashwiki' => 'http://www.ssbwiki.com/L-canceling',
			'inputs' => '(L or R or Z) within 7 frames of landing ',
			),
			4 => 
			array (
				'id' => '5',
				'tech' => 'Short hop',
				'description' => 'The act of pressing the jump button and letting go before the character leaves the ground. This will result in a jump that is lower than a normal jump.',
				'smashwiki' => 'http://www.ssbwiki.com/Short_hop',
			'inputs' => '(QUICK Jump)',
			),
			5 => 
			array (
				'id' => '6',
				'tech' => 'Ledge Hop',
			'description' => 'Edge hopping is a technique used to return on-stage from the ledge. It entails dropping from the ledge (by pressing either "back" or "down" on the control stick) and immediately double-jumping.',
				'smashwiki' => 'http://www.ssbwiki.com/Edge_hopping',
			'inputs' => '(Down or Back) , (Jump)',
			),
			6 => 
			array (
				'id' => '7',
				'tech' => 'Pivot',
				'description' => 'Using the frame at which a character turns during a dash-dance, in which any normal ground options are available as if the character were standing still.',
				'smashwiki' => 'http://www.ssbwiki.com/Pivoting',
			'inputs' => '(Left) , (Right) or vice versa.',
			),
			7 => 
			array (
				'id' => '8',
				'tech' => 'Wall Jump',
				'description' => 'A technique some characters can use to jump away from walls. Captain Falcon, Falco, Fox, Mario, Pichu, Samus, Young Link, and Sheik can all wall jump.',
				'smashwiki' => 'http://www.ssbwiki.com/Wall_jump',
			'inputs' => '(Away from wall) upon touching.',
			),
			8 => 
			array (
				'id' => '19',
				'tech' => 'Tech',
				'description' => 'Used to quickly recover from a falling animation before landing. You can choose to tech neutral, right roll, or left roll.',
				'smashwiki' => 'http://www.ssbwiki.com/tech',
			'inputs' => '(L or R or Z) upon landing',
			),
			9 => 
			array (
				'id' => '10',
				'tech' => 'Crouch Cancel',
				'description' => 'By crouching before getting hit by an attack, some aspect of the attack will be weakened. Both knockback and hitstun will be lessened.',
				'smashwiki' => 'http://www.ssbwiki.com/Crouch_cancel',
			'inputs' => '(CROUCH) before impending attack.',
			),
			10 => 
			array (
				'id' => '11',
				'tech' => 'Dash Dance',
				'description' => 'Dash-dancing is performed by tapping the analog stick left and right rapidly while on the ground, effectively dashing to the left and to the right alternately.',
				'smashwiki' => 'http://www.ssbwiki.com/Dash-dancing',
			'inputs' => '(Left), (Right)',
			),
			11 => 
			array (
				'id' => '12',
				'tech' => 'Meteor Cancel',
				'description' => 'Meteor cancelling is the act of instantly negating the downwards knockback of a meteor smash by jumping or using an up b after being hit.',
				'smashwiki' => 'http://www.ssbwiki.com/Meteor_smash#Meteor_cancelling',
			'inputs' => '(Jump or Up B) after being hit',
			),
			12 => 
			array (
				'id' => '13',
				'tech' => 'Ledge Stall',
				'description' => 'A technique that allows your character to re-grab the ledge with slight invulnerability.',
				'smashwiki' => 'http://www.ssbwiki.com/Ledgestall',
			'inputs' => '(Character Dependent)',
			),
			13 => 
			array (
				'id' => '16',
				'tech' => 'Wall Tech',
				'description' => 'The act of teching off of a wall during hitstun',
				'smashwiki' => 'http://www.ssbwiki.com/tech#Wall_tech',
			'inputs' => '(L or R) before landing in falling animation',
			),
			14 => 
			array (
				'id' => '17',
				'tech' => 'Jump Canceled Grab',
				'description' => 'Cancelling a jump before grabbing allows your character to perform a standing grab. This is a vital technique when running in for a grab because it replaces the slow dash-grab with a quicker standing grab.',
				'smashwiki' => 'http://www.ssbwiki.com/Jump-canceled_grab',
			'inputs' => '(Jump) followed immediately by (Z)',
			),
			15 => 
			array (
				'id' => '18',
				'tech' => 'Jump Canceled Up Smash',
			'description' => 'A jump-canceled up smash (JC up-smash) is a technique where a character interrupts a dash or run with a jump, which itself is then jump-canceled with an up-smash.',
				'smashwiki' => '',
			'inputs' => '(Jump) followed immediately by (Up Smash)',
			),
			16 => 
			array (
				'id' => '21',
				'tech' => 'Wave Land',
				'description' => 'Wavelands are wavedashes performed when jumping onto platforms to increase mobility across the stage. It can also be used when falling from an empty hop to fake out or bait opponents.',
				'smashwiki' => 'http://www.ssbwiki.com/wavedash#Wavelanding',
			'inputs' => '(wavedash before landing)',
			),
			17 => 
			array (
				'id' => '22',
				'tech' => 'Short Hop Laser',
				'description' => 'Shorthop lasers take advantage of canceling the ending lag of Falco\'s lasers by landing. By short hopping, firing a laser, and fast falling, Falco can fire lasers at a much faster rate than when standing. Combining this added mobility while firing lasers will help lock down and stop an opponents approach. ',
				'smashwiki' => 'http://supersmashbros.wikia.com/wiki/Short_hop_laser',
			'inputs' => '(Jump), (Fast Fall), (Laser)',
			),
			18 => 
			array (
				'id' => '23',
				'tech' => 'Power Shielding',
				'description' => ' Using your shield against projectiles right when an attack\'s hitbox is about to connect will reflect the projectile in the opposite direction, dealing 50% damage and knockback',
				'smashwiki' => 'http://www.ssbwiki.com/Powershield',
			'inputs' => '(L or R) right before an attack',
			),
			19 => 
			array (
				'id' => '24',
				'tech' => 'Float Canceling',
			'description' => 'Float canceling is a bug relating to floating. If Peach uses an aerial attack while floating, landing during the attack (whether still floating or not) will skip landing lag entirely and result in a normal landing instead.',
				'smashwiki' => 'http://www.ssbwiki.com/Floating#Float_canceling',
				'inputs' => '',
			),
			20 => 
			array (
				'id' => '25',
				'tech' => 'Jab Reset',
				'description' => 'Jab resets is a technique that is performed by jabbing an opponent while they are knocked down. The jab will force the opponent to stand up, where the opponent can then hit them with almost any move they desire',
				'smashwiki' => 'http://www.ssbwiki.com/jab_reset',
			'inputs' => '(a)',
			),
			21 => 
			array (
				'id' => '26',
				'tech' => 'Tech Chasing',
				'description' => 'tech chasing is the act of following your opponent after a knockdown. There are three options of techs, left roll, right roll, and neutral. Tech chasing is the act of punishing either of the three options with an attack',
				'smashwiki' => 'http://www.ssbwiki.com/Tech-chasing',
				'inputs' => '',
			),
			22 => 
			array (
				'id' => '27',
				'tech' => 'Wave Shine',
				'description' => 'A wave shine is a wavedash done immediately out of a shine. It can be done by Fox and Falco.',
				'smashwiki' => 'http://www.ssbwiki.com/Waveshine',
			'inputs' => '(Down + B) followed by (Wave Dash)',
			),
			23 => 
			array (
				'id' => '28',
				'tech' => 'Moonwalk',
				'description' => 'A technique that allows for the character to move in the opposite direction while dashing. This move can be done by all characters, and is often used to gain backwards momentum for a jump. If done correctly, it can be crucial for edgeguarding and ledge grabbing.
',
				'smashwiki' => 'http://www.ssbwiki.com/Moonwalk',
				'inputs' => '',
			),
			24 => 
			array (
				'id' => '31',
				'tech' => 'Shield Drop',
				'description' => 'A technique that allows for your character to smoothly fall through a soft platform while shielding',
				'smashwiki' => 'http://www.ssbwiki.com/Shield_platform_dropping',
				'inputs' => '',
			),
			25 => 
			array (
				'id' => '33',
				'tech' => 'Aerial Interrupt',
			'description' => 'Use an aerial attack in a way that causes you to land on a platform which would not have happened without the aerial attack. The reason is a downward shift of your characterâ€™s environment collision box (ECB) bound to the attack or, more specifically, your characterâ€™s bone alignment on a given frame.',
				'smashwiki' => 'www.ssbwiki.com/Aerial_interrupt',
				'inputs' => '',
			),
			26 => 
			array (
				'id' => '34',
				'tech' => 'Edge Hog',
				'description' => 'Grabbing the ledge so other characters canâ€™t grab it.',
				'smashwiki' => 'www.ssbwiki.com/Edge-hogging',
				'inputs' => '',
			),
			27 => 
			array (
				'id' => '35',
				'tech' => 'Run Cancel',
				'description' => 'During a characterâ€™s running animation, holding down will cancel the run into a crouch.',
				'smashwiki' => 'www.ssbwiki.com/Dash-canceling#Crouching_.28Melee_only.29',
				'inputs' => '',
			),
		));
	}

}
