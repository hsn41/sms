@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Classes</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Manage</li>
    </ol>
    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="titleParent">Add Class</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'post','id'=>'teachercreate','action'=>'TeacherController@store','files'=>true]) !!}

                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Form::label('firstname','First Name') !!}
                                {!! Form::text('first_name',null,['class'=>'form-control']) !!}
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('lastname','Last Name') !!}
                                    {!! Form::text('last_name',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    {!! Form::label('address','Address') !!}
                                    {!! Form::text('address',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('phone','Mobile Number') !!}
                                    {!! Form::text('phone',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('gender','Gender') !!}

                                    {!! Form::select('gender',array(1=>'Male',2=>'Female'),0,['class'=>'form-control']) !!}

                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('email','Email') !!}
                                    {!! Form::email('email',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('','Password') !!}
                                    {!! Form::password('password', ['class' => 'form-control']); !!}

                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-sm-12" >
                                <img src="" class="img-circle" alt="Teacher Photo">
                                <div id="image-preview">
                                    <label for="photo_id" id="image-label">UPLOAD PHOTO</label>
                                    <input type="file" name="photo_id" id="image-upload" class="img-circle file" />
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button type="submit" class="btn btn-primary" id="addteacher">Add Teacher</button>

                </div>

                {!! Form::close() !!}

            </div>
        </div>

    </div>

    <div id="page-content">
        <!--Panel with Tabs (Icon)-->
        <!--===================================================-->
        <div class="panel panel-dark">

            <!--Panel heading-->
            <div class="panel-heading">
                <div class="panel-control">
                    <ul class="nav nav-tabs">
                        <li>
                            <a data-toggle="tab" href="#demo-tabs2-box-1">
                                <i class="demo-pli-monitor-2 icon-lg"></i>
                                Add Class
                            </a>
                        </li>
                        <li class="active">
                            <a data-toggle="tab" href="#demo-tabs2-box-2">
                                <i class="demo-pli-laptop icon-lg"></i>
                                Class Information
                            </a>
                        </li>
                    </ul>
                </div>
                <h3 class="panel-title">Classes</h3>
            </div>

            <!--Panel Body-->
            <div class="panel-body">
                <div class="tab-content">
                    <div id="demo-tabs2-box-1" class="tab-pane fade">
                        <div class="media">

                            <div class="media-body">
                                {!! Form::open(['method'=>'post','action'=>'ClassesController@store']) !!}
                                {{csrf_field()}}
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            {!! Form::label('name','Name') !!}
                                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {!! Form::label('namenumeric','Name Numeric') !!}
                                                {!! Form::text('namenumeric',null,['class'=>'form-control']) !!}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary">Add Class</button>

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
                                        <th>Numeric Name</th>
                                        <th class="min-desktop">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($classes)
                                    @foreach($classes as $classes)
                                    <tr>
                                    <td class="parent">{{$classes->name}}</td>
                                    <td>{{$classes->namenumeric}}</td>


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