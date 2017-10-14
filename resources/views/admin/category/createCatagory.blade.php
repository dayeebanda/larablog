@extends('admin.master')


@section('container')

<div class="well">
  <h3 class="text-center text-success"> {{Session::get('message')}}</h3>
    {!! Form::open(['url' => '/category/save', 'class' => 'form-horizontal']) !!}

    <fieldset>

        <legend>Add Category</legend>

        <!-- category -->
        <div class="form-group">
            {!! Form::label('text', 'Category Name:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
            {!! Form::text('category', $value = null, ['class' => 'form-control', 'placeholder' => 'Category Name']) !!}
            </div>
        </div>


        <!-- Text Area -->
        <div class="form-group">
            {!! Form::label('textarea', 'Category Description', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                {!! Form::textarea('category_description', $value = null, ['class' => 'form-control', 'rows' => 3,'placeholder' => 'Category Description']) !!}
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
        </div>

        <!-- Radio Buttons -->
        <div class="form-group">
            {!! Form::label('radios', 'Publication Status', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-10">
                <div class="col-lg-2">
                    {!! Form::label('radio', 'Yes') !!}
                    <!--{!! Form::radio('publication_status', true, ['id' => 'radio1']) !!}-->
                    {{ Form::radio('publication_status', 1, true) }}
            </div>
                <div class="col-lg-2">

                    {!! Form::label('radio', 'No.') !!}
                    {!! Form::radio('publication_status',0, false) !!}
                </div>
            </div>
        </div>

        <!-- Select With One Default -->
        <div class="form-group">
            {!! Form::label('select', 'Publicatin Size', ['class' => 'col-lg-2 control-label'] )  !!}
            <div class="col-lg-10">
                {!!  Form::select('publication_size', ['S' => 'Small', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!}
            </div>
        </div>

        <!-- Select Multiple -->
        <!-- <div class="form-group">
            {!! Form::label('multipleselect[]', 'publication Status', ['class' => 'col-lg-2 control-label'] )  !!}
            <div class="col-lg-10">
                {!!  Form::select('multipleselect[]', ['honda' => 'Honda', 'toyota' => 'Toyota', 'subaru' => 'Subaru', 'ford' => 'Ford', 'nissan' => 'Nissan'], $selected = null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
            </div>
        </div> -->

        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
            </div>
        </div>

    </fieldset>

    {!! Form::close()  !!}

</div>
@endsection
