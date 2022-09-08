<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Spot;
use App\Models\Post_comment;
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
    
    
    public function show(Post $post, Post_comment $post_comment)
    {
        return view('posts/show')->with(['post' => $post])
                                 ->with(['post_comments' => $post_comment]);
    }

    
    public function create(Spot $spot)
    {
        return view('posts/create')->with(['spots'=>$spot->get()]);
    }
    
    
    public function store(Request $request, Post $post)
    {   
        
        //$input=$request['post'];
        //dd($input);
        $post = new post();
        $post->spot_id = $request->spot_id;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
    
        if($request->image){
           $image=$request->file('image')->getClientOriginalName();
           $request->file('image')->move('storage/images',$image);
           $post->image=$image;
        }
        
        //dd($post);
        //$post->fill($input)->save();
        $post->save();
        return redirect('/posts/' . $post->id);
    }
    
    
    public function edit(Post $post, Spot $spot)
    {
        return view('posts/edit')->with(['post' => $post])
                                 ->with(['spots' => $spot->get()]);
    }
    
    
    public function update(Request $request, Post $post)
    {
        //$input=$request['post'];
        $post = new post();
        $post->spot_id = $request->spot_id;
        $post->body = $request->body;
        
        if($request->image){
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('storage/images',$image);
        $post->image = $image;
        }
    
        $post->save();
        //$post->fill($inout)->save();
        return redirect('/posts/' . $post->id);
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
    
    // いいね
    public function like(Request $request, Post $post)
    {
        $post->likes()->attach($request->user()->id);
        return redirect('/posts/' . $post->id );
    }

    
    public function unlike(Request $request, Post $post)
    {
        $post->likes()->detach($request->user()->id);
        return redirect('/posts/' . $post->id );
    }
    
    
    //コメント機能
    public function store_comment(Request $request, Post_comment $post_comment, Post $post)
    {   
        $post = $this->post;
        $input = $request['post_comment'];
        //dd($input);
        $post_comment->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete_comment(Post_comment $post_comment)
    {
        $post_comment->delete();
        return redirect('/posts/' . $post->id);
    }
    
    
}
?>