<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();

        return view('home.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function show(Category $category)
    {
//        $this->authorizeForUser($category,1);


        /*
       if($post->published_at === null) {
           abort(403, 'This post is not published yet.');
       }*/

        $user = \App\Models\User::findOrFail(auth()->id());

        return view('home.categories.show', [
            'category' => $category,
            'user' => $user
        ]);
    }
}
