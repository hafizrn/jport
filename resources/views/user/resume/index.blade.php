@extends('layouts.user.master')

@section('content')


    <div class="alice-bg section-padding-bottom">
        <div class="container no-gliters">
            <div class="row no-gliters">
                <div class="col">

                    <div class="download-resume dashboard-section">
                        <a href="javascript:;" onclick="window.print()" class="button print">Print CV</a>
                        <a href="{{ route('user.resume.edit', $resumes->id) }}">Edit Resume</a>
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
                        <p>{!! $resumes->about !!}</p>
                        <div class="information-and-contact">
                            <div class="information">
                                <h4>Information</h4>
                                <ul>
                                    <li><span>Category:</span> {{ $resumes->preferred_categories }}</li>
                                    <li><span>Present Salary:</span>{{ $resumes->present_salary }}</li>
                                    <li><span>Expected Salary:</span>{{ $resumes->expected_salary }}</li>
                                    <li><span>Gender:</span> {{ $resumes->gender }}</li>
                                    <li><span>Birth Date:</span> {{ $resumes->birthdate }}</li>
                                    <li><span>Qualification:</span> {!! $resumes->career_summary !!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="education-background details-section dashboard-section">
                        <h4><i data-feather="book"></i>Education Background</h4>
                        <p class="information"><i class="fas fa-check-square"></i> <a
                                href="{{ route('user.education.create') }}">Add Education Info</a></p>
                        <div class="information-and-contact">
                            @foreach ($education as $ed)
                                <div class="information">
                                    <div class="education-label">
                                        <span class="study-year">Exam Year: {{ $ed->year }} <br />Duraion :
                                            {{ $ed->duration }}</span>
                                        <p>Marks: {{ $ed->marks }}</p>
                                        <h5>{{ $ed->exam_name }} in {{ $ed->subject }}<span>@
                                                {{ $ed->university }}</span></h5>
                                        <p>Institute Name: {{ $ed->institute }}</p>
                                        <button><a href="{{ route('user.education.edit', $ed->id) }}"> Edit </a> </button>
                                        <form action="{{ route('user.education.destroy', $ed->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button>Delete</button>
                                      </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="experience dashboard-section details-section">
                      <h4><i data-feather="briefcase"></i>Work Experiance</h4>
                        <p class="information"><i class="fas fa-check-square"></i> 
                          <a href="{{ route('user.experience.create') }}">Add Experiance Info</a></p>
                      <div class="information-and-contact">
                          @foreach ($experience as $ex)
                              <div class="information">
                                  <div class="experience-label">
                                      <span class="service-year">
                                        Duraion : {{ $ex->duration }}<br/>
                                        Company: {{ $ex->company }}<br/>
                                        Company Type: {{ $ex->company_type }}<br/>
                                        Designation: {{ $ex->designation }}<br/>
                                        Responsibilities: {{ $ex->responsibilities }}<br/>
                                        Department Name: {{ $ex->department }}<br/>
                                      </span>
                                      <br/>
                                      <button><a href="{{ route('user.experience.edit', $ex->id) }}"> Edit </a> </button>
                                        <form action="{{ route('user.experience.destroy', $ex->id) }}" method="POST">
                                          @csrf
                                          @method('DELETE')
                                          <button>Delete</button>
                                      </form>
                                  </div>
                              </div>
                          @endforeach
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
                    
                </div>
            </div>
        </div>
    </div>
@endsection

