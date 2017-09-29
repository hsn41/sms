@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Teacher</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Teachers Details</li>
    </ol>
    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="titleParent">Add Teacher</h4>
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
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Teachers</h3>
            </div>
            <div id="demo-custom-toolbar2" class="table-toolbar-left">
                <button id="demo-dt-addrow-btn" class="btn btn-primary addnew" data-target="#demo-default-modal" data-toggle="modal"><i class="demo-pli-plus"></i> Add New Teacher</button>
            </div>
            <div class="panel-body">
                <table id="demo-dt-addrow" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Photo</th>
                        <th class="min-tablet">Phone</th>
                        <th class="min-tablet">Email</th>
                        <th class="min-tablet">Address</th>
                        <th class="min-desktop">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($teacher)
                        @foreach($teacher as $teacher)
                            <tr>
                                <td class="parent">{{$teacher->first_name}}  {{$teacher->last_name}} </td>
                                <td>bjhds</td>
                                <td>{{$teacher->phone}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->address}}</td>

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
    <script type="text/javascript">
        $(document).ready(function() {
            $.uploadPreview({
                input_field: "#image-upload",
                preview_box: "#image-preview",
                label_field: "#image-label"
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="_token"]').attr('content')
                }
            });
            $("#teachercreate").submit(function(event) {
                event.preventDefault();
                var photo_id = new FormData();
                file.append('photo_id',$('.file')[0].files[0]);
                posting.append('file',$('.file')[0].files[0]);
                var $form = $( this ),
                    url = $form.attr( 'action' );
                contentType: false;
                var posting = $.post( url, $("#teachercreate").serialize());
                posting.done(function(data) {
                    alert(data);
                    if(data==1)
                    {

                        $('#demo-default-modal').modal('toggle');
                        $.niftyNoty({
                            type: 'success',
                            container : 'floating',
                            title : 'Teacher',
                            message : 'Teacher data created successfully',
                            closeBtn : false,
                            timer : 9500,
                            onShow:function(){
                                location.reload();
                            }
                        });
                    }
                    elseif(data==0)
                    {
                        $('#demo-default-modal').modal('toggle');
                        $.niftyNoty({
                            type: 'danger',
                            container : 'floating',
                            title : 'Teacher',
                            message : 'Teacher not created',
                            closeBtn : false,
                            timer : 9500,
                            onShow:function(){
                                location.reload();
                            }
                        });

                    }





                });
            });
        });

    </script>
@stop