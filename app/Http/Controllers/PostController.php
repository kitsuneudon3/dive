<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Spot;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  
    }//$postsという変数は、インスタンスを配列として複数保持できるcollectionと呼ばれるデータ。
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create()
    {
    return view('posts/create');
    }
    
    public function store(Request $request, Post $post)
    {
        $input=$request['post'];
        
        if($request->image){
            $name=$request->file('image')->getClientOriginalName();
            $request->file('image')->move('storage/images',$name);
            $post->image=$name;
        }
        
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}
?>