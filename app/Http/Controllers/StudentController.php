<?php

namespace App\Http\Controllers;

use App\Classes;
use App\Parents;
use App\Section;
use App\Student;
use App\Transport;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classid=Classes::pluck('name','id')->all();
        $section=Section::pluck('name_section','id')->all();
        $parent=Parents::pluck('name','id')->all();
        $transport=Transport::pluck('route_name','id')->all();
        return view('admin.students',compact('classid','section','parent','transport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input= $request->all();
        if ($file=$request->file('photo'))
        {
            $name=time().date().$file->getClientOriginalName();
            $file->move('images/students',$name);
            $input['photo']=$name;
            if (Student::create($input))
            {
                return redirect('admin/students');
            }


        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
