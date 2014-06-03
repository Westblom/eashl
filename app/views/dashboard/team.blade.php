@extends('layouts.main')

@section('content')
<h1>My Team</h1>


<h1>My Players</h1>


	<table class="table table-striped">

	<tr>
		<th>Player</th>
		<th>Center</th>
		<th>Left wing</th>
		<th>Right wing</th>
		<th>Defender</th>
		<th>Goalie</th>
		<th></th>
	</tr>
	@foreach($myCards as $card)

				<tr>
					<td>{{$card->player->alias}}</td>
					<td>{{$card->C}}</td>
					<td>{{$card->L}}</td>
					<td>{{$card->R}}</td>
					<td>{{$card->D}}</td>
					<td>{{$card->G}}</td>
					<td><div class="text-success"><b>{{Card::rollCompare($card->id)}}</b></div></td>
				</tr>
						
						
	@endforeach
	</table>
	
@stop