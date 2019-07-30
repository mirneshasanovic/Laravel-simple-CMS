@extends('layouts.app')
@section('content')
    <br/>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{ csrf_field() }}
        <div class="form-group">
                {!! Form::label('name_of_sport', 'Category:', array('class' => 'boldfont')) !!}
                {!! Form::select('name_of_sport', array('1' => 'Football', '2' => 'Basketball', '3' => 'Handball', '4' => 'Tennis' )); !!}
        </div>
        <div class="form-group">
            {!! Form::label('position', 'Position of post', array('class' => 'boldfont')) !!}
            {!! Form::select('position', array('L' => 'Sidebar Left', 'C' => 'Center', 'R' => 'Sidebar Right')); !!}
        </div>    
        <div class="form-group">
            {!! Form::label('label', 'Article label:', array('class' => 'boldfont')) !!}
            {!! Form::text('label',null,['class'=>'form-control', 'placeholder'=>'Add article label']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title', 'Title:', array('class' => 'boldfont')) !!}
            {!! Form::text('title',null,['class'=>'form-control', 'placeholder'=>'The title of the news', 'required' => 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Body:', array('class' => 'boldfont')) !!}
            {{ Form::textarea('body', null, ['class'=>'form-control', 'id'=>'summary-ckeditor', 'placeholder'=>'Enter a description here ...', 'required' => 'required']) }}
        </div>
        <div class="form-group">
            <br>
            {!! Form::label('path', 'Select an image:', array('class' => 'boldfont')) !!}
        <br>
            {{ Form::file('image') }}
            <br>
            <br>
        </div>
            {!! Form::submit('Submit', ['class'=>'form-control', 'class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>

    @section('js')
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    @endsection

@endsection
    
