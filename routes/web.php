<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkersController;
use App\Http\Controllers\JobController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/myjobs', [ProfileController::class, 'myjob'])->name('profile.myjob');
    Route::get('post-update/{id}', [ProfileController::class, 'myjob_update'])->name('update.myjob');
    Route::put('store-update/{id}', [ProfileController::class, 'store_update'])->name('store.update');
    Route::get('delete-post/{id}', [ProfileController::class, 'delete_post'])->name('delete.post');

    Route::get('/about-us', [WorkersController::class, 'about_us'])->name('about.us');

    Route::post('/post', [PostController::class, 'postjob'])->name('post.postjob');

    Route::post('/comment', [CommentController::class, 'comment'])->name('comment.post');
    Route::get('/jobs/{id}', [CommentController::class, 'showcomment'])->name('display.full');

    Route::get('/jobs', [JobController::class, 'job'])->name('job.return');
    Route::get('request/{user_id}', [JobController::class, 'request'])->name('job.request');


    Route::get('/workers', [WorkersController::class, 'returnworkerblade'])->name('workers.return');
    Route::get('/search', [WorkersController::class, 'search']);
    Route::get('/filter', [WorkersController::class, 'filter']);




});
//Route::middleware('admin')->group(function () {
  //  Route::get('/ ', [Admincontroller::class, 'dashboard'])->name('admin.dashboard');

    //Route::get('/profile', [ProfileController::class, 'job'])->name('profile.job');

//});

require __DIR__.'/auth.php';
