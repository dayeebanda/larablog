@extends('admin.master')

@section('container')

<h3 class="text-center text-success"> {{Session::get('message')}}</h3>


<table class="table table-striped table-inverse table-bordered table-hover">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Category Name</th>
      <th>Manufacturer Name</th>
      <th>Product Price</th>
      <th>Product Quantity</th>
      <th>Publication Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $products as $product)
    <tr>
      <td>{{ $product->productName}}</td>
      <td>{{ $product->category}}</td>
      <td>{{ $product->manufacturerName}}</td>
      <td>Tk.{{ $product->productPrice}}</td>
      <td>{{ $product->productQuantity}}</td>
      <td>{{ $product->publicationStatus==1 ?'Published': 'UnPublished'}}</td>

      <td><a href="{{ url('/product/view/'.$product->id)}}" class="btn btn-info" title="Product View">
        <span class="glyphicon glyphicon-info-sign"></span>

        <a href="{{ url('/product/edit/'.$product->id)}}" class="btn btn-success" title="Product edit">
          <span class="glyphicon glyphicon-edit"></span>
      <a href="{{ url('/product/delete/'.$product->id)}}" onclick="return confirm('are you sure  delete this Product');"class="btn btn-danger" title="Product delete">
          <span class="glyphicon glyphicon-trash"></span>
      </a>
    </td>
    </tr>
      @endforeach
  </tbody>
</table>
@endsection
