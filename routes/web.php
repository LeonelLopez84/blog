<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Livewire\Post\Show;
use App\Http\Livewire\Post\PostForm;


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
Route::get('/welcome',function (){
    return view('welcome');
});
Route::get('/',[SiteController::class,'index'])->name('home');
Route::get('/article/{slug}',[SiteController::class,'show'])->name('article');
// Example Component
Route::get('/post/id/{id}', Show::class);
Route::get('/post/create', PostForm::class);


Route::prefix('admin')->group(function(){
    Route::get('/article/list',[ArticleController::class,'index'])->name('article.list');
    Route::get('/article/create',[ArticleController::class,'create'])->name('article.create');
    Route::get('/article/edit/{id}',[ArticleController::class,'edit'])->name('article.edit');
    Route::post('/article/store',[ArticleController::class,'store'])->name('article.store');
});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
