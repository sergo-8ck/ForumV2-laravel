<?php

namespace App\Http\Controllers;

use App\Forum;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user)
    {
      $forums = Forum::where('user_id', $user->id)->get();
      return view('profile.index', compact('user', 'forums'));
    }
}
