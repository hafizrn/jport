<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upazila;
use App\Models\Division;
use App\Models\District;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upazilas = Upazila::all();
        return view('admin.upazilas.index',compact('upazilas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::all();
        return view('admin.upazilas.create',compact('districts','divisions','upazilas'));
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
            'name' => 'required'

        ]);

        $data = [
            'name' => $request->get('name'),
            'division_id' => $request->get('division_id'),
            'district_id' => $request->get('district_id'),
            'slug' => str_slug($request->get('name')),
        ];
        $upazilas = new Upazila($data);
        $upazilas->save();

        return redirect('/admin/upazila')->with('message','New Upazila Created successfully!');
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
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::find($id);
        return view('admin.upazilas.edit',compact('districts','divisions','upazilas'));
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
            'name' => 'required',
            'division_id' => 'required',
            'district_id' => 'required',

        ]);
        
        $upazilas = Upazila::find($id);
        $data = [
            'name' => $request->get('name'),
            'division_id' => $request->get('division_id'),
            'district_id' => $request->get('district_id'),
            'slug' => str_slug($request->get('name')),
        ];

        $upazilas->update($data);

        return redirect('/admin/upazila')->with('message','upazila Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upazilas = Upazila::find($id);
        $upazilas->delete();
        return redirect('admin/upazila')->with('message','upazila deleted');
    }
}
