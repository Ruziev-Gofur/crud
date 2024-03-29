<?php

use App\Models\Phone;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhoneController;

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
Route::resource('/contact', PhoneController::class);

Route::get('/', function () {
    $phones = Phone::all();
    return view('phones.index')->with('phone', $phones);});

Route::resource("/phones",PhoneController::class);
