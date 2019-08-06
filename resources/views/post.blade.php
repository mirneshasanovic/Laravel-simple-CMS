@extends('layouts.app')

@section('content')
<div class="sidebar-left">  
    <div class="thumbnail">
    <img style="width:100%; height:20%" src="{{ asset("storage/images/".$post->image) }}">
    </div>
    <br/>
    <div class="thumbnail">
        {{$post->title}}
    </div>
    <div class="thumbnail">
            {!! ($post->body)!!}                                
    </div>
    <br/> 
</div> 
@endsection