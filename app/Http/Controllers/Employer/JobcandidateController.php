<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobapply;
use App\Models\Userresume;
use Illuminate\Support\Facades\Auth;

class JobcandidateController extends Controller
{
    public function index()
    {
        $jobseekers = Jobapply::whereIn('employer_id',[Auth::user()->id])
        ->get();
        
        return view('employer.jobcandidates.index',compact('jobseekers'));
    }
    public function resume_show($id)
    {

        $resumes = Userresume::whereIn('user_id',[$id])->first();
        return view('employer.jobs.resume',compact('jobs','types','resumes'));
    }
}
