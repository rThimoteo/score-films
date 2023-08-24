<?php

use App\Http\Controllers\Auth\LoginController;
use App\Livewire\Item\EditItem;
use App\Livewire\Item\CreateItem;
use App\Livewire\Item\ShowItem;
use Illuminate\Support\Facades\Route;
use App\Livewire\Main;

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

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::middleware('auth')->group(function () {

  Route::get('/', Main::class)->name('home');

  Route::get('/create-item', CreateItem::class);

  Route::get('/items/{id}', ShowItem::class);

  Route::get('/items/{id}/edit', EditItem::class);

  Route::resource('items', 'App\Http\Controllers\ItemController');

  Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');
});
