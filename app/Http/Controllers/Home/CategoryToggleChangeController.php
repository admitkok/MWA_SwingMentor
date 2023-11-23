<?php

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryToggleChangeController extends Controller
{
    public function toggle(Category $category)
    {
//        if(auth()->id() !== $user->id) {
//            ray($user->id);
//            ray(auth()->id());
//            abort(401, 'you are not allowed to publish another one s post');
//
//            session()->flash('error_notification', "Your mentor is already '{$category->name}'");
//
//
//            return redirect()->back();
//        }
        $user = User::find(auth()->id());
//        ray($user);
//        ray($category->id);
        $user->mentor_id = $category->id;
        $user->update([
            'mentor_id' => $category->id
        ]);
        ray($user->mentor_id);

        session()->flash('success_notification', "Now '{$category->name}' is your mentor");

        return redirect()->back();
    }


}
