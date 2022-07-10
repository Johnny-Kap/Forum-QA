<?php

namespace App\Http\Controllers;

use App\Models\CentreUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CentreUserController extends Controller
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

    public function delete($id){

        $centre_items = CentreUser::find($id);

        $centre_items_id = $centre_items->id;
        
        $delete = CentreUser::where('id', $centre_items_id)->delete();

        return back()->with('success', 'Centre interet supprimmé avec succès!');

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

        $id = Auth::user()->id;

        $add = new CentreUser();

        $add->user_id = $id;

        $add->centre_id = $request->centre;

        $add->save();

        return back()->with('success', 'Choix éffectué avec succès!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CentreUser  $centreUser
     * @return \Illuminate\Http\Response
     */
    public function show(CentreUser $centreUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CentreUser  $centreUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CentreUser $centreUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CentreUser  $centreUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CentreUser $centreUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CentreUser  $centreUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CentreUser $centreUser)
    {
        //
    }
}
