@include('layouts.app')
<h1>Create Users</h1>
@section('content')


    <h1>Create Users</h1>
    {!! Form::open(['method'=>'POST']) !!}

    <div class="form-group">
        {!! Form::label('title:','Name')  !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    {!! Form::close()!!}




    <form  method="post" action='AdminUsersController@store'>
        <input class="" type="text" name="title">
        <label>Name</label>

    </form>



@endsection