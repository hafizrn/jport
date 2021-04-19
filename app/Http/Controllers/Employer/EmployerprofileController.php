<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employerprofile;
use Illuminate\Support\Facades\Auth;

class EmployerprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $check_profile = Employerprofile::where('employer_id',$user_id)->count();
        if($check_profile==0){
           return view('employer/emprofile/create');
        }
        
        $profiles = Employerprofile::whereIn('employer_id',[Auth::user()->id])->first();
        return view('employer.emprofile.index',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.emprofile.create');
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
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'location' => 'required',
            'category' => 'required',
            'about' => 'required',
            'photo' => 'required',
            'website' => 'required',
            'companylogo' => 'required'

        ]);

        $data = [
            'employer_id' => Auth::user()->id,
            'company' => $request->get('company'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'location' => $request->get('location'),
            'category' => $request->get('category'),
            'about' => $request->get('about'),
            'photo' => $request->get('photo'),
            'website' => $request->get('website'),
            'companylogo' => $request->get('companylogo'),
        
        ];

        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/employer'), $filename);
            $data['photo'] = $request->file('photo')->getClientOriginalName();
        }
        if($request->hasFile('companylogo')) {
            $image = $request->file('companylogo');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/employer'), $filename);
            $data['companylogo'] = $request->file('companylogo')->getClientOriginalName();
        }

        $profiles = new Employerprofile($data);
        $profiles->save();

        return redirect('/employer/profile')->with('success','Profile Added successfully!');
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
        $profiles = Employerprofile::find($id);
        return view('employer.emprofile.edit',compact('profiles'));
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
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'location' => 'required',
            'category' => 'required',
            'about' => 'required',
            'website' => 'required'

        ]);
        
        $profiles = Employerprofile::find($id);
        $data = [
            'employer_id' => Auth::user()->id,
            'company' => $request->get('company'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'location' => $request->get('location'),
            'category' => $request->get('category'),
            'about' => $request->get('about'),
            'photo' => $request->get('photo'),
            'website' => $request->get('website'),
            'companylogo' => $request->get('companylogo'),
        
        ];
        if($request->hasFile('photo')) {
            $image = $request->file('photo');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/employer'), $filename);
            $data['photo'] = $request->file('photo')->getClientOriginalName();
        }
        if($request->hasFile('companylogo')) {
            $image = $request->file('companylogo');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/employer'), $filename);
            $data['companylogo'] = $request->file('companylogo')->getClientOriginalName();
        }

        $profiles->update($data);

        return redirect('/employer/profile')->with('message','Profile Updated successfully!');
    }
}
