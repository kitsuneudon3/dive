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
       //$log->user_id = auth()->user()->id;
        
        if($request->image){
           $name = $request->file('image')->getClientOriginalName();
           $request->file('image')->move('storage/images',$name);
           $post->image = $name;
        }
    
       $log->fill($input)->save();
       return redirect('/logs/' . $log->id);
    }
    
    
    public function edit(Log $log)
    {
       return view('logs/edit')->with(['log' => $log]);
    }
    
    public function update(Request $request, Log $log)
    {
       $input_log = $request['log'];
       $log->fill($input_log)->save();
    
       if($request->image){
           $image = $request->file('image')->getClientOriginalName();
           $request->file('image')->move('storage/images',$image);
           $log->image = $image;
       }
       $log->fill($input_log)->save();
       return redirect('/logs/' . $log->id);
    }
 
    
    public function delete(Log $log)
    {
        $log->delete();
        return redirect('/logs');
    }

}

