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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', function(){


    // \App\Models\Address::create([
    //     'user_id' =>4,
    //     'country' => 'USA'
    // ]);

    // \App\Models\Address::create([
    //     'user_id' =>5,
    //     'country' => 'UK'
    // ]);

    // \App\Models\Address::create([
    //     'user_id' =>6,
    //     'country' => 'UAE'
    // ]);
    // \App\Models\Address::create([
    //     'user_id' =>7,
    //     'country' => 'UK'
    // ]);

    // \App\Models\Address::create([
    //     'user_id' =>8,
    //     'country' => 'UK'
    // ]);

    // \App\Models\Address::create([
    //     'user_id' =>9,
    //     'country' => 'UAE'
    // ]);

    // \App\Models\Address::create([
    //     'user_id' =>10,
    //     'country' => 'ARAB'
    // ]);

//   $user=  \App\Models\User::all();
//   return view('users', compact('user'));

$add=  \App\Models\Address::all();
  return view('users', compact('add'));



});

