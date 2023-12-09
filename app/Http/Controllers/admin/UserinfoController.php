<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserInfo;
use App\Models\Users;
class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userinfos=Userinfo::all();
        $users=Users::all();
        return view('cruds.userinfo.procedures.ver', compact('userinfos', 'users'));
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
        $userinfo = new Userinfo;
        $userinfo->id = $request->input('id');
        $userinfo->name = $request->input('name');
        $userinfo->lastname = $request->input('lastname');
        $userinfo->birthday = $request->input('birthday');
        $userinfo->account_number = $request->input('account_number');
        $userinfo->bank_name = $request->input('bank_name');
        $userinfo->account_type = $request->input('account_type');
        $userinfo->account_holder = $request->input('account_holder');
        $userinfo->cvv = $request->input('cvv');
        $userinfo->month_c = $request->input('month_c');
        $userinfo->year_c = $request->input('year_c');
        $userinfo->gender = $request->input('gender');
        $userinfo->phone = $request->input('phone');
        $userinfo->photo = $request->input('photo');
        $userinfo->bio = $request->input('bio');
        $userinfo->RFC = $request->input('RFC');
        $userinfo->email = $request->input('email');
        $userinfo->status = $request->input('status');
        $userinfo->save();
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
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $userinfo = Userinfo::find( $id );
        $userinfo->name = $request->input('name');
        $userinfo->lastname = $request->input('lastname');
        $userinfo->birthday = $request->input('birthday');
        $userinfo->account_number = $request->input('account_number');
        $userinfo->bank_name = $request->input('bank_name');
        $userinfo->account_type = $request->input('account_type');
        $userinfo->account_holder = $request->input('account_holder');
        $userinfo->cvv = $request->input('cvv');
        $userinfo->month_c = $request->input('month_c');
        $userinfo->year_c = $request->input('year_c');
        $userinfo->gender = $request->input('gender');
        $userinfo->phone = $request->input('phone');
        $userinfo->photo = $request->input('photo');
        $userinfo->bio = $request->input('bio');
        $userinfo->RFC = $request->input('RFC');
        $userinfo->email = $request->input('email');
        $userinfo->status = $request->input('status');
        $userinfo->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $userinfo=Userinfo::find( $id );
        $userinfo->delete();
        return redirect()->back();
    }
}