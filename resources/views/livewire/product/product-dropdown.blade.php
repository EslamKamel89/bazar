<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Computed;
use App\Models\Vartiation;
new class extends Component {
	//
	public $variations;
	public $selectedVariation;

	#[Computed ]
	public function selectedVariationModel() {
		if ( ! $this->selectedVariation ) {
			return;
		}
		return Vartiation::find( $this->selectedVariation );
	}

	public function updatedSelectedVariation() {
		// $this->dispatch( )
	}

}; ?>

<div class="mt-3">

    <h3 class="font-semibold mb-1">{{Str::title( $variations?->first()?->type )}}</h3>
    <x-common.select wire:model.live="selectedVariation">
        <option value="">Choose an Option</option>
        @foreach ( $variations as $variation )
			<option value="{{$variation->id}}">{{$variation->title}}</option>
		@endforeach
        @php
			App\Pr::_( $this->selectedVariationModel )
		@endphp
    </x-common.select>
</div>