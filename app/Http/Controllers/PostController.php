<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use App\Post;
use App\Comment;
use Auth;
use DB;
use Session;
use App\File;
use App\pdf;
use Carbon\Carbon;

class PostController extends Controller
{
    public function getManagePost(){
    	$post = Post::all();
        $modul = 'manage';
        return view('user.manage_post')->with(['post'=> $post,
                                               'modul' => $modul]);
    }

    public function getDeletePost( Request $request){
        $post = Post::find($request['id']);
        $post->delete();
    	return response()->json([
		    'data' => $request['id']
		]);
    }

    public function getWritePost(){
        $modul = 'write';
    	return view('user.write_post')->with(['modul'=>$modul]);
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
        $modul = "manage";
        return view('user.edit_post')->with(['post'=>$post , 'modul' => $modul]);
    }

    public function getJsonPost(){
        $post = Post::all();
        return response()->json(['data'=>$post]);
    }

    public function getPreviewPost($id){
        $post = Post::find($id);
        $modul = "manage";
        return view('user.peview_post')->with(['post'=> $post, 'modul' => $modul]);
    }

    public function getImage(){
        $modul = "image";
        $file = File::all();
        return view('user.image')->with(['image'=>$file, 'modul'=> $modul]);
    }

    public function getUploadImage(){
        $modul = "image";
        return view('user.upload_image')->with(['modul' => $modul]);
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

    public function getComment($page){
        $modul          = 'comment';
        $page           = (int)$page;
        $limit          = 10;
        $offset         = ($limit * ($page-1));
        $comment        = $this->getOffset('comment',$offset,$limit);
        $count          = $this->countComment();
        $totalPage      = (int)ceil($count/$limit);
        $pageControl    = [ 'nextPage' =>null,
                            'prevPage' =>null];

        if ((($page==1) && ($totalPage !==1)) || $page < $totalPage ) {
            $pageControl['nextPage']=1;
        }
        if (($page<=$totalPage) && ($page!==1)){
            $pageControl['prevPage']=1;
        }

        return view('user.comment')->with(['comment'      => $comment , 
                                            'modul'       => $modul,
                                            'count'       => $count,
                                            'totalPage'   => $totalPage,
                                            'pageControl' => $pageControl,
                                            'page'        => $page
                                        ]);

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
                    ->orderBy($table .'.updated_at','DESC')
                    ->get());
        }
        return $item;
    }

    public function countComment(){
        $allComment = Comment::all();
        $count   = count($allComment);
        return $count;
    }

    public function getPdfUpload()
    {
        $modul = 'pdf';
        $pdf   = pdf::all(); 
        return view('user.upload_pdf')->with(['modul' => $modul, 'pdf'  => $pdf]);
    }

    public function uploadPDF(Request $req)
    {
       $this->validate($req,[
            'pdf' => 'mimes:pdf'
        ]);

        $pdf            =  new pdf;
        $now            = Carbon::now()->format('M_d_Y_H_i_s');
        $pdf->name      = 'pdf_'.$now.'.pdf';
        if (Input::hasFile('pdf')) {
            $file = Input::file('pdf');
            $file->move(public_path().'/',$pdf->name);
            $pdf->size      = $file->getClientsize();
            $pdf->type      = $file->getClientMimeType();
            $pdf->user_id   = Auth::user()->id;
        }
        $pdf->save();
        $message = "Pdf Sucessfully upload";
        return redirect()->route('dashboard.pdf')->with(['success_message'=> $message]);
    }

    public function deletePdf(Request $req)
    {
        $pdf = pdf::find($req['id']);
        $pdf->delete();
        return response()->json([
            'data' => $req['id']
        ]);
    }

}