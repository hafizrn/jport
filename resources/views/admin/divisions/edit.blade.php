@extends('layouts.admin.master')
@section('content')
<h1>Edit Division</h1>

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>


{!! Form::model($divisions, array(
    'method' => 'put',
    'route' => ['admin.division.update',$divisions->id], 
    'class' => 'form'
    )) !!}



    <div class="form-group">
        {!! Form::label('Name') !!}
        {!! Form::text('name', null, array('required', 'class'=>'form-control','placeholder'=>'San')) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}
    </div>
{!! Form::close() !!}
@stop

