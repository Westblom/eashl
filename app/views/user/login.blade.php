@extends('layouts.main')

@section('content')
		<div class="col-md-4 col-md-offset-4">
       <div class="form-group">
         
         {{ Form::open(array('url' => 'login', 'method' => 'post', 'class' => 'form-horizontal'));}}
        
        {{ Form::text('email', Input::old('email'),
                array( 
                'class' => 'input square form-control',
                'placeholder' => 'email',))
            }}

        </div>
          
          <div class="form-group">
           

        {{ Form::password('password',
            array(
            'class' => 'input square form-control',
            'placeholder' => 'password'))
        }}       

          </div>

          <div class="form-group">

          {{ Form::submit('login', 
          array('class' => 'btn btn-success btn-block')); }}
            </div>

    {{ Form::close(); }}

      </div>
</div>
@stop