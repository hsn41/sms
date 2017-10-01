@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Parent</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Parent Details</li>
    </ol>

    <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Parents</h3>
            </div>
            <div id="demo-custom-toolbar2" class="table-toolbar-left">
                <button id="demo-dt-addrow-btn" class="btn btn-primary addnew" data-target="#demo-default-modal" data-toggle="modal"><i class="demo-pli-plus"></i> Add New Parent</button>
            </div>
            <div class="panel-body">
                <table id="demo-dt-addrow" class="table table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th class="min-tablet">Email</th>
                        <th class="min-tablet">Phone</th>
                        <th class="min-tablet">Profession</th>
                        <th class="min-desktop">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($parents)
                        @foreach($parents as $parents)
                            <tr>
                                <td>{{$parents->name}}</td>
                                <td>{{$parents->email}}</td>
                                <td>{{$parents->phone}}</td>
                                <td>{{$parents->profession}}</td>
                                <td>
                                    <a class="show-edit-modal btn btn-mint btn-icon btn-circle" data-toggle="modal" href="#editModal" data-action="parents/{{$parents->id}}/edit"><i class="psi-pencil icon-md"></i></a>
                                    <a data-target="#demo-sm-modal" data-toggle="modal" class="btn btn-danger btn-icon btn-circle show-delete-modal" data-action="parents/{{$parents->id}}"><i class="psi-close icon-md"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="titleParent">Edit Parent</h4>
                </div>
                <div id="modal-loader" class="loader" style="display:none;text-align:center;padding:20px">
                    <img src="{{asset('images/ajaxloader.gif')}}">
                </div>
                <div class="modal-body" id="dynamic-content">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="titleParent">Add Parent</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'post','id'=>'parentscreate','action'=>'ParentsController@store']) !!}
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                {!! Form::label('name','Name') !!}
                                {!! Form::text('name',null,['class'=>'form-control','required'=>'true']) !!}
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('profession','Profession') !!}
                                    {!! Form::text('profession',null,['class'=>'form-control','required'=>'true']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('address','Address') !!}
                                    {!! Form::text('address',null,['class'=>'form-control','required'=>'true']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('mobile','Mobile') !!}
                                    {!! Form::text('phone',null,['class'=>'form-control','required'=>'true']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('email','Email') !!}
                                    {!! Form::email('email',null,['class'=>'form-control','required'=>'true']) !!}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label('','Password') !!}
                                    {!! Form::password('password', ['class' => 'form-control','required'=>'true']); !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button type="submit" class="btn btn-primary" id="addparent">Add Parent</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop