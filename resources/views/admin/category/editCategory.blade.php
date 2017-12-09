@extends('admin.master')
@section('container')


<div class="well">
<h3 class="text-center text-success"> {{Session::get('message')}}</h3>
{!!Form::open(['url'=>'category/update','method'=>'POST','class'=>'form-horizontal','name'=>'editCategoryForm'])!!}
<fieldset>

<legend>Edit Category</legend>


<div class="form-group">
  <label for="text" class="col-sm-2 control-label">Category Name</label>
    <div class="col-lg-10">
      <input type="text" value="{{$categoryById->category}}" class="form-control" name="category">
      <input type="hidden" value="{{$categoryById->id}}" class="form-control" name="id">
      <span class="text-danger"> {{ $errors->has('category') ? $errors->first('category'):''}}</span>
    </div>
</div>

<div class="form-group">
  <label for="textarea" class="col-sm-2 control-label"> Category Description</label>
      <div class="col-lg-10">
        <textarea type="textarea" rows="3" class="form-control" name="category_description">
          {{ $categoryById->category_description }}
        </textarea>
        <span class="text-danger"> {{ $errors->has('category_description') ? $errors->first('category_description'):''}}</span>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>-
      </div>
</div>

<div class="form-group">
  <label for="radio" class="col-sm-2 control-label" >Publicatin Status</label>
          <div class="col-lg-10">
              <div class="col-lg-2">
                  <input type="radio"  name="publication_status"  value="1">
                  <label for="radio" class="" >Yes</label>
                  <input type="radio" name="publication_status" value="0">
                  <label for="radio" class="" >No</label>
              </div>
          </div>
</div>

<div class="form-group">
  <label for="option" class="col-sm-2 control-label" >Publication Size</label>
 <div class="col-lg-10">
  <select class="form-control" name="publication_size">
    <option>Publication Size</option>
    <option value="S">Small</option>
    <option value="L">Large</option>
    <option value="XL">Extra Large</option>
    <option value="2XL">2XLLarge</option>
  </select>
</div>
</div>


<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
      <button type="submit" name="btn" class="btn btn-lg btn-info pull-right">Update</button>
    </div>
</div>

{!!Form::close()!!}


</div>
</div>
</div>
<!-- <script>
  document.forms['editCategoryForm'].elements['publicationStatus'].value={{$categoryById->publicationStatus}}


</script> -->
@endsection
