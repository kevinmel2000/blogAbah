<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Post;
use App\Comment;
use DB;

class WebController extends Controller
{
    public function getIndex(){
        $post  = $this->getOffset('post',0,2);
        $whereClause = ['value'  => 'id',
                        'clause' => '!=',
                        'value2' =>  1   ];
        $file  = $this->getOffset('files',0,6, $whereClause);
    	return view('public.index')->with(['post' => $post,
                                           'img'  => $file ]);
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

    public function getOffset($table,$skip,$limit,$whereClause=null){
        if ($whereClause) {
            $item  = collect(DB::table($table)
                    ->skip($skip)
                    ->take($limit)
                    ->where($whereClause['value'],
                            $whereClause['clause'],
                            $whereClause['value2'])
                    ->get());
        }
        else{
            $item  = collect(DB::table($table)
                    ->skip($skip)
                    ->take($limit)
                    ->get());
        }
        return $item;
    }

    public function getBlog($page){
        $page         = (int)$page;
        $limit        = 6;
        $offset       = ($limit * ($page-1));
    	$post         = $this->getOffset('post',$offset,$limit);
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

    public function postComment(Request $request)
    {
        $this->validate($request,[
            'name'     =>  'required',
            'email'    =>  'email|required',
            'message'  =>  'required',
            'mobile'   =>  'required|min:11|numeric',
        ]);

        $comment = new Comment;
        $comment->name    = $request->input('name');
        $comment->email   = $request->input('email');
        $comment->message = $request->input('message');
        $comment->mobile  = $request->input('mobile');
        $comment->save();
        return redirect()->back();
    }
}
