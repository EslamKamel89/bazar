<div class="ml-5">
    @php
		$class = '';
		if ( $category->depth === 0 ) {
			$class = 'font-bold text-md ';
		} elseif ( $category->depth % 2 === 1 ) {
			$class = ' text-blue-500';
		} else {
			$class = ' text-red-500';
		}
	@endphp
    <a href="/categories/{{$category->slug}}" class="{{$class}}">
        <i class="fa-solid fa-chevron-right mr-2 text-sm"></i> {{$category->title}}</a>
    @foreach ( $category->children as $child )
		<x-categories :category="$child" />
	@endforeach
</div>