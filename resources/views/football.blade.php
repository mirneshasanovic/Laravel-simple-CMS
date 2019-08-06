@extends('layouts.app')
{{-- sidebarleft --}}
@section('content')
<div class="row">
    <div class="col-sm-3">
        <div class="sidebar">      
            @foreach ($sidebar_left as $post)
                <a href="posts/{{$post->id}}">
                    <div class="sidebar-left">  
                        <div class="thumbnail">
                                <img style="width:100%; height:20%" src="{{ asset("storage/images/".$post->image) }}">
                        </div>
                        <br/>
                        <div class="thumbnail-title">
                            <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                        </div>
                        <div class="thumbnail-body">
                                {!! (str_limit(strip_tags($post->body), 50, ' '))!!} <a href="/posts/{{$post->id}}">...</a>                                
                        </div>
                        <br/> 
                    </div>  
                </a>   
            @endforeach                 
        </div>
    </div>
{{-- center --}}
    <div class="col-md-6"> 
        <div class="center">              
            @foreach ($center as $post)
                <a href="posts/{{$post->id}}">
                    <div class="thumbnail">
                        <img style="width:100%; height:50%" src="storage/images/{{$post->image}}">
                    </div>
                    <br>
                    <div class="title-and-body">
                        <br>
                        <div class="thumbnail-title">
                            <a href="posts/{{$post->id}}"> {{$post->title}}</a>
                        </div>
                        <br>
                        <div class="thumbnail-body">
                            {!! (str_limit(strip_tags($post->body), 300, ' '))!!} <a href="/posts/{{$post->id}}"> Read more...</a>                             
                        </div> 
                    </div>
                </a>        
            @endforeach    
        </div>  
        <div class="thumbnail-epp">
            <img src="storage/images/Bundesliga.png">
        </div>        
    </div>
{{-- sidebar right --}}
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

{{-- slideshow --}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">   
                <div class="carousel-inner" role="listbox">
                  @foreach( $photos as $key => $photo )
                     <div data-interval="1500" class="carousel-item {{$key == 0 ? 'active' : '' }}">
                         {{-- <img class="d-block img-fluid" src="storage/images/{{$photo->image}}"> --}}
                            {{-- <div class="carousel-caption d-none d-md-block"> --}}
                               <h3>{!! $photo->title !!}</h3>
                               <a href="posts/{{$photo->id}}">{!! (str_limit(strip_tags($post->body), 300, ' '))!!} ...</a>
                            {{-- </div> --}}
                     </div>
                  @endforeach
                </div>
                {{-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a> --}}
        </div>

{{-- footer --}}

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
<hr/>
<div class="copyright">
    Copyright © Laravel-simple-cms 2019
</div>
@endsection