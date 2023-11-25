<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;

class MentorToggleChangeController extends Controller
{
    public function toggle(Mentor $mentor, User $user)
    {
//        if(auth()->id() !== $user->id) {
//            abort(401, 'you are not allowed to publish another one s post');
//
//            session()->flash('error_notification', "Your mentor is already '{$mentor->name}'");
//
//
//            return redirect()->back();
//        }
        $user = User::find(auth()->id());
        $user->mentor_id = $mentor->id;
        $user->update([
            'mentor_id' => $mentor->id
        ]);
        ray($user->mentor_id);

        session()->flash('success_notification', "Now '{$mentor->name}' is your mentor");

        return redirect()->back();
    }


}
