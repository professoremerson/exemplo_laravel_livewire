<?php

use App\Http\Livewire\ShowUsers;
use App\Http\Livewire\CreateUser;
use App\Http\Livewire\EditUser;
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

Route::get('/user', ShowUsers::class);
Route::get('/user/add', CreateUser::class);
Route::get('/user/edit/{user}', EditUser::class);
