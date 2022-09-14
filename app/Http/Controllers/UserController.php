<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\Post;
use App\Models\Follow;

class UserController extends Controller
{
    public function index(User $user, Post $post)
    {
        return view('users/mypage')->with(['user' => $user, 'posts' => $post ->where('user_id', '=', $user->id)->get()]);
                                  
    }
    
    
    public function edit(User $user)
    {
    return view('users/mypage_edit')->with(['user' => $user]);
    }
    
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->body = $request->body;
        
        if($request->image){
           $name = $request->file('image')->getClientOriginalName();
           $request->file('image')->move('storage/images',$name);
           $user->image = $name;
        }
       
       $user-->save();
       return redirect('/mypage/' . $user->id);
    }

    
    public function editUser(User $user)
    {
        return view('users/editUser')->with(['user' => $user]);
    }
    
    
    public function updateUser(Request $request, User $user)
    {
       $input = $request['user'];
       //$user->user_id = auth()->user()->id;

       $user->fill($input)->save();
       return redirect('/mypage/' . $user->id);
    }
    
    // フォロー機能
    public function follow(Request $request, User $user)
    {
        $user->follows()->attach($request->user()->id);
        return redirect('/mypage/' . $user->id );
    }

    
    public function unfollow(Request $request, User $user)
    {
        $user->follows()->detach($request->user()->id);
        return redirect('/mypage/' . $user->id );
    }
}