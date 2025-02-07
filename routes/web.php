<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\product;
use Illuminate\Support\Facades\DB;
// use app\http\Middleware\Authenticate;


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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/product',ProductController::class);

Route::get('/',function()
{
    $products = DB::table('products')->orderBy('id', 'desc')->paginate(6);
    return view('index',['products'=> $products]);
});

Route::get('/buy',function(){
    return view('buy');
});




