@extends('layouts.main')

@section('content')



<div class="packs">
@foreach($newCards as $card)
{{Card::display($card->id)}}
@endforeach
</div>
@stop