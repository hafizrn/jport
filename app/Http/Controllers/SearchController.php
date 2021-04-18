<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $location = $request->input('location');
        $joball = Job::where([
            ['title','LIKE',"%$query%"],
            ['location','LIKE',"%$location%"],
        ])->get();
        $jobs = Job::where([
            ['title','LIKE',"%$query%"],
            ['location','LIKE',"%$location%"],
        ])->paginate(10);
        return view('search',compact('jobs','query','joball','location'));
    }
}
