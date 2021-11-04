<?php

namespace App\Http\Controllers;

use App\Events\CarCreatedEvent;
use App\Events\UserCreatedEvent;
use App\Http\Requests\CreateCarsRequest;
use App\Models\Cars;
use App\Models\carsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarsController extends Controller
{
    public function getCars()
    {
        $categories = carsCategories::get();

        return view('cars',[
            'carsCateg'=>$categories
        ]);
    }

    public function postCars(Request $request )
    {
        $data = $request->only('name','color','price','categories_id','img','user_id','user_email');
        $data['user_id'] = Auth::user()->id;
        $data['user_email'] = Auth::user()->email;
//        dd($data);
        $cars = Cars::create($data);
        $imagePath = $data['img']->store('profile_images');
        $cars->img_path = $imagePath;
        $cars->save();

        event(new CarCreatedEvent($cars));

        return redirect('/list')->with('success','Done!!!');

    }

    public function getList()
    {
        $car = Cars::get();
        return view('/list',[
            'car'=>$car,

        ]);
    }

    public function postList(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)){
            return redirect('/list');
        }else{
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

}
