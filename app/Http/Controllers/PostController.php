<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Spot;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index(Post $post)
    {
      // $post=\DB::table('posts')->get();
       //dd($post);
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
    }//$postsという変数は、インスタンスを配列として複数保持できるcollectionと呼ばれるデータ。
    
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    
    public function create(Spot $spot)
    {
        return view('posts/create')->with(['spots'=>$spot->get()]);
    }
    
    
    public function store(PostRequest $request, Post $post)
    {   
        
        $input=$request['post'];
        //dd($input);
        //$post = new post();
        //$post->spot_id = $request->spot_id;
        //$post->body = $request->body;
        //$post->user_id = auth()->user()->id;
    
        if($request->image){
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('storage/images',$name);
        $post->image = $name;
        }
        //dd($post);
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    
    public function edit(Post $post, Spot $spot)
    {
        return view('posts/edit')->with(['post' => $post])
                                 ->with(['spots' => $spot->get()]);
    }
    
    
    public function update(Postrequest $request, Post $post)
    {
        $post->spot_id = $request->spot_id;
        $post->body = $request->body;

        if($request->image){
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('storage/images',$name);
        $post->image = $name;
        }
    
        $post->save();
        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }    
}

?>