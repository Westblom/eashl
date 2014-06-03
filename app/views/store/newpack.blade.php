@extends('layouts.main')

@section('content')

<h1>{{$pack->name}}</h1>

	<div class="packs">
	@foreach($newCards as $card)

				<div class="col-md-3">
		    		<div class="text-center">
						
						<h3>{{$card->player->alias}}</h3>
						<p><b>Center: </b> {{$card->C}}</p>
						<p><b>Left Wing: </b> {{$card->L}}</p>
						<p><b>Right Wing: </b> {{$card->R}}</p>
						<p><b>Defender: </b> {{$card->D}}</p>
						<p><b>Goalie: </b> {{$card->G}}</p>
						
						
						<br>
					</div>
				</div>


	@endforeach
	</div>
@stop