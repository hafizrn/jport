@extends('layouts.user.master')

@section('content')
    <h1 class="display-3">Applied Jobs</h1>   
    
    @foreach($jobs as $job)
    <div class="job-list">
        <div class="thumb">
          <a href="#">
            <img src="{{ asset('styles/images/job/company-logo-3.png') }}" class="img-fluid" alt="">
          </a>
        </div>
        <div class="body">
          <div class="content">
            <h4><a href="{{ route('job.show',$job->job_id)}}">{{$job->jobs->title}}</a></h4>
            
            <div class="info">
            <span class="company"><a href="#"><i data-feather="briefcase"></i>{{$job->jobs->company}}</a></span>
              <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{$job->jobs->location}}</a></span>
              <span class="job-type freelance"><a href="#"><i data-feather="clock"></i>{{$job->jobs->salary}} Taka</a></span>
            </div>
          </div>
          <div class="more">
            <p class="deadline">Deadline: {{$job->jobs->deadline}}</p>
          </div>
        </div>
      </div>
      @endforeach
@endsection