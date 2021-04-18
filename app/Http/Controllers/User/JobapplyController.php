<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Jobapply;
use App\Models\Userresume;
use Illuminate\Support\Facades\Auth;

class JobapplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Jobapply::whereIn('jobseeker_id',[Auth::user()->id])->get();
        return view('user.jobapply.index',compact('jobs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::all();
        return view('user.jobapply.create',compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $jobId = $request->get('job_id');
        $applyid = Jobapply::where('job_id',$jobId)->first();
        if($applyid == null){
            $request->validate([
                'expected_salary' => 'required', 
            ]);
        
    
            $data = [
                'jobseeker_id' => Auth::user()->id,
                'job_id' => $request->get('job_id'),
                'employer_id' => $request->get('employer_id'),
                'expected_salary' => $request->get('expected_salary'),
                
            ];
            $jobapply = new Jobapply($data);
            $jobapply->save();
    
            return redirect('/user/jobapply')->with('message','New category Created successfully!');
        }

        return redirect('/user/jobapply')->with('message','You already Applied');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobs = Job::find($id);
        return view('user.jobapply.show',compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resumes = Userresume::where('user_id',Auth::id())->find($id);
        return view('user.resume.edit',compact('resumes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
}
