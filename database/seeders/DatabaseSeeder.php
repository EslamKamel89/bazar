<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	protected $fakeCategories = [ 
		[ 
			'parent_id' => null,
			'title' => 'Televisions',
			'slug' => 'televisions',
			'description' => 'Wide range of smart and high-definition televisions for the ultimate viewing experience.',
		],
		[ 
			'parent_id' => null,
			'title' => 'House Electronics',
			'slug' => 'house-electronics',
			'description' => 'Essential electronics for your home, including kitchen appliances, audio systems, and more.',
		],
		[ 
			'parent_id' => null,
			'title' => 'Gaming',
			'slug' => 'gaming',
			'description' => 'Latest gaming consoles, accessories, and gear for an immersive gaming experience.',
		],
		[ 
			'parent_id' => null,
			'title' => 'General',
			'slug' => 'general',
			'description' => 'Miscellaneous electronics and gadgets for various needs and purposes.',
		],
		[ 
			'parent_id' => 1,
			'title' => 'Smart Televisions',
			'slug' => 'smart-televisions',
			'description' => 'High-definition smart TVs with internet connectivity and streaming capabilities.',],
		[ 
			'parent_id' => 2,
			'title' => 'Home Audio Systems',
			'slug' => 'home-audio-systems',
			'description' => 'Advanced home audio systems including speakers, soundbars, and home theater setups.',],
		[ 
			'parent_id' => 2,
			'title' => 'Kitchen Appliances',
			'slug' => 'kitchen-appliances',
			'description' => 'Modern kitchen appliances like refrigerators, microwaves, and dishwashers.',],
		[ 
			'parent_id' => 2,
			'title' => 'Vacuum Cleaners',
			'slug' => 'vacuum-cleaners',
			'description' => 'Efficient vacuum cleaners, including robotic and handheld models for home cleaning.',],
		[ 
			'parent_id' => 4,
			'title' => 'Air Conditioners',
			'slug' => 'air-conditioners',
			'description' => 'Air conditioning units for optimal cooling and climate control in your home.',],
		[ 
			'parent_id' => 2,
			'title' => 'Home Security Systems',
			'slug' => 'home-security-systems',
			'description' => 'Comprehensive home security systems including cameras, alarms, and monitoring services.',],
		[ 
			'parent_id' => 4,
			'title' => 'Smart Lighting',
			'slug' => 'smart-lighting',
			'description' => 'Innovative smart lighting solutions to control your home lighting remotely and automate settings.',],
		[ 
			'parent_id' => 4,
			'title' => 'Personal Care Electronics',
			'slug' => 'personal-care-electronics',
			'description' => 'Personal care electronics such as electric shavers, hair dryers, and health monitors.',],
		[ 
			'parent_id' => 3,
			'title' => 'Gaming Consoles',
			'slug' => 'gaming-consoles',
			'description' => 'Latest gaming consoles and accessories for an immersive gaming experience.',],
		[ 
			'parent_id' => 3,
			'title' => 'Wearable Technology',
			'slug' => 'wearable-technology',
			'description' => 'Wearable tech including smartwatches, fitness trackers, and health monitoring devices.',],
		[ 
			'parent_id' => 10,
			'title' => 'Surveillance Cameras',
			'slug' => 'surveillance-cameras',
			'description' => 'High-quality surveillance cameras to monitor your property and ensure safety.'
		],
		[ 
			'parent_id' => 10,
			'title' => 'Alarm Systems',
			'slug' => 'alarm-systems',
			'description' => 'Reliable alarm systems that alert you to potential intrusions and emergencies.'
		],
		[ 
			'parent_id' => 10,
			'title' => 'Smart Locks',
			'slug' => 'smart-locks',
			'description' => 'Advanced smart locks to control and monitor access to your home remotely.'
		],
	];
	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		User::create( [ 
			'name' => 'admin',
			'email' => 'admin@gmail.com',
			'password' => '123456789',
		] );
		foreach ( $this->fakeCategories as $key => $category ) {
			Category::create( $category );
		}

	}
}

/*
id = 1 , 'parent_id' => null, 'title' => 'Televisions',
	id = 5 , 'parent_id' => 1, 'title' => 'Smart Televisions',

id = 2 , 'parent_id' => null, 'title' => 'House Electronics',\
	id = 6 ,'parent_id' => 2, 'title' => 'Home Audio Systems',
	id = 7 , 'parent_id' => 2, 'title' => 'Kitchen Appliances',
	id = 8, 'parent_id' => 2,'title' => 'Vacuum Cleaners',
	id = 10 , 'parent_id' => 2,'title' => 'Home Security Systems',
		id = 15 , 'parent_id' => 10,'title' => 'Surveillance Cameras',
		id = 16 , 'parent_id' => 10,'title' => 'Alarm Systems',
		id = 17 , 'parent_id' => 10,'title' => 'Smart Locks',

id = 3 , 'parent_id' => null, 'title' => 'Gaming',
	id = 13 , 'parent_id' => 3,'title' => 'Gaming Consoles',
	id = 14  ,'parent_id' => null, 'title' => 'Wearable Technology',

id = 4 , 'parent_id' => null,  'title' => 'General',
	id = 9 , 'parent_id' => 4, 'title' => 'Air Conditioners',
	id = 11 , 'parent_id' => 4, 'title' => 'Smart Lighting',
	id = 12 , 'parent_id' => 4,'title' => 'Personal Care Electronics',

*/






