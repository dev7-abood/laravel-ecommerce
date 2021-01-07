<?php

use App\Models\Card;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia\Inertia::render('Dashboard');
//})->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
});


Route::group(['prefix' => 'settings' ,'as' => 'settings.', 'namespace' => 'UserSettings'], function (){
    Route::post('set-currency', ['as' => 'set.currency', 'uses' => 'CurrencyController@setCurrency']);
});


Route::group(['as' => 'main.', 'namespace' => 'Main'], function (){
    Route::get('/', ['as' => 'landingPage', 'uses' => 'IndexController@index']);

    Route::group(['prefix' => 'product/categories', 'as' => 'categories.'], function (){
        Route::get('/{brandSlug?}', ['as' => 'index', 'uses' => 'ProductCategory@index']);
    });

    Route::group(['prefix' => 'products', 'as' => 'products.'], function (){
        Route::get('/{slug}', ['as' => 'show', 'uses' => 'ProductsController@show']);
    });

    Route::group(['prefix' => 'qr/product', 'as' => 'product.'], function (){
        Route::get('/{catSlug}/{slug}', ['as' => 'Single.index', 'uses' => 'ProductController@show']);
    });

});

use AshAllenDesign\LaravelExchangeRates\Classes\ExchangeRate;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cookie;

//use Illuminate\Support\Facades\Response;
use Illuminate\Http\Response;
;
use Illuminate\Http\Request;

Route::get('test', function (){
//    return auth()->user()->productFavorites()->orderBy('id', 'DESC')->get();

//   return cookie('abood', 'usd', 4);
//    response()->withCookie(cookie('abood', 'usd', 4));
//        $property = Product::where('slug', 'j-7')->first()->productPropertyNames->toArray();

//
//        foreach ($property as $pro)
//        {
//            if ($pro['type'] == 'checkbox'){
//              return  $pro['p_property_name'];
//            }
//        }


    $number = round(3.60, 1);

    return (int) $number;

//    return Cookie::get('currency_type');



//   $hell = new Response();
//   return $hell->withCookie(cookie('sss', 'usd'));


//    return App\Models\Product::find(1);

    $array = ['color' => ['red', 'green']];

    echo json_encode($array);


//  return  Http::get('https://free.currconv.com/api/v7/convert?q=USD_ILS&compact=ultra&apiKey=522c84b6bbae6aa09ac2')['USD_ILS'];

//$fuck =  new ExchangeRate();
//return  $result = $fuck->convert(100, 'USD', 'ILS', Carbon\Carbon::now());
//
//    return \App\Models\Product::find(1);

});
