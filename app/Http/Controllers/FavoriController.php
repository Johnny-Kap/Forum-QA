<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriController extends Controller
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
    public function store($id)
    {

        $ids = optional(Auth::user())->id;

        if ($ids == NULL) {

            return redirect()->route('login');
        } else {

            $questionDetails = Question::find($id);

            $questionIds = $questionDetails->id;

            $add = new Favori();

            $add->user_id = Auth::user()->id;

            $add->question_id = $questionIds;

            $add->save();

            return back()->with('success', 'Question ajoutée aux favoris avec succès!');
        }

    }

    public function delete($id){

        $fav_items = Favori::find($id);

        $fav_id = $fav_items->id;
        
        $delete = Favori::where('id', $fav_id)->delete();

        return back()->with('success', 'Favoris supprimmé avec succès!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function show(Favori $favori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function edit(Favori $favori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favori $favori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favori  $favori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favori $favori)
    {
        //
    }
}
