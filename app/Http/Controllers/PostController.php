<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use App\Post;
use Auth;
use Session;
use App\File;
use Carbon\Carbon;

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

    public function getImage(){
        $file = File::all();
        return view('user.image')->with(['image'=>$file]);
    }

    public function getUploadImage(){
        return view('user.upload_image');
    }

    public function postUploadImage(Request $request){
        $this->validate($request,[
            'image' => 'mimes:jpeg|dimensions:max_width=2500,max_height=2500'
        ]);
        $img            =  new File;
        $now  = Carbon::now()->format('M_d_Y_H_i_s');
        $img->title     = 'image_'.$now.'.jpg';
        if (Input::hasFile('image')) {
            $file = Input::file('image');
            $file->move(public_path().'/',$img->title);
            $img->name      = 'image'.$now.'.jpg';
            $img->size      = $file->getClientsize();
            $img->type      = $file->getClientMimeType();
            $img->user_id   = Auth::user()->id;
        }
        $img->save();
        $message = "Photo Sucessfully upload";
        return redirect()->route('dashboard.image')->with(['success_message'=> $message]);
    }

    public function getDeleteImg( Request $request){
        $img = File::find($request['id']);
        $img->delete();
        return response()->json([
            'data' => $request['id']
        ]);
    }

}