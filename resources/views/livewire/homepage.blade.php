<div>
    <x-common.h1>Categories</x-common.h1>
    <div class="p-6 grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ( $categories as $category )
			<div class="border border-gray-200 rounded-xl shadow-lg p-2">
				<x-categories :category="$category" />
			</div>
		@endforeach
    </div>
</div>