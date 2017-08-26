<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Auth::user()->id;
        $msg = DB::table('posts')->where('user_id',$uid)->paginate(5);

        return view('home',compact('msg'),compact('uid'));
    }

    public function delete(Request $request){
        $iid = $request->pid;
        DB::table('posts')->where('id',$iid)->delete();
        return redirect('/home');
    }
}
