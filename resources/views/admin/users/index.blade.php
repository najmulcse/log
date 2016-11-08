@extends('layouts.app')


@section('content')
   <div class="col-md-12">
       <h1>Users table</h1>

       <table class="table">
           <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
           </thead>

           <tbody>
               @if($users)

                   @foreach($users as $user)
                       <tr>
                           <td>{{$user->id}}</td>
                           <td>{{$user->photo?$user->photo->file:'Not available '}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role->name}}</td>
                            <td>{{$user->is_active== 1 ? 'Active':'Not Active'}}</td>
                            <td>{{$user->created_at }}</td>
                            <td>{{$user->updated_at }}</td>
                       </tr>
                   @endforeach
               @endif

           </tbody>
       </table>


   </div>


@endsection