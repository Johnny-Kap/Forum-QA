<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function MyProfile(){

        return view('profile.profile');
    }


    public function Edit(){

        return view('profile.edit');
    }
}
