@extends('layouts.admin.master')
@section('content')
<h1>Create a New type</h1>

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>


{!! Form::open(array(
    'route' => 'admin.type.store', 
    'class' => 'form',
    'novalidate' => 'novalidate',
    'files' => true
    )) !!}
    
    <div class="form-group">
        {!! Form::label('Name') !!}
        {!! Form::text('name', null, array('required', 'class'=>'form-control','placeholder'=>'Dhaka')) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Submit', array('class'=>'btn btn-primary')) !!}
    </div>
{!! Form::close() !!}
@stop

