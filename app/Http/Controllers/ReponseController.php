<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Reponse;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        if ($request->hasFile('file')) {

            $filename = time() . '.' . $request->file->extension();

            $path = $request->file('file')->storeAs('avatars', $filename, 'public');
        } else {

            $path = 'noimage';
        }

        $questionItems = Question::find($id);

        $questionId = $questionItems->id;

        $add = new Reponse();

        $add->question_id = $questionId;

        $add->user_id = Auth::user()->id;

        $add->contenu = $request->contenu;

        $add->image = $path;

        $add->save();

        return back()->with('success', 'Reponse ajoutée avec succès!');
    }

    public function addComments(Request $request, $id){

        $reponseItems = Reponse::find($id);

        $questionId = $reponseItems->id;

        $add = new Commentaire();

        $add->user_id = Auth::user()->id;

        $add->reponse_id = $questionId;

        $add->website = $request->website;

        $add->contenu = $request->message;

        $add->save();

        return back()->with('success', 'Commentaire ajoutée à la reponse avec succès!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function show(Reponse $reponse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function edit(Reponse $reponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reponse $reponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reponse  $reponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reponse $reponse)
    {
        //
    }
}
