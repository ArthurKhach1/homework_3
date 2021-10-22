<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getLogin ()
    {

        return view('login',[
            'data' => 2021,
            'status' => true
        ]);
    }

    public function postLogin()
    {
        dd(7);
    }

    public function postSignUp(Request $request)
    {
        $data = $request->only('name', 'email','password');
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
}
