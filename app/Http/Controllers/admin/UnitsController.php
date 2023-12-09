<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Apartments;
use App\Models\ExtraServices;
use Illuminate\Http\Request;
use App\Models\Units;
class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $units=Units::all();
        $apartments=Apartments::all();
        $extraservices=ExtraServices::all();
        return view('cruds.units.procedures.ver', compact('units', 'apartments', 'extraservices'));
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
        $units=new Units;
        $units->street=$request->input('street');
        $units->neighborhood=$request->input('neighborhood');
        $units->extra_services=$request->input('extra_services');
        $units->apartment=$request->input('apartments');
        $units->floors=$request->input('floors');
        $units->locality=$request->input('locality');
        $units->save();
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
        $units=Units::find( $id );
        $units->street=$request->input('street');
        $units->neighborhood=$request->input('neighborhood');
        $units->extra_services=$request->input('extra_services');
        $units->apartment=$request->input('apartments');
        $units->floors=$request->input('floors');
        $units->locality=$request->input('locality');
        $units->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $units=Units::find( $id );
        $units->delete();
        return redirect()->back();
    }
}