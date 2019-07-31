<?php

namespace App\Http\Controllers;
use App\Post;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sidebar_left = Post::inRandomOrder()->paginate(3);
        $center = Post::inRandomOrder()->paginate(1);
        $sidebar_right = Post::inRandomOrder()->paginate(3);
        $footer = Post::inRandomOrder()->paginate(4);
        return view ('sport')->with('sidebar_left',$sidebar_left)->with('center',$center)->with('sidebar_right',$sidebar_right)->with('footer',$footer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')){
            //Get filename with the extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        $post = new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->label=$request->input('label');
        $post->position=$request->input('position');
        $post->image=$fileNameToStore;
        $post->category=$request->input('name_of_sport');
        
        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect('/home')->with('success', 'Post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function football(Post $post)
    {
        $sidebar_left = Post::orderBy('created_at', 'desc')->where('position','L')->where('category','1')->paginate(3);
        $center = Post::orderBy('created_at', 'desc')->where('position','C')->where('category','1')->paginate(1);
        $sidebar_right = Post::orderBy('created_at', 'desc')->where('position','R')->where('category','1')->paginate(3);
        $footer = Post::orderBy('created_at', 'desc')->where('category','1')->paginate(4);
        return view ('football')->with('sidebar_left',$sidebar_left)->with('center',$center)->with('sidebar_right',$sidebar_right)->with('footer',$footer);
    }
    public function basketball(Post $post)
    {
        $sidebar_left = Post::orderBy('created_at', 'desc')->where('position','L')->where('category','2')->paginate(3);
        $center = Post::orderBy('created_at', 'desc')->where('position','C')->where('category','2')->paginate(1);
        $sidebar_right = Post::orderBy('created_at', 'desc')->where('position','R')->where('category','2')->paginate(3);
        $footer = Post::orderBy('created_at', 'desc')->where('category','2')->paginate(4);
        return view ('football')->with('sidebar_left',$sidebar_left)->with('center',$center)->with('sidebar_right',$sidebar_right)->with('footer',$footer);
    }
    public function handball(Post $post)
    {
        $sidebar_left = Post::orderBy('created_at', 'desc')->where('position','L')->where('category','3')->paginate(3);
        $center = Post::orderBy('created_at', 'desc')->where('position','C')->where('category','3')->paginate(1);
        $sidebar_right = Post::orderBy('created_at', 'desc')->where('position','R')->where('category','3')->paginate(3);
        $footer = Post::orderBy('created_at', 'desc')->where('category','3')->paginate(4);
        return view ('football')->with('sidebar_left',$sidebar_left)->with('center',$center)->with('sidebar_right',$sidebar_right)->with('footer',$footer);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('post')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
