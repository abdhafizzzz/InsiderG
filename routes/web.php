<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/create', [HomeController::class, 'create'])->name('todolist.create');
Route::post('/create', [HomeController::class, 'store'])->name('todolist.store');
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('todolist.edit');
Route::post('/update', [HomeController::class, 'update'])->name('todolist.update');
Route::get('/update/{id}', [HomeController::class, 'delete'])->name('todolist.delete');
Route::get('/view', [HomeController::class, 'view'])->name('view');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
