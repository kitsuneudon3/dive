<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post_commentController extends Controller
{
     public function store(Request $request, Post_comment $post_comment)
    {
        $input = $request['post_comment'];
    
        $post_comment->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post_comment $post_comment)
    {
        $log->delete();
        return redirect('/posts/' . $post->id);
        // redirect先がよく分からない。
    }
    

    
}
