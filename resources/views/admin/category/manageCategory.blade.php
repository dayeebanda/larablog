@extends('admin.master')


@section('container')
<hr />
<h3 class="text-center text-success"> {{Session::get('message')}}</h3>


<table class="table table-striped table-inverse table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Category Name</th>
      <th>Category Description</th>
      <th>Publication Status</th>
      <th>Publication Size</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach( $categories as $category)
    <tr>
      <td>{{ $category->id}}</td>
      <td>{{ $category->category}}</td>
      <td>{{ $category->category_description}}</td>
      <td>{{ $category->publication_status == 1 ? 'Publish': 'Unpublish'}}</td>
      <td>{{ $category->publication_size}}</td>
      <td><a href="{{ url('/category/edit/'.$category->id)}}" class="btn btn-success">
          <span class="glyphicon glyphicon-edit"></span>
      </a>
      <a href="{{ url('/category/delete/'.$category->id)}}" onclick="return confirm('are you sure  delete this category');"class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span>
      </a>
    </td>
    </tr>
      @endforeach
  </tbody>
</table>

@endsection
