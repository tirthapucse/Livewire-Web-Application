<?php

Use App\Livewire\ShowHome;
Use App\Livewire\ShowServicePage;
Use App\Livewire\ShowService;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHome::Class)->name('home');
Route::get('/services', ShowServicePage::Class)->name('servicesPage');
Route::get('/service/{id}', ShowService::Class)->name('servicePage');
