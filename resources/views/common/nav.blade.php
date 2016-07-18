@foreach ($pages as $link => $text)
	<li>
		<a href="#{{ $link }}">{{ $text }}</a>
	</li>
@endforeach
