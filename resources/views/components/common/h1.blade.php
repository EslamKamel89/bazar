<h1 {{ $attributes->merge( [ 
	'class' => "text-2xl font-bold text-center text-gray-800 bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent p-4 rounded-lg shadow-lg",
] ) }}>
    {{$slot}}
</h1>