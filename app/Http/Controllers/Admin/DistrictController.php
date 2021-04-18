<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Division;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::all();
        return view('admin.districts.index',compact('districts'));
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
        return view('admin.districts.create',compact('districts','divisions'));
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
            'slug' => str_slug($request->get('name')),
        ];
        $districts = new District($data);
        $districts->save();

        return redirect('/admin/district')->with('message','New district Created successfully!');
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
        $districts = District::find($id);
        return view('admin.districts.edit',compact('districts','divisions'));
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

        ]);
        
        $districts = District::find($id);
        $data = [
            'name' => $request->get('name'),
            'division_id' => $request->get('division_id'),
            'slug' => str_slug($request->get('name')),
        ];

        $districts->update($data);

        return redirect('/admin/district')->with('message','districts Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $districts = District::find($id);
        $districts->delete();
        return redirect('admin/district')->with('message','districts deleted');
    }
}
