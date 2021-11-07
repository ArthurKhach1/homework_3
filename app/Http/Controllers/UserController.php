<?php

namespace App\Http\Controllers;

use App\Events\UserCreatedEvent;
use App\Http\Requests\CreatUsersRequest;
use App\Models\products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


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
//        dd($data);
        if (Auth::attempt($data)){
        $data['last_login_at'] = Carbon::now()->toDateTimeString();
            User::create($data);
            return redirect()->route('photo.list');
        }else{
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function store(CreatUsersRequest $request)
    {
        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
//        $imagePath = $data['img']->store('profile_images');
//        $user->img_path = $imagePath;
//        $user->save();

        event(new UserCreatedEvent($user));

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

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function edit()
    {
        return view('users.edit',[
            'user'=> Auth::user()
        ]);
    }

    public function update(Request $request,products $product)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        $request->validate([
            'name' => 'required',
            'email' =>  ['required', Rule::unique('users')->ignore(Auth::user()->id)],
            'password' => 'required|min:3'
        ]);
        Auth::user()->update($data);
    }


    public function delete(Request $request)
    {
        $data = $request->all();
        $user = User::find($data['id']);
        $user->delete();

        return redirect()->route('users.list');
    }
}
