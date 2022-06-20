<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Reponse;
use App\Models\Question;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function MyProfile()
    {

        $ids = Auth::user()->id;

        $questions_tend = Question::take(3)->get();

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        $reponses_users = Reponse::where('user_id', $ids)->count();

        $questions_users = Question::where('user_id', $ids)->count();

        $votes_users = Vote::where('user_id', $ids)->count();

        $reponses_items = Reponse::where('user_id', $ids)->withCount('votes')->simplePaginate(5);

        $questions_items = Question::where('user_id', $ids)->simplePaginate(5);

        return view('profile.profile', compact('questions_tend', 'questions_counts', 'reponses_counts', 'users_counts', 'reponses_users', 'questions_users', 'votes_users', 'reponses_items', 'questions_items'));
    }


    public function Edit()
    {

        $questions_tend = Question::take(3)->get();

        $questions_counts = Question::count();

        $reponses_counts = Reponse::count();

        $users_counts = User::count();

        return view('profile.edit', compact('questions_tend', 'questions_counts', 'reponses_counts', 'users_counts'));
    }


    public function Edited(Request $request)
    {

        if ($request->hasFile('file')) {

            $filename = time() . '.' . $request->file->extension();

            $path = $request->file('file')->storeAs('avatars', $filename, 'public');
        } else {

            $path = 'noimage';
        }

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
                'image' => $path,
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
}
