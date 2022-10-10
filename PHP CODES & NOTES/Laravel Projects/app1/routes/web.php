<?php

use Illuminate\Support\Facades\Route;
use App\Models\customer;
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

Route::get('/data',function(){
    $data=customer::get()->toArray();
    //return(dd($data[1]->name));
    return view('data',compact('data'));
});