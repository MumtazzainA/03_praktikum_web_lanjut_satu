<?php

use App\Http\Controllers\contact;
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
Route::get('/', function () {
    return view('home');
    
});
Route::get('/about-us', function () {
    return view('aboutus');
    });
Route::prefix('/category')->group(function(){
    Route::get('/products',function(){
        return view('product');
    });
});
Route::prefix('/program')->group(function(){
    Route::get('/programs',function(){
        return view('program');
    });
});

Route::resource('contact', contact::class)->only([
    'index'
]);
Route::get('/new/{id}', function ($id) {
    if($id=='covid')
    return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    else if($id ==0){
        return view('news');
    }
});