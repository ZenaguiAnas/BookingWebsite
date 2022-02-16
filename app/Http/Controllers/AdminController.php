<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\hotel;
use App\Models\villa;
use App\Models\Booking;


class AdminController extends Controller
{
    public function user(){
        $data=user::all();
        return view("admin.user",compact("data"));
    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function hotelmanage(){
       
        return view("admin.hotelmanage");
    }
    public function upload(Request $request){
        $data = new hotel;
       
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('hotelimage',$imagename);

        $data -> title=$request->title;
        $data -> price=$request->price;
        $data -> description=$request->description;
        $data -> save();
        return redirect()->back();
    }

    public function villamanage(){
       
        return view("admin.villamanage");
    }

    public function appartementmanage(){
       
        return view("admin.appartementmanage");
    }

    public function uploadvilla(Request $request){
       $data = new villa;
       $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalName();
        $request->image->move('villaimage',$imagename);

        $data -> title=$request->title;
        $data -> price=$request->price;
        $data -> description=$request->description;
        $data -> save();
        return redirect()->back();

        
        
    }

    public function book(Request $request){
        $data = new booking;
       
 
         $data -> full_name=$request->full_name;
         $data -> check_in=$request->check_in;
         $data -> check_out=$request->check_out;
         $data -> guest=$request->guest;
         $data -> email=$request->email;
         $data -> room=$request->room;
         $data -> save();
         return redirect()->back();
    }
}

