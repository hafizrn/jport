@extends('layouts.user.master')

@section('content')

    <!-- Candidates Details -->
    <form action="{{route('user.jobapply.store')}}" class="job-post-form" method="POST">
      @csrf
      <input type="text" name="employer_id" class="form-control" value="{{ $jobs->user_id }}" hidden>
      <div class="basic-info-input">
          <h4><i data-feather="plus-circle"></i>Apply Job</h4>
  
          <div id="job-title" class="form-group row">
              <div class="col-md-12">
                    <label class="col-form-label">{{ $jobs->title }}</label>
              <input type="text" name="job_id" class="form-control" value="{{ $jobs->id }}" hidden>
          </div>
          </div>

          <div id="job-title" class="form-group row">
          <label class="col-md-3 col-form-label">Expected salary</label>
          <div class="col-md-9">
              <input type="text" name="expected_salary" class="form-control">
              <label class="col-form-label">Job Owner Range: {{ $jobs->salary }}</label>
          </div>
          </div>
          
  
          <div class="form-group row">
          <label class="col-md-3 col-form-label"></label>
          <div class="col-md-9">
              <input class="button" type="submit" name="submit" value="Apply This Job" />
          </div>
          </div>
      </div>
      </form>
              
  
@endsection


