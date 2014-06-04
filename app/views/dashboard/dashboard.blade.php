@extends('layouts.main')

@section('content')

@if(Session::get('message'))
<div class="alert alert-success"> {{Session::get('message')}} </div>
@endif
<h2>Dashboard</h2>



@stop