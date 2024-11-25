<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Homepage extends Component {
	public function render() {
		$categories = Category::tree()->get()->toTree();
		return view(
			'livewire.homepage',
			[ 
				'categories' => $categories,
			]
		);
	}
}
