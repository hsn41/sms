@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Parent</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Parent Details</li>
    </ol>
    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="titleParent">Add Parent</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method'=>'post','action'=>'ParentsController@store']) !!}
                    <form method="post" id="parentform">
                        {{csrf_field()}}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    {!! Form::label('name','Name') !!}
                                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {!! Form::label('profession','Profession') !!}
                                        {!! Form::text('profession',null,['class'=>'form-control']) !!}
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
                        </div>

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button type="submit" class="btn btn-primary" id="addparent">Add Parent</button>
                    <button class="btn btn-success" style="display: none" id="savechanges">Save Changes</button>
                </div>

                {!! Form::close() !!}

            </div>
        </div>

    </div>
    <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Parents</h3>
            </div>
            <div id="demo-custom-toolbar2" class="table-toolbar-left">
                <button id="demo-dt-addrow-btn" class="btn btn-primary addnew" data-target="#demo-default-modal" data-toggle="modal"><i class="demo-pli-plus"></i> Add New Parent</button>
            </div>
            <div class="panel-body">
                <table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th class="min-tablet">Phone</th>
                        <th class="min-tablet">Profession</th>
                        <th class="min-desktop">Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($parents)
                        @foreach($parents as $parents)
                            <tr>
                                <td class="parent">{{$parents->name}}</td>
                                <td>{{$parents->address}}</td>
                                <td>{{$parents->email}}</td>
                                <td>{{$parents->profession}}</td>
                                <td> <div class="btn-group">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" type="button">
                                                Actions <i class="dropdown-caret"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#" class="parent" data-target="#demo-default-modal" data-toggle="modal">Edit</a></li>
                                                <li><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop