@extends('layouts.app')

@section('pageTitle', 'Contact Us')
@section('content')

    <div class="alice-bg section-padding-bottom">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="contact-block">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="contact-address">
                          <h4>Contact Info</h4>
                          <ul>
                            <li><i data-feather="map-pin"></i>International Noel Nawab Street Los Alamitos CA 90720, USA</li>
                            <li><i data-feather="mail"></i>supportjob@gmail.com example@yourmail.com</li>
                            <li><i data-feather="phone-call"></i>+99 06 1234 566 88</li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-7 offset-lg-1">
                        <div class="contact-form">
                          <h4>Keep In Touch</h4>
                          <form action="#" id="contactForm">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Name">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Email">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Phone">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Subject">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                              </div>
                            </div>
                            <button class="button">Submit</button>
                            <p class="input-success">Your message has been sent. Thanks for contact.</p>
                            <p class="input-error">Something went wrong while sending. Please try leter.</p>
                          </form>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
      
          <!-- Call to Action -->
          <div class="call-to-action-bg padding-top-90 padding-bottom-90">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="call-to-action-2">
                    <div class="call-to-action-content">
                      <h2>For Find Your Dream Job or Candidate</h2>
                      <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
                    </div>
                    <div class="call-to-action-button">
                      <a href="#" class="button">Add Resume</a>
                      <span>Or</span>
                      <a href="#" class="button">Post A Job</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Call to Action End -->
    
    @endsection