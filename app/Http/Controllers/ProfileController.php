<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Post;

class ProfileController extends Controller
{
   	public function profile($id){
   		$user = User::where('id',$id)->first();
   		return view('profile.profile',compact('user'));
   	}

   	public function make(Request $request){
   		$post = new Post;
   		$post->user_id = $request->postId;
   		$post->content = $request->content;
   		$post->save();
   		return redirect('/')->with('msg','Sent Success!');
   	}

   	public function show($id){
   		$user = User::where('id',$id)->first();
   		return view('own.own',compact('user'));	
   	}
}
