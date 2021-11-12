<?php


namespace App\Services;


use App\Models\products;
//use http\Client\Curl\User;
use App\Models\User;

class ProductService
{
    public function getUserProducts(User $user)
    {
        return products::where('user_id', $user->id)->get();
    }
}
