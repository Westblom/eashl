@extends('layouts.main')

@section('content')

<h1>{{$pack->name}}</h1>

	<div class="packs">
	@foreach($newCards as $card)
	
		{{Card::display($card->id)}}

	@endforeach
	</div>
@stop