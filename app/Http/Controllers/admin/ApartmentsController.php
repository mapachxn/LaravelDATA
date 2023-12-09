<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartments;
use App\Models\Users;
class ApartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apartments=Apartments::all();
        $users=Users::all();
        return view('cruds.apartments.procedures.ver', compact('apartments', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $apartments=new Apartments;
        $apartments->rooms=$request->input('rooms');
        $apartments->bathrooms=$request->input('bathrooms');
        $apartments->floor_p=$request->input('floor_p');
        $apartments->tenant=$request->input('tenant');
        $apartments->image=$request->input('image');
        $apartments->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $apartments=Apartments::find( $id );
        $apartments->rooms=$request->input('rooms');
        $apartments->bathrooms=$request->input('bathrooms');
        $apartments->floor_p=$request->input('floor_p');
        $apartments->tenant=$request->input('tenant');
        $apartments->image=$request->input('image');
        $apartments->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $apartments=Apartments::find( $id );
        $apartments->delete();
        return redirect()->back();
    }
}