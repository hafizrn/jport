<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Userresume;
use App\Models\Usereducation;
use App\Models\Userexperience;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;

class UserresumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $check_resume = Userresume::where('user_id',$user_id)->count();
        if($check_resume==0){
            return view('user.resume.create');
        }
        
        $resumes = Userresume::whereIn('user_id',[Auth::user()->id])->first();
        $education = Usereducation::whereIn('user_id',[Auth::user()->id])->get();
        $experience = Userexperience::whereIn('user_id',[Auth::user()->id])->get();
        return view('user.resume.index',compact('resumes','education','experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('user.resume.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'marital_status' => 'required',
            'national_id' => 'required',
            'birthdate' => 'required',
            'nationality' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'objective' => 'required',
            'present_salary' => 'required',
            'expected_salary' => 'required',
            'preferred_categories' => 'required',
            'career_summary' => 'required',
            'special_qualification' => 'required',
            'skills' => 'required',
            'about' => 'required',
            'photo' => 'required',
        ]);

    $user_id = Auth::user()->id;
    $check_resume = Userresume::where('user_id',$user_id)->count();
    if($check_resume==0){
        if($request->hasFile('photo')){

            $image = $request->file('photo');
            $img   = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/resume/'.$img);
            Image::make($image)->save($location);

         }else{
            $img = 'default.jpg';
         };

         $data = [
            'first_name' => $request->get('first_name'),
            'user_id' => Auth::user()->id,
            'last_name' => $request->get('last_name'),
            'fathers_name' => $request->get('fathers_name'),
            'mothers_name' => $request->get('mothers_name'),
            'gender' => $request->get('gender'),
            'religion' => $request->get('religion'),
            'marital_status' => $request->get('marital_status'),
            'national_id' => $request->get('national_id'),
            'birthdate' => $request->get('birthdate'),
            'nationality' => $request->get('nationality'),
            'mobile_no' => $request->get('mobile_no'),
            'email' => $request->get('email'),
            'present_address' => $request->get('present_address'),
            'permanent_address' => $request->get('permanent_address'),
            'objective' => $request->get('objective'),
            'present_salary' => $request->get('present_salary'),
            'expected_salary' => $request->get('expected_salary'),
            'preferred_categories' => $request->get('preferred_categories'),
            'career_summary' => $request->get('career_summary'),
            'special_qualification' => $request->get('special_qualification'),
            'skills' => $request->get('skills'),
            'about' => $request->get('about'),
            'photo' => $img,
        ];
        $resumes = new Userresume($data);
        $resumes->save();
        $message ='New resume Created successfully!';
    }else{
        $message ='You Already Have a Resume Please Edit That.';
    }
    return redirect('/user/resume/')->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resumes = Userresume::where('user_id',Auth::id())->first();
        return view('user.resume.show',compact('resumes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resumes = Userresume::where('user_id',Auth::id())->first();
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
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'marital_status' => 'required',
            'national_id' => 'required',
            'birthdate' => 'required',
            'nationality' => 'required',
            'mobile_no' => 'required',
            'email' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'objective' => 'required',
            'present_salary' => 'required',
            'expected_salary' => 'required',
            'preferred_categories' => 'required',
            'career_summary' => 'required',
            'special_qualification' => 'required',
            'skills' => 'required',
            'about' => 'required',
            
        ]);
        
        $resumes = Userresume::find($id);
        if($request->hasFile('photo')){

            $image = $request->file('photo');
            $img   = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/resume/'.$img);
            Image::make($image)->save($location);

         }else{
            $img = 'default.jpg';
         };
        $data = [
            'first_name' => $request->get('first_name'),
            'user_id' => Auth::user()->id,
            'last_name' => $request->get('last_name'),
            'fathers_name' => $request->get('fathers_name'),
            'mothers_name' => $request->get('mothers_name'),
            'gender' => $request->get('gender'),
            'religion' => $request->get('religion'),
            'marital_status' => $request->get('marital_status'),
            'national_id' => $request->get('national_id'),
            'birthdate' => $request->get('birthdate'),
            'nationality' => $request->get('nationality'),
            'mobile_no' => $request->get('mobile_no'),
            'email' => $request->get('email'),
            'present_address' => $request->get('present_address'),
            'permanent_address' => $request->get('permanent_address'),
            'objective' => $request->get('objective'),
            'present_salary' => $request->get('present_salary'),
            'expected_salary' => $request->get('expected_salary'),
            'preferred_categories' => $request->get('preferred_categories'),
            'career_summary' => $request->get('career_summary'),
            'special_qualification' => $request->get('special_qualification'),
            'skills' => $request->get('skills'),
            'about' => $request->get('about'),
            'photo' => $img,
        ];

        $resumes->update($data);

        return redirect('/user/resume')->with('message','resumes Updated successfully!');
    }
}
