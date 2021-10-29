<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function getSaveProd()
    {
        $prods = products::get();

        return view('saveprod');
    }


    public function getProd()
    {
        $prods = products::where('user_id',Auth::user()->id)->get();// collection a tali
        return view("allProd", [
            'prods' => $prods,
            'status' => true
        ]);
//        }
    }

    public function postSaveProd(Request $request)
    {
        $data = $request->only('name','price','user_name');
        $data['user_id'] = Auth::user()->id;
//        dd($data);
        $user = products::create($data);
        return redirect()->route('allProd')->with('success', 'You have successfully created');
    }
}
