<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $data = $request->all();
        dd($data);
    }
    public function getSignUp()
    {
        return view('sign-up');
    }
}
