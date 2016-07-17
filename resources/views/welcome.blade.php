@extends('layouts.app')

@section('content')

	@foreach ($pages as $link => $text)

		<section class="section {{ $link }}" id="{{ $link }}">
			@include($link)
		</section>

	@endforeach

@endsection
