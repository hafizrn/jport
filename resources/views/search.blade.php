@extends('layouts.app')

@section('title')
{{ $query }}
@endsection


@section('content')


    <section class="blog-area section">
        <div class="container">
          <div class="slider display-table center-text">
            <h4 class="title display-table-cell"><b>{{ $joball->count() }} - {{ $query }} Jobs Found , {{ $location }} </b></h4>
        </div><!-- slider -->
            <div class="row">


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
                    <a href="#" class="favourite"><i data-feather="heart"></i></a>
                  </div>
                  <p class="deadline">Deadline: {{$job->deadline}}</p>
                </div>
              </div>
            </div>
            @endforeach


            </div><!-- row -->

            <div class="d-flex justify-content-center">
              {!! $jobs->links() !!}
            </div>

        </div><!-- container -->
    </section><!-- section -->

@endsection

@push('js')

@endpush