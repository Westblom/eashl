@extends('layouts.main')

@section('content')

@if(Session::get('message'))
<div class="alert alert-success"> {{Session::get('message')}} </div>
@endif
<h2>Dashboard</h2>

@foreach($cards as $card)
	{{$card->player->alias}}
<br>		
<b>C: </b>	{{$card->C}} ({{ $card->player->C - $card->C}})
<br>
<b>LW: </b>	{{$card->L}} ({{ $card->player->L - $card->L}})
<br>
<b>RW: </b>	{{$card->R}} ({{ $card->player->R - $card->R}})
<br>
<b>D: </b>	{{$card->D}} ({{ $card->player->D - $card->D}})
<br>
<b>G: </b>	{{$card->G}} ({{ $card->player->G - $card->G}})
@endforeach

@stop