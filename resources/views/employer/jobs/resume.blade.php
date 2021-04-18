@extends('layouts.user.master')

@section('content')

<div class="alice-bg section-padding-bottom">
    <div class="container no-gliters">
      <div class="row no-gliters">
        <div class="col">
            
              <div class="download-resume dashboard-section">
                <a href="javascript:;" onclick="window.print()" class="button print">Print Resume</a>
              </div>
              <div><img width="150" src="{{ asset('images/resume/default.jpg') }}" /></div>

              <div class="personal-information dashboard-section last-child details-section">
                <h4><i data-feather="user-plus"></i>Personal Deatils</h4>
                <ul>
                  <li><span>Full Name:</span> {{ $resumes->first_name }} {{ $resumes->last_name }}</li>
                  <li><span>Father's Name:</span> {{ $resumes->fathers_name }}</li>
                  <li><span>Mother's Name:</span> {{ $resumes->mothers_name }}</li>
                  <li><span>Date of Birth:</span> {{ $resumes->birthdate }}</li>
                  <li><span>Nationality:</span> {{ $resumes->nationality }} </li>
                  <li><span>Sex:</span> {{ $resumes->gender }}</li>
                  <li><span>Religion:</span> {{ $resumes->religion }}</li>
                </ul>
              </div>
              <div class="about-details details-section dashboard-section">
                <h4><i data-feather="align-left"></i>About Me</h4>
                <p>{{ $resumes->about }}</p>
                <div class="information-and-contact">
                  <div class="information">
                    <h4>Information</h4>
                    <ul>
                      <li><span>Category:</span> {{ $resumes->preferred_categories }}</li>
                      <li><span>Present Salary:</span>{{ $resumes->present_salary }}</li>
                      <li><span>Expected Salary:</span>{{ $resumes->expected_salary }}</li>
                      <li><span>Gender:</span> {{ $resumes->gender }}</li>
                      <li><span>Birth Date:</span> {{ $resumes->birthdate }}</li>
                      <li><span>Qualification:</span> {{ $resumes->career_summary }}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="edication-background details-section dashboard-section">
                <h4><i data-feather="book"></i>Education Background</h4>
                <div class="education-label">
                  <span class="study-year">2018 - Present</span>
                  <h5>Masters in Software Engineering<span>@ Engineering University</span></h5>
                  <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                </div>
                <div class="education-label">
                  <span class="study-year">2014 - 2018</span>
                  <h5>Diploma in Graphics Design<span>@ Graphic Arts Institute</span></h5>
                  <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                </div>
                <div class="education-label">
                  <span class="study-year">2008 - 2014</span>
                  <h5>Secondary School Certificate<span>@  Engineering High School</span></h5>
                  <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                </div>
              </div>
              <div class="experience dashboard-section details-section">
                <h4><i data-feather="briefcase"></i>Work Experiance</h4>
                <div class="experience-section">
                  <span class="service-year">2016 - Present</span>
                  <h5>Lead UI/UX Designer<span>@ Codepassengers LTD</span></h5>
                  <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                </div>
                <div class="experience-section">
                  <span class="service-year">2012 - 2016</span>
                  <h5>Former Graphic Designer<span>@ Graphicreeeo CO</span></h5>
                  <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                </div>
              </div>
              <div class="special-qualification dashboard-section details-section">
                <div class="skill">
                  <h4> <i data-feather="gift"></i>Skills:</h4>
                  <p>{{ $resumes->skills }}</p>
                </div>
              </div>
              <div class="special-qualification dashboard-section details-section">
                <h4><i data-feather="gift"></i>Special Qualification</h4>
                <p>{{ $resumes->special_qualification }}</p>
              </div>
              <div class="portfolio dashboard-section details-section">
                <h4><i data-feather="gift"></i>Portfolio</h4>
                <div class="portfolio-slider owl-carousel">
                  <div class="portfolio-item">
                    <img src="{{ asset('styles/images/portfolio/thumb-3.jpg') }}" class="img-fluid" alt="">
                    <div class="overlay">
                      <a href="#"><i data-feather="eye"></i></a>
                      <a href="#"><i data-feather="link"></i></a>
                    </div>
                  </div>
                  <div class="portfolio-item">
                    <img src="{{ asset('styles/images/portfolio/thumb-1.jpg') }}" class="img-fluid" alt="">
                    <div class="overlay">
                      <a href="#"><i data-feather="eye"></i></a>
                      <a href="#"><i data-feather="link"></i></a>
                    </div>
                  </div>
                  <div class="portfolio-item">
                    <img src="{{ asset('styles/images/portfolio/thumb-2.jpg') }}" class="img-fluid" alt="">
                    <div class="overlay">
                      <a href="#"><i data-feather="eye"></i></a>
                      <a href="#"><i data-feather="link"></i></a>
                    </div>
                  </div>
                  <div class="portfolio-item">
                    <img src="{{ asset('styles/images/portfolio/thumb-3.jpg') }}" class="img-fluid" alt="">
                    <div class="overlay">
                      <a href="#"><i data-feather="eye"></i></a>
                      <a href="#"><i data-feather="link"></i></a>
                    </div>
                  </div>
                  <div class="portfolio-item">
                    <img src="{{ asset('styles/images/portfolio/thumb-2.jpg') }}" class="img-fluid" alt="">
                    <div class="overlay">
                      <a href="#"><i data-feather="eye"></i></a>
                      <a href="#"><i data-feather="link"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            
        </div>
      </div>
    </div>
  </div>

@endsection


