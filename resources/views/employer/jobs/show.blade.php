@extends('layouts.employer.master')

@section('content')

<!-- Candidates Details -->
    <div class="container">
      <div class="row">

            <div class="job-title-and-info">
              <div class="title">
                <div class="thumb">
                  <img src="{{ asset('styles/images/job/company-logo-1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="title-body">
                  <h4>{{ $jobs->title }}</h4>
                  <div class="info">
                    <span class="company"><a href="#"><i data-feather="briefcase"></i>{{ $jobs->company }}</a></span>
                    <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{ $jobs->location }}</a></span>
                    <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>{{ $jobs->type_id }}</a></span>
                  </div>
                </div>
              </div>
              <div class="buttons">
                <a href="javascript:;" onclick="window.print()" class="button print">Print Job</a>
              </div>
            </div>
            <div class="share-job-post">
                <strong>All Applicants: </strong>
                @foreach ($jobseekers as $jobseeker)
                <span><a href="{{ route('employer.resume.show',$jobseeker->jobseeker_id) }}" target="_blank">{{ $jobseeker->resume->first_name }} {{ $jobseeker->resume->last_name }}</a></span>, 
                @endforeach
            </div>
            <div class="details-information section-padding-60">
              <div class="row">
                <div class="col-xl-7 col-lg-8">
                  <div class="description details-section">
                    <h4><i data-feather="align-left"></i>Job Description</h4>
                    <p>{!! $jobs->instruction !!}</p>
                  </div>
                  <div class="responsibilities details-section">
                    <h4><i data-feather="zap"></i>Responsibilities</h4>
                    <p>{!! $jobs->responsibilities !!}</p>
                  </div>
                  <div class="edication-and-experience details-section">
                    <h4><i data-feather="book"></i>Education + Experience</h4>
                    <p>{!! $jobs->educational_qualification !!}</p>
                  </div>
                  <div class="other-benifit details-section">
                    <h4><i data-feather="gift"></i>Additional Requirements</h4>
                    <p>{!! $jobs->additional_requirements !!}</p>
                  </div>
                  <div class="job-apply-buttons">
                    <div class="sharethis-inline-share-buttons"></div>
						
                  </div>
                </div>
                
                <div class="col-xl-4 offset-xl-1 col-lg-4">
                  <div class="information-and-share">
                    <div class="job-summary">
                      <h4>Job Summary</h4>
                      <ul>
                        <li><span>Published on:</span> {{ $jobs->created_at }}</li>
                        <li><span>Vacancy:</span> {{ $jobs->vacancy }}</li>
                        <li><span>Experience:</span> {{ $jobs->experiences }}</li>
                        <li><span>Job Location:</span> {{ $jobs->location }}</li>
                        <li><span>Salary:</span> {{ $jobs->salary	 }}</li>
                        <li><span>Gender:</span> {{ $jobs->gender }}</li>
                        <li><span>Application Deadline:</span> {{ $jobs->deadline }}</li>
                      </ul>
                    </div>
                    <div class="share-job-post">
                      <span class="share"><i class="fas fa-share-alt"></i>Share:</span>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                      <a href="#"><i class="fab fa-google-plus-g"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#" class="add-more"><span class="ti-plus"></span></a>
                    </div>
                  </div> 
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-7 col-lg-8">
                <div class="company-information details-section">
                  <h4><i data-feather="briefcase"></i>About the Company</h4>
                  <ul>
                    <li><span>Company Name:</span> {{ $jobs->company }} </li>
                    <li><span>Email:</span> {{ $jobs->email }} </li>
                    <li><span>Contact:</span> {{ $jobs->contactperson }} </li>
                    <li><span>Company Profile:</span></li>
                    <li> {{ $jobs->company_info }}</li>
                  </ul>
                </div>
              </div>
            </div>
 
      </div>
    </div>
  <!-- Candidates Details End -->
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d3b0a01aa627b0012c9ae3a&product='inline-share-buttons' async='async'></script>

@endsection


