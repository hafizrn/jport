<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Level;
use App\Models\Category;
use App\Models\Type;
use App\Models\Userresume;
use App\Models\Jobapply;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $check_job = Job::where('user_id',$user_id)->count();
        if($check_job==0){
            return redirect('/employer/job/create');
        }
        
        $jobs = Job::whereIn('user_id',[Auth::user()->id])->get();
        return view('employer.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobs = Job::all();
        $categories = Category::all();
        $types = Type::all();
        $levels = Level::all();
        return view('employer.jobs.create',compact('jobs','categories','types','levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'type_id' => 'required',
            'level_id' => 'required',
            'location' => 'required',
            'title' => 'required',
            'company' => 'required',
            'company_info' => 'required',
            'vacancy' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'experiences' => 'required',
            'salary' => 'required',
            'educational_qualification' => 'required',
            'additional_requirements' => 'required',
            'responsibilities' => 'required',
            'instruction' => 'required',
            'email' => 'required',
            'deadline' => 'required',
            'contactperson' => 'required',

        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'category_id' => $request->get('category_id'),
            'type_id' => $request->get('type_id'),
            'level_id' => $request->get('level_id'),
            'location' => $request->get('location'),
            'title' => $request->get('title'),
            'company' => $request->get('company'),
            'company_info' => $request->get('company_info'),
            'vacancy' => $request->get('vacancy'),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'experiences' => $request->get('experiences'),
            'salary' => $request->get('salary'),
            'educational_qualification' => $request->get('educational_qualification'),
            'additional_requirements' => $request->get('additional_requirements'),
            'responsibilities' => $request->get('responsibilities'),
            'instruction' => $request->get('instruction'),
            'email' => $request->get('email'),
            'deadline' => $request->get('deadline'),
            'contactperson' => $request->get('contactperson'),
        ];
        $jobs = new Job($data);
        $jobs->save();

        return redirect('/employer/job')->with('message','New job Created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = Type::all();
        $jobseekers = Jobapply::whereIn('employer_id',[Auth::user()->id])
        ->whereIn('job_id',[$id])
        ->get();
        $jobs = Job::find($id);
        return view('employer.jobs.show',compact('jobs','types','jobseekers'));
    }
    public function resume_show($id)
    {

        $resumes = Userresume::whereIn('user_id',[$id])->first();
        return view('employer.jobs.resume',compact('jobs','types','resumes'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type::all();
        $levels = Level::all();
        $categories = Category::all();
        $jobs = Job::find($id);
        return view('employer.jobs.edit',compact('categories','jobs','types','levels'));
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
        $request->validate([
            'category_id' => 'required',
            'type_id' => 'required',
            'level_id' => 'required',
            'location' => 'required',
            'title' => 'required',
            'company' => 'required',
            'company_info' => 'required',
            'vacancy' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'experiences' => 'required',
            'salary' => 'required',
            'educational_qualification' => 'required',
            'additional_requirements' => 'required',
            'responsibilities' => 'required',
            'instruction' => 'required',
            'email' => 'required',
            'deadline' => 'required',
            'contactperson' => 'required',

        ]);
        
        $jobs = Job::find($id);
        $data = [
            'user_id' => Auth::id(),
            'category_id' => $request->get('category_id'),
            'type_id' => $request->get('type_id'),
            'level_id' => $request->get('level_id'),
            'location' => $request->get('location'),
            'title' => $request->get('title'),
            'company' => $request->get('company'),
            'company_info' => $request->get('company_info'),
            'vacancy' => $request->get('vacancy'),
            'age' => $request->get('age'),
            'gender' => $request->get('gender'),
            'experiences' => $request->get('experiences'),
            'salary' => $request->get('salary'),
            'educational_qualification' => $request->get('educational_qualification'),
            'additional_requirements' => $request->get('additional_requirements'),
            'responsibilities' => $request->get('responsibilities'),
            'instruction' => $request->get('instruction'),
            'email' => $request->get('email'),
            'deadline' => $request->get('deadline'),
            'contactperson' => $request->get('contactperson'),
        ];

        $jobs->update($data);

        return redirect('/employer/job')->with('message','Job Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$jobs = Job::find($id);
        //$jobs->delete();
        //return redirect('employer/job')->with('message','jobs deleted');
    }
}