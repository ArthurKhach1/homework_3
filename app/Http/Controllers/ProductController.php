<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function getSaveProd()
    {
        $prods = products::get();
        $categ = categories::get();
        return view('saveprod',[
            "categ" => $categ
        ]);
    }


    public function getProd()
    {
        return view("allProd", [
            'prods' => (new ProductService())->getUserProducts(Auth::user()),
            'status' => true
        ]);
    }

    public function getApiProd()
    {
        return response()->json(
            ( new ProductService())->getUserProducts(Auth::user())
        );
    }


    public function postSaveProd(Request $request)
    {
        $data = $request->only('name','price','user_name','category_id');
        $data['user_id'] = Auth::user()->id;
        $data['user_name'] = Auth::user()->name;
        $user = products::create($data);
        return redirect()->route('allProd')->with('success', 'You have successfully created');
    }
}
