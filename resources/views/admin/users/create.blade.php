
@extends('layouts.app')

@section('content')

     <div class="row">
            <div class="col-md-1"></div>
             <div class="col-md-8">
                 <h1>Create Users</h1>
                    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>'true']) !!}

                    <div class="form-group ">
                        {!! Form::label('name:','Name')  !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group ">
                        {!! Form::label('email','Email') !!}
                        {!! Form::text('email',null,['class'=>'form-control']) !!}
                    </div>


                     <div class="form-group ">
                         {!! Form::label('is_active','Status') !!}
                         {!! Form::select('is_active',array(1=>'Active' ,0=>'Not active'),0,['class'=>'form-control']) !!}
                     </div>

                     <div class="form-group ">
                         {!! Form::label('role_id','Role') !!}
                         {!! Form::select('role_id',[''=>'Choose Options']+$roles,null,['class'=>'form-control']) !!}
                     </div>

                    <div class="form-group">
                        {!! Form::label('photo_id','Photo') !!}
                        {!! Form::file('file',null,['class'=>'form-control']) !!}
                    </div>
                     <div class="form-group ">
                         <div class="form-group ">
                             {!! Form::label('Password','Password') !!}
                             {!! Form::password('password',['class'=>'form-control']) !!}
                         </div>
                         {!! Form::submit('Create User',['class'=>'btn btn-primary']) !!}
                     </div>
                    {!! Form::close()!!}
             </div>


            <div class="col-md-3"></div>

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