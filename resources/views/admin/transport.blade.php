@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Transport</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Manage</li>
    </ol>
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
                                Add Route
                            </a>
                        </li>
                        <li class="active">
                            <a data-toggle="tab" href="#demo-tabs2-box-2">
                                <i class="demo-pli-laptop icon-lg"></i>
                                Transport Information
                            </a>
                        </li>
                    </ul>
                </div>
                <h3 class="panel-title">Transport</h3>
            </div>

            <!--Panel Body-->
            <div class="panel-body">
                <div class="tab-content">
                    <div id="demo-tabs2-box-1" class="tab-pane fade">
                        <div class="media">

                            <div class="media-body">
                                {!! Form::open(['method'=>'post','action'=>'TransportController@store']) !!}
                                {{csrf_field()}}
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            {!! Form::label('routename','Route Name') !!}
                                            {!! Form::text('route_name',null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {!! Form::label('vehicles','Number of Vehicles') !!}
                                                {!! Form::number('vehicle_numbers',null,['class'=>'form-control','required'=>'true','min'=>'0']) !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            {!! Form::label('description','Description') !!}
                                            {!! Form::text('description',null,['class'=>'form-control','required'=>'true']) !!}
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                {!! Form::label('transportcharges','Transport Charges') !!}
                                                {!! Form::text('charges',null,['class'=>'form-control','required'=>'true']) !!}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary">Add Route</button>

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
                                        <th>Route Name</th>
                                        <th>Number of vehicles</th>
                                        <th class="min-desktop">Descrition</th>
                                        <th class="min-desktop">Charges</th>
                                        <th class="min-desktop">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($transport)
                                        @foreach($transport as $transport)
                                            <tr>
                                                <td class="parent">{{$transport->route_name}}</td>
                                                <td>{{$transport->vehicle_numbers}}</td>
                                                <td>{{$transport->description}}</td>
                                                <td>{{$transport->charges}}</td>

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