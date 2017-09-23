@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Admission</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Student Admission</li>
    </ol>
    <div id="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Student Addmission Form</h3>
                    </div>
                    <form id="demo-bvd-notempty" action="forms-validation.html" class="form-horizontal">
                        <div class="panel-body">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Name</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="username" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Parents</label>
                                    <div class="col-lg-7">
                                        <select class="form-control">
                                            <option>select</option>
                                            <option>1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Class</label>
                                    <div class="col-lg-7">
                                        <select class="form-control">
                                            <option>select</option>
                                            <option>1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Section</label>
                                    <div class="col-lg-7">
                                        <select class="form-control">
                                            <option>select</option>
                                            <option>1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Roll</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="username" placeholder="Roll #">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Birthday</label>
                                    <div class="col-lg-7">
                                        {{--<div class="input-group date">--}}
                                            {{--<input type="text" class="form-control">--}}
                                            {{--<span class="input-group-addon"><i class="demo-pli-calendar-4"></i></span>--}}
                                        {{--</div>--}}
                                        <input type="date" class="form-control">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Gender</label>
                                    <div class="col-lg-7">
                                        <select class="form-control">
                                            <option>select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="username" placeholder="Full Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="username" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="username" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password</label>
                                    <div class="col-lg-7">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Transport Route</label>
                                    <div class="col-lg-7">
                                        <select class="form-control">
                                            <option>1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Photo</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" name="photo" placeholder="Roll #">
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                        <div class="panel-footer">
                            <div class="row" align="right">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit">Add Student</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop