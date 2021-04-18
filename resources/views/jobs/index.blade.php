@extends('layouts.app')

@section('pageTitle', 'Jobs')

@push('css')

@endpush

@section('content')



     <!-- Banner -->
     <div class="banner banner-3 banner-3-bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="banner-content">
              <h1>{{ $jobCount }} Job Listed</h1>
              <p>Create free account to find thousands Jobs, Employment & Career Opportunities around you!</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->

    <!-- Search and Filter -->
    <div class="searchAndFilter-wrapper-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="searchAndFilter-block">
              <div class="searchAndFilter searchAndFilter-2">
                <form method="GET" action="{{ route('search') }}" class="search-form">
                  <input value="{{ isset($query) ? $query : '' }}" name="query" type="text" placeholder="Enter Keywords"/>
                    <select name="location" class="selectpicker" id="search-location">
                      <option value="" selected>Location</option>
                      @foreach ($districts as $district)
                      <option value="{{ $district->name }}">{{ $district->name }}</option>
                      @endforeach
                    </select>
                    
                    <button class="button" type="submit">
                      <i class="fas fa-search"></i>Search Job
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Search and Filter End -->


    <!-- Jobs -->
    <div class="section-padding-bottom alice-bg">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-header section-header-2 section-header-with-right-content">
              <h2>Recent Jobs</h2>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
              @foreach($jobs as $job)
            <div class="job-list">
              <div class="thumb">
                <a href="#">
                  <img src="{{ asset('styles/images/job/company-logo-3.png') }}" class="img-fluid" alt="">
                </a>
              </div>
              <div class="body">
                <div class="content">
                  <h4><a href="{{ route('job.show',$job->id)}}">{{ $job->title }}</a></h4>
                  <div class="info">
                    <span class="company"><a href="#"><i data-feather="briefcase"></i>{{ $job->company }}</a></span>
                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{ $job->location }}</a></span>
                    <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>{{ $job->salary }} Taka</a></span>
                  </div>
                </div>
                <div class="more">
                  <div class="buttons">
                    <a href="{{ route('user.jobapply.show',$job->id)}}" class="button">Apply Now</a>
                    <a href="#" class="favourite"><i class="fas fa-bookmark"></i></a>
                  </div>
                  <p class="deadline">Deadline: {{$job->deadline}}</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
        <div class="d-flex justify-content-center">
          {!! $jobs->links() !!}
        </div>
      </div>
    </div>
    <!-- Jobs End -->


    @endsection


@push('js')


@endpush