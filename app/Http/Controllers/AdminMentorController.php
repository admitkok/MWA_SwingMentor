<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mentor;
use Illuminate\Http\Request;

class AdminMentorController extends Controller
{
    public function index()
    {
        $mentor = Mentor::all();

        return view('admin.mentors.index', [
            'mentors' => $mentors,
        ]);
    }

    public function create()
    {
        return view('admin.mentors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:5', 'max:20'],
        ]);

        $mentor = Mentor::firstOrCreate([
            'name' => $request->name,
        ]);

        session()->flash('success_notification', "Mentor '{$mentor->name}' created.");

        return redirect()->route('admin.mentors.create');
    }

    public function show(Mentor $mentor)
    {
        return view('admin.mentors.show', [
            'mentor' => $mentor,
        ]);
    }

    public function edit(Mentor $mentor)
    {
        return view('admin.mentors.edit', [
            'mentor' => $mentor,
        ]);
    }

    public function update(Request $request, Mentor $mentor)
    {
        $request->validate([
            'name' => ['required', 'min:5', 'max:20'],
        ]);

        $mentor->update([
            'name' => $request->name,
        ]);

        session()->flash('success_notification', "Mentor '{$mentor->name}' updated.");

        return redirect()->route('admin.mentors.show', $mentor->id);
    }

   public function destroy(Mentor $mentor)
    {
        $mentor->delete();

        session()->flash('success_notification', "Mentor '{$mentor->name}' deleted.");

        return redirect()->route('admin.mentors.index');
    }
}
