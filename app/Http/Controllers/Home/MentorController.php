<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\User;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = \App\Models\Mentor::all();

        return view('home.mentors.index', [
            'mentors' => $mentors,
        ]);
    }

    public function show(Mentor $mentor)
    {
        $user = \App\Models\User::findOrFail(auth()->id());

        return view('home.mentors.show', [
            'mentor' => $mentor,
            'user' => $user
        ]);
    }
}
