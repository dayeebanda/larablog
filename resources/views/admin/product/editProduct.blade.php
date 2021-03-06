@extends('admin.master')
@section('container')

<div class="well">
<h3 class="text-center text-success"> {{Session::get('message')}}</h3>
{!!Form::open(['enctype' => 'multipart/form-data','url'=>'product/update','method'=>'POST','class'=>'form-horizontal','name'=>'editProductForm'])!!}

<fieldset>

<legend>Create Product</legend>


<div class="form-group">
  <label for="text" class="col-sm-2 control-label">Product Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="productName" value="{{ $productById->productName}}">
      <input type="hidden" class="form-control" name="productId" value="{{$productById->id}}">
      <span class="text-danger"> {{ $errors->has('productName') ? $errors->first('productName'):''}}</span>
    </div>
</div>

<div class="form-group">
  <label for="text" class="col-sm-2 control-label">Category Name</label>
    <div class="col-lg-10">
        <select class="form-control" name="categoryId">
            <option> Select Category Name</option>
            @foreach( $categories as $category)
            <option value="{{$category->id}}"> {{$category->category}}</option>
            @endforeach
        </select>
      </div>
</div>

<div class="form-group">
  <label for="text" class="col-sm-2 control-label">Manufacturer Name</label>
    <div class="col-lg-10">
        <select class="form-control" name="manufacturerId">
            <option> Select Manufacturer Name</option>
            @foreach( $manufacturers as $manufacturer)
            <option value="{{$manufacturer->id}}"> {{$manufacturer->manufacturerName}}</option>
            @endforeach
        </select>
      </div>
</div>


<div class="form-group">
  <label for="text" class="col-sm-2 control-label">Product Price</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="productPrice" value="{{ $productById->productPrice}}">
      <span class="text-danger"> {{ $errors->has('productPrice') ? $errors->first('productPrice'):''}}</span>
    </div>
</div>

<div class="form-group">
  <label for="text" class="col-sm-2 control-label">Product Quantity</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="productQuantity" value="{{ $productById->productQuantity}}">
      <span class="text-danger"> {{ $errors->has('productQuantity') ? $errors->first('productQuantity'):''}}</span>
    </div>
</div>

<div class="form-group">
  <label for="text" class="col-sm-2 control-label">Product Sort Description</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="productSortDescription" value="{{ $productById->productSortDescription}}">
      <span class="text-danger"> {{ $errors->has('productSortDescription') ? $errors->first('productSortDescription'):''}}</span>
    </div>
</div>

<div class="form-group">
  <label for="textarea" class="col-sm-2 control-label">Product  Long Description</label>
      <div class="col-lg-10">

      <textarea type="textarea" rows="3" class="form-control" name="productLongtDescription">
{{ $productById->productLongtDescription}}

        </textarea>
        <span class="text-danger"> {{ $errors->has('productLongtDescription') ? $errors->first('productLongtDescription'):''}}</span>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>-
      </div>
</div>

<div class="form-group">
    <label for="" class="col-sm-2 control-label">Product Image</label>
        <div class="col-sm-10">
            <input type="file" name="productImage" accept="image/*">
            <img src=" {{ asset($productById->productImage)}}" height=80 width="100" />
        </div>
</div>


<div class="form-group">
  <label for="option" class="col-sm-2 control-label" >Publication Status</label>
 <div class="col-lg-10">
  <select class="form-control" name="publicationStatus">
    <option>Publication Status</option>
    <option value=1>Publish</option>
    <option value=0>Unpublish</option>
  </select>

</div>
</div>


<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
      <button type="submit" name="btn" class="btn btn-lg btn-info pull-right">Update</button>
    </div>
</div>

{!!Form::close()!!}

<script>
document.forms['editProductForm'].elements['categoryId'].value="{{ $productById->categoryId}}"
document.forms['editProductForm'].elements['manufacturerId'].value="{{ $productById->manufacturerId}}"
document.forms['editProductForm'].elements['publicationStatus'].value="{{ $productById->publicationStatus}}"
</script>


</div>
</div>
</div>

@endsection
