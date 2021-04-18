@extends('layouts.employer.master')
@section('content')
<h1>Update Profile</h1>

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>




<form action="{{route('employer.profile.update',$profiles->id)}}" class="job-post-form" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="basic-info-input">
            <h4><i data-feather="plus-circle"></i>Add Your Information</h4>
            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Company Name</label>
            <div class="col-md-9">
                <input type="text" name="company" class="form-control" value="{{ $profiles->company }}">
            </div>
            </div>
            
            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Email Address</label>
            <div class="col-md-9">
                <input type="text" name="email" class="form-control" value="{{ $profiles->email }}">
            </div>
            </div>


            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Phone No</label>
            <div class="col-md-9">
                <input type="text" name="phone" class="form-control" value="{{ $profiles->phone }}">
            </div>
            </div>      

            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Address</label>
            <div class="col-md-9">
                <input type="text" name="address" class="form-control" value="{{ $profiles->address }}">
            </div>
            </div>

            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Location</label>
            <div class="col-md-9">
                <input type="text" name="location" class="form-control" value="{{ $profiles->location }}">
            </div>
            </div>

            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Category</label>
            <div class="col-md-9">
                <input type="text" name="category" class="form-control" value="{{ $profiles->category }}">
            </div>
            </div>


            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">About</label>
            <div class="col-md-9">
                <input type="text" name="about" class="form-control" value="{{ $profiles->about }}">
            </div>
            </div>

            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Photo</label>
            <div class="col-md-9">
                <input type="file" name="photo" class="form-control">
            </div>
            </div>

            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Website</label>
            <div class="col-md-9">
                <input type="text" name="website" class="form-control" value="{{ $profiles->website }}">
            </div>
            </div>

            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Company Logo</label>
            <div class="col-md-9">
                <input type="file" name="companylogo" class="form-control">
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

@endsection

