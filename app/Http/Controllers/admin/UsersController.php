<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Profiles;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users=Users::all();
        $profiles=Profiles::all();
        return view('cruds.users.procedures.ver', compact('users', 'profiles'));
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
        $users=new Users;
        $users->username=$request->input('username');
        $users->password=$request->input('password');
        $users->status=$request->input('status');
        $users->profile=$request->input('profile');
        $users->save();
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
        $users=Users::find( $id );
        $users->username=$request->input('username');
        $users->password=$request->input('password');
        $users->status=$request->input('status');
        $users->profile=$request->input('profile');
        $users->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $users=Users::find( $id );
        $users->delete();
        return redirect()->back();
    }
}