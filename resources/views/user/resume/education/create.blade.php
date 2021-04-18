@extends('layouts.user.master')
@section('content')

    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>

    <form action="{{ route('user.education.store') }}" class="job-post-form" method="POST">
        @csrf
        <div class="basic-info-input">
            <h4><i data-feather="plus-circle"></i>Add Education Info</h4>

            <div class="row">
                <label class="col-md-3 col-form-label">Exam Name</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="exam_name" placeholder="Exam Name"/>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Result</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="result" placeholder="Result"/>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Institute</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="institute" placeholder="School/College/Madrasah Name"/>
                </div>
            </div>
            
            <div class="row">
                <label class="col-md-3 col-form-label">Marks</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="marks" placeholder="Marks Total"/>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Examination Year</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="year" placeholder="Examination Year"/>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Subject</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="subject" placeholder="Subject Name"/>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Duration</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="duration" placeholder="Duration Time"/>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">Board/ University</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="university" placeholder="Board / University Name"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3 col-form-label"></label>
                <div class="col-md-9">
                    <input class="button" type="submit" name="submit" value="Update Education" />
                </div>
            </div>
        </div>
    </form>





@stop

@push('js')

    <script>
        tinymce.init({
            selector: 'textarea.fulltext',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });

    </script>

@endpush
