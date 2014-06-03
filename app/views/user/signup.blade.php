@extends('layouts.main')

@section('content')






{{ Form::open() }}


<div class="row">
<div class="form-group col-md-4 col-md-offset-2">
<h3>Login Details</h3>

  {{ Form::text('email', Input::old('email'),
    array(
      'class' => 'input form-control',
      'placeholder' => 'email',
    ))
  }}
  
  @if($errors->has('email'))
    <div class="alert alert-info">
      {{$errors->first('email')}}
    </div>
  @endif


  {{ Form::password('password',
    array(
      'class' => 'input form-control',
      'placeholder' => 'password',
    ))
  }}

  {{ Form::password('password_confirmation',
    array(
      'class' => 'input form-control',
      'placeholder' => 'repeat password',
    ))
  }}

  @if($errors->has('password'))
    <div class="alert alert-info">
      {{$errors->first('password')}}
    </div>
  @endif

</div>

<div class="form-group col-md-4">
  <h3>Your details</h3>

  {{ Form::text('first_name', Input::old('first_name'),
    array(
      'class' => 'input form-control',
      'placeholder' => 'first name'
    ))
  }}

  @if($errors->has('first_name'))
    <div class="alert alert-info">
      {{$errors->first('first_name')}}
    </div>
  @endif

  {{ Form::text('last_name', Input::old('last_name'),
    array(
      'class' => 'input form-control',
      'placeholder' => 'last name'
    ))
  }}

  @if($errors->has('last_name'))
    <div class="alert alert-info">
      {{$errors->first('last_name')}}
    </div>
  @endif

    {{ Form::submit('Sign up',
    array(
      'class' => 'btn btn-primary btn-block',
    ))
  }}
  
</div>

</div>
<div class="row col-md-offset-3">

</div>

@stop