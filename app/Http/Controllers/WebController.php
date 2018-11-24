<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Post;


class WebController extends Controller
{
    public function getIndex(){
    	return view('public.index');
    }

    public function getAbout(){
    	$user = User::all()->first();
    	//return dd($user);
    	return view('public.about')->with(['user' => $user]);
    }

    public function getBlog(){
    	$post = Post::all();
    	return view('public.blog')->with(['post' => $post]);
    }
}
