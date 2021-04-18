@extends('layouts.employer.master')
@section('content')

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>




<form action="{{route('employer.job.update',$jobs->id)}}" class="job-post-form" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="basic-info-input">
        <h4><i data-feather="plus-circle"></i>Post  A Job</h4>
        <div id="job-title" class="form-group row">
        <label class="col-md-3 col-form-label">Job Title</label>
        <div class="col-md-9">
            <input type="text" name="title" class="form-control" value="{{ $jobs->title }}" >
        </div>
        </div>
        <div id="job-summery" class="row">
        <label class="col-md-3 col-form-label">Job Summery</label>
        <div class="col-md-9">
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">

                <select name="category_id" class="form-control">
                    <option>Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id==$jobs->category_id? 'selected':'' }}>{{ $category->name }}</option>
                    @endforeach
                </select>

                <i class="fa fa-caret-down"></i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="location" class="form-control" value="{{ $jobs->location }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select name="type_id" class="form-control">
                        <option>Select type</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id==$jobs->type_id ? 'selected':'' }}>{{ $type->name }}</option>
                        @endforeach
                    </select>
                <i class="fa fa-caret-down"></i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <select name="level_id" class="form-control">
                        <option>Select Level</option>
                        @foreach ($levels as $level)
                        <option value="{{ $level->id }}" {{ $level->id==$jobs->level_id? 'selected':'' }}>{{ $level->name }}</option>
                        @endforeach
                    </select>
                <i class="fa fa-caret-down"></i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="vacancy" class="form-control" value="{{ $jobs->vacancy }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="age" class="form-control" value="{{ $jobs->age }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="salary" class="form-control" value="{{ $jobs->salary }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="experiences" class="form-control" value="{{ $jobs->experiences }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <select name="gender" class="form-control">
                    <option>Select Gender</option>
                    <option value="Male" {{ $jobs->gender=='Male'? 'selected':'' }}>Male</option>
                    <option value="Female"{{ $jobs->gender=='Female'? 'selected':'' }}>Female</option>
                    <option value="Both" {{ $jobs->gender=='Both'? 'selected':'' }}>Both</option>
                </select>
                <i class="fa fa-caret-down"></i>
                </div>
            </div>

            </div>
        </div>
        </div>
        <div id="deadline" class="row">
            <label class="col-md-3 col-form-label">Job Deadline</label>
            <div class="col-md-9">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group datepicker">
                    <input type="date" name="deadline" class="form-control" value="{{ $jobs->deadline }}">
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div id="job-description" class="row">
        <label class="col-md-3 col-form-label">Job instruction</label>
        <div class="col-md-9">
            <textarea name="instruction" class="form-control"> {{ $jobs->instruction }}</textarea>
        </div>
        </div>
        <div id="response" class="row">
        <label class="col-md-3 col-form-label">Responsibilities</label>
        <div class="col-md-9">
            <textarea name="responsibilities" class="form-control">{{ $jobs->responsibilities }}</textarea>
        </div>
        </div>
        <div id="education" class="row">
        <label class="col-md-3 col-form-label">Education</label>
        <div class="col-md-9">
            <textarea name="educational_qualification" class="form-control">{{ $jobs->educational_qualification }}</textarea>
        </div>
        </div>
        <div id="others" class="row">
        <label class="col-md-3 col-form-label">Additional Requirements</label>
        <div class="col-md-9">
            <textarea name="additional_requirements" class="form-control">{{ $jobs->additional_requirements }}</textarea>
        </div>
        </div>
        <div id="post-location" class="form-group row">
        <label class="col-md-3 col-form-label">Apply Area</label>
        <div class="col-md-9">
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="email" class="form-control" value="{{ $jobs->email }}">
                </div>
                <div class="form-group">
                <input type="text" name="contactperson" class="form-control" value="{{ $jobs->contactperson }}">
                </div>
            </div>
            </div>
        </div>
        </div>
        <div id="about-company" class="row">
        <label class="col-md-3 col-form-label">About Company</label>
        <div class="col-md-9">
            <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <input type="text" name="company" class="form-control" value="{{ $jobs->company }}">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <textarea name="company_info" class="form-control">{{ $jobs->company_info }}</textarea>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="form-group row">
        <label class="col-md-3 col-form-label"></label>
        <div class="col-md-9">
            <input class="button" type="submit" name="submit" value="Update Job" />
        </div>
        </div>
    </div>
    </form>

    



@stop

