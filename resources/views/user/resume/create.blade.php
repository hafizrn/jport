@extends('layouts.user.master')
@section('content')

    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>

    <form action="{{ route('user.resume.store') }}" class="job-post-form" method="POST">
        @csrf
        <div class="basic-info-input">
            <h4><i data-feather="plus-circle"></i>Add Resume</h4>
            <div id="information" class="row">
                <label class="col-md-3 col-form-label">Career Objective</label>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="fulltext" name="objective" class="form-control"
                                    placeholder="Career Objective"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="present_salary" class="form-control" placeholder="Present salary">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="expected_salary" class="form-control"
                                    placeholder="Expected salary">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="preferred_categories" class="form-control"
                                    placeholder="Preferred categories">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="special_qualification" class="form-control"
                                    placeholder="Special Qualification">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="skills" class="form-control" placeholder="Skills">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="information" class="row">
                <label class="col-md-3 col-form-label">Career summary</label>
                <div class="col-md-9">
                    <textarea class="fulltext" name="career_summary" placeholder="Carreer Summary text here"></textarea>
                </div>
            </div>
            <div class="row">
                <label class="col-md-3 col-form-label">About You</label>
                <div class="col-md-9">
                    <textarea class="fulltext" name="about" placeholder="Description text here"></textarea>
                </div>
            </div>


            <div id="details" class="row">
                <label class="col-md-3 col-form-label">Personal Details</label>
                <div class="col-md-9">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="fathers_name" class="form-control" placeholder="Father's Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="mothers_name" class="form-control" placeholder="Mother's Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="gender" class="form-control">
                                    <option>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="birthdate" class="form-control" placeholder="Date of Birth">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="religion" class="form-control" placeholder="Religion">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="marital_status" class="form-control" placeholder="Marital Status">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nationality" class="form-control" placeholder="Nationality">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="national_id" class="form-control" placeholder="National ID No.">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No.">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="present_address" class="form-control"
                                    placeholder="Present Address">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="permanent_address" class="form-control"
                                    placeholder="Permanent Address">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <label class="col-md-3 col-form-label">Photo</label>
            <div class="col-md-9">
                <input type="file" name="photo" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label"></label>
            <div class="col-md-9">
                <input class="button" type="submit" name="submit" value="Publish Resume" />
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
