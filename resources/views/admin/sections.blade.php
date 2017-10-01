@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Sections</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Manage</li>
    </ol>
    <div id="page-content">
        <!--Panel with Tabs (Icon)-->
        <!--===================================================-->
        <div class="panel panel-dark">
        @include('flash::message')
            @if(Session::has('flash_message'))
                <p class="alert alert-info">{{ Session::get('flash_message') }}</p>
            @endif
            <!--Panel heading-->
            <div class="panel-heading">
                <div class="panel-control">
                    <ul class="nav nav-tabs">
                        <li>
                            <a data-toggle="tab" href="#demo-tabs2-box-1">
                                <i class="demo-pli-monitor-2 icon-lg"></i>
                                Add Section
                            </a>
                        </li>
                        <li class="active">
                            <a data-toggle="tab" href="#demo-tabs2-box-2">
                                <i class="demo-pli-laptop icon-lg"></i>
                                Section Information
                            </a>
                        </li>
                    </ul>
                </div>
                <h3 class="panel-title">Sections</h3>
            </div>

            <!--Panel Body-->
            <div class="panel-body">
                <div class="tab-content">
                    <div id="demo-tabs2-box-1" class="tab-pane fade">
                        <div class="media">

                            <div class="media-body">
                                {!! Form::open(['method'=>'post','action'=>'SectionController@store']) !!}
                                {{csrf_field()}}
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            {!! Form::label('name','Name') !!}
                                            {!! Form::text('name_section',null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {!! Form::label('nick_name','Nick Name') !!}
                                                {!! Form::text('nick_name',null,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            {!! Form::label('class','Class') !!}
                                            {!! Form::select('class_id',[''=>'Select class']+$classid,null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {!! Form::label('teacher','Teacher') !!}
                                                {!! Form::select('teacher_id',[''=>'Select teacher']+$teacherid,null,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary">Add Section</button>

                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div id="demo-tabs2-box-2" class="tab-pane fade in active">
                        <div class="media">

                            <div class="media-body">
                                <table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Nick Name</th>
                                        <th class="min-desktop">Class</th>
                                        <th class="min-desktop">Teacher</th>
                                        <th class="min-desktop">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($section)
                                        @foreach($section as $section)
                                            <tr>
                                                <td class="parent">{{$section->name_section}}</td>
                                                <td>{{$section->nick_name}}</td>
                                                <td>{{$section->classes->name}}</td>
                                                <td>{{$section->teachers->first_name}}</td>

                                                <td>
                                                    <a href="#" class="parent btn btn-primary btn-xs" data-target="#demo-default-modal" data-toggle="modal">Edit</a>
                                                    <a href="#" class="parent btn btn-danger btn-xs">Delete</a>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!--End Panel with Tabs (Icon)-->



    </div>


@stop