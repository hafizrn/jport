@extends('layouts.app')

@section('pageTitle', 'Home')

@push('css')

@endpush

@section('content')



    <!-- Banner -->
    <div class="banner banner-3 banner-3-bg">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="banner-content">
              <h1>Total {{ $jobCount }} Job Listed</h1>
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

    <div class="section-padding-top padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-header">
              <h2>Explore The Right Job</h2>
              <p>Some key info for find job easily</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="explore-job">
              <div class="explore-job-header">
                <h5 class="title">TOP Category</h5>
                <i data-feather="bookmark"></i>
              </div>
              <div class="key-info">
                <ul>
                  @foreach ($categories as $category)
                  <li>
                    <a href="{{ route('category.jobs',$category->id)}}">{{ $category->name }}
                      <span></span>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="explore-job">
              <div class="explore-job-header">
                <h5 class="title">TOP Cities</h5>
                <i data-feather="map-pin"></i>
              </div>
              <div class="key-info">
                <ul>
                  @foreach ($districts as $district)
                  <li>
                    <a href="{{ route('location.jobs',$district->name)}}">{{ $district->name }}
                      <span></span>
                    </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="explore-job">
              <div class="explore-job-header">
                <h5 class="title">TOP Companies</h5>
                <i data-feather="briefcase"></i>
              </div>
              <div class="key-info">
                <ul>
                  @foreach ($employerprofile as $item)
                  <li>
                    <a href="#">{{ $item->company }}
                      <span>(0)</span>
                    </a>
                  </li> 
                  @endforeach
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Jobs -->
    <div class="section-padding-bottom alice-bg">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="section-header section-header-2 section-header-with-right-content">
              <h2>Current Jobs</h2>
              <a href="/job" class="header-right">+ Browse All Jobs</a>
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
      </div>
    </div>
    <!-- Jobs End -->


    @endsection


@push('js')


@endpush