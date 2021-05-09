<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelsController extends Controller
{
    public function index(){
        $hotels=Hotel::all();
        return view('hotel.hotels',compact('hotels'));
    }

    public function create(){
        return view('hotel.create');
    }

    public function store(Request $request){
      //validating data

          $this->validate($request,[
            'name'=>'required',
            'city'=>'required',
            'address'=>'required',
            'contact'=>'required',
            'image'=>'required',
            'image.*'=>'image|mimes:jpeg,png,jpg,gif,svg|nullable|max:5000'
          ]);

          //image upload
          
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
        $hotel=new Hotel();
        $hotel->name=request('name');
        $hotel->city=request('city');
        $hotel->address=request('address');
        $hotel->contact=request('contact');
        $hotel->image=json_encode($data);

        $hotel->save();

        return redirect('/hotel/show');


        }
        else{
            $fileNameToStore='noimage.jpg';
        }
        


    }

}
