@include('layouts.app')
<h1>Create Users</h1>
@section('content')


    <h1>Create Users</h1>
    {!! Form::open(['method'=>'POST','action'=>'adminUsersController@store']) !!}

    <div class="form-group">
        {!! Form::label('title:','Name')  !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    {!! Form::close()!!}




@endsection