<?php

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

use App\Models\Product;
Route::get('/test', function (){
  return  Product::where('is_published', true)->orderBy('updated_at', 'DESC')->paginate(10);
});
