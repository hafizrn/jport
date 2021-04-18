@extends('layouts.admin.master')
@section('content')
<h1>Edit Category</h1>

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>


{!! Form::model($categories, array(
    'method' => 'put',
    'route' => ['admin.category.update',$categories->id], 
    'class' => 'form'
    )) !!}



    <div class="form-group">
        {!! Form::label('Category') !!}
        {!! Form::text('name', null, array('required', 'class'=>'form-control','placeholder'=>'Dhaka')) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update', array('class'=>'btn btn-primary')) !!}
    </div>
{!! Form::close() !!}
@stop

