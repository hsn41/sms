{!! Form::model($parentsedit,['method'=>'PATCH','action'=>['ParentsController@update',$parentsedit->id]]) !!}

{{csrf_field()}}
<div class="panel-body">
    <div class="row">
        <div class="col-sm-6">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',$parentsedit->name,['class'=>'form-control']) !!}
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('profession','Profession') !!}
                {!! Form::text('profession',$parentsedit->profession,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('address','Address') !!}
                {!! Form::text('address',$parentsedit->address,['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('mobile','Mobile') !!}
                {!! Form::text('phone',$parentsedit->phone,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                {!! Form::label('email','Email') !!}
                {!! Form::email('email',$parentsedit->email,['class'=>'form-control']) !!}
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
    <button type="submit" class="btn btn-primary">Update Parent</button>

</div>

{!! Form::close() !!}