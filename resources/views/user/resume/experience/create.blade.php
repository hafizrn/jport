@extends('layouts.user.master')
@section('content')

<ul>
	@foreach( $errors-> all () as $error)
		<li> {{ $error }} </li >
	@endforeach
</ul>
          
    <form action="{{route('user.experience.store')}}" class="job-post-form" method="POST">
        @csrf
    <div class="basic-info-input">
        <h4><i data-feather="plus-circle"></i>Add Experiance</h4>
        
        <div class="row">
            <label class="col-md-3 col-form-label">Company Name</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="company" placeholder="Company Name"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Company Type</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="company_type" placeholder="Company Type"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Designation</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="designation" placeholder="Designation"/>
            </div>
        </div>
        
        <div class="row">
            <label class="col-md-3 col-form-label">Responsibilities</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="responsibilities" placeholder="Responsibilities"/>
            </div>
        </div>
        
        <div class="row">
            <label class="col-md-3 col-form-label">Duration</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="duration" placeholder="Duration Time"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Department</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="department" placeholder="Department Name"/>
            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Location</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="location" placeholder="Location Name"/>
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





@stop

@push('js')

<script>
    tinymce.init({
      selector: 'textarea.fulltext',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
   });
  </script>

@endpush