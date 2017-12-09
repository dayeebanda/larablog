@extends('admin.master')

@section('container')
<hr />
<h3 class="text-center text-success"> {{Session::get('message')}}</h3>


<table class="table table-striped table-inverse table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Manufacturer Name</th>
      <th>Manufacturer Description</th>
      <th>Publication Status</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach( $manufacturers as $manufacturer)
    <tr>
      <td>{{ $manufacturer->id}}</td>
      <td>{{ $manufacturer->manufacturerName}}</td>
      <td>{{ $manufacturer->manufacturerDescription}}</td>
      <td>{{ $manufacturer->publicationStatus == 1 ? 'Publish': 'Unpublish'}}</td>

      <td><a href="{{ url('/manufacturer/edit/'.$manufacturer->id)}}" class="btn btn-success">
          <span class="glyphicon glyphicon-edit"></span>
      </a>
      <a href="{{ url('/manufacturer/delete/'.$manufacturer->id)}}" onclick="return confirm('are you sure  delete this Manufacturer');"class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span>
      </a>
    </td>
    </tr>
      @endforeach
  </tbody>
</table>

@endsection
