
@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Parent</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Parent Details</li>
    </ol>
    <div id="demo-sm-modal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title" id="mySmallModalLabel" >Delete</h4>
                </div>
                <div class="modal-body">
                    <p>Are You Sure ?To Delete.</p>

                </div>
                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-danger">Delete</button>
                </div>


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
    <div id="page-content" >

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
                                <td> <div class="btn-group">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" type="button">
                                                Actions <i class="dropdown-caret"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                   <a class=" show-edit-modal btn btn-default btn-labeled psi-pen" data-toggle="modal" href="#editModal"
                                               data-action="parents/{{$parents->id}}/edit" >Edit<i class="icon-note"></i></a>
   
</li>

                                                <li><a data-target="#demo-sm-modal" data-toggle="modal" class="btn btn-default btn-labeled psi-close"
                                                       data-action="parents/{{$parents->id}}/edit">Delete</a></li>
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
<script type="text/javascript">
    $(document).on('click','.show-edit-modal',function () {
        var action = $(this).data('action');
        $('#dynamic-content').hide();
        $('#modal-loader').show();
        $.ajax({
            type: "GET",    //////////type post or get
            url: action,    ////getting form data-action from btn
            dataType :"html",
            success:function(data){

                $('#dynamic-content').show();
                $('#modal-loader').hide();
                $('#dynamic-content').html(data);


            }
        });
    });
</script>
    <script>

        /* attach a submit handler to the form */
        $("#parentscreate").submit(function(event) {
            alert("sd");
            event.preventDefault();
            var $form = $( this ),
                url = $form.attr( 'action' );
            var posting = $.post( url, $("#parentscreate").serialize());
            posting.done(function(data) {
                if(data==1)
                {
                    $('#demo-default-modal').modal('toggle');
                    $.niftyNoty({
                        type: 'success',
                        container : 'floating',
                        title : 'Parents',
                        message : 'parents data created successfully',
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
                        title : 'Parents',
                        message : 'Parents not created',
                        closeBtn : false,
                        timer : 9500,
                        onShow:function(){
                            location.reload();
                        }
                    });

                }





            });
        });
    </script>


@stop
