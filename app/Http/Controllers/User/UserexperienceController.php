<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userexperience;
use Illuminate\Support\Facades\Auth;

class UserexperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.resume.experience.create');
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
            'company' => 'required',
            'company_type' => 'required',
            'designation' => 'required',
            'responsibilities' => 'required',
            'duration' => 'required',
            'department' => 'required',
            'location' => 'required'
        ]);

        $data = [
            'user_id' => Auth::user()->id,
            'company' => $request->get('company'),
            'company_type' => $request->get('company_type'),
            'responsibilities' => $request->get('responsibilities'),
            'duration' => $request->get('duration'),
            'designation' => $request->get('designation'),
            'department' => $request->get('department'),
            'company_location' => $request->get('location')
        ];
        $educations = new Userexperience($data);
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
        $experience = Userexperience::where('user_id',Auth::id())->find($id);
        return view('user.resume.experience.edit',compact('experience'));
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
            'company' => 'required',
            'company_type' => 'required',
            'designation' => 'required',
            'responsibilities' => 'required',
            'duration' => 'required',
            'department' => 'required',
            'location' => 'required'
        ]);

        $experience = Userexperience::find($id);
        
        $data = [
            'user_id' => Auth::user()->id,
            'company' => $request->get('company'),
            'company_type' => $request->get('company_type'),
            'responsibilities' => $request->get('responsibilities'),
            'duration' => $request->get('duration'),
            'designation' => $request->get('designation'),
            'department' => $request->get('department'),
            'company_location' => $request->get('location')
        ];
        $experience->update($data);
        
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
        $experience = Userexperience::find($id);
        if($experience){
            $experience->delete();
        }
        return redirect('/user/resume/')->with('message', 'Delete successfully!');
    }
}
