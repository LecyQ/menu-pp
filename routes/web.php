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

Route::get('/', function () {
    $category = DB::table('categories')->get();
    $item=DB::table('menuitems')->get();
    $itemId=1;


    return view('test',compact(['category','item','itemId']));

});
Route::get('/test', function () {
    $category = DB::table('categories')->get();
    $item=DB::table('menuitems')->get();
    $itemId=1;


    return view('deneme',compact(['category','item','itemId']));

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
