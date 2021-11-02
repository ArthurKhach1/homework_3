<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCarsRequest;
use App\Models\Cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarsController extends Controller
{
    public function getCars()
    {
        return view('cars');
    }

    public function postCars(Request $request )
    {
        $data = $request->only('name','color','price','user_id');
        $data['user_id'] = Auth::user()->id;
//        dd($data);
        $cars = Cars::create($data);
        return redirect('/list')->with('success','Done!!!');

    }

    public function getList()
    {
        $car = Cars::get();
        return view('/list',[
            'car'=>$car
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
