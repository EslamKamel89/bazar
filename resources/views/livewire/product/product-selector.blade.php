<?php

use Livewire\Volt\Component;
use App\Models\Product;
new class extends Component {
	public $product;
	public $initialVariation;
	public function mount( Product $product ) {
		// App\Pr::_( $product->vartiations->sortBy( 'order' )->groupBy( 'type' )->first() );
		$this->product = $product;
		$this->initialVariation = $product->vartiations->sortBy( 'order' )->groupBy( 'type' )->first();
	}
}; ?>

<div>
    @if ( $initialVariation )
		<livewire:product.product-dropdown :variations="$initialVariation" />
	@endif
</div>