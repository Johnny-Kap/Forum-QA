<?php

use App\Models\Question;
use App\Models\Reponse;
use App\Models\User;
use App\Models\Vote;
use App\Models\Vue;
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
    $reponse = Reponse::count();
    $question = Question::count();
    $reaction = Vote::count();
    $vues = Vue::count();
    return view('home', compact('reponse', 'question', 'reaction','vues'));
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth','verified'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'showContact'])->name('contact');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'showAbout'])->name('about');

//Message
Route::get('/chat', [App\Http\Controllers\HomeController::class, 'chat'])->name('chat');
Route::get('/messages', [App\Http\Controllers\HomeController::class, 'messages'])->name('messages');
Route::post('/messages', [App\Http\Controllers\HomeController::class, 'messageStore'])->name('messageStore');

//Questions
Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('questions');
Route::get('/questions/ask-question', [App\Http\Controllers\QuestionController::class, 'create'])->name('askQuestion');
Route::get('/questions/view/{id}', [App\Http\Controllers\QuestionController::class, 'show'])->name('showQuestion');
Route::get('/questions/centre/{id}', [App\Http\Controllers\QuestionController::class, 'showByCenter'])->name('questionsTemplate');
Route::post('questions/add', [App\Http\Controllers\QuestionController::class, 'store'])->name('addQuestion');

//search
Route::get('/search/questions', [App\Http\Controllers\QuestionController::class, 'searchQuestion'])->name('searchQuestion');
Route::get('/search/user', [App\Http\Controllers\QuestionController::class, 'searchUser'])->name('searchUser');

//Filter
Route::get('/filter/questions', [App\Http\Controllers\QuestionController::class, 'filterQuestion'])->name('filterQuestion');

//Favoris
Route::post('questions/add/favori/{id}', [App\Http\Controllers\FavoriController::class, 'store'])->name('storeFav');
Route::post('questions/add/favori/supp/{id}', [App\Http\Controllers\FavoriController::class, 'delete'])->name('deleteFav');

//Reponses
Route::post('answers/add/{id}', [App\Http\Controllers\ReponseController::class, 'store'])->name('addReponse');

//Comments
Route::post('answers/comments/add/{id}', [App\Http\Controllers\ReponseController::class, 'addComments'])->name('addCommentReponse');
Route::post('questions/comments/add/{id}', [App\Http\Controllers\QuestionController::class, 'addComments'])->name('addCommentQuestion');
Route::post('questions/comments/supp/{id}', [App\Http\Controllers\CommentController::class, 'delete'])->name('deleteCom');

//Votes
Route::post('questions/vote/upvote/{id}', [App\Http\Controllers\VoteController::class, 'upVote'])->name('upvote');
Route::post('questions/vote/downvote/{id}', [App\Http\Controllers\VoteController::class, 'downVote'])->name('downvote');

//User profile routes
Route::get('/myprofile', [App\Http\Controllers\UserController::class, 'MyProfile'])->name('MyProfile')->middleware('auth');
Route::get('/profile/{id}', [App\Http\Controllers\UserController::class, 'userProfile'])->name('userProfile');
Route::get('/myprofile/edit', [App\Http\Controllers\UserController::class, 'Edit'])->name('EditProfile')->middleware('auth');
Route::post('/myprofile/edited', [App\Http\Controllers\UserController::class, 'Edited'])->name('EditedProfile');
Route::post('/myprofile/photo-edited', [App\Http\Controllers\UserController::class, 'photoEdited'])->name('photoEdited');
Route::post('/myprofile/password', [App\Http\Controllers\UserController::class, 'ResetPassword'])->name('password');
Route::post('/myprofile/email', [App\Http\Controllers\UserController::class, 'resetEmail'])->name('resetEmail');
Route::post('/myprofile/centre/add', [App\Http\Controllers\CentreUserController::class, 'store'])->name('centreSelect');
Route::post('/myprofile/centre/supp/{id}', [App\Http\Controllers\CentreUserController::class, 'delete'])->name('centreDelete');

//Notifications
Route::get('/notifications', [App\Http\Controllers\UserController::class, 'ShowNotif'])->name('ShowNotif')->middleware('auth');