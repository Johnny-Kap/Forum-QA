<?php

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
    return view('home');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','verified'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'showContact'])->name('contact');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'showAbout'])->name('about');

//Questions Route
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::get('/questions/ask-question', [App\Http\Controllers\QuestionController::class, 'create'])->name('askQuestion');
Route::get('/questions/view/{id}', [App\Http\Controllers\QuestionController::class, 'show'])->name('showQuestion');
Route::get('/questions/centre/{id}', [App\Http\Controllers\QuestionController::class, 'showByCenter'])->name('questionsTemplate');
Route::post('questions/add', [App\Http\Controllers\QuestionController::class, 'store'])->name('addQuestion');

Route::post('answers/add/{id}', [App\Http\Controllers\ReponseController::class, 'store'])->name('addReponse');
Route::post('answers/comments/add/{id}', [App\Http\Controllers\ReponseController::class, 'addComments'])->name('addCommentReponse');
Route::post('questions/comments/add/{id}', [App\Http\Controllers\QuestionController::class, 'addComments'])->name('addCommentQuestion');
Route::post('questions/vote/upvote/{id}', [App\Http\Controllers\VoteController::class, 'upVote'])->name('upvote');
Route::post('questions/vote/downvote/{id}', [App\Http\Controllers\VoteController::class, 'downVote'])->name('downvote');

//User profile routes
Route::get('/myprofile', [App\Http\Controllers\UserController::class, 'MyProfile'])->name('MyProfile');
Route::get('/myprofile/edit', [App\Http\Controllers\UserController::class, 'Edit'])->name('EditProfile');
Route::post('/myprofile/edited', [App\Http\Controllers\UserController::class, 'Edited'])->name('EditedProfile');
