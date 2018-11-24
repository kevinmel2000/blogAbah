<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use Auth;
use Session;

class PostController extends Controller
{
    public function getManagePost(){
    	$post = Post::all();
        return view('user.manage_post')->with(['post'=> $post]);
    }

    public function getDeletePost( Request $request){
        $post = Post::find($request['id']);
        $post->delete();
    	return response()->json([
		    'data' => $request['id']
		]);
    }

    public function getWritePost(){
    	return view('user.write_post');
    }

    public function postWritePost(Request $request){
    	$this->validate($request, [
            'title'                =>'required',
            'description'          =>'required',
            'image-link'           =>'required|url'
        ]);

        $post  				= new Post;
        $post->title 		= $request->input('title');
        $post->body  		= $request->input('description');
        $post->user_id		= Auth::user()->id;
        $post->image_url    = $request->input('image-link');
        $post->save();

        $message = "Success! ";
        return redirect()->back()->with(['success_message'=> $message]);
    }

    public function postEditPost($id,Request $request){
        $this->validate($request,[
            'title'         => 'required',
            'description'   => 'required',
            'image-link'    => 'required|url'
        ]);

        $post = Post::find($id);        
        $post->user_id      = Auth::user()->id;
        $post->title        = $request->input('title');
        $post->body         = $request->input('description');
        $post->image_url    = $request->input('image-link');
        $post->save();

        $message = "Post is updated";
        return redirect()->route('dashboard.managePost')->with(['success_message' => $message]);
    }

    public function getEditPost($id){
        $post = Post::find($id);
        return view('user.edit_post')->with(['post'=>$post]);
    }

    public function getJsonPost(){
        $post = Post::all();
        return response()->json(['data'=>$post]);
    }

    public function getPreviewPost($id){
        $post = Post::find($id);
        // /return json_encode($post);
        return view('user.peview_post')->with(['post'=> $post]);
    }
}
