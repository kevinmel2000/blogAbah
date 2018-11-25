<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Post;
use DB;

class WebController extends Controller
{
    public function getIndex(){
    	return view('public.index');
    }

    public function getAbout(){
    	$user = User::all()->first();
    	return view('public.about')->with(['user' => $user]);
    }

    public function countPost(){
        $allPost = Post::all();
        $count   = count($allPost);
        return $count;
    }

    public function getOffset($skip,$limit){
        $post  = collect(DB::table('post')->skip($skip)->take($limit)->get());
        return $post;
    }

    public function getBlog($page){
        $page         = (int)$page;
        $limit        = 6;
        $offset       = ($limit * ($page-1));
    	$post         = $this->getOffset($offset,$limit);
        $count        = $this->countPost();
        $totalPage    = (int)ceil($count/$limit);
        $pageControl  = [ 'nextPage' =>null,
                          'prevPage' =>null];
        if ((($page==1) && ($totalPage !==1)) || $page < $totalPage ) {
            $pageControl['nextPage']=1;
        }
        if (($page<=$totalPage) && ($page!==1)){
            $pageControl['prevPage']=1;
        }
    	return view('public.blog')->with(['post'        => $post,
                                          'count'       => $count,
                                          'totalPage'   => $totalPage,
                                          'pageControl' => $pageControl,
                                          'page'        => $page
                                          ]);
    }



    
}
