@extends('layouts.employer.master')

@section('content')

@if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
    </div>
@endif

<div class="alice-bg section-padding-bottom">
        <div class="container no-gliters">
          <div class="row no-gliters">
            <div class="col">
                
                  <div class="download-resume dashboard-section">
                    <a href="{{ route('employer.profile.edit',$profiles->id)}}">Edit Resume</a>
                  </div>
                  <div><img width="150" src="{{ asset('images/resume/default.jpg') }}" /></div>
      
                  <div class="about-details details-section dashboard-section">
                    <h4><i data-feather="align-left"></i>About Me</h4>
                    <p>{{ $profiles->about }}</p>
                    <div class="information-and-contact">
                      <div class="information">
                        <h4>Information</h4>
                        <ul>
                          <li><span>Company:</span> {{ $profiles->company }}</li>
                          <li><span>Email:</span> {{ $profiles->email }}</li>
                          <li><span>Phone:</span>{{ $profiles->phone }}</li>
                          <li><span>Address:</span>{{ $profiles->address }}</li>
                          <li><span>Location:</span> {{ $profiles->location }}</li>
                          <li><span>Category:</span> {{ $profiles->category }}</li>
                          <li><span>Website:</span> {{ $profiles->website }}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                 
      
                
            </div>
          </div>
        </div>
      </div>

@endsection