<?php

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

Route::get('/', Main::class);

Route::get('/create-item', CreateItem::class);

Route::get('/items/{id}', ShowItem::class);

Route::get('/items/{id}/edit', EditItem::class);