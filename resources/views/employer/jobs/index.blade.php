@extends('layouts.employer.master')

@section('content')
    <h1 class="display-3">Jobs</h1>    
    <a href="{{ route('employer.job.create')}}" class="btn btn-primary">Add Job</a>
    @foreach ($jobs as $job)
    
    <div class="job-list">
        <div class="thumb">
          <a href="#">
            <img src="{{ asset('styles/images/job/company-logo-3.png') }}" class="img-fluid" alt="">
          </a>
        </div>
        <div class="body">
          <div class="content">
            <h4><a href="{{ route('employer.job.show',$job->id)}}">{{$job->title}}</a></h4>
            <div class="info">
            <span class="company"><a href="#"><i data-feather="briefcase"></i>{{ $job->company }}</a></span>
              <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{ $job->location }}</a></span>
              <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>{{ $job->salary }} Taka</a></span>
            </div>
          </div>
          <div class="more">
            <div class="buttons">
              <a href="{{ route('employer.job.edit',$job->id)}}" class="button" title="Edit"><i data-feather="edit"></i></a>
            </div>
            <p class="deadline">Deadline: {{$job->deadline}}</p>
          </div>
        </div>
      </div>
      @endforeach
@endsection