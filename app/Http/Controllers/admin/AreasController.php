<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Areas;
use App\Models\Units;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $areas = Areas::all();
        $units = Units::all();
        return view('cruds.areas.procedures.ver', compact('areas','units'));
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
        $areas = new Areas;
        $areas->unit = $request->input('unit');
        $areas->save();
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
        $areas = Areas::find($id);
        $areas->unit = $request->input('unit');
        $areas->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $areas = Areas::find($id);
        $areas->delete();
        return redirect()->back();
    }
}