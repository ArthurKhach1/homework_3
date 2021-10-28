<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatUsersRequest;
use App\Models\products;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function getLogin ()
    {

        return view('login',[
            'data' => 2021,
            'status' => true
        ]);
    }

    public function postLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)){
            return redirect()->route('allProd');
        }else{
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function postSignUp(CreatUsersRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        return redirect()->route('login')->with('success', 'You have successfuli signuped');
    }

    public function getSignUp()
    {
        return view('sign-up');
    }

    public function getUsers()
    {
        $users = User::get();// collection a tali

        return view("users-list",[
            'users' => $users
        ]);

    }


    public function getSaveProd()
    {
        $prods = products::get();
        if (!Auth::check()){
            return redirect()->route('login')->with('error', "gna login exi");
        }
        return view('saveprod');
    }


    public function getProd()
    {
        $prods = products::get();// collection a tali
            return view("allProd", [
                'prods' => $prods,
                'status' => true
            ]);
//        }
    }

    public function postSaveProd(Request $request)
    {
        $data = $request->only('name','price','user_name');
//        dd($data);
        $user = products::create($data);
        return redirect()->route('allProd')->with('success', 'You have successfully created');
    }
}
