<?php

namespace App\Http\Controllers;
use App\Blog;
use App\User;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('blog.create_blog');
    }
    public function stores(Request $request)
    {

        $this->validate($request,[
            'title'=>'required',
            'tag'=>'required',
            'blog_body'=>'required',
            'image'=>'required',
            'image.*'=>'image|mimes:jpeg,png,jpg,gif,svg|nullable|max:5000'
        ]);

        
        //handle file upload

        if($request->hasFile('image')){
            $i=0;
            $data=array();
            foreach($request->file('image') as $img){
            //file name with extension
            $fileNameWithExt=$img->getClientOriginalName();
            //file name without ext
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            //get just ext
            $extension=$img->getClientOriginalExtension();
            $fileNameToStore=$fileName."_".time().'.'.$extension;
            //upload image
            $path=$img->storeAs('public/img',$fileNameToStore);
            $data[]=$fileNameToStore;
            
            }

            //storing blog info
        $blog=new Blog();
        $blog->user_id=auth()->user()->id;
        $blog->title=request('title');
        $blog->tag=request('tag');
        $blog->blog_body=request('blog_body');
        $blog->image=json_encode($data);

        $blog->save();

        return redirect('blog/show');


        }
        else{
            $fileNameToStore='noimage.jpg';
        }
        
        
    }
    public function index()
    {

        $blogs=Blog::all();
        return view('blog.blog',compact('blogs'));
    }

    public function places()
    {

        $blogs=Blog::all();
        return view('layouts.index_layout.top_place',compact('blogs'));
    }

    public function home()
    {

        $blogs=Blog::all();
        return view('index',compact('blogs'));
    }

    public function show($id)
    {

        $blog=Blog::find($id);
        return view('blog.single_blog',compact('blog'));
    }


}
