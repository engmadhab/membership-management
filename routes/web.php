<?php

use App\Http\Controllers\Backend\Dashboard\DashboardController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [TasksController::class, 'home'])->name('tasks.home');
// Route::get('/about-us', [TasksController::class, 'aboutus'])->name('aboutus');
// Route::get('/contact', [TasksController::class, 'contact'])->name('contact');
// Route::resource('/tasks',TasksController::class);

// Route::get('/posts', [PostsController::class, 'posts'])->name('posts');
// Route::get('/posts-view', [PostsController::class, 'index'])->name('posts.view');
// Route::post('/posts-store', [PostsController::class, 'store'])->name('posts.store');
// Route::get('/posts-view-single/{id}', [PostsController::class, 'show'])->name('posts.show');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where all admin routes declared
|
*/

Route::group(['prefix'=>'admin', 'as' => 'admin.'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
| Here is where all frontend routes declared
|
*/
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/posts/{id}', [PagesController::class, 'postShow'])->name('posts.show');
Route::get('/categories/{id}', [PagesController::class, 'categoriesShow'])->name('categories.index');












