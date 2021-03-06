<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        //   return Post::where('title','Post two')->get();
        // $posts = Post::orderBy('title','desc')->take(1)->get();
        // $posts = Post::orderBy('title','desc')->get();
        $posts = Post::orderBy('created_at','desc')->paginate(3);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'
        ]);

        //Handle file upload
        if($request->hasFile('cover_image')){
            //get the file name with extension
            $filenameWithExt =$request->file('cover_image')->getClientOriginalName();
            //Get Just file name 
            $filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just extension 

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //File name to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            
            //upload the image
            $path = $request->file('cover_image')->storeAs('public/cover/_images',$filenameToStore);

        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }

        //create post

        $post = new Post;

        $post ->title = $request->input('title');
        $post -> body = $request->input('body');
        $post ->user_id = auth()->user()->id;
        // $post ->cover_image = $filenameToStore;
        $post->save();

        return redirect('./posts')->with('sucess','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id );
        return view('posts.show') -> with('post',$post) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);

        $post = Post::find($id);

        $post ->title = $request->input('title');
        $post -> body = $request->input('body');

        $post->save();

        return redirect('./posts')->with('sucess','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post ->delete();
        return redirect('./posts')->with('Sucess','Post Removed');
    }
}
