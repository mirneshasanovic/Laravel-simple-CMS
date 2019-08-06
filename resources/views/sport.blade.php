@extends('layouts.app')

@section('content')
<br>
<div class="row">
    <div class="col-sm-3">
        <div class="sidebar">      
            @foreach ($sidebar_left as $post)
                <a href="posts/{{$post->id}}">
                    <div class="sidebar-left">  
                        <div class="thumbnail">
                                <img style="width:100%; height:20%" src="storage/images/{{$post->image}}">
                        </div>
                        <br/>
                        <div class="thumbnail-title">
                            <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                        </div>
                        <div class="thumbnail-body">
                                {!! (str_limit(strip_tags($post->body), 30, ' '))!!} <a href="/posts/{{$post->id}}">...</a>                                
                        </div>
                        <br/> 
                    </div>  
                </a>   
            @endforeach                 
        </div>
    </div>

    <div class="col-md-6"> 
        <div class="center">              
            @foreach ($center as $post)
                <a href="posts/{{$post->id}}">
                    <div class="thumbnail">
                        <img style="width:100%; height:50%" src="storage/images/{{$post->image}}">
                    </div>
                    <br>
                    <div class="title-and-body">
                        <div class="thumbnail-title">
                            <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                        </div>
                        <br>
                        <div class="thumbnail-body">
                            {!! (str_limit(strip_tags($post->body), 500, ' '))!!} <a href="/posts/{{$post->id}}"> Read more...</a>                             
                        </div>     
                    </div>
                </a>        
            @endforeach
        </div>          
    </div>

    <div class="col-sm-3">
            <div class="sidebar">      
                @foreach ($sidebar_right as $post)
                    <a href="posts/{{$post->id}}">
                        <div class="sidebar-left">  
                            <div class="thumbnail">
                                    <img style="width:100%; height:20%" src="storage/images/{{$post->image}}">
                            </div>
                            <br/>
                            <div class="thumbnail-title">
                                <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                            </div>
                            <div class="thumbnail-body">
                                    {!! (str_limit(strip_tags($post->body), 30, ' '))!!} <a href="/posts/{{$post->id}}">...</a>                                
                            </div>
                            <br/> 
                        </div>  
                    </a>   
                @endforeach                 
            </div>
        </div>

        <div class="footer">
                <div class="col-md-12">
                    <div class="bott">
                            @foreach ($footer as $post) 
                            <a href="posts/{{$post->id}}">       
                                    <div class="other">
                                        <div class="thumbnail">
                                            <img src="storage/images/{{$post->image}}">
                                        </div>
                                        <br>
                                        <div class="title-and-body">
                                            <div class="thumbnail-title">
                                                <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                                            </div>
                                            <br>
                                        </div>
                                    </div> 
                                </a>  
                            @endforeach
                    </div>
                </div> 
            </div> 
</div>



@endsection