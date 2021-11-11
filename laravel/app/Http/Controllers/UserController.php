<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUsersRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show()
    {
        return view('user');
    }


    public function store(CreateUsersRequest $request)

        {
            $data = $request->validated();

            $data['password'] = bcrypt($data['password']);
            $user = User::create($data);

            return redirect()->route('user')->with('success', 'You have successfuli signuped');
        }

}
