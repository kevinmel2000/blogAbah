<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;


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
}
