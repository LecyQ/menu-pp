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

    return view('deneme',compact(['category','item','itemId','uniqueCategory','uniqueItemMaincategory','uniqueItemSubcategory']));

});
Route::get('/test', function () {
    $category = DB::table('categories')->get();
    $item=DB::table('menuitems')->get();
    $uniqueItemCategory = DB::table('menuitems')->get('category')->unique();
    $itemId=1;
    $uniqueCategory = DB::table('categories')->get('maincategory')->unique();




    return view('test',compact(['category','item','itemId','uniqueCategory','uniqueItemCategory']));

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
