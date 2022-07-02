<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use App\Models\Comment;
use App\Models\Commentaire;
use App\Models\Question;
use App\Models\Reponse;
use App\Models\Tags;
use App\Models\User;
use App\Models\Vote;
use App\Models\Vue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $centres = Centre::all();

        $tags = Tags::withCount('questions')->simplePaginate(10);

        $users = User::withCount('reponses')->simplePaginate(10);

        $questions = Question::withCount('reponses')->simplePaginate(10);

        $questions_items_count = Question::withCount('reponses')->count();

        $questions_tend = Question::take(3)->get();

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        return view('questions.view-questions', compact('questions_items_count','centres', 'tags', 'users', 'questions', 'questions_tend', 'questions_counts', 'reponses_counts', 'users_counts'));
    }


    public function showByCenter($id)
    {

        $centreItems = Centre::find($id);

        $centreIds = $centreItems->id;

        $centres = Centre::all();

        $tags = Tags::withCount('questions')->simplePaginate(10);

        $users = User::withCount('reponses')->simplePaginate(10);

        $questions_tend = Question::take(3)->get();

        $questions = Question::where('centre_id', $centreIds)->withCount('reponses')->simplePaginate(10);

        $questions_items_count = Question::where('centre_id', $centreIds)->count();

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        return view('questions.view-questions-template', compact('questions_items_count','centreItems','centres', 'tags', 'users', 'questions', 'questions_tend', 'questions_counts', 'reponses_counts', 'users_counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $id = optional(Auth::user())->id;

        if ($id == NULL) {

            return redirect()->route('login');
        } else {

            $tags = Tags::all();

            $centres = Centre::all();

            return view('questions.ask-question', compact('tags', 'centres'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('file')) {

            $filename = time() . '.' . $request->file->extension();

            $path = $request->file('file')->storeAs('avatars', $filename, 'public');
        } else {

            $path = 'noimage';
        }

        $add = new Question();

        $add->user_id = Auth::user()->id;

        $add->centre_id = $request->centres;

        $add->tags_id = $request->tags;

        $add->titre = $request->title;

        $add->contenu = $request->details;

        $add->image = $path;

        $add->save();

        return back()->with('success', 'Question publiée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        $questions_tend = Question::take(3)->get();

        $questionDetails = Question::find($id);

        $image = 'noimage';

        $questionIds = $questionDetails->id;

        $reponses = Reponse::where('question_id', $questionIds)->withCount('votes')->get();

        $reponses_counts_this = Reponse::where('question_id', $questionIds)->count();

        $reponseIds = Reponse::where('question_id', $questionIds)->pluck('id');

        $getComments = Comment::where('question_id', $questionIds)->get();

        $addVue = new Vue();

        $addVue->question_id = $questionIds;

        $addVue->save();

        $vuesCount = Vue::where('question_id', $questionIds)->count();

        return view('questions.details', compact('image', 'questions_counts', 'reponses_counts', 'users_counts', 'questions_tend', 'questionDetails', 'reponses', 'reponses_counts_this', 'getComments', 'vuesCount'));
    }

    public function addComments(Request $request, $id)
    {

        $questionsItems = Question::find($id);

        $questionId = $questionsItems->id;

        $add = new Comment();

        $add->user_id = Auth::user()->id;

        $add->question_id = $questionId;

        $add->website = $request->website;

        $add->contenu = $request->message;

        $add->save();

        return back()->with('success', 'Commentaire ajouté à la question avec succès!');
    }

    public function searchQuestion(Request $request)
    {

        $search = $request->search;

        $centres = Centre::all();

        $tags = Tags::withCount('questions')->simplePaginate(10);

        $users = User::withCount('reponses')->simplePaginate(10);

        $questions = Question::where('titre', 'like', '%' . $search . '%')->withCount('reponses')->simplePaginate(10);

        $questions_tend = Question::take(3)->get();

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        return view('search.search-nav', compact('centres', 'tags', 'users', 'questions', 'questions_tend', 'questions_counts', 'reponses_counts', 'users_counts'));
    }

    public function searchUser(Request $request)
    {

        $search = $request->search;

        $users = User::where('name', 'like', '%' . $search . '%')->simplePaginate(10);

        $user_count = User::where('name', 'like', '%' . $search . '%')->count();

        return view('search.search-user', compact('users', 'user_count'));
    }


    public function filterQuestion(Request $request)
    {

        if ($request->reponses == 0) {

            $tags_name = $request->tags;

            $reponses_name = $request->reponses;

            $centres = Centre::all();

            $tags = Tags::withCount('questions')->simplePaginate(10);

            $users = User::withCount('reponses')->simplePaginate(10);

            $questions = Question::where('tags_id', $tags_name)->withCount('reponses')->simplePaginate(10);

            $questions_tend = Question::take(3)->get();

            $questions_counts = Question::count();

            $reponses_counts = Reponse::count();

            $users_counts = User::count();

            return view('filter.question-filter', compact('centres', 'tags', 'users', 'questions', 'questions_tend', 'questions_counts', 'reponses_counts', 'users_counts'));
        } elseif ($request->reponses == 1) {

            $tags_name = $request->tags;

            $reponses_name = $request->reponses;

            $centres = Centre::all();

            $tags = Tags::withCount('questions')->simplePaginate(10);

            $users = User::withCount('reponses')->simplePaginate(10);

            $reponses_add = Reponse::pluck('question_id');

            $questions = Question::where('tags_id', $tags_name)->whereIn('id', $reponses_add)->withCount('reponses')->simplePaginate(10);

            $questions_tend = Question::take(3)->get();

            $questions_counts = Question::count();

            $reponses_counts = Reponse::count();

            $users_counts = User::count();

            return view('filter.question-filter', compact('centres', 'tags', 'users', 'questions', 'questions_tend', 'questions_counts', 'reponses_counts', 'users_counts'));
        } elseif ($request->reponses == 2) {

            $tags_name = $request->tags;

            $reponses_name = $request->reponses;

            $centres = Centre::all();

            $tags = Tags::withCount('questions')->simplePaginate(10);

            $users = User::withCount('reponses')->simplePaginate(10);

            $reponses_add = Reponse::pluck('question_id');

            $questions = Question::where('tags_id', $tags_name)->whereNotIn('id', $reponses_add)->withCount('reponses')->simplePaginate(10);

            $questions_tend = Question::take(3)->get();

            $questions_counts = Question::count();

            $reponses_counts = Reponse::count();

            $users_counts = User::count();

            return view('filter.question-filter', compact('centres', 'tags', 'users', 'questions', 'questions_tend', 'questions_counts', 'reponses_counts', 'users_counts'));
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
