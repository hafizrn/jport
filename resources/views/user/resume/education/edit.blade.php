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



<form action="{{ route('user.education.update',$education->id) }}" class="job-post-form" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="basic-info-input">
        <h4><i data-feather="plus-circle"></i>Add Resume</h4>
        <div class="row">
            <label class="col-md-3 col-form-label">Exam Name</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="exam_name" value="{{ $education->exam_name }}" placeholder="Exam Name"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Result</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="result" value="{{ $education->result }}" placeholder="Result"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Institute</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="institute" value="{{ $education->institute }}" placeholder="School/College/Madrasah Name"/>
            </div>
        </div>
        
        <div class="row">
            <label class="col-md-3 col-form-label">Marks</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="marks" value="{{ $education->marks }}" placeholder="Marks Total"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Examination Year</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="year" value="{{ $education->year }}" placeholder="Examination Year"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Subject</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="subject" value="{{ $education->subject }}" placeholder="Subject Name"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Duration</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="duration" value="{{ $education->duration }}" placeholder="Duration Time"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Board/ University</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="university" value="{{ $education->university }}" placeholder="Board / University Name"/>
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

