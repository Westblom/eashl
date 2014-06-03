@extends('layouts.main')

@section('content')

	<h2>Store</h2>
	
	﻿		<div class="packs">

			@foreach($packs as $pack)
				<div class="col-md-3">
		    		<div class="text-center">
						<h1><i class="fa fa-file-o fa-6"></i></h1>
						<h2>{{$pack->name}}</h2>
						{{$pack->cards}} card(s)<br>
						{{$pack->rares}} guaranteed rare(s)<br>
						<br>
						<a href="{{URL::route('store.buy', $pack->id )}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy Pack</a>
						<br>
						<br>
					</div>
				</div>

			@endforeach

	

		</div>

@stop