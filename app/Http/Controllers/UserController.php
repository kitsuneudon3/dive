<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Post;

class UserController extends Controller
{
    public function index(User $user, Post $post)
    {
        return view('users/mypage')->with(['user' => $user])
                                   ->with(['posts' => $post]);
    }
    
    public function edit(Request $request, User $user)
    {
       $input = $request['user'];
       //$user->user_id = auth()->user()->id;
        
        if($request->image){
           $name = $request->file('image')->getClientOriginalName();
           $request->file('image')->move('storage/images',$name);
           $post->image = $name;
        }
    
       $user->fill($input)->save();
       return redirect('/mypage/' . $user->id);
    }

}