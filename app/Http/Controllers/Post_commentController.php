<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post_comment;
use App\Models\Post;


class Post_commentController extends Controller
{
    public function store(Request $request, Post_comment $post_comment, Post $post)
    {   
        $input = $request['post_comment'];
        // dd($input);
        $post_comment->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function delete($id)
    {
        $post_comment=Post_comment::find($id);
        $post_comment->delete();
        return redirect(route('post.show', $post_comment->post_id));
    }

    
}
