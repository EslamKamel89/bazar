<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model {
	/** @use HasFactory<\Database\Factories\ProductFactory> */
	use HasFactory;
	protected $fillable = [ 
		'title',
		'slug',
		'description',
		'price',
		'live_at',
	];
	public function formattedPrice(): string {
		return Money::EGP( $this->price / 100, true )->format();
	}
	public function vartiations(): HasMany {
		return $this->hasMany( Vartiation::class);
	}
}
