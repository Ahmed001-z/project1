<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::get();
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
           'name' => 'required|unique:users|max:100',
           'email'  => 'required|unique:users|email',
            'password'  => 'required|same:conf_password|min:6',
            'conf_password'  => 'required|',


        ],[],
        ['name'=>'اسم المستخدم',
          'email'=>'البريد الالكتروني',
            'password'=>'كلمة المرور']);

       $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->email_verified_at=date('Y-m-d H:i:s');
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('message','تم الاضافة بنجاح');
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
    public function edit(User $user)
    {

        return view('dashboard.users.create',compact('user'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $com=User::find($id);
        $com->delete();
        return redirect()->back()->with('message','تم حذف المستخدم بنجاح');
    }
}
