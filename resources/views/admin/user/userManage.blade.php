@extends('admin.master')
@section('container')
<h3 class="text-center text-success"> {{Session::get('message')}}</h3>
<h4>{{ $users->count()}} in this page </h4>
<table class="table table-striped table-inverse table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>User Name</th>
      <th>User Address</th>
      <th>User Email</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach( $users as $user)
    <tr>
      <td>{{ $user->id}}</td>
      <td>{{ $user->name}}</td>
      <td>{{ $user->address}}</td>
      <td>{{ $user->email}}</td>
      <td><a href="{{ url('/user/edit/'.$user->id)}}" class="btn btn-success">
          <span class="glyphicon glyphicon-edit"></span>
      </a>
      <a href="{{ url('/user/delete/'.$user->id)}}" onclick="return confirm('are you sure  delete this User');"class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span>
      </a>
    </td>
    </tr>
      @endforeach
  </tbody>
</table>
</hr>
<div style="float:right">
  {{ $users->links()}}
</div>
@endsection
