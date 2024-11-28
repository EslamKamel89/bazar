<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array {
		$title = fake()->text( 10 );
		return [ 
			'title' => $title,
			'slug' => Str::slug( $title ),
			'description' => fake()->realText( 200 ),
			'price' => fake()->numberBetween( 1000, 10000 ),
			'live_at' => now()->addDays( fake()->numberBetween( 1, 200 ) ),
		];
	}
}
