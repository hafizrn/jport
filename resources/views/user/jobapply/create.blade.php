@extends('layouts.admin.master')
@section('content')

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>
@if (Session::has('message'))
<div class="alert alert-error">{{Session::get('message')}}</div>
 @endif
          
    
<form action="{{route('job.store')}}" class="job-post-form" method="POST">
    @csrf
    <div class="basic-info-input">
        <h4><i data-feather="plus-circle"></i>Apply Job</h4>

        <div id="job-title" class="form-group row">
        <label class="col-md-3 col-form-label">{{ $jobs->title }}</label>
        <div class="col-md-9">
            <input type="text" name="job_id" class="form-control" value="{{ $jobs->id }}" hidden>
        </div>
        </div>

        <div id="job-title" class="form-group row">
        <label class="col-md-3 col-form-label">Expected salary</label>
        <div class="col-md-9">
            <input type="text" name="expected_salary" class="form-control">
        </div>
        </div>
        

        <div class="form-group row">
        <label class="col-md-3 col-form-label"></label>
        <div class="col-md-9">
            <input class="button" type="submit" name="submit" value="Post Your Job" />
        </div>
        </div>
    </div>
    </form>
            


@stop

