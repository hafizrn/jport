@extends('layouts.employer.master')
@section('content')

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>




<form action="{{route('admin.job.store')}}" class="job-post-form" method="POST">
        @csrf
        <div class="basic-info-input">
            <h4><i data-feather="plus-circle"></i>Edit A Job</h4>
            <div id="job-title" class="form-group row">
            <label class="col-md-3 col-form-label">Job Title</label>
            <div class="col-md-9">
                <input type="text" name="title" class="form-control" placeholder="Your job title here">
            </div>
            </div>
            <div id="job-summery" class="row">
            <label class="col-md-3 col-form-label">Job Summery</label>
            <div class="col-md-9">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">

                    <select name="catagory_id" class="form-control">
                        <option>Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    <i class="fa fa-caret-down"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="location" class="form-control" placeholder="Job Location">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="type_id" class="form-control">
                            <option>Select type</option>
                            @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
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
                            <option value="{{ $level->id }}">{{ $level->name }}</option>
                            @endforeach
                        </select>
                    <i class="fa fa-caret-down"></i>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="vacancy" class="form-control" placeholder="Vacancy">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="age" class="form-control" placeholder="Age Range">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="salary" class="form-control" placeholder="Salary Range">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="experiences" class="form-control" placeholder="Experiences">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <select name="gender" class="form-control">
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Both">Both</option>
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
                        <input type="date" name="deadline" class="form-control">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div id="job-description" class="row">
            <label class="col-md-3 col-form-label">Job instruction</label>
            <div class="col-md-9">
                <textarea name="instruction" class="form-control" placeholder="instruction text here"></textarea>
            </div>
            </div>
            <div id="response" class="row">
            <label class="col-md-3 col-form-label">Responsibilities</label>
            <div class="col-md-9">
                <textarea name="responsibilities" class="form-control" placeholder="Responsibilities (Optional)"></textarea>
            </div>
            </div>
            <div id="education" class="row">
            <label class="col-md-3 col-form-label">Education</label>
            <div class="col-md-9">
                <textarea name="educational_qualification" class="form-control" placeholder="Educational Qualification"></textarea>
            </div>
            </div>
            <div id="others" class="row">
            <label class="col-md-3 col-form-label">Additional Requirements</label>
            <div class="col-md-9">
                <textarea name="additional_requirements" class="form-control" placeholder="Additional Requirements text here"></textarea>
            </div>
            </div>
            <div id="post-location" class="form-group row">
            <label class="col-md-3 col-form-label">Apply Area</label>
            <div class="col-md-9">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email for CV">
                    </div>
                    <div class="form-group">
                    <input type="text" name="contactperson" class="form-control" placeholder="Contact Info for Interview">
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
                    <input type="text" name="company" class="form-control" placeholder="Company Name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                    <textarea name="company_info" class="form-control" placeholder="Company Profile"></textarea>
                    </div>
                </div>
                </div>
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

