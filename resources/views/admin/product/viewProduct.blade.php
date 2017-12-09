@extends('admin.master')

@section('container')
<table class="table table-striped table-inverse table-bordered table-hover">

  <tr>
    <td>Product Image</td>
    <td><img src="{{ asset($product->productImage)}}" height='80' width='100' alt="{{$product->productName}}"</td>

  </tr>
  <tr>
    <td>Product Name</td>
    <td>{{$product->productName}}</td>
  </tr>
  <tr>
    <td>Categor Name</td>
    <td>{{$product->category}}</td>
    <tr>
      <td>Manufacturer Name</td>
      <td>{{$product->manufacturerName}}</td>
    </tr>
    <tr>
      <td>Product Price</td>
      <td>Tk.{{$product->productPrice}}</td>
    </tr>
    <tr>
      <td>Product Quantity</td>
      <td>{{$product->productQuantity}}</td>
    </tr>
    <tr>
      <td>Product  Sort Description</td>
      <td>{{ $product->productSortDescription }}</td>
    </tr>
    <tr>
      <td>Product Long Description</td>
      <td>{{$product->productLongtDescription}}</td>
    </tr>

    <tr>
      <td>Product Publication Status</td>
      <td>{{ $product->publicationStatus==1 ?'Published': 'UnPublished'}}</td>

    </tr>


  </table>

  @endsection
