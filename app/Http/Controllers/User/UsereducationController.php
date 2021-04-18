<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usereducation;
use Illuminate\Support\Facades\Auth;

class UsereducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $check_ed = Usereducation::where('user_id', $user_id)->count();
        if ($check_ed == 0) {
            return view('user.resume.education.create');
        }

        $educations = Usereducation::whereIn('user_id', [Auth::user()->id])->first();
        return view('user.resume.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.resume.education.create');
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
            'exam_name' => 'required',
            'result' => 'required',
            'institute' => 'required',
            'marks' => 'required',
            'year' => 'required',
            'subject' => 'required',
            'duration' => 'required',
            'university' => 'required'
        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'exam_name' => $request->get('exam_name'),
            'result' => $request->get('result'),
            'institute' => $request->get('institute'),
            'marks' => $request->get('marks'),
            'year' => $request->get('year'),
            'subject' => $request->get('subject'),
            'duration' => $request->get('duration'),
            'university' => $request->get('university')
        ];
        $educations = new Usereducation($data);
        $educations->save();
         
        return redirect('/user/resume/')->with('message', 'Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Usereducation::where('user_id',Auth::id())->find($id);
        return view('user.resume.education.edit',compact('education'));
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
            'exam_name' => 'required',
            'result' => 'required',
            'institute' => 'required',
            'marks' => 'required',
            'year' => 'required',
            'subject' => 'required',
            'duration' => 'required',
            'university' => 'required'
        ]);

        $education = Usereducation::find($id);
        
        $data = [
            'user_id' => Auth::user()->id,
            'exam_name' => $request->get('exam_name'),
            'result' => $request->get('result'),
            'institute' => $request->get('institute'),
            'marks' => $request->get('marks'),
            'year' => $request->get('year'),
            'subject' => $request->get('subject'),
            'duration' => $request->get('duration'),
            'university' => $request->get('university')
        ];
        $education->update($data);
        
        return redirect('/user/resume/')->with('message', 'Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Usereducation::find($id);
        if($education){
            $education->delete();
        }
        return redirect('/user/resume/')->with('message', 'Delete successfully!');
    }
}
