<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExtraServices;
use App\Models\Services;
class ExtraservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $extraservices=ExtraServices::all();
        $services=Services::all();
        return view('cruds.extraservices.procedures.ver', compact('extraservices', 'services'));
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
        $extraservices=new ExtraServices;
        $extraservices->name=$request->input('name');
        $extraservices->typese=$request->input('typese');
        $extraservices->owner=$request->input('owner');
        $extraservices->phone=$request->input('phone');
        $extraservices->street=$request->input('street');
        $extraservices->neighborhood=$request->input('neighborhood');
        $extraservices->hours=$request->input('hours');
        $extraservices->price=$request->input('price');
        $extraservices->save();
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
        $extraservices=ExtraServices::find( $id );
        $extraservices->name=$request->input('name');
        $extraservices->typese=$request->input('typese');
        $extraservices->owner=$request->input('owner');
        $extraservices->phone=$request->input('phone');
        $extraservices->street=$request->input('street');
        $extraservices->neighborhood=$request->input('neighborhood');
        $extraservices->hours=$request->input('hours');
        $extraservices->price=$request->input('price');
        $extraservices->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $extraservices=ExtraServices::find( $id );
        $extraservices->delete();
        return redirect()->back();
    }
}