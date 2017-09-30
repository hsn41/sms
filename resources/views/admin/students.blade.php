@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Students</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Manage</li>
    </ol>
    <div id="page-content">
        <div class="panel panel-dark">
            <div class="panel-heading">
                <div class="panel-control">
                    <ul class="nav nav-tabs">
                        <li>
                            <a data-toggle="tab" href="#demo-tabs2-box-1">
                                <i class="demo-pli-monitor-2 icon-lg"></i>
                                Add Student
                            </a>
                        </li>
                        <li class="active">
                            <a data-toggle="tab" href="#demo-tabs2-box-2">
                                <i class="demo-pli-laptop icon-lg"></i>
                                Student Information
                            </a>
                        </li>
                    </ul>
                </div>
                <h3 class="panel-title">Students</h3>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div id="demo-tabs2-box-1" class="tab-pane fade">
                        <div class="media">
                            <div class="media-body">
                                {!! Form::open(['method'=>'post','action'=>'StudentController@store','files'=>'true']) !!}
                                {{csrf_field()}}
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            {!! Form::label('name','Name') !!}
                                            {!! Form::text('name',null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('parent','Parent') !!}
                                                {!! Form::select('parent_id',[''=>'Select Parent']+$parent,null,['class'=>'form-control','required'=>'true','min'=>'0']) !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            {!! Form::label('transport','Transport Route') !!}
                                            {!! Form::select('transport_id',['0'=>'Select Route']+$transport,null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            {!! Form::label('class','Class') !!}
                                            {!! Form::select('class_id',[''=>'Select Class']+$classid,null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('section','Section') !!}
                                                {!! Form::select('section_id',[''=>'Select Section']+$section,null,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('rollnumber','Roll Number') !!}
                                                {!! Form::text('roll_number',null,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            {!! Form::label('birthday','Date of Birth') !!}
                                            {!! Form::date('birthday',null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('gender','Gender') !!}
                                                {!! Form::select('gender',['0'=>'Male','1'=>'Female'],null,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('phone','Phone') !!}
                                                {!! Form::text('phone',null,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            {!! Form::label('address','Address') !!}
                                            {!! Form::text('address',null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('email','Email') !!}
                                                {!! Form::email('email',null,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                {!! Form::label('password','Password') !!}
                                                {!! Form::password('password' ,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div id="image-preview" style="background-color:#4d627b">
                                                    <label for="photo_id" id="image-label">UPLOAD PHOTO</label>
                                                    <input type="file" name="photo" id="image-upload" class="img-circle file" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Add Student</button>
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
                                        <th>Parent Name</th>
                                        <th class="min-desktop">Picture</th>
                                        <th class="min-desktop">Roll #</th>
                                        <th class="min-desktop">Class</th>
                                        <th class="min-desktop">Section</th>
                                        <th class="min-desktop">Transport Route</th>
                                        <th class="min-desktop">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{--@if($transport)--}}
                                    {{--@foreach($transport as $transport)--}}
                                    {{--<tr>--}}
                                    {{--<td class="parent">{{$transport->route_name}}</td>--}}
                                    {{--<td>{{$transport->vehicle_numbers}}</td>--}}
                                    {{--<td>{{$transport->description}}</td>--}}
                                    {{--<td>{{$transport->charges}}</td>--}}
                                    {{--<td>--}}
                                    {{--<a href="#" class="parent btn btn-primary btn-xs" data-target="#demo-default-modal" data-toggle="modal">Edit</a>--}}
                                    {{--<a href="#" class="parent btn btn-danger btn-xs">Delete</a>--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--@endforeach--}}
                                    {{--@endif--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">$(document).ready(function(){$.uploadPreview({input_field:"#image-upload",preview_box:"#image-preview",label_field:"#image-label"})});</script>
@stop