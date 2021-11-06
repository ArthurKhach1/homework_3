<?php

namespace App\Http\Controllers;

use App\Models\UserImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function edit(){

        return view('photo.create',);
    }

    public function show(Request $request){

        $data = $request->only('slug','name','path','user_id','image');

        $data['slug'] = $data['image']->store('profile_images');
        $data['name'] = $data['image']->getClientOriginalName();
        $name = explode('/',$data['slug']);
        $data['path'] = $name[0];
        $data['slug'] = $name[1];
        $data['user_id'] = Auth::user()->id;
        return redirect()->route('photo.list')->with('success', 'You have successfuli signuped');
    }

     public function store(){
        $data = UserImage::get();
        return view('photo.list',[
            'data'=>$data
        ]);
}

}
