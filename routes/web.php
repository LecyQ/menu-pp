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
    $category = DB::table('itemcategories')->get();
    $uniqueCategory = DB::table('itemcategories')->distinct()->get('maincategory');
    $item=DB::table('menuitems')->get();
    $itemId=1;
    $uniqueItemMaincategory = DB::table('menuitems')->get('maincategory')->unique();
    $uniqueItemSubcategory = DB::table('menuitems')->get('category')->unique();
    $general = DB::table('generals')->where('id',1)->get();


    return view('home.index',compact(['category','item','itemId','uniqueCategory','uniqueItemMaincategory','uniqueItemSubcategory']));



});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
