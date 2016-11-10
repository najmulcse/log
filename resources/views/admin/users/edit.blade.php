
@extends('layouts.app')

@section('content')

    <div class="row">
            <h1>Edit User</h1>

            <div class="col-md-8">

                <div class="col-sm-9">
                        {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id ],'files'=>'true']) !!}

                        <div class="form-group ">
                            {!! Form::label('name:','Name')  !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group ">
                            {!! Form::label('email','Email') !!}
                            {!! Form::email('email',null,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group ">
                            {!! Form::label('is_active','Status') !!}
                            {!! Form::select('is_active',array(1=>'Active' ,0=>'Not active'),0,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group ">
                            {!! Form::label('role_id','Role') !!}
                            {!! Form::select('role_id',$role,null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('image_id','Photo') !!}
                            {!! Form::file('image_id',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group ">
                            <div class="form-group ">
                                {!! Form::label('Password','Password') !!}
                                {!! Form::password('password',['class'=>'form-control']) !!}
                            </div>
                            {!! Form::submit('Update',['class'=>'btn btn-primary']) !!}
                        </div>
                       {!! Form::close()!!}

                 </div>


            </div>


            <div class="col-md-3">
                <img  class="img-responsive img-rounded" src="/images/{{$user->image ? $user->image->file : '/images/color.PNG'}}" alt="Not available" >
            </div>
            <div class="col-md-1">

            </div>

    </div>
    @if(count($errors) > 0)

        <div class="alert alert-danger">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>

    @endif



@endsection