<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
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

    public function upVote(Request $request, $id)
    {

        $ids = optional(Auth::user())->id;

        if ($ids == NULL) {

            return redirect()->route('login');
        } else {

            $reponseItems = Reponse::find($id);

            $reponseId = $reponseItems->id;

            $add = new Vote();

            $add->reponse_id = $reponseId;

            $add->user_id = Auth::user()->id;

            $add->vote = 1;

            $add->save();

            return back()->with('success', 'Vote ajouté avec succès!');
        }
    }

    public function downVote(Request $request, $id)
    {

        $ids = optional(Auth::user())->id;

        if ($ids == NULL) {

            return redirect()->route('login');
        } else {

            $reponseItems = Reponse::find($id);

            $reponseId = $reponseItems->id;

            $add = new Vote();

            $add->reponse_id = $reponseId;

            $add->user_id = Auth::user()->id;

            $add->vote = -1;

            $add->save();

            return back()->with('success', 'Vote ajouté avec succès!');
        }
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
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }
}
