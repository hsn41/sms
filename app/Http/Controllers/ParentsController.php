<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParentsCreateRequest;
use App\Parents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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
           Session::flash('flash_title','Parents');
           Session::flash('flash_message','Successfully Added');
           Session::flash('flash_type','danger');
           return redirect('admin/parents');
       }
       else
       {
           Session::flash('flash_title','Flash Title');
           Session::flash('flash_message','Not Created');
           Session::flash('flash_type','danger');
           return redirect('admin/parents');
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

        $parentsedit = Parents::find($id);

        if ($parentsedit)
        {
            return view('ajax.parentsedit', compact('parentsedit')); /////////view will be returned
        }else{
            return "<div>";
        }

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
        $parent =  Parents::find($id);
        if($parent){
            $parent->update();
        }
        else
        {
            return redirect('admin/parents');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parent =  Parents::find($id);
        if($parent){
                $parent->delete();
        }
        else
        {
            return redirect('admin/parents');
        }
    }
}
