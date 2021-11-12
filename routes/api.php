<?php

use App\Http\Controllers\ProductController;
use App\Models\products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->get('/user',function (Request $request){
    return $request->user();
});
Route::group(['middleware' => ['auth:api']],function (){
//    Route::get('saveprod', [ProductController::class,'getSaveProd']);
    Route::post('/saveprod', [ProductController::class,'postSaveProd']) ;
    Route::get('allProd',[ProductController::class,'getApiProd']);


});


Route::get('test',function (){
//select * from users;
//$user = User::get();

//select * from users limit 1;
//$user = User::first();

//last item
//$user = User::latest()->first();

//$user = User::find(10);
//$user = User::where('email', 'a@a.com')->first();
// $user->email
//$users = User::where('email', 'a@a.com')->get();
// $users->email /chi ashxati
//$users = User::where('id','>','5')->get();
//qanaky
//$users = User::where('id','>','5')->count();
//$users =User::select('id','email')->where('id','>','5')->first();
//$users =User::where('id','>',5)->orderBy('id','desc')->get();

//    id > 5 or id < 2
//$users =User::where('id','>',5)->orWhere('id','<',2)->get();

//    id > 2 and id < 5
//$users =User::where('id','>',2)->where('id','<',5)->get();

//$users =User::where('id','>',2)->where('id','<',5)->toSql();
//$query =User::where('id','>',2)->where('id','<',5);
//dd($query->toSql(),$query->getBindings());

//dd($users);


//    $products = products::where('user_id',31)->get();

//    $products = User::find(31)->products;
//    $products = User::has('Products')->get();
//    $products = User::has('Products')->toSql();

//    $users = User::whereHas('Products', function ($query){
//        $query->where('id','>','7');
//    })->get();

//eager loading
//    $user = User::with('Products')->find(31);
//    foreach ($user->Products as $products){
//        dump($products->id);
//    }

    $user = User::find(31);
//    lazy loading
    $user -> load('Products');
    foreach ($user->Products as $products){
        dump($products->id);
    }


//    dd($users);



});
