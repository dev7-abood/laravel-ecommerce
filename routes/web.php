<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia\Inertia::render('Dashboard');
//})->name('dashboard');



Route::group(['as' => 'main.', 'namespace' => 'Main'], function (){
    Route::get('/', ['as' => 'landingPage', 'uses' => 'IndexController@index']);

    Route::group(['prefix' => 'product', 'as' => 'product.'], function (){
        Route::get('/{slug}', ['as' => 'Single.index', 'uses' => 'ProductController@singleIndex']);
    });

});

Route::get('/gg', function (){
   return Product::with('images')->where('slug', 'j7')->first();

});
