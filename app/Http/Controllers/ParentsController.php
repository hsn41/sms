<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParentsCreateRequest;
use App\Parents;
use Illuminate\Http\Request;


class ParentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parents=Parents::all()->sortByDesc('id');
        return view('admin.parents',compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //return view('admin.parents');
        return $request->all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParentsCreateRequest $request)
    {
       $parents=new Parents;
       $parents->name=$request->name;
       $parents->profession=$request->profession;
       $parents->address=$request->address;
       $parents->phone=$request->phone;
       $parents->email=$request->email;
       $parents->password=$request->password;
       $parents->save();
       if ($parents->save())
       {
           return 1;
       }
       else
       {
           return 0;
       }

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

        $parentsedit = Parents::findOrFail($id);
        return view('ajax.parentsedit', compact('parentsedit')); /////////view will be returned
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ParentsCreateRequest $request, $id)
    {


        return $request->all();
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
