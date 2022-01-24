<?php

namespace App\Http\Controllers;

use App\Models\Userr;
use Illuminate\Http\Request;

class UserrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1: get list of resource
        $users = Userr::all();
        //2: display view: user/index.blade.php
        return view('user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = Userr::create([
            'username'=>$request->username,
            'fullname'=>$request->fullname,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>$request->password,
            'image'=>$request->image,
            'status'=>$request->status,
        ]);
        return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function show(Userr $userr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function edit($userr)
    {
        //
        $user = Userr::find($userr);
        // var_dump($user);
        // echo "id: " . $user->id . 
        // "username: " . $user->username . 
        // "fullname: " . $user->fullname . 
        // "address: " . $user->address .
        // "email: " . $user->email .
        // "phone: " . $user->phone .
        // "password: " . $user->password .
        // "image: " . $user->image .
        // "status: " . $user->status;
        // return view('user.edit')->with('user', $user);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userr)
    {
        //validate
        
        //Cập nhật
        //Cách 1:
        // $res = Userr::where('id', $userr->id)->update([
        //     'username'=>$request->username,
        //     'fullname'=>$request->fullname,
        //     'address'=>$request->address,
        //     'email'=>$request->email,
        //     'phone'=>$request->phone,
        //     'password'=>$request->password,
        //     'image'=>$request->image,
        //     'status'=>$request->status,
        // ]);
        //Cách 2:
        $input = $request->all();
        $user = Userr::find($userr);
        $user->username = $input['username'];
        $user->fullname = $input['fullname'];
        $user->address = $input['address'];
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        $user->password = $input['password'];
        $user->image = $input['image'];
        $user->status = $input['status'];
        $user->save();

        //Điều hướng và trả về kết quả
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Userr  $userr
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = Userr::find($id);
        $user->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }

    public function destroyById($id) {
        $res = Userr::destroy($id);
        return (intval($res) > 0)?"Success":"fail";
    }
}
