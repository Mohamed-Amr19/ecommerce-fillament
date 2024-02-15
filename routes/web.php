<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Mail\MyEmail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

Route::get('/email', function(){

    //$name = 'kiks';
    
    Mail::to('akabaka147@gmail.com')->send(new MyEmail());
    return view('mail.confirmemail');
})->name('sendmail');
