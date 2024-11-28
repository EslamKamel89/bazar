<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Vartiation extends Model {
	/** @use HasFactory<\Database\Factories\VartiationFactory> */
	use HasFactory;
	use HasRecursiveRelationships;
	protected $fillable = [ 
		'product_id',
		'title',
		'pice',
		'type',
		'sku',
		'parent_id',
		'order',
	];
	public function product(): BelongsTo {
		return $this->belongsTo( Product::class);
	}
}
