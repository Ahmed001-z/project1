<?php

namespace App\Http\Controllers;

use App\Models\companies;
use App\Models\majors;
use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("student.index")->with("studen",student::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
       $company=companies::all();
       $major=majors::all();
       $student=student::all();
       return view("student.create",compact("company","major","student"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'student_number' => 'required',
            'phone' => 'required',
            'date_birth' => 'required',
            'average' => 'required',
            'major_id' => 'required',
            'company_id' => 'required',

        ]);

        $student=new student();
        $student->name=$request->name;
        $student->student_number=$request->student_number;
        $student->phone=$request->phone;
        $student->date_birth=$request->date_birth;
        $student->average=$request->average;
        $student->major_id=$request->major_id;
        $student->company_id=$request->company_id;
        $student->save();
        return redirect()->back();
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
        //
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
        //
    }
}
