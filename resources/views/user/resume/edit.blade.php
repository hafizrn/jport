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



<form action="{{ route('user.resume.update',$resumes->id) }}" class="job-post-form" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="basic-info-input">
    <h4><i data-feather="plus-circle"></i>Add Resume</h4>
    <div id="information" class="row">
    <label class="col-md-3 col-form-label">Information</label>
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <textarea name="objective" class="form-control">{{ $resumes->objective }}</textarea>
                </div>
            </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="present_salary" class="form-control" value="{{ $resumes->present_salary }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="expected_salary" class="form-control"  value="{{ $resumes->expected_salary }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="preferred_categories" class="form-control"  value="{{ $resumes->preferred_categories }}">
            </div>
        </div>
        <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="special_qualification" class="form-control"  value="{{ $resumes->special_qualification }}">
                </div>
            </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="skills" class="form-control"  value="{{ $resumes->skills }}">
            </div>
        </div>

        </div>
    </div>
    </div>
    <div id="about" class="row">
    <label class="col-md-3 col-form-label">About You</label>
    <div class="col-md-9">
        <textarea name="about" class="form-control">{{ $resumes->about }}</textarea>
    </div>
    </div>
    <div id="about" class="row">
        <label class="col-md-3 col-form-label">career_summary</label>
        <div class="col-md-9">
            <textarea name="career_summary" class="form-control">{{ $resumes->career_summary }}</textarea>
        </div>
    </div>


    <div id="details" class="row">
    <label class="col-md-3 col-form-label">Personal Details</label>
    <div class="col-md-9">
        <div class="row">
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="first_name" class="form-control" value="{{ $resumes->first_name }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="last_name" class="form-control" value="{{ $resumes->last_name }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="fathers_name" class="form-control" value="{{ $resumes->fathers_name }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="mothers_name" class="form-control" value="{{ $resumes->mothers_name }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <select name="gender" class="form-control">
                <option>Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <i class="fa fa-caret-down"></i>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="birthdate" class="form-control" value="{{ $resumes->birthdate }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="religion" class="form-control" value="{{ $resumes->religion }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="marital_status" class="form-control" value="{{ $resumes->marital_status }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="nationality" class="form-control" value="{{ $resumes->nationality }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="national_id" class="form-control" value="{{ $resumes->national_id }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="mobile_no" class="form-control" value="{{ $resumes->mobile_no }}">
            </div>
        </div>    
        <div class="col-md-6">
            <div class="form-group">
            <input type="text" name="email" class="form-control" value="{{ $resumes->email }}">
            </div>
        </div>        

        <div class="col-md-12">
            <div class="form-group">
            <input type="text" name="present_address" class="form-control" value="{{ $resumes->present_address }}">
            </div>
        </div>
        
        <div class="col-md-12">
            <div class="form-group">
            <input type="text" name="permanent_address" class="form-control" value="{{ $resumes->permanent_address }}">
            </div>
        </div>
        </div>
    </div>
    </div>
    <div id="about" class="row">
        <label class="col-md-3 col-form-label">Photo</label>
        <div class="col-md-9">
            <input type="file" name="photo"/>
        </div>
    </div>
    <div class="form-group row">
    <label class="col-md-3 col-form-label"></label>
    <div class="col-md-9">
        <input class="button" type="submit" name="submit" value="Publish Resume" />
    </div>
    </div>
</div>
</form>

@endsection

