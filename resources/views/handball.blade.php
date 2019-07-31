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
                        <div class="thumbnail">
                            <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                        </div>
                        <div class="thumbnail">
                                {!! (str_limit(strip_tags($post->body), 30, ' '))!!} <a href="/posts/{{$post->id}}">...</a>                                
                        </div>
                        <br/> 
                    </div>  
                </a>   
            @endforeach                 
        </div>
        <div class="thumbnail">
            <img style="width:100%; height:50%" src="storage/images/Bundesliga.png">
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
                        <div class="thumbnail">
                            <a href="posts/{{$post->id}}"> {{$post->label}}</a>
                        </div>
                        <br>
                        <div class="thumbnail">
                            <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                        </div>
                        <br>
                        <div class="thumbnail">
                            {!! (str_limit(strip_tags($post->body), 300, ' '))!!} <a href="/posts/{{$post->id}}"> Nastavi citati...</a>                             
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
                            <div class="thumbnail">
                                <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                            </div>
                            <div class="thumbnail">
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
                                            <div class="thumbnail">
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