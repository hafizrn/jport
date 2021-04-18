@extends('layouts.user.master')
@section('title','Update Resume')

@push('css')
    <!-- Bootstrap Select Css -->
    <link href="{{ asset('assets/backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
@section('content')

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>



<form action="{{ route('user.experience.update',$experience->id) }}" class="job-post-form" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="basic-info-input">
        <h4><i data-feather="plus-circle"></i>Update Experiance</h4>
        
        <div class="row">
            <label class="col-md-3 col-form-label">Company Name</label>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $experience->company }}" name="company" placeholder="Company Name"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Company Type</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="company_type" value="{{ $experience->company_type }}" placeholder="Company Type"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Designation</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="designation" value="{{ $experience->designation }}" placeholder="Designation"/>
            </div>
        </div>
        
        <div class="row">
            <label class="col-md-3 col-form-label">Responsibilities</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="responsibilities" value="{{ $experience->responsibilities }}" placeholder="Responsibilities"/>
            </div>
        </div>
        
        <div class="row">
            <label class="col-md-3 col-form-label">Duration</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="duration" value="{{ $experience->duration }}" placeholder="Duration Time"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Department</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="department" value="{{ $experience->department }}" placeholder="Department Name"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Location</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="location" value="{{ $experience->location }}" placeholder="Location Name"/>
            </div>
        </div>
        <div class="form-group row">
        <label class="col-md-3 col-form-label"></label>
        <div class="col-md-9">
            <input class="button" type="submit" name="submit" value="Add Experience" />
        </div>
        </div>
    </div>
</form>



@endsection

