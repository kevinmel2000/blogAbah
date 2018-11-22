<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class WebController extends Controller
{
    public function getIndex(){
    	$user = User::all()->first();
    	return view('public.index')->with(['user'=>$user]);
    }
}
