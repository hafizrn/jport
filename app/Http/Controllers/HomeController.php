<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Division;
use App\Models\District;
use App\Models\Job;
use App\Models\Employerprofile;
use Carbon\Carbon;

class HomeController extends Controller
{
    
   public function index()
   {
       $jobCount = Job::count();
       $divisions = Division::all();
       $districts = District::all();
       $categories = Category::all();
       $employerprofile = Employerprofile::all();
       $jobs = Job::orderBy('created_at', 'desc')->whereDate('deadline','>', Carbon::now()->toDateString())->take(10)->get();
       return view('main',compact('jobs','jobCount','categories','divisions','districts','employerprofile'));
   }

   

   public function show($id)
   {
       $jobs = Job::find($id);
       return view('jobs.show',compact('jobs'));
   }

   public function contact()
   {
       return view('contact');
   }
 
   public function jobsAll()
   {
       $jobCount = Job::count();
       $divisions = Division::all();
       $districts = District::all();
       $categories = Category::all();
       $employerprofile = Employerprofile::all();
       $jobs = Job::orderBy('created_at', 'desc')->paginate(10);
       //dd($jobs);
       return view('jobs.index',compact('jobs','jobCount','categories','divisions','districts','employerprofile'));
   }

   public function categorySearch($id){

       $divisions = Division::all();
       $districts = District::all();
       $categories = Category::all();
       $employerprofile = Employerprofile::all();
       $jobs = Job::where('category_id', $id)->paginate(10);
       $jobCount = Job::where('category_id', $id)->count();
       return view('jobs.categoryjobs',compact('jobs','jobCount','categories','divisions','districts','employerprofile'));
       //dd($jobs);
   }

   public function locationSearch($name){
       $divisions = Division::all();
       $districts = District::all();
       $categories = Category::all();
       $employerprofile = Employerprofile::all();
       $jobs = Job::where('location','LIKE',"%$name%")->paginate(10);
       $jobCount = Job::where('location','LIKE',"%$name%")->count();
       return view('jobs.categoryjobs',compact('jobs','jobCount','categories','divisions','districts','employerprofile'));
   }
}
