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
    return view('welcome');
});

Route::post("submit", function(Request $request){

    return redirect()->back()->with(["message" => "hi"]);

});

Route::get('ajax', function () {

    $response = ['status' => 200, 'body' => "response"];

    return "hi";

});
