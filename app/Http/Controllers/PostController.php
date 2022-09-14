<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Spot;
use App\Models\User;
use App\Models\Post_comment;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;


class PostController extends Controller
{
    public function index(Post $post)
    {
     
        //  $search = $request->input('search');
        //  $query = User::query();
         
      // $post=\DB::table('posts')->get();
       //dd($post);
        return view('posts/index')
              ->with(['posts' => $post->getPaginateByLimit(), 
              ]);
    }
    
    public function search(Request $request)
    {
        // dd($request->search);
        // $post = Post::where('spot_id', 'like', "%{$request->search}%")->paginate(5);
        $keyword=$request->input('search');
        $post = Post::whereHas('spot', function (Builder $query) use ($keyword) {
                $query->where('name', 'like', '%' . $keyword . '%');
                 })
                 ->orWhereHas('user', function (Builder $query) use ($keyword){
                    $query->where('name', 'like', '%' . $keyword . '%');
                     
                 })
                 ->paginate(5);

        
        return view('posts/index')
              ->with(['posts' => $post
              ]);

    }
    
    public function show(Post $post, Post_comment $post_comment)
    {
        return view('posts/show')->with(['post' => $post, 'post_comments' => $post_comment->where('post_id', '=', $post->id)->get()]);
                                //  ->with(['post_comments' => $post_comment]);
    }

    
    public function create(Spot $spot)
    {
        return view('posts/create')->with(['spots'=>$spot->get()]);
    }
    
    
    public function store(PostRequest $request, Post $post)
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
    
    
    public function update(PostRequest $request, Post $post)
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
    
    

    
    
}
?>