@foreach (explode(' ', 'name title email message') as $key)
	@if (isset($data[$key]))
		{{ sprintf("%s: %s\n", $key, $data[$key]) }}
	@endif
@endforeach
