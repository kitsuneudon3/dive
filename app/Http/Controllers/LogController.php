<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(Log $log)
    {
        return view('logs/index')->with(['logs' => $log->getPaginateByLimit()]);
    }

    public function show(Log $log)
    {
    return view('logs/show')->with(['log' => $log]);
    }
    
    public function create()
    {
    return view('logs/create');
    }
    
    public function store(Request $request, Log $log)
    {
       $input = $request['log'];
       $post->user_id = auth()->user()->id;
        
        if($request->image){
        $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->move('storage/images',$name);
        $post->image = $name;
        }
    
       $post->fill($input)->save();
       return redirect('/logs/' . $log->id);
       }
    
}

