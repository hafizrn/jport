@extends('layouts.employer.master')

@section('content')
    <h1 class="display-3">Your Job Candidates</h1>    
    
    <table class="table">
        <thead>
          <tr>
            <th>Candidate</th>
            <th>Job Title</th>
            <th class="action">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($jobseekers as $jobseeker)
 
            <tr class="candidates-list">
                <td class="title">
                  <div class="button primary-color">
                    <a href="{{ route('employer.resume.show',$jobseeker->jobseeker_id) }}" target="_blank">{{ $jobseeker->resume->first_name }} {{ $jobseeker->resume->last_name }}</a>
                  </div>
                </td>
                <td class="status">{{ $jobseeker->jobs->title }}</td>
                <td class="action">
                  <a href="#" class="download"><i data-feather="download"></i></a>
                  <a href="#" class="inbox"><i data-feather="mail"></i></a>
                </td>
              </tr>

        @endforeach
      </tbody>
    </table>

@endsection

