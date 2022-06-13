<?php

namespace App\Http\Controllers;

use App\Models\Centre;
use App\Models\Question;
use App\Models\Tags;
use App\Models\User;
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

        $tags = Tags::withCount('questions')->get();

        $users = User::withCount('reponses')->get();

        $questions = Question::withCount('reponses')->get();

        $questions_tend = Question::take(3)->get();

        return view('questions.view-questions', compact('centres', 'tags', 'users', 'questions', 'questions_tend'));
    }


    public function showByCenter($id)
    {

        $centres = Centre::all();

        $tags = Tags::withCount('questions')->get();

        $users = User::withCount('reponses')->get();

        $questions_tend = Question::take(3)->get();

        $centreId = Centre::find($id);

        $questions = Question::whereIn('centre_id', $centreId)->withCount('reponses')->paginate(20);
        dd($questions);

        return view('questions.view-questions-template', compact('centres', 'tags', 'users', 'questions', 'questions_tend'));
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
            return view('auth.login');
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

        if ($request->hasFile('upload')) {

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
        $questionId = Question::find($id);
        dd($questionId);
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
