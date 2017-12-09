@extends('admin.master')
@section('container')


<div class="well">
<h3 class="text-center text-success"> {{Session::get('message')}}</h3>
{!!Form::open(['url'=>'manufacturer/save','method'=>'POST','class'=>'form-horizontal','name'=>'CreatManufacturerForm'])!!}

<fieldset>

<legend>Crate Manufacturer</legend>


<div class="form-group">
  <label for="text" class="col-sm-2 control-label">Manufacturer Name</label>
    <div class="col-lg-10">
      <input type="text" class="form-control" name="manufacturerName">
      <!-- <input type="hidden" class="form-control" name="id"> -->
      <span class="text-danger"> {{ $errors->has('manufacturerName') ? $errors->first('manufacturerName'):''}}</span>
    </div>
</div>

<div class="form-group">
  <label for="textarea" class="col-sm-2 control-label"> Manufacturer Description</label>
      <div class="col-lg-10">

      <textarea type="textarea" rows="3" class="form-control" name="manufacturerDescription">
        </textarea>
        <span class="text-danger"> {{ $errors->has('manufacturerDescription') ? $errors->first('manufacturerDescription'):''}}</span>
        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>-
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
      <button type="submit" name="btn" class="btn btn-lg btn-info pull-right">Submit</button>
    </div>
</div>

{!!Form::close()!!}


</div>
</div>
</div>

@endsection
