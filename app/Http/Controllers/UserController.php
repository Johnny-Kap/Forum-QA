<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use App\Models\User;
use App\Models\Reponse;
use App\Models\Question;
use App\Models\Tags;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function MyProfile()
    {

        $ids = Auth::user()->id;

        $tags_id_questions = Question::where('user_id', $ids)->pluck('tags_id');

        $tags_items = Tags::whereIn('id', $tags_id_questions)->withCount('questions')->simplePaginate(5);

        $tags_items_count = Tags::whereIn('id', $tags_id_questions)->count();

        $questions_tend = Question::take(3)->get();

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        $reponses_users = Reponse::where('user_id', $ids)->count();

        $questions_users = Question::where('user_id', $ids)->count();

        $votes_users = Vote::where('user_id', $ids)->count();

        $reponses_items = Reponse::where('user_id', $ids)->withCount('votes')->simplePaginate(5);

        $questions_items = Question::where('user_id', $ids)->simplePaginate(5);

        $fav_count = Favori::where('user_id', $ids)->count();

        $questions_fav = Favori::where('user_id', $ids)->simplePaginate(5);

        return view('profile.profile', compact('questions_tend', 'questions_counts', 'reponses_counts', 'users_counts', 'reponses_users', 'questions_users', 'votes_users', 'reponses_items', 'questions_items', 'fav_count', 'questions_fav', 'tags_items', 'tags_items_count'));
    }


    public function userProfile($id)
    {

        $user_items = User::find($id);

        $ids = $user_items->id;

        $tags_id_questions = Question::where('user_id', $ids)->pluck('tags_id');

        $tags_items = Tags::whereIn('id', $tags_id_questions)->withCount('questions')->simplePaginate(5);

        $tags_items_count = Tags::whereIn('id', $tags_id_questions)->count();

        $questions_tend = Question::take(3)->get();

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        $reponses_users = Reponse::where('user_id', $ids)->count();

        $questions_users = Question::where('user_id', $ids)->count();

        $votes_users = Vote::where('user_id', $ids)->count();

        $reponses_items = Reponse::where('user_id', $ids)->withCount('votes')->simplePaginate(5);

        $questions_items = Question::where('user_id', $ids)->simplePaginate(5);

        $fav_count = Favori::where('user_id', $ids)->count();

        $questions_fav = Favori::where('user_id', $ids)->simplePaginate(5);

        return view('profile.user-profile', compact('user_items', 'questions_tend', 'questions_counts', 'reponses_counts', 'users_counts', 'reponses_users', 'questions_users', 'votes_users', 'reponses_items', 'questions_items', 'fav_count', 'questions_fav', 'tags_items', 'tags_items_count'));
    }


    public function Edit()
    {

        $questions_tend = Question::take(3)->get();

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        return view('profile.edit', compact('questions_tend', 'questions_counts', 'reponses_counts', 'users_counts'));
    }

    public function photoEdited(Request $request)
    {

        $filename = time() . '.' . $request->file->extension();

        $path = $request->file('file')->storeAs('avatars', $filename, 'public');

        $ids = Auth::user()->id;

        $affected = User::where('id', $ids)
            ->update([
                'image' => $path,
            ]);

        return back()->with('success', 'Photo de profil ajouté avec succès!');
    }


    public function Edited(Request $request)
    {

        $ids = Auth::user()->id;

        $name = $request->name;

        $location = $request->location;

        $bio = $request->bio;

        $website = $request->website;

        $twitter = $request->twitter;

        $facebook = $request->facebook;

        $instagram = $request->instagram;

        $youtube = $request->youtube;

        $github = $request->github;

        $affected = User::where('id', $ids)
            ->update([
                'name' => $name,
                'location' => $location,
                'bio' => $bio,
                'website' => $website,
                'twitterlink' => $twitter,
                'facebooklink' => $facebook,
                'instalink' => $instagram,
                'youtubelink' => $youtube,
                'githublink' => $github,
            ]);

        return back()->with('success', 'Modification éffectuée avec succès!');
    }

    public function ResetPassword(Request $request)
    {

        $request->validate([
            'old_password' => 'required|min:8|max:100',
            'new_password' => 'required|min:8|max:100',
            'confirm_password' => 'required|same:new_password'
        ]);

        $current_user = Auth::user();

        if (Hash::check($request->old_password, $current_user->password)) {

            $change = User::where('id', $current_user->id)->update([
                'password' => bcrypt($request->new_password)
            ]);

            return back()->with('success', 'Mot de passe modifié avec succès!');
        } else {

            return back()->with('error', 'Ancien mot de passe incorrecte.');
        }
    }
}
