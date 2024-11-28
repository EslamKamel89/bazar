<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create( 'vartiations', function (Blueprint $table) {
			$table->id();
			$table->foreignId( 'product_id' )->constrained();
			$table->string( 'title' );
			$table->unsignedBigInteger( 'pice' )->default( 0 );
			$table->string( 'type' ); // color , size , weight
			$table->string( 'sku' )->nullable(); // unique product identifier
			$table->unsignedBigInteger( 'parent_id' )->nullable();
			$table->integer( 'order' )->nullable();
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists( 'vartiations' );
	}
};
