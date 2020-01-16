<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //

    public function savepost(Request $request){

        $data = [];

        foreach ($request->all() as $key => $value) {
            if(is_array($value))
            {
                  $data[$key] = json_encode($value, JSON_UNESCAPED_UNICODE);
            } else {
                  $data[$key] = $value;
            }
        }

        $request->validate([
            'title.*' => 'required|max:255',
            'body.*' => 'required',
        ]);

    	$post = new Post();

    	$post->title = $data['title'];
    	$post->body = $data['body'];
    	$post->save();

    	return back();
    	// dd($request->all());
    }

    public function edit($id){
    	$post = Post::find($id);
    	return view('editpost',compact('post'));
    }

    public function updatepost(Request $request,$id){
        $data = [];

        foreach ($request->all() as $key => $value) {
            if(is_array($value))
            {
                  $data[$key] = json_encode($value, JSON_UNESCAPED_UNICODE);
            } else {
                  $data[$key] = $value;
            }
        }

        $request->validate([
            'title.*' => 'required|max:255',
            'body.*' => 'required',
        ]);

    	$post = Post::find($id);
    	$post->title = $data['title'];
    	$post->body = $data['body'];
    	$post->save();
    	return view('welcome');
    }
}
