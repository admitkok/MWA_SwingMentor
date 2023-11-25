<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
class MentorController extends Controller
{
    public function index()
    {
        $mentors = \App\Models\Mentor::all();

        return view('site.mentors.index', [
            'mentors' => $mentors,
        ]);
    }

    public function show(string $id)
    {
        $mentors = \App\Models\Mentor::findOrFail($id);
        $user = \App\Models\User::findOrFail(auth()->id());

        return view('site.mentors.show', [
            'mentors' => $mentors,
            'user' => $user
        ]);
    }
}
